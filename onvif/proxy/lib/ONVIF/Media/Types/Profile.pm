package ONVIF::Media::Types::Profile;
use strict;
use warnings;


__PACKAGE__->_set_element_form_qualified(1);

sub get_xmlns { 'http://www.onvif.org/ver10/schema' };

our $XML_ATTRIBUTE_CLASS = 'ONVIF::Media::Types::Profile::_Profile::XmlAttr';

sub __get_attr_class {
    return $XML_ATTRIBUTE_CLASS;
}

use Class::Std::Fast::Storable constructor => 'none';
use base qw(SOAP::WSDL::XSD::Typelib::ComplexType);

Class::Std::initialize();

{ # BLOCK to scope variables

my %Name_of :ATTR(:get<Name>);
my %VideoSourceConfiguration_of :ATTR(:get<VideoSourceConfiguration>);
my %AudioSourceConfiguration_of :ATTR(:get<AudioSourceConfiguration>);
my %VideoEncoderConfiguration_of :ATTR(:get<VideoEncoderConfiguration>);
my %AudioEncoderConfiguration_of :ATTR(:get<AudioEncoderConfiguration>);
my %VideoAnalyticsConfiguration_of :ATTR(:get<VideoAnalyticsConfiguration>);
my %PTZConfiguration_of :ATTR(:get<PTZConfiguration>);
my %MetadataConfiguration_of :ATTR(:get<MetadataConfiguration>);
my %Extension_of :ATTR(:get<Extension>);

__PACKAGE__->_factory(
    [ qw(        Name
        VideoSourceConfiguration
        AudioSourceConfiguration
        VideoEncoderConfiguration
        AudioEncoderConfiguration
        VideoAnalyticsConfiguration
        PTZConfiguration
        MetadataConfiguration
        Extension

    ) ],
    {
        'Name' => \%Name_of,
        'VideoSourceConfiguration' => \%VideoSourceConfiguration_of,
        'AudioSourceConfiguration' => \%AudioSourceConfiguration_of,
        'VideoEncoderConfiguration' => \%VideoEncoderConfiguration_of,
        'AudioEncoderConfiguration' => \%AudioEncoderConfiguration_of,
        'VideoAnalyticsConfiguration' => \%VideoAnalyticsConfiguration_of,
        'PTZConfiguration' => \%PTZConfiguration_of,
        'MetadataConfiguration' => \%MetadataConfiguration_of,
        'Extension' => \%Extension_of,
    },
    {
        'Name' => 'ONVIF::Media::Types::Name',
        'VideoSourceConfiguration' => 'ONVIF::Media::Types::VideoSourceConfiguration',
        'AudioSourceConfiguration' => 'ONVIF::Media::Types::AudioSourceConfiguration',
        'VideoEncoderConfiguration' => 'ONVIF::Media::Types::VideoEncoderConfiguration',
        'AudioEncoderConfiguration' => 'ONVIF::Media::Types::AudioEncoderConfiguration',
        'VideoAnalyticsConfiguration' => 'ONVIF::Media::Types::VideoAnalyticsConfiguration',
        'PTZConfiguration' => 'ONVIF::Media::Types::PTZConfiguration',
        'MetadataConfiguration' => 'ONVIF::Media::Types::MetadataConfiguration',
        'Extension' => 'ONVIF::Media::Types::ProfileExtension',
    },
    {

        'Name' => 'Name',
        'VideoSourceConfiguration' => 'VideoSourceConfiguration',
        'AudioSourceConfiguration' => 'AudioSourceConfiguration',
        'VideoEncoderConfiguration' => 'VideoEncoderConfiguration',
        'AudioEncoderConfiguration' => 'AudioEncoderConfiguration',
        'VideoAnalyticsConfiguration' => 'VideoAnalyticsConfiguration',
        'PTZConfiguration' => 'PTZConfiguration',
        'MetadataConfiguration' => 'MetadataConfiguration',
        'Extension' => 'Extension',
    }
);

} # end BLOCK




package ONVIF::Media::Types::Profile::_Profile::XmlAttr;
use base qw(SOAP::WSDL::XSD::Typelib::AttributeSet);

