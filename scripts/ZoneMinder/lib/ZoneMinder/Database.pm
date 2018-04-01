# ==========================================================================
#
# ZoneMinder Database Module, $Date$, $Revision$
# Copyright (C) 2001-2008  Philip Coombes
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
#
# ==========================================================================
#
# This module contains the common definitions and functions used by the rest
# of the ZoneMinder scripts
#
package ZoneMinder::Database;

use 5.006;
use strict;
use warnings;

require Exporter;
require ZoneMinder::Base;

our @ISA = qw(Exporter ZoneMinder::Base);

# Items to export into callers namespace by default. Note: do not export
# names by default without a very good reason. Use EXPORT_OK instead.
# Do not simply export all your public functions/methods/constants.

# This allows declaration   use ZoneMinder ':all';
# If you do not need this, moving things directly into @EXPORT or @EXPORT_OK
# will save memory.
our %EXPORT_TAGS = (
    functions => [ qw(
      zmDbConnect
      zmDbDisconnect
      zmDbGetMonitors
      zmDbGetMonitor
      zmDbGetMonitorAndControl
      zmDbQuery
      zmDbInsert
      zmDbUpdate
      zmDbDelete
      ) ]
    );
push( @{$EXPORT_TAGS{all}}, @{$EXPORT_TAGS{$_}} ) foreach keys %EXPORT_TAGS;

our @EXPORT_OK = ( @{ $EXPORT_TAGS{'all'} } );

our @EXPORT = qw();

our $VERSION = $ZoneMinder::Base::VERSION;

# ==========================================================================
#
# Database Access
#
# ==========================================================================

use ZoneMinder::Logger qw(:all);
use ZoneMinder::Config qw(:all);

our $dbh = undef;

sub zmDbConnect {
  my $force = shift;
  if ( $force ) {
    zmDbDisconnect();
  }
  my $options = shift;

  if ( ( ! defined( $dbh ) ) or ! $dbh->ping() ) {
    my ( $host, $portOrSocket ) = ( $ZoneMinder::Config::Config{ZM_DB_HOST} =~ /^([^:]+)(?::(.+))?$/ );
    my $socket;

    if ( defined($portOrSocket) ) {
      if ( $portOrSocket =~ /^\// ) {
        $socket = ";mysql_socket=".$portOrSocket;
      } else {
        $socket = ";host=".$host.";port=".$portOrSocket;
      }
    } else {
      $socket = ";host=".$Config{ZM_DB_HOST}; 
    }

    my $sslOptions = "";
    if ( $Config{ZM_DB_SSL_CA_CERT} ) {
      $sslOptions = ';'.join(';',
          "mysql_ssl=1",
          "mysql_ssl_ca_file=".$Config{ZM_DB_SSL_CA_CERT},
          "mysql_ssl_client_key=".$Config{ZM_DB_SSL_CLIENT_KEY},
          "mysql_ssl_client_cert=".$Config{ZM_DB_SSL_CLIENT_CERT}
          );
    }

    $dbh = DBI->connect( "DBI:mysql:database=".$Config{ZM_DB_NAME}
        .$socket . $sslOptions . ($options?';'.join(';', map { $_.'='.$$options{$_} } keys %{$options} ) : '' )
        , $Config{ZM_DB_USER}
        , $Config{ZM_DB_PASS}
        );
    $dbh->trace( 0 );
  }
  return( $dbh );
}

sub zmDbDisconnect {
  if ( defined( $dbh ) ) {
    $dbh->disconnect();
    $dbh = undef;
  }
}

use constant DB_MON_ALL => 0; # All monitors
use constant DB_MON_CAPT => 1; # All monitors that are capturing
use constant DB_MON_ACTIVE => 2; # All monitors that are active
use constant DB_MON_MOTION => 3; # All monitors that are doing motion detection
use constant DB_MON_RECORD => 4; # All monitors that are doing unconditional recording
use constant DB_MON_PASSIVE => 5; # All monitors that are in nodect state

sub zmDbGetMonitors {
  zmDbConnect();

  my $function = shift || DB_MON_ALL;
  my $sql = "select * from Monitors";

  if ( $function ) {
    if ( $function == DB_MON_CAPT ) {
      $sql .= " where Function >= 'Monitor'";
    } elsif ( $function == DB_MON_ACTIVE ) {
      $sql .= " where Function > 'Monitor'";
    } elsif ( $function == DB_MON_MOTION ) {
      $sql .= " where Function = 'Modect' or Function = 'Mocord'";
    } elsif ( $function == DB_MON_RECORD ) {
      $sql .= " where Function = 'Record' or Function = 'Mocord'";
    } elsif ( $function == DB_MON_PASSIVE ) {
      $sql .= " where Function = 'Nodect'";
    }
  }
  my $sth = $dbh->prepare_cached( $sql )
    or croak( "Can't prepare '$sql': ".$dbh->errstr() );
  my $res = $sth->execute()
    or croak( "Can't execute '$sql': ".$sth->errstr() );

  my @monitors;
  while( my $monitor = $sth->fetchrow_hashref() ) {
    push( @monitors, $monitor );
  }
  $sth->finish();
  return( \@monitors );
}

