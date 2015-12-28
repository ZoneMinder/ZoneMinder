package ONVIF::Media::Types::ImagingSettingsExtension202;
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

my %IrCutFilterAutoAdjustment_of :ATTR(:get<IrCutFilterAutoAdjustment>);
my %Extension_of :ATTR(:get<Extension>);

__PACKAGE__->_factory(
    [ qw(        IrCutFilterAutoAdjustment
        Extension

    ) ],
    {
        'IrCutFilterAutoAdjustment' => \%IrCutFilterAutoAdjustment_of,
        'Extension' => \%Extension_of,
    },
    {
        'IrCutFilterAutoAdjustment' => 'ONVIF::Media::Types::IrCutFilterAutoAdjustment',
        'Extension' => 'ONVIF::Media::Types::ImagingSettingsExtension203',
    },
    {

        'IrCutFilterAutoAdjustment' => 'IrCutFilterAutoAdjustment',
        'Extension' => 'Extension',
    }
);

} # end BLOCK








1;


=pod

=head1 NAME

ONVIF::Media::Types::ImagingSettingsExtension202

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
ImagingSettingsExtension202 from the namespace http://www.onvif.org/ver10/schema.






=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over

=item * IrCutFilterAutoAdjustment


=item * Extension




=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Media::Types::ImagingSettingsExtension202
   IrCutFilterAutoAdjustment =>  { # ONVIF::Media::Types::IrCutFilterAutoAdjustment
     BoundaryType =>  $some_value, # string
     BoundaryOffset =>  $some_value, # float
     ResponseTime =>  $some_value, # duration
     Extension =>  { # ONVIF::Media::Types::IrCutFilterAutoAdjustmentExtension
     },
   },
   Extension =>  { # ONVIF::Media::Types::ImagingSettingsExtension203
   },
 },




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

