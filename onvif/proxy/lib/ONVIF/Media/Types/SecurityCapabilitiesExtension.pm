package ONVIF::Media::Types::SecurityCapabilitiesExtension;
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

my %TLS1__0_of :ATTR(:get<TLS1__0>);
my %Extension_of :ATTR(:get<Extension>);

__PACKAGE__->_factory(
    [ qw(        TLS1__0
        Extension

    ) ],
    {
        'TLS1__0' => \%TLS1__0_of,
        'Extension' => \%Extension_of,
    },
    {
        'TLS1__0' => 'SOAP::WSDL::XSD::Typelib::Builtin::boolean',
        'Extension' => 'ONVIF::Media::Types::SecurityCapabilitiesExtension2',
    },
    {

        'TLS1__0' => 'TLS1.0',
        'Extension' => 'Extension',
    }
);

} # end BLOCK








1;


=pod

=head1 NAME

ONVIF::Media::Types::SecurityCapabilitiesExtension

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
SecurityCapabilitiesExtension from the namespace http://www.onvif.org/ver10/schema.






=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over

=item * TLS1__0

Note: The name of this property has been altered, because it didn't match
perl's notion of variable/subroutine names. The altered name is used in
perl code only, XML output uses the original name:

 TLS1.0


=item * Extension




=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Media::Types::SecurityCapabilitiesExtension
   TLS1__0 =>  $some_value, # boolean
   Extension =>  { # ONVIF::Media::Types::SecurityCapabilitiesExtension2
     Dot1X =>  $some_value, # boolean
     SupportedEAPMethod =>  $some_value, # int
     RemoteUserHandling =>  $some_value, # boolean
   },
 },




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

