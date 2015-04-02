package ONVIF::Media::Types::ReceiverStateInformation;
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

my %State_of :ATTR(:get<State>);
my %AutoCreated_of :ATTR(:get<AutoCreated>);

__PACKAGE__->_factory(
    [ qw(        State
        AutoCreated

    ) ],
    {
        'State' => \%State_of,
        'AutoCreated' => \%AutoCreated_of,
    },
    {
        'State' => 'ONVIF::Media::Types::ReceiverState',
        'AutoCreated' => 'SOAP::WSDL::XSD::Typelib::Builtin::boolean',
    },
    {

        'State' => 'State',
        'AutoCreated' => 'AutoCreated',
    }
);

} # end BLOCK








1;


=pod

=head1 NAME

ONVIF::Media::Types::ReceiverStateInformation

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
ReceiverStateInformation from the namespace http://www.onvif.org/ver10/schema.

Contains information about a receiver's current state. 




=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over

=item * State


=item * AutoCreated




=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Media::Types::ReceiverStateInformation
   State => $some_value, # ReceiverState
   AutoCreated =>  $some_value, # boolean
 },




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