{ # BLOCK to scope variables

my %token_of :ATTR(:get<token>);
my %fixed_of :ATTR(:get<fixed>);

__PACKAGE__->_factory(
    [ qw(
        token
        fixed
    ) ],
    {

        token => \%token_of,

        fixed => \%fixed_of,
    },
    {
        token => 'ONVIF::Media::Types::ReferenceToken',
        fixed => 'SOAP::WSDL::XSD::Typelib::Builtin::boolean',
    }
);

} # end BLOCK




1;


=pod

=head1 NAME

ONVIF::Media::Types::Profile

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
Profile from the namespace http://www.onvif.org/ver10/schema.

A profile consists of a set of interconnected configuration entities. Configurations are provided by the NVT and can be either static or created dynamically by the NVT. For example, the dynamic configurations can be created by the NVT depending on current available encoding resources. 




=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over

=item * Name


=item * VideoSourceConfiguration


=item * AudioSourceConfiguration


=item * VideoEncoderConfiguration


=item * AudioEncoderConfiguration


=item * VideoAnalyticsConfiguration


=item * PTZConfiguration


=item * MetadataConfiguration


=item * Extension




=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::Media::Types::Profile
   Name => $some_value, # Name
   VideoSourceConfiguration =>  { # ONVIF::Media::Types::VideoSourceConfiguration
     SourceToken => $some_value, # ReferenceToken
     Bounds => ,
     Extension =>  { # ONVIF::Media::Types::VideoSourceConfigurationExtension
       Rotate =>  { # ONVIF::Media::Types::Rotate
         Mode => $some_value, # RotateMode
         Degree =>  $some_value, # int
         Extension =>  { # ONVIF::Media::Types::RotateExtension
         },
       },
       Extension =>  { # ONVIF::Media::Types::VideoSourceConfigurationExtension2
       },
     },
   },
   AudioSourceConfiguration =>  { # ONVIF::Media::Types::AudioSourceConfiguration
     SourceToken => $some_value, # ReferenceToken
   },
   VideoEncoderConfiguration =>  { # ONVIF::Media::Types::VideoEncoderConfiguration
     Encoding => $some_value, # VideoEncoding
     Resolution =>  { # ONVIF::Media::Types::VideoResolution
       Width =>  $some_value, # int
       Height =>  $some_value, # int
     },
     Quality =>  $some_value, # float
     RateControl =>  { # ONVIF::Media::Types::VideoRateControl
       FrameRateLimit =>  $some_value, # int
       EncodingInterval =>  $some_value, # int
       BitrateLimit =>  $some_value, # int
     },
     MPEG4 =>  { # ONVIF::Media::Types::Mpeg4Configuration
       GovLength =>  $some_value, # int
       Mpeg4Profile => $some_value, # Mpeg4Profile
     },
     H264 =>  { # ONVIF::Media::Types::H264Configuration
       GovLength =>  $some_value, # int
       H264Profile => $some_value, # H264Profile
     },
     Multicast =>  { # ONVIF::Media::Types::MulticastConfiguration
       Address =>  { # ONVIF::Media::Types::IPAddress
         Type => $some_value, # IPType
         IPv4Address => $some_value, # IPv4Address
         IPv6Address => $some_value, # IPv6Address
       },
       Port =>  $some_value, # int
       TTL =>  $some_value, # int
       AutoStart =>  $some_value, # boolean
     },
     SessionTimeout =>  $some_value, # duration
   },
   AudioEncoderConfiguration =>  { # ONVIF::Media::Types::AudioEncoderConfiguration
     Encoding => $some_value, # AudioEncoding
     Bitrate =>  $some_value, # int
     SampleRate =>  $some_value, # int
     Multicast =>  { # ONVIF::Media::Types::MulticastConfiguration
       Address =>  { # ONVIF::Media::Types::IPAddress
         Type => $some_value, # IPType
         IPv4Address => $some_value, # IPv4Address
         IPv6Address => $some_value, # IPv6Address
       },
       Port =>  $some_value, # int
       TTL =>  $some_value, # int
       AutoStart =>  $some_value, # boolean
     },
     SessionTimeout =>  $some_value, # duration
   },
   VideoAnalyticsConfiguration =>  { # ONVIF::Media::Types::VideoAnalyticsConfiguration
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
   PTZConfiguration =>  { # ONVIF::Media::Types::PTZConfiguration
     NodeToken => $some_value, # ReferenceToken
     DefaultAbsolutePantTiltPositionSpace =>  $some_value, # anyURI
     DefaultAbsoluteZoomPositionSpace =>  $some_value, # anyURI
     DefaultRelativePanTiltTranslationSpace =>  $some_value, # anyURI
     DefaultRelativeZoomTranslationSpace =>  $some_value, # anyURI
     DefaultContinuousPanTiltVelocitySpace =>  $some_value, # anyURI
     DefaultContinuousZoomVelocitySpace =>  $some_value, # anyURI
     DefaultPTZSpeed =>  { # ONVIF::Media::Types::PTZSpeed
       PanTilt => ,
       Zoom => ,
     },
     DefaultPTZTimeout =>  $some_value, # duration
     PanTiltLimits =>  { # ONVIF::Media::Types::PanTiltLimits
       Range =>  { # ONVIF::Media::Types::Space2DDescription
         URI =>  $some_value, # anyURI
         XRange =>  { # ONVIF::Media::Types::FloatRange
           Min =>  $some_value, # float
           Max =>  $some_value, # float
         },
         YRange =>  { # ONVIF::Media::Types::FloatRange
           Min =>  $some_value, # float
           Max =>  $some_value, # float
         },
       },
     },
     ZoomLimits =>  { # ONVIF::Media::Types::ZoomLimits
       Range =>  { # ONVIF::Media::Types::Space1DDescription
         URI =>  $some_value, # anyURI
         XRange =>  { # ONVIF::Media::Types::FloatRange
           Min =>  $some_value, # float
           Max =>  $some_value, # float
         },
       },
     },
     Extension =>  { # ONVIF::Media::Types::PTZConfigurationExtension
       PTControlDirection =>  { # ONVIF::Media::Types::PTControlDirection
         EFlip =>  { # ONVIF::Media::Types::EFlip
           Mode => $some_value, # EFlipMode
         },
         Reverse =>  { # ONVIF::Media::Types::Reverse
           Mode => $some_value, # ReverseMode
         },
         Extension =>  { # ONVIF::Media::Types::PTControlDirectionExtension
         },
       },
       Extension =>  { # ONVIF::Media::Types::PTZConfigurationExtension2
       },
     },
   },
   MetadataConfiguration =>  { # ONVIF::Media::Types::MetadataConfiguration
     PTZStatus =>  { # ONVIF::Media::Types::PTZFilter
       Status =>  $some_value, # boolean
       Position =>  $some_value, # boolean
     },
     Analytics =>  $some_value, # boolean
     Multicast =>  { # ONVIF::Media::Types::MulticastConfiguration
       Address =>  { # ONVIF::Media::Types::IPAddress
         Type => $some_value, # IPType
         IPv4Address => $some_value, # IPv4Address
         IPv6Address => $some_value, # IPv6Address
       },
       Port =>  $some_value, # int
       TTL =>  $some_value, # int
       AutoStart =>  $some_value, # boolean
     },
     SessionTimeout =>  $some_value, # duration
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
     Extension =>  { # ONVIF::Media::Types::MetadataConfigurationExtension
     },
   },
   Extension =>  { # ONVIF::Media::Types::ProfileExtension
     AudioOutputConfiguration =>  { # ONVIF::Media::Types::AudioOutputConfiguration
       OutputToken => $some_value, # ReferenceToken
       SendPrimacy =>  $some_value, # anyURI
       OutputLevel =>  $some_value, # int
     },
     AudioDecoderConfiguration =>  { # ONVIF::Media::Types::AudioDecoderConfiguration
     },
     Extension =>  { # ONVIF::Media::Types::ProfileExtension2
     },
   },
 },



=head2 attr

NOTE: Attribute documentation is experimental, and may be inaccurate.
See the correspondent WSDL/XML Schema if in question.

This class has additional attributes, accessibly via the C<attr()> method.

attr() returns an object of the class ONVIF::Media::Types::Profile::_Profile::XmlAttr.

The following attributes can be accessed on this object via the corresponding
get_/set_ methods:

=over

=item * token

 Unique identifier of the profile.



This attribute is of type L<ONVIF::Media::Types::ReferenceToken|ONVIF::Media::Types::ReferenceToken>.

=item * fixed

 A value of true signals that the profile cannot be deleted. Default is false.



This attribute is of type L<SOAP::WSDL::XSD::Typelib::Builtin::boolean|SOAP::WSDL::XSD::Typelib::Builtin::boolean>.


=back




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