sub zmDbGetMonitor {
  zmDbConnect();

  my $id = shift;

  return( undef ) if ( !defined($id) );

  my $sql = "select * from Monitors where Id = ?";
  my $sth = $dbh->prepare_cached( $sql )
    or croak( "Can't prepare '$sql': ".$dbh->errstr() );
  my $res = $sth->execute( $id )
    or croak( "Can't execute '$sql': ".$sth->errstr() );
  my $monitor = $sth->fetchrow_hashref();

  return( $monitor );
}

sub zmDbGetMonitorAndControl {
  zmDbConnect();

  my $id = shift;

  return( undef ) if ( !defined($id) );

  my $sql = "SELECT C.*,M.*,C.Protocol
    FROM Monitors as M
    INNER JOIN Controls as C on (M.ControlId = C.Id)
    WHERE M.Id = ?"
    ;
  my $sth = $dbh->prepare_cached( $sql )
    or Fatal( "Can't prepare '$sql': ".$dbh->errstr() );
  my $res = $sth->execute( $id )
    or Fatal( "Can't execute '$sql': ".$sth->errstr() );
  my $monitor = $sth->fetchrow_hashref();

  return( $monitor );
}

# Execute a pre-built sql select query
sub zmDbQuery {
  zmDbConnect();
  my $sql = shift; 

  my $sth = $dbh->prepare_cached( $sql )
    or die( "Can't prepare '$sql': ".$dbh->errstr() );
  my $res = $sth->execute( @_ )
    or die( "Can't execute: ".$sth->errstr() );

  my @data = $sth->fetchrow_array();
  $sth->finish();

  return @data;
}

# Can be passed either an array of name value pairs, or a hash
sub ZmDbInsert {
  zmDbConnect();
  my $tablename = shift;
  
  my %data = @_;
  my @columns = keys %data;
  my @values = values %data;

  my $sql = 'INSERT INTO '.$tablename.' ('.join(',', @columns ).') VALUES ('
    .(join ', ', ('?') x @values ).')'; # Add "?" for each array element

    my $sth = $dbh->prepare_cached( $sql )
    or die( "Can't prepare '$sql': ".$dbh->errstr() );
  my $res = $sth->execute(@values)
    or die( "Can't execute: ".$sth->errstr() );
  $sth->finish();

  return $res;
}

# Can be passed either an array of name value pairs, or a hash
# where must be a hash ref
sub ZmDbUpdate {
  zmDbConnect();
  my $tablename = shift;

  my %where = %{shift @_} if @_;
  my %data = ( @_ == 1 ? @{$_[0]} : @_ );
  my @columns = keys %data;
  my @values = values %data;

  my $sql = join(' ',
      'UPDATE',$tablename,
      'SET'.join(', ', map { $_ . '=?' } @columns ),
      'WHERE' , join(' AND ', map { $_ . '=?'} keys %where )
      );

    my $sth = $dbh->prepare_cached( $sql )
    or die( "Can't prepare '$sql': ".$dbh->errstr() );
  my $res = $sth->execute( @values, values %where )
    or die( "Can't execute: ".$sth->errstr() );
  $sth->finish();

  return $res;
}

# Build and execute a sql delete query
sub ZmDbDelete {
  zmDbConnect();
  my $table = shift;

  my %data = ( @_ == 1 ? @{$_[0]} : @_ );

  my $sql = "DELETE FROM $table WHERE ".join(' AND ', map { $_ . '=?' } keys %data );
  my $sth = $dbh->prepare_cached( $sql )
    or die( "Can't prepare '$sql': ".$dbh->errstr() );
  my $res = $sth->execute(values %data)
    or die( "Can't execute: ".$sth->errstr() );
  $sth->finish();

  return $res;
}

1;
__END__

=head1 NAME

ZoneMinder::Database

=head1 SYNOPSIS

use ZoneMinder::Database;

=head1 DESCRIPTION

 ZoneMinder::Database - Perl Module for interfacing with the db

=head2 EXPORT

functions = [
  zmDbConnect
  zmDbDisconnect
  zmDbGetMonitors
  zmDbGetMonitor
  zmDbGetMonitorAndControl
  zmDbQuery
  zmDbInsert
  zmDbUpdate
  zmDbDelete
];

=head1 AUTHOR

Philip Coombes, E<lt>philip.coombes@zoneminder.comE<gt>
Isaac Connor, E<lt>isaac@zoneminder.comE<gt>

=head1 COPYRIGHT AND LICENSE

Copyright (C) 2001-2017  ZoneMinder LLC

This library is free software; you can redistribute it and/or modify
it under the same terms as Perl itself, either Perl version 5.8.3 or,
at your option, any later version of Perl 5 you may have available.


=cut
