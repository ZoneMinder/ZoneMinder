package ONVIF::Media::Types::VideoAnalyticsConfiguration;
use strict;
use warnings;


__PACKAGE__->_set_element_form_qualified(1);

sub get_xmlns { 'http://www.onvif.org/ver10/schema' };

our $XML_ATTRIBUTE_CLASS;
undef $XML_ATTRIBUTE_CLASS;

sub __get_attr_class {
    return $XML_ATTRIBUTE_CLASS;
}


use base qw(ONVIF::Media::Types::ConfigurationEntity);
# Variety: sequence
use Class::Std::Fast::Storable constructor => 'none';
use base qw(SOAP::WSDL::XSD::Typelib::ComplexType);

Class::Std::initialize();

{ # BLOCK to scope variables

my %Name_of :ATTR(:get<Name>);
my %UseCount_of :ATTR(:get<UseCount>);
my %AnalyticsEngineConfiguration_of :ATTR(:get<AnalyticsEngineConfiguration>);
my %RuleEngineConfiguration_of :ATTR(:get<RuleEngineConfiguration>);

__PACKAGE__->_factory(
    [ qw(        Name
        UseCount
        AnalyticsEngineConfiguration
        RuleEngineConfiguration

    ) ],
    {
        'Name' => \%Name_of,
        'UseCount' => \%UseCount_of,
        'AnalyticsEngineConfiguration' => \%AnalyticsEngineConfiguration_of,
        'RuleEngineConfiguration' => \%RuleEngineConfiguration_of,
    },
    {
        'Name' => 'ONVIF::Media::Types::Name',
        'UseCount' => 'SOAP::WSDL::XSD::Typelib::Builtin::int',
        'AnalyticsEngineConfiguration' => 'ONVIF::Media::Types::AnalyticsEngineConfiguration',
        'RuleEngineConfiguration' => 'ONVIF::Media::Types::RuleEngineConfiguration',
    },
    {

        'Name' => 'Name',
        'UseCount' => 'UseCount',
        'AnalyticsEngineConfiguration' => 'AnalyticsEngineConfiguration',
        'RuleEngineConfiguration' => 'RuleEngineConfiguration',
    }
);

} # end BLOCK








1;


=pod

=head1 NAME

ONVIF::Media::Types::VideoAnalyticsConfiguration

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
VideoAnalyticsConfiguration from the namespace http://www.onvif.org/ver10/schema.






=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over

=item * AnalyticsEngineConfiguration


=item * RuleEngineConfiguration




=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Media::Types::VideoAnalyticsConfiguration
   AnalyticsEngineConfiguration =>  { # ONVIF::Media::Types::AnalyticsEngineConfiguration
     AnalyticsModule =>  { # ONVIF::Media::Types::Config
       Parameters =>  { # ONVIF::Media::Types::ItemList
         SimpleItem => ,
         ElementItem =>  {
         },
         Extension =>  { # ONVIF::Media::Types::ItemListExtension
         },
       },
     },
     Extension =>  { # ONVIF::Media::Types::AnalyticsEngineConfigurationExtension
     },
   },
   RuleEngineConfiguration =>  { # ONVIF::Media::Types::RuleEngineConfiguration
     Rule =>  { # ONVIF::Media::Types::Config
       Parameters =>  { # ONVIF::Media::Types::ItemList
         SimpleItem => ,
         ElementItem =>  {
         },
         Extension =>  { # ONVIF::Media::Types::ItemListExtension
         },
       },
     },
     Extension =>  { # ONVIF::Media::Types::RuleEngineConfigurationExtension
     },
   },
 },




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

