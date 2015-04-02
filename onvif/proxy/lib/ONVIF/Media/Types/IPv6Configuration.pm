package ONVIF::Media::Types::IPv6Configuration;
use strict;
use warnings;


__PACKAGE__->_set_element_form_qualified(1);

sub get_xmlns { 'http://www.onvif.org/ver10/schema' };

our $XML_ATTRIBUTE_CLASS;
undef $XML_ATTRIBUTE_CLASS;

sub __get_attr_class {
    return $XML_ATTRIBUTE_CLASS;
}

use Class::Std::Fast::Storable constructor => 'none';
use base qw(SOAP::WSDL::XSD::Typelib::ComplexType);

Class::Std::initialize();

{ # BLOCK to scope variables

my %AcceptRouterAdvert_of :ATTR(:get<AcceptRouterAdvert>);
my %DHCP_of :ATTR(:get<DHCP>);
my %Manual_of :ATTR(:get<Manual>);
my %LinkLocal_of :ATTR(:get<LinkLocal>);
my %FromDHCP_of :ATTR(:get<FromDHCP>);
my %FromRA_of :ATTR(:get<FromRA>);
my %Extension_of :ATTR(:get<Extension>);

__PACKAGE__->_factory(
    [ qw(        AcceptRouterAdvert
        DHCP
        Manual
        LinkLocal
        FromDHCP
        FromRA
        Extension

    ) ],
    {
        'AcceptRouterAdvert' => \%AcceptRouterAdvert_of,
        'DHCP' => \%DHCP_of,
        'Manual' => \%Manual_of,
        'LinkLocal' => \%LinkLocal_of,
        'FromDHCP' => \%FromDHCP_of,
        'FromRA' => \%FromRA_of,
        'Extension' => \%Extension_of,
    },
    {
        'AcceptRouterAdvert' => 'SOAP::WSDL::XSD::Typelib::Builtin::boolean',
        'DHCP' => 'ONVIF::Media::Types::IPv6DHCPConfiguration',
        'Manual' => 'ONVIF::Media::Types::PrefixedIPv6Address',
        'LinkLocal' => 'ONVIF::Media::Types::PrefixedIPv6Address',
        'FromDHCP' => 'ONVIF::Media::Types::PrefixedIPv6Address',
        'FromRA' => 'ONVIF::Media::Types::PrefixedIPv6Address',
        'Extension' => 'ONVIF::Media::Types::IPv6ConfigurationExtension',
    },
    {

        'AcceptRouterAdvert' => 'AcceptRouterAdvert',
        'DHCP' => 'DHCP',
        'Manual' => 'Manual',
        'LinkLocal' => 'LinkLocal',
        'FromDHCP' => 'FromDHCP',
        'FromRA' => 'FromRA',
        'Extension' => 'Extension',
    }
);

} # end BLOCK








1;


=pod

=head1 NAME

ONVIF::Media::Types::IPv6Configuration

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
IPv6Configuration from the namespace http://www.onvif.org/ver10/schema.






=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over

=item * AcceptRouterAdvert


=item * DHCP


=item * Manual


=item * LinkLocal


=item * FromDHCP


=item * FromRA


=item * Extension




=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Media::Types::IPv6Configuration
   AcceptRouterAdvert =>  $some_value, # boolean
   DHCP => $some_value, # IPv6DHCPConfiguration
   Manual =>  { # ONVIF::Media::Types::PrefixedIPv6Address
     Address => $some_value, # IPv6Address
     PrefixLength =>  $some_value, # int
   },
   LinkLocal =>  { # ONVIF::Media::Types::PrefixedIPv6Address
     Address => $some_value, # IPv6Address
     PrefixLength =>  $some_value, # int
   },
   FromDHCP =>  { # ONVIF::Media::Types::PrefixedIPv6Address
     Address => $some_value, # IPv6Address
     PrefixLength =>  $some_value, # int
   },
   FromRA =>  { # ONVIF::Media::Types::PrefixedIPv6Address
     Address => $some_value, # IPv6Address
     PrefixLength =>  $some_value, # int
   },
   Extension =>  { # ONVIF::Media::Types::IPv6ConfigurationExtension
   },
 },




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

