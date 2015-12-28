package ONVIF::Device::Types::TrackInformation;
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

my %TrackToken_of :ATTR(:get<TrackToken>);
my %TrackType_of :ATTR(:get<TrackType>);
my %Description_of :ATTR(:get<Description>);
my %DataFrom_of :ATTR(:get<DataFrom>);
my %DataTo_of :ATTR(:get<DataTo>);

__PACKAGE__->_factory(
    [ qw(        TrackToken
        TrackType
        Description
        DataFrom
        DataTo

    ) ],
    {
        'TrackToken' => \%TrackToken_of,
        'TrackType' => \%TrackType_of,
        'Description' => \%Description_of,
        'DataFrom' => \%DataFrom_of,
        'DataTo' => \%DataTo_of,
    },
    {
        'TrackToken' => 'ONVIF::Device::Types::TrackReference',
        'TrackType' => 'ONVIF::Device::Types::TrackType',
        'Description' => 'ONVIF::Device::Types::Description',
        'DataFrom' => 'SOAP::WSDL::XSD::Typelib::Builtin::dateTime',
        'DataTo' => 'SOAP::WSDL::XSD::Typelib::Builtin::dateTime',
    },
    {

        'TrackToken' => 'TrackToken',
        'TrackType' => 'TrackType',
        'Description' => 'Description',
        'DataFrom' => 'DataFrom',
        'DataTo' => 'DataTo',
    }
);

} # end BLOCK








1;


=pod

=head1 NAME

ONVIF::Device::Types::TrackInformation

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
TrackInformation from the namespace http://www.onvif.org/ver10/schema.






=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over

=item * TrackToken


=item * TrackType


=item * Description


=item * DataFrom


=item * DataTo




=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Device::Types::TrackInformation
   TrackToken => $some_value, # TrackReference
   TrackType => $some_value, # TrackType
   Description => $some_value, # Description
   DataFrom =>  $some_value, # dateTime
   DataTo =>  $some_value, # dateTime
 },




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

