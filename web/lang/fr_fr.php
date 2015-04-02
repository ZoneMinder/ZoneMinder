<?php
//
// ZoneMinder web UK French language file, $Date$, $Revision$
// Copyright (C) 2001-2008 Philip Coombes
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
//

// ZoneMinder French Translation by Jerome Hanoteau

// Notes for Translators
// 0. Get some credit, put your name in the line above (optional)
// 1. When composing the language tokens in your language you should try and keep to roughly the
//   same length text if possible. Abbreviate where necessary as spacing is quite close in a number of places.
// 2. There are four types of string replacement
//   a) Simple replacements are words or short phrases that are static and used directly. This type of
//     replacement can be used 'as is'.
//   b) Complex replacements involve some dynamic element being included and so may require substitution
//     or changing into a different order. The token listed in this file will be passed through sprintf as
//     a formatting string. If the dynamic element is a number you will usually need to use a variable
//     replacement also as described below.
//   c) Variable replacements are used in conjunction with complex replacements and involve the generation
//     of a singular or plural noun depending on the number passed into the zmVlang function. See the 
//     the zmVlang section below for a further description of this.
//   d) Optional strings which can be used to replace the prompts and/or help text for the Options section
//     of the web interface. These are not listed below as they are quite large and held in the database
//     so that they can also be used by the zmconfig.pl script. However you can build up your own list
//     quite easily from the Config table in the database if necessary.
// 3. The tokens listed below are not used to build up phrases or sentences from single words. Therefore
//   you can safely assume that a single word token will only be used in that context.
// 4. In new language files, or if you are changing only a few words or phrases it makes sense from a 
//   maintenance point of view to include the original language file and override the old definitions rather
//   than copy all the language tokens across. To do this change the line below to whatever your base language
//   is and uncomment it.
// require_once( 'zm_lang_en_gb.php' );

// You may need to change the character set here, if your web server does not already
// do this by default, uncomment this if required.
//
// Example
// header( "Content-Type: text/html; charset=iso-8859-1" );

// You may need to change your locale here if your default one is incorrect for the
// language described in this file, or if you have multiple languages supported.
// If you do need to change your locale, be aware that the format of this function
// is subtlely different in versions of PHP before and after 4.3.0, see
// http://uk2.php.net/manual/en/function.setlocale.php for details.
// Also be aware that changing the whole locale may affect some floating point or decimal 
// arithmetic in the database, if this is the case change only the individual locale areas
// that don't affect this rather than all at once. See the examples below.
// Finally, depending on your setup, PHP may not enjoy have multiple locales in a shared 
// threaded environment, if you get funny errors it may be this.
//
// Examples
// setlocale( 'LC_ALL', 'en_GB' ); All locale settings pre-4.3.0
// setlocale( LC_ALL, 'en_GB' ); All locale settings 4.3.0 and after
// setlocale( LC_CTYPE, 'en_GB' ); Character class settings 4.3.0 and after
// setlocale( LC_TIME, 'en_GB' ); Date and time formatting 4.3.0 and after

// Simple String Replacements
$SLANG = array(
    '24BitColour'          => 'Couleur 24 bit',
    '32BitColour'          => 'Couleur 32 bit',          // Added - 2011-06-15
    '8BitGrey'             => 'Gris 8 bit',
    'Action'               => 'Action',
    'Actual'               => 'RÈel',
    'AddNewControl'        => 'Ajouter controle',
    'AddNewMonitor'        => 'Ajouter camÈra',
    'AddNewUser'           => 'Ajouter utilisateur',
    'AddNewZone'           => 'Ajouter zone',
    'Alarm'                => 'Alarme',
    'AlarmBrFrames'        => 'Images<br/>alarme',
    'AlarmFrame'           => 'Image alarme',
    'AlarmFrameCount'      => 'Nombre dimage alarme',
    'AlarmLimits'          => 'Limites alarme',
    'AlarmMaximumFPS'      => 'i/s maximum pendant alarme',
    'AlarmPx'              => 'Px Alarme',
    'AlarmRGBUnset'        => 'You must set an alarm RGB colour',
    'Alert'                => 'Alerte',
    'All'                  => 'Tous',
    'Apply'                => 'Appliquer',
    'ApplyingStateChange'  => 'Appl. chgt Ètat',
    'ArchArchived'         => 'ArchivÈ seul.',
    'ArchUnarchived'       => 'Non-arch. seul.',
    'Archive'              => 'Archiver',
    'Archived'             => 'ArchivÈs',
    'Area'                 => 'Area',
    'AreaUnits'            => 'Area (px/%)',
    'AttrAlarmFrames'      => 'Images alarme',
    'AttrArchiveStatus'    => 'Etat Archive',
    'AttrAvgScore'         => 'Score moy.',
    'AttrCause'            => 'Cause',
    'AttrDate'             => 'Date',
    'AttrDateTime'         => 'Date/Heure',
    'AttrDiskBlocks'       => 'Disk Blocks',
    'AttrDiskPercent'      => 'Disk Percent',
    'AttrDuration'         => 'DurÈe',
    'AttrFrames'           => 'Images',
    'AttrId'               => 'Id',
    'AttrMaxScore'         => 'Score max.',
    'AttrMonitorId'        => 'N∞ camÈra',
    'AttrMonitorName'      => 'Nom camÈra',
    'AttrName'             => 'Nom',
    'AttrNotes'            => 'Notes',
    'AttrSystemLoad'       => 'Charge SystËme',
    'AttrTime'             => 'Heure',
    'AttrTotalScore'       => 'Score total',
    'AttrWeekday'          => 'Semaine',
    'Auto'                 => 'Auto',
    'AutoStopTimeout'      => 'Auto Stop Timeout',
    'Available'            => 'Disponible',              // Added - 2009-03-31
    'AvgBrScore'           => 'Score<br/>moy.',
    'Background'           => 'ArriËre-plan',
    'BackgroundFilter'     => 'Lancer les filtres en arriËre-plan',
    'BadAlarmFrameCount'   => 'Alarm frame count must be an integer of one or more',
    'BadAlarmMaxFPS'       => 'Alarm Maximum FPS must be a positive integer or floating point value',
    'BadChannel'           => 'Channel must be set to an integer of zero or more',
    'BadColours'           => 'Target colour must be set to a valid value', // Added - 2011-06-15
    'BadDevice'            => 'Device must be set to a valid value',
    'BadFPSReportInterval' => 'FPS report interval buffer count must be an integer of 0 or more',
    'BadFormat'            => 'Format must be set to an integer of zero or more',
    'BadFrameSkip'         => 'Frame skip count must be an integer of zero or more',
    'BadMotionFrameSkip'   => 'Motion Frame skip count must be an integer of zero or more',
    'BadHeight'            => 'Height must be set to a valid value',
    'BadHost'              => 'Host must be set to a valid ip address or hostname, do not include http://',
    'BadImageBufferCount'  => 'Image buffer size must be an integer of 10 or more',
    'BadLabelX'            => 'Label X co-ordinate must be set to an integer of zero or more',
    'BadLabelY'            => 'Label Y co-ordinate must be set to an integer of zero or more',
    'BadMaxFPS'            => 'Maximum FPS must be a positive integer or floating point value',
    'BadNameChars'         => 'Les noms ne peuvent contenir que des lettres, chiffres, trait d\'union ou soulignÈ',
    'BadPalette'           => 'Palette must be set to a valid value', // Added - 2009-03-31
    'BadPath'              => 'Path must be set to a valid value',
    'BadPort'              => 'Port must be set to a valid number',
    'BadPostEventCount'    => 'Post event image count must be an integer of zero or more',
    'BadPreEventCount'     => 'Pre event image count must be at least zero, and less than image buffer size',
    'BadRefBlendPerc'      => 'Reference blend percentage must be a positive integer',
    'BadSectionLength'     => 'Section length must be an integer of 30 or more',
    'BadSignalCheckColour' => 'Signal check colour must be a valid RGB colour string',
    'BadStreamReplayBuffer'=> 'Stream replay buffer must be an integer of zero or more',
    'BadWarmupCount'       => 'Warmup frames must be an integer of zero or more',
    'BadWebColour'         => 'Web colour must be a valid web colour string',
    'BadWidth'             => 'Width must be set to a valid value',
    'Bandwidth'            => 'dÈbit',
    'BandwidthHead'        => 'dÈbit',	// This is the end of the bandwidth status on the top of the console, different in many language due to phrasing
    'BlobPx'               => 'Px forme',
    'BlobSizes'            => 'Taille forme',
    'Blobs'                => 'Formes',
    'Brightness'           => 'LuminositÈ;',
    'Buffers'              => 'Tampons',
    'CanAutoFocus'         => 'Can Auto Focus',
    'CanAutoGain'          => 'Can Auto Gain',
    'CanAutoIris'          => 'Can Auto Iris',
    'CanAutoWhite'         => 'Can Auto White Bal.',
    'CanAutoZoom'          => 'Can Auto Zoom',
    'CanFocus'             => 'Can Focus',
    'CanFocusAbs'          => 'Can Focus Absolute',
    'CanFocusCon'          => 'Can Focus Continuous',
    'CanFocusRel'          => 'Can Focus Relative',
    'CanGain'              => 'Can Gain ',
    'CanGainAbs'           => 'Can Gain Absolute',
    'CanGainCon'           => 'Can Gain Continuous',
    'CanGainRel'           => 'Can Gain Relative',
    'CanIris'              => 'Can Iris',
    'CanIrisAbs'           => 'Can Iris Absolute',
    'CanIrisCon'           => 'Can Iris Continuous',
    'CanIrisRel'           => 'Can Iris Relative',
    'CanMove'              => 'Can Move',
    'CanMoveAbs'           => 'Can Move Absolute',
    'CanMoveCon'           => 'Can Move Continuous',
    'CanMoveDiag'          => 'Can Move Diagonally',
    'CanMoveMap'           => 'Can Move Mapped',
    'CanMoveRel'           => 'Can Move Relative',
    'CanPan'               => 'Can Pan' ,
    'CanReset'             => 'Can Reset',
    'CanSetPresets'        => 'Can Set Presets',
    'CanSleep'             => 'Can Sleep',
    'CanTilt'              => 'Can Tilt',
    'CanWake'              => 'Can Wake',
    'CanWhite'             => 'Can White Balance',
    'CanWhiteAbs'          => 'Can White Bal. Absolute',
    'CanWhiteBal'          => 'Can White Bal.',
    'CanWhiteCon'          => 'Can White Bal. Continuous',
    'CanWhiteRel'          => 'Can White Bal. Relative',
    'CanZoom'              => 'Can Zoom',
    'CanZoomAbs'           => 'Can Zoom Absolute',
    'CanZoomCon'           => 'Can Zoom Continuous',
    'CanZoomRel'           => 'Can Zoom Relative',
    'Cancel'               => 'Annuler',
    'CancelForcedAlarm'    => 'Annuler Alarme ForcÈe',
    'CaptureHeight'        => 'Hauteur',
    'CaptureMethod'        => 'MÈthode',         // Added - 2009-02-08
    'CapturePalette'       => 'Palette',
    'CaptureWidth'         => 'Largeur',
    'Cause'                => 'Cause',
    'CheckMethod'          => 'MÈthode vÈrif. alarme',
    'ChooseDetectedCamera' => 'Choose Detected Camera', // Added - 2009-03-31
    'ChooseFilter'         => 'Choisir filtre',
    'ChooseLogFormat'      => 'Choose a log format',    // Added - 2011-06-17
    'ChooseLogSelection'   => 'Choose a log selection', // Added - 2011-06-17
    'ChoosePreset'         => 'Choisir PrÈrÈglages',
    'Clear'                => 'Effacer',                  // Added - 2011-06-16
    'Close'                => 'Fermer',
    'Colour'               => 'Couleur',
    'Command'              => 'Commande',
    'Component'            => 'Component',              // Added - 2011-06-16
    'Config'               => 'Config',
    'ConfiguredFor'        => 'ConfigurÈ pour',
    'ConfirmDeleteEvents'  => 'Are you sure you wish to delete the selected events?',
    'ConfirmPassword'      => 'Confirmer mot de passe',
    'ConjAnd'              => 'et',
    'ConjOr'               => 'ou',
    'Console'              => 'Console',
    'ContactAdmin'         => 'Contactez votre administrateur SVP',
    'Continue'             => 'Continuer',
    'Contrast'             => 'Contraste',
    'Control'              => 'Control',
    'ControlAddress'       => 'Control Address',
    'ControlCap'           => 'Control Capability',
    'ControlCaps'          => 'Control Capabilities',
    'ControlDevice'        => 'Control Device',
    'ControlType'          => 'Control Type',
    'Controllable'         => 'Controllable',
    'Cycle'                => 'Cycle',
    'CycleWatch'           => 'Cycle vision',
    'DateTime'             => 'Date/Time',              // Added - 2011-06-16
    'Day'                  => 'Aujourd&#39;hui',
    'Debug'                => 'Debug',
    'DefaultRate'          => 'Vitesse par dÈfaut',
    'DefaultScale'         => 'Echelle par dÈfaut',
    'DefaultView'          => 'Vue par dÈfaut',
    'Delete'               => 'Effacer',
    'DeleteAndNext'        => 'Eff. &amp; suiv.',
    'DeleteAndPrev'        => 'Eff. &amp; prec.',
    'DeleteSavedFilter'    => 'Eff. filtre sauvÈ',
    'Description'          => 'Description',
    'DetectedCameras'      => 'Detected Cameras',       // Added - 2009-03-31
    'Device'               => 'CamÈra',                 // Added - 2009-02-08
    'DeviceChannel'        => 'Canal camÈra',
    'DeviceFormat'         => 'Format camÈra',
    'DeviceNumber'         => 'NumÈro camÈra',
    'DevicePath'           => 'Chemin',
    'Devices'              => 'CamÈras',
    'Dimensions'           => 'Dimensions',
    'DisableAlarms'        => 'DÈsactiver les alarmes',
    'Disk'                 => 'Stockage',
    'Display'              => 'Affichage',                // Added - 2011-01-30
    'Displaying'           => 'Displaying',             // Added - 2011-06-16
    'Donate'               => 'Please Donate',
    'DonateAlready'        => 'No, I\'ve already donated',
    'DonateEnticement'     => 'You\'ve been running ZoneMinder for a while now and hopefully are finding it a useful addition to your home or workplace security. Although ZoneMinder is, and will remain, free and open source, it costs money to develop and support. If you would like to help support future development and new features then please consider donating. Donating is, of course, optional but very much appreciated and you can donate as much or as little as you like.<br><br>If you would like to donate please select the option below or go to http://www.zoneminder.com/donate.html in your browser.<br><br>Thank you for using ZoneMinder and don\'t forget to visit the forums on ZoneMinder.com for support or suggestions about how to make your ZoneMinder experience even better.',
    'DonateRemindDay'      => 'Not yet, remind again in 1 day',
    'DonateRemindHour'     => 'Not yet, remind again in 1 hour',
    'DonateRemindMonth'    => 'Not yet, remind again in 1 month',
    'DonateRemindNever'    => 'No, I don\'t want to donate, never remind',
    'DonateRemindWeek'     => 'Not yet, remind again in 1 week',
    'DonateYes'            => 'Yes, I\'d like to donate now',
    'DoNativeMotionDetection'=> 'Do Native Motion Detection',
    'Download'             => 'TÈlÈcharger',
    'DuplicateMonitorName' => 'Duplicate Monitor Name', // Added - 2009-03-31
    'Duration'             => 'DurÈe',
    'Edit'                 => 'Editer',
    'Email'                => 'Email',
    'EnableAlarms'         => 'Activer les alarmes',
    'Enabled'              => 'ActivÈ',
    'EnterNewFilterName'   => 'Entrer nom nouv. filtre',
    'Error'                => 'Erreur',
    'ErrorBrackets'        => 'Erreur, vÈrifiez que toutes les parenthËses ouvertes sont fermÈes',
    'ErrorValidValue'      => 'Erreur, vÈrifiez que tous les termes ont une valeur valide',
    'Etc'                  => 'etc',
    'Event'                => 'ÈvÈnement',
    'EventFilter'          => 'Filtre ÈvÈnement',
    'EventId'              => 'Id',
    'EventName'            => 'Nom',
    'EventPrefix'          => 'Prefix',
    'Events'               => 'ÈvÈnements',
    'Exclude'              => 'Exclure',
    'Execute'              => 'Executer',
    'Export'               => 'Exporter',
    'ExportDetails'        => 'Exporter dÈtails ÈvÈnement',
    'ExportFailed'         => 'Exportation ÈchouÈe',
    'ExportFormat'         => 'Format',
    'ExportFormatTar'      => 'Tar',
    'ExportFormatZip'      => 'Zip',
    'ExportFrames'         => 'Exporter dÈtails image',
    'ExportImageFiles'     => 'Exporter fichiers image',
    'ExportLog'            => 'Exporter Log',             // Added - 2011-06-17
    'ExportMiscFiles'      => 'Exporter autres fichiers',
    'ExportOptions'        => 'Options d&#39;exportation',
    'ExportSucceeded'      => 'Exportation rÈussie',       // Added - 2009-02-08
    'ExportVideoFiles'     => 'Exporter fichiers video',
    'Exporting'            => 'Exportation',
    'FPS'                  => 'i/s',
    'FPSReportInterval'    => 'FPS Report Interval',
    'FTP'                  => 'FTP',
    'Far'                  => 'Loin',
    'FastForward'          => 'Avance rapide',
    'Feed'                 => 'Flux',
    'Ffmpeg'               => 'Ffmpeg',                 // Added - 2009-02-08
    'File'                 => 'Fichier',
    'FilterArchiveEvents'  => 'Archiver',
    'FilterDeleteEvents'   => 'Effacer',
    'FilterEmailEvents'    => 'Envoyer les dÈtails par mail',
    'FilterExecuteEvents'  => 'Executer une commande',
    'FilterMessageEvents'  => 'Envoyer les dÈtails par message',
    'FilterPx'             => 'Filter Px',
    'FilterUnset'          => 'You must specify a filter width and height',
    'FilterUploadEvents'   => 'TransfÈrer',
    'FilterVideoEvents'    => 'CrÈer video',
    'Filters'              => 'Filtres',
    'First'                => 'Prem.',
    'FlippedHori'          => 'Flipped Horizontally',
    'FlippedVert'          => 'Flipped Vertically',
    'FnNone'                => 'None',            // Added 2013.08.16.
    'FnMonitor'             => 'Monitor',            // Added 2013.08.16.
    'FnModect'              => 'Modect',            // Added 2013.08.16.
    'FnRecord'              => 'Record',            // Added 2013.08.16.
    'FnMocord'              => 'Mocord',            // Added 2013.08.16.
    'FnNodect'              => 'Nodect',            // Added 2013.08.16.
    'Focus'                => 'Focus',
    'ForceAlarm'           => 'Force Alarme',
    'Format'               => 'Format',
    'Frame'                => 'Image',
    'FrameId'              => 'N∞ image',
    'FrameRate'            => 'Cadence Image',
    'FrameSkip'            => 'Saut image',
    'MotionFrameSkip'      => 'Motion Frame Skip',
    'Frames'               => 'images',
    'Func'                 => 'Fct',
    'Function'             => 'Mode',
    'Gain'                 => 'Gain',
    'General'              => 'GÈnÈral',
    'GenerateVideo'        => 'GÈnÈrer VidÈo',
    'GeneratingVideo'      => 'GÈnÈration VidÈo',
    'GoToZoneMinder'       => 'Aller sur ZoneMinder.com',
    'Grey'                 => 'Gris',
    'Group'                => 'Groupe',
    'Groups'               => 'Groupes',
    'HasFocusSpeed'        => 'Has Focus Speed',
    'HasGainSpeed'         => 'Has Gain Speed',
    'HasHomePreset'        => 'Has Home Preset',
    'HasIrisSpeed'         => 'Has Iris Speed',
    'HasPanSpeed'          => 'Has Pan Speed',
    'HasPresets'           => 'Has Presets',
    'HasTiltSpeed'         => 'Has Tilt Speed',
    'HasTurboPan'          => 'Has Turbo Pan',
    'HasTurboTilt'         => 'Has Turbo Tilt',
    'HasWhiteSpeed'        => 'Has White Bal. Speed',
    'HasZoomSpeed'         => 'Has Zoom Speed',
    'High'                 => 'Haut',
    'HighBW'               => 'Haut&nbsp;N/B',
    'Home'                 => 'Home',
    'Hour'                 => 'Heure',
    'Hue'                  => 'Teinte',
    'Id'                   => 'N∞',
    'Idle'                 => 'Vide',
    'Ignore'               => 'Ignorer',
    'Image'                => 'Image',
    'ImageBufferSize'      => 'Taille tampon image',
    'Images'               => 'Images',
    'In'                   => 'In',
    'Include'              => 'Inclure',
    'Inverted'             => 'InversÈ',
    'Iris'                 => 'Iris',
    'KeyString'            => 'Key String',
    'Label'                => 'Label',
    'Language'             => 'Langue',
    'Last'                 => 'Dernier',
    'Layout'               => 'Disposition',                 // Added - 2009-02-08
    'Level'                => 'Niveau',                  // Added - 2011-06-16
    'Libvlc'               => 'Libvlc',
    'LimitResultsPost'     => 'rÈsultats seulement;', // This is used at the end of the phrase 'Limit to first N results only'
    'LimitResultsPre'      => 'Limite au premier', // This is used at the beginning of the phrase 'Limit to first N results only'
    'Line'                 => 'Ligne',                   // Added - 2011-06-16
    'LinkedMonitors'       => 'CamÈra(s) liÈ(s)',
    'List'                 => 'Liste',
    'Load'                 => 'CPU',
    'Local'                => 'Local',
    'Log'                  => 'Log',                    // Added - 2011-06-16
    'LoggedInAs'           => 'ConnectÈ cÙ',
    'Logging'              => 'Logging',                // Added - 2011-06-16
    'LoggingIn'            => 'Connexion',
    'Login'                => 'Login',
    'Logout'               => 'DÈconnexion',
    'Logs'                 => 'Logs',                   // Added - 2011-06-17
    'Low'                  => 'Bas',
    'LowBW'                => 'Basse&nbsp;N/B',
    'Main'                 => 'Principal',
    'Man'                  => 'Man',
    'Manual'               => 'Manuel',
    'Mark'                 => 'SÈlÈctionner',
    'Max'                  => 'Max',
    'MaxBandwidth'         => 'Max Bandwidth',
    'MaxBrScore'           => 'Score<br/>max',
    'MaxFocusRange'        => 'Max Focus Range',
    'MaxFocusSpeed'        => 'Max Focus Speed',
    'MaxFocusStep'         => 'Max Focus Step',
    'MaxGainRange'         => 'Max Gain Range',
    'MaxGainSpeed'         => 'Max Gain Speed',
    'MaxGainStep'          => 'Max Gain Step',
    'MaxIrisRange'         => 'Max Iris Range',
    'MaxIrisSpeed'         => 'Max Iris Speed',
    'MaxIrisStep'          => 'Max Iris Step',
    'MaxPanRange'          => 'Max Pan Range',
    'MaxPanSpeed'          => 'Max Pan Speed',
    'MaxPanStep'           => 'Max Pan Step',
    'MaxTiltRange'         => 'Max Tilt Range',
    'MaxTiltSpeed'         => 'Max Tilt Speed',
    'MaxTiltStep'          => 'Max Tilt Step',
    'MaxWhiteRange'        => 'Max White Bal. Range',
    'MaxWhiteSpeed'        => 'Max White Bal. Speed',
    'MaxWhiteStep'         => 'Max White Bal. Step',
    'MaxZoomRange'         => 'Max Zoom Range',
    'MaxZoomSpeed'         => 'Max Zoom Speed',
    'MaxZoomStep'          => 'Max Zoom Step',
    'MaximumFPS'           => 'i/s maximum',
    'Medium'               => 'Moyen',
    'MediumBW'             => 'Moy.&nbsp;N/B',
    'Message'              => 'Message',                // Added - 2011-06-16
    'MinAlarmAreaLtMax'    => 'Minimum alarm area should be less than maximum',
    'MinAlarmAreaUnset'    => 'You must specify the minimum alarm pixel count',
    'MinBlobAreaLtMax'     => 'Aire blob min. doit Í < aire blob maximum',
    'MinBlobAreaUnset'     => 'You must specify the minimum blob pixel count',
    'MinBlobLtMinFilter'   => 'Minimum blob area should be less than or equal to minimum filter area',
    'MinBlobsLtMax'        => 'Blobs min. doit Í < blobs max.',
    'MinBlobsUnset'        => 'You must specify the minimum blob count',
    'MinFilterAreaLtMax'   => 'Minimum filter area should be less than maximum',
    'MinFilterAreaUnset'   => 'You must specify the minimum filter pixel count',
    'MinFilterLtMinAlarm'  => 'Minimum filter area should be less than or equal to minimum alarm area',
    'MinFocusRange'        => 'Min Focus Range',
    'MinFocusSpeed'        => 'Min Focus Speed',
    'MinFocusStep'         => 'Min Focus Step',
    'MinGainRange'         => 'Min Gain Range',
    'MinGainSpeed'         => 'Min Gain Speed',
    'MinGainStep'          => 'Min Gain Step',
    'MinIrisRange'         => 'Min Iris Range',
    'MinIrisSpeed'         => 'Min Iris Speed',
    'MinIrisStep'          => 'Min Iris Step',
    'MinPanRange'          => 'Min Pan Range',
    'MinPanSpeed'          => 'Min Pan Speed',
    'MinPanStep'           => 'Min Pan Step',
    'MinPixelThresLtMax'   => 'Seuil pixel min. doit Í < seuil pixel max.',
    'MinPixelThresUnset'   => 'You must specify a minimum pixel threshold',
    'MinTiltRange'         => 'Min Tilt Range',
    'MinTiltSpeed'         => 'Min Tilt Speed',
    'MinTiltStep'          => 'Min Tilt Step',
    'MinWhiteRange'        => 'Min White Bal. Range',
    'MinWhiteSpeed'        => 'Min White Bal. Speed',
    'MinWhiteStep'         => 'Min White Bal. Step',
    'MinZoomRange'         => 'Min Zoom Range',
    'MinZoomSpeed'         => 'Min Zoom Speed',
    'MinZoomStep'          => 'Min Zoom Step',
    'Misc'                 => 'Divers',
    'Monitor'              => 'CamÈra',
    'MonitorIds'           => 'N∞&nbsp;camÈra',
    'MonitorPreset'        => 'PrÈrÈglages camÈra',
    'MonitorPresetIntro'   => 'Select an appropriate preset from the list below.<br><br>Please note that this may overwrite any values you already have configured for this monitor.<br><br>',
    'MonitorProbe'         => 'Scanner CamÈra',          // Added - 2009-03-31
    'MonitorProbeIntro'    => 'The list below shows detected analog and network cameras and whether they are already being used or available for selection.<br/><br/>Select the desired entry from the list below.<br/><br/>Please note that not all cameras may be detected and that choosing a camera here may overwrite any values you already have configured for the current monitor.<br/><br/>', // Added - 2009-03-31
    'Monitors'             => 'CamÈras',
    'Montage'              => 'Montage',
    'Month'                => 'Mois',
    'More'                 => 'Plus',                   // Added - 2011-06-16
    'Move'                 => 'DÈplacer',
    'MtgDefault'            => 'Default',              // Added 2013.08.15.
    'Mtg2widgrd'            => '2-wide grid',              // Added 2013.08.15.
    'Mtg3widgrd'            => '3-wide grid',              // Added 2013.08.15.
    'Mtg4widgrd'            => '4-wide grid',              // Added 2013.08.15.
    'Mtg3widgrx'            => '3-wide grid, scaled, enlarge on alarm',              // Added 2013.08.15.
    'MustBeGe'             => 'doit Ítre sup. ou Ègal ‡',
    'MustBeLe'             => 'doit Ítre inf. ou Ègal ‡',
    'MustConfirmPassword'  => 'Confirmez le mot de passe',
    'MustSupplyPassword'   => 'Entrez un mot de passe',
    'MustSupplyUsername'   => 'Entrez un nom d\'utilisateur',
    'Name'                 => 'Nom',
    'Near'                 => 'PrËs',
    'Network'              => 'RÈseau',
    'New'                  => 'Nouv.',
    'NewGroup'             => 'Nouv. Groupe',
    'NewLabel'             => 'Nouv. Label',
    'NewPassword'          => 'Nouv. mt de passe',
    'NewState'             => 'Nv Ètat',
    'NewUser'              => 'Nv util.',
    'Next'                 => 'Suivant',
    'No'                   => 'Non',
    'NoDetectedCameras'    => 'Pas de caméras dÈtectÈ',    // Added - 2009-03-31
    'NoFramesRecorded'     => 'Pas d\'image enregistrÈe pour cet ÈvÈnement',
    'NoGroup'              => 'Pas de groupe',
    'NoSavedFilters'       => 'Pasfiltressauv',
    'NoStatisticsRecorded' => 'Pas de statistiques disponibles pour cet ÈvÈnmnt/imag.',
    'None'                 => 'Aucun',
    'NoneAvailable'        => 'Aucun disponible',
    'Normal'               => 'Normal',
    'Notes'                => 'Notes',
    'NumPresets'           => 'Num PrÈrÈglages',
    'Off'                  => 'Off',
    'On'                   => 'On',
    'OpEq'                 => 'Ègal ‡',
    'OpGt'                 => 'sup. ‡',
    'OpGtEq'               => 'plus grand ou Ègal ‡',
    'OpIn'                 => 'en lot',
    'OpLt'                 => 'inf. ‡',
    'OpLtEq'               => 'inf. ou Ègal ‡',
    'OpMatches'            => 'correspond',
    'OpNe'                 => 'diff. de',
    'OpNotIn'              => 'pas en lot',
    'OpNotMatches'         => 'ne correspond pas',
    'Open'                 => 'Ouvrir',
    'OptionHelp'           => 'Aide',
    'OptionRestartWarning' => 'These changes may not come into effect fully\nwhile the system is running. When you have\nfinished making your changes please ensure that\nyou restart ZoneMinder.',
    'Options'              => 'Options',
    'OrEnterNewName'       => 'ou entrez nv nom',
    'Order'                => 'Ordre',
    'Orientation'          => 'Orientation',
    'Out'                  => 'Out',
    'OverwriteExisting'    => 'Ecraser l\'existant',
    'Paged'                => 'PaginÈe',
    'Pan'                  => 'Pan',
    'PanLeft'              => 'Pan Left',
    'PanRight'             => 'Pan Right',
    'PanTilt'              => 'Pan/Tilt',
    'Parameter'            => 'ParamËtre',
    'Password'             => 'Mt de passe',
    'PasswordsDifferent'   => 'Les 2 mots de passe sont diffÈrents',
    'Paths'                => 'Chemins',
    'Pause'                => 'Pause',
    'Phone'                => 'TÈlÈphone',
    'PhoneBW'              => 'Phone&nbsp;B/W',
    'Pid'                  => 'PID',                    // Added - 2011-06-16
    'PixelDiff'            => 'Pixel Diff',
    'Pixels'               => 'pixels',
    'Play'                 => 'Lire',
    'PlayAll'              => 'Tout lire',
    'PleaseWait'           => 'Attendez',
    'Plugins'              => 'Plugins',
    'Point'                => 'Point',
    'PostEventImageBuffer' => 'Nombre dimage(s) post-ÈvÈnement',
    'PreEventImageBuffer'  => 'Nombre dimage(s) prÈ-ÈvÈnement',
    'PreserveAspect'       => 'Conserver les proportions',
    'Preset'               => 'PrÈrÈglage',
    'Presets'              => 'PrÈrÈglages',
    'Prev'                 => 'PrecÈdent',
    'Probe'                => 'Scanner',                  // Added - 2009-03-31
    'Protocol'             => 'Protocole',
    'Rate'                 => 'Vitesse',
    'Real'                 => 'RÈel',
    'Record'               => 'Enregistrer',
    'RefImageBlendPct'     => 'Reference Image Blend %ge',
    'Refresh'              => 'RafraÓchir',
    'Remote'               => 'Distant',
    'RemoteHostName'       => 'IP/DNS',
    'RemoteHostPath'       => 'Chemin',
    'RemoteHostPort'       => 'Port',
    'RemoteHostSubPath'    => 'Sous-chemin',    // Added - 2009-02-08
    'RemoteImageColours'   => 'Nombre de couleurs',
    'RemoteMethod'         => 'MÈthode',          // Added - 2009-02-08
    'RemoteProtocol'       => 'Protocole',        // Added - 2009-02-08
    'Rename'               => 'Renommer',
    'Replay'               => 'Relire',
    'ReplayAll'            => 'Tous les ÈvÈnements',
    'ReplayGapless'        => 'EvÈnement Gapless',
    'ReplaySingle'         => 'EvÈnement unique',
    'Reset'                => 'RAZ',
    'ResetEventCounts'     => 'Rem. ‡ 0 comptage des Èvts',
    'Restart'              => 'RedÈmarrer',
    'Restarting'           => 'RedÈmarrage',
    'RestrictedCameraIds'  => 'N∞ camÈras confid.',
    'RestrictedMonitors'   => 'Restricted Monitors',
    'ReturnDelay'          => 'Return Delay',
    'ReturnLocation'       => 'Return Location',
    'Rewind'               => 'Rembobiner',
    'RotateLeft'           => 'Rotation g.',
    'RotateRight'          => 'Rotation d.',
    'RunLocalUpdate'       => 'Please run zmupdate.pl to update', // Added - 2011-05-25
    'RunMode'              => 'Mode de lancement',
    'RunState'             => 'Changer Ètat',
    'Running'              => 'En Fonctionnement',
    'Save'                 => 'OK',
    'SaveAs'               => 'Sauvegarder sous',
    'SaveFilter'           => 'Sauvegarder Filtre',
    'Scale'                => 'Echelle',
    'Score'                => 'Score',
    'Secs'                 => 'Secs',
    'Sectionlength'        => 'Longueur section',
    'Select'               => 'SÈlectionner',
    'SelectFormat'         => 'SÈlectionner Format',          // Added - 2011-06-17
    'SelectLog'            => 'SÈlectionner Log',             // Added - 2011-06-17
    'SelectMonitors'       => 'SÈlectionner camÈras',
    'SelfIntersecting'     => 'Polygon edges must not intersect',
    'Set'                  => 'DÉfinir',
    'SetNewBandwidth'      => 'RÈgler le dÈbit',
    'SetPreset'            => 'DÈfinir PrÈrÈglages',
    'Settings'             => 'RÈglages',
    'ShowFilterWindow'     => 'Filtres',
    'ShowTimeline'         => 'Afficher Chronologie',
    'SignalCheckColour'    => 'Signal Check Colour',
    'Size'                 => 'Taille',
    'SkinDescription'      => 'Change the default skin for this computer', // Added - 2011-01-30
    'Sleep'                => 'Veille',
    'SortAsc'              => 'Asc',
    'SortBy'               => 'Trier par',
    'SortDesc'             => 'Desc',
    'Source'               => 'Source',
    'SourceColours'        => 'Couleurs',         // Added - 2009-02-08
    'SourcePath'           => 'Chemin',            // Added - 2009-02-08
    'SourceType'           => 'Type de Source',
    'Speed'                => 'Vitesse',
    'SpeedHigh'            => 'Rapide',
    'SpeedLow'             => 'Lent',
    'SpeedMedium'          => 'Moyen',
    'SpeedTurbo'           => 'Turbo',
    'Start'                => 'DÈmarrer',
    'State'                => 'Etat',
    'Stats'                => 'Stats',
    'Status'               => 'Statut',
    'Step'                 => 'Step',
    'StepBack'             => 'Step Back',
    'StepForward'          => 'Step Forward',
    'StepLarge'            => 'Large Step',
    'StepMedium'           => 'Medium Step',
    'StepNone'             => 'No Step',
    'StepSmall'            => 'Small Step',
    'Stills'               => 'Photos',
    'Stop'                 => 'ArrÍter',
    'Stopped'              => 'ArrÍtÈ',
    'Stream'               => 'Flux',
    'StreamReplayBuffer'   => 'Stream Replay Image Buffer',
    'Submit'               => 'Soumettre',
    'System'               => 'SystËme',
    'SystemLog'            => 'System Log',             // Added - 2011-06-16
    'Tele'                 => 'Tele',
    'Thumbnail'            => 'Miniature',
    'Tilt'                 => 'Tilt',
    'Time'                 => 'Heure',
    'TimeDelta'            => 'Time Delta',
    'TimeStamp'            => 'Horodatage',
    'Timeline'             => 'Chronologie',
    'TimelineTip1'         => 'Pass your mouse over the graph to view a snapshot image and event details.',              // Added 2013.08.15.
    'TimelineTip2'         => 'Click on the coloured sections of the graph, or the image, to view the event.',              // Added 2013.08.15.
    'TimelineTip3'         => 'Click on the background to zoom in to a smaller time period based around your click.',              // Added 2013.08.15.
    'TimelineTip4'         => 'Use the controls below to zoom out or navigate back and forward through the time range.',              // Added 2013.08.15.
    'Timestamp'            => 'Horodatage',
    'TimestampLabelFormat' => 'Format Horodatage',
    'TimestampLabelX'      => 'Label Horodatage X',
    'TimestampLabelY'      => 'Label Horodatage Y',
    'Today'                => 'Aujourd&#39;hui',
    'Tools'                => 'Outils',
    'Total'                => 'Total',                  // Added - 2011-06-16
    'TotalBrScore'         => 'Score<br/>total',
    'TrackDelay'           => 'Track Delay',
    'TrackMotion'          => 'Track Motion',
    'Triggers'             => 'DÈclenchements',
    'TurboPanSpeed'        => 'Turbo Pan Speed',
    'TurboTiltSpeed'       => 'Turbo Tilt Speed',
    'Type'                 => 'Type',
    'Unarchive'            => 'DÈsarchiver',
    'Undefined'            => 'indÈfini',              // Added - 2009-02-08
    'Units'                => 'UnitÈs',
    'Unknown'              => 'Inconnu',
    'Update'               => 'Actualiser',
    'UpdateAvailable'      => 'Mise ‡ jour de ZM disponible',
    'UpdateNotNecessary'   => 'Pas de mise ‡ jour disponible',
    'Updated'              => 'ActualisÈ',                // Added - 2011-06-16
    'Upload'               => 'TransfÈrer',                 // Added - 2011-08-23
    'UsedPlugins'	   => 'Used Plugins',
    'UseFilter'            => 'Utiliser Filtre',
    'UseFilterExprsPost'   => '&nbsp;filter&nbsp;expressions', // This is used at the end of the phrase 'use N filter expressions'
    'UseFilterExprsPre'    => 'Util.&nbsp;', // This is used at the beginning of the phrase 'use N filter expressions'
    'User'                 => 'Utilisateur',
    'Username'             => 'Login',
    'Users'                => 'Utilisateurs',
    'Value'                => 'Valeur',
    'Version'              => 'Version',
    'VersionIgnore'        => 'Ignorer cette version',
    'VersionRemindDay'     => 'Me rappeler ds 1 j.',
    'VersionRemindHour'    => 'Me rappleler dans 1 h.',
    'VersionRemindNever'   => 'Ne pas avertir des nvelles versions',
    'VersionRemindWeek'    => 'Me rappeler ds 1 sem.',
    'Video'                => 'VidÈo',
    'VideoFormat'          => 'Format de la VidÈo',
    'VideoGenFailed'       => 'Echec gÈnÈration vidÈo!',
    'VideoGenFiles'        => 'Existing Video Files',
    'VideoGenNoFiles'      => 'Aucun fichier vidéo trouvé',
    'VideoGenParms'        => 'ParamËtres gÈnÈration vidÈo',
    'VideoGenSucceeded'    => 'VidÈo gÈnÈrÈe avec succËs!',
    'VideoSize'            => 'taille vidÈo',
    'View'                 => 'Voir',
    'ViewAll'              => 'Tout voir',
    'ViewEvent'            => 'Voir ÈvÈnement',
    'ViewPaged'            => 'Vue paginÈe',
    'Wake'                 => 'RÈveiller',
    'WarmupFrames'         => 'Images test',
    'Watch'                => 'Regarder',
    'Web'                  => 'Web',
    'WebColour'            => 'Web Colour',
    'Week'                 => 'Semaine',
    'White'                => 'White',
    'WhiteBalance'         => 'White Balance',
    'Wide'                 => 'Large',
    'X'                    => 'X',
    'X10'                  => 'X10',
    'X10ActivationString'  => 'X10:chaÓne activation',
    'X10InputAlarmString'  => 'X10:chaÓne alarme entrÈe',
    'X10OutputAlarmString' => 'X10:chaÓne alarme sortie',
    'Y'                    => 'Y',
    'Yes'                  => 'Oui',
    'YouNoPerms'           => 'Permissions nÈcessaires pour cette ressource.',
    'Zone'                 => 'Zone',
    'ZoneAlarmColour'      => 'Couleur alarme (Red/Green/Blue)',
    'ZoneArea'             => 'Zone Area',
    'ZoneFilterSize'       => 'Filter Width/Height (pixels)',
    'ZoneMinMaxAlarmArea'  => 'Min/Max Alarmed Area',
    'ZoneMinMaxBlobArea'   => 'Min/Max Blob Area',
    'ZoneMinMaxBlobs'      => 'Min/Max Blobs',
    'ZoneMinMaxFiltArea'   => 'Min/Max Filtered Area',
    'ZoneMinMaxPixelThres' => 'Min/Max Pixel Threshold (0-255)',
    'ZoneMinderLog'        => 'ZoneMinder Log',         // Added - 2011-06-17
    'ZoneOverloadFrames'   => 'Overload Frame Ignore Count',
    'ZoneExtendAlarmFrames' => 'Extend Alarm Frame Count',
    'Zones'                => 'Zones',
    'Zoom'                 => 'Zoom',
    'ZoomIn'               => 'Zoom avant',
    'ZoomOut'              => 'Zoom arriËre',
);

// Complex replacements with formatting and/or placements, must be passed through sprintf
$CLANG = array(
    'CurrentLogin'         => 'Util. Actuel: \'%1$s\'',
    'EventCount'           => '%1$s %2$s', // par ex. '37 ÈvËnts' (voir Vlang ci-dessous)
    'LastEvents'           => '%1$s derniers %2$s', // par ex. '37 derniers  ÈvËnts' (voir Vlang ci-dessous)
    'LatestRelease'        => 'La derniËre version est v%1$s, vous avez v%2$s.',
    'MonitorCount'         => '%1$s %2$s', // par exemple '4 camÈras' (voir Vlang ci-dessous)
    'MonitorFunction'      => 'CamÈra %1$s Fonction',
    'RunningRecentVer'     => 'Vs avez la derniËre version de ZoneMinder, v%s.',
    'VersionMismatch'      => 'Version mismatch, system is version %1$s, database is %2$s.', // Added - 2011-05-25
);

// The next section allows you to describe a series of word ending and counts used to 
// generate the correctly conjugated forms of words depending on a count that is associated
// with that word.
// This intended to allow phrases such a '0 potatoes', '1 potato', '2 potatoes' etc to
// conjugate correctly with the associated count.
// In some languages such as English this is fairly simple and can be expressed by assigning
// a count with a singular or plural form of a word and then finding the nearest (lower) value.
// So '0' of something generally ends in 's', 1 of something is singular and has no extra
// ending and 2 or more is a plural and ends in 's' also. So to find the ending for '187' of
// something you would find the nearest lower count (2) and use that ending.
//
// So examples of this would be
// $zmVlangPotato = array( 0=>'Potatoes', 1=>'Potato', 2=>'Potatoes' );
// $zmVlangSheep = array( 0=>'Sheep' );
//
// where you can have as few or as many entries in the array as necessary
// If your language is similar in form to this then use the same format and choose the
// appropriate zmVlang function below.
// If however you have a language with a different format of plural endings then another
// approach is required . For instance in Russian the word endings change continuously
// depending on the last digit (or digits) of the numerator. In this case then zmVlang
// arrays could be written so that the array index just represents an arbitrary 'type'
// and the zmVlang function does the calculation about which version is appropriate.
//
// So an example in Russian might be (using English words, and made up endings as I
// don't know any Russian!!)
// $zmVlangPotato = array( 1=>'Potati', 2=>'Potaton', 3=>'Potaten' );
//
// and the zmVlang function decides that the first form is used for counts ending in
// 0, 5-9 or 11-19 and the second form when ending in 1 etc.
//

// Variable arrays expressing plurality, see the zmVlang description above
$VLANG = array(
    'Event'                => array( 0=>'ÈvÈnements', 1=>'ÈvÈnement', 2=>'ÈvÈnements' ),
    'Monitor'              => array( 0=>'camÈras', 1=>'camÈra', 2=>'camÈras' ),
);

// You will need to choose or write a function that can correlate the plurality string arrays
// with variable counts. This is used to conjugate the Vlang arrays above with a number passed
// in to generate the correct noun form.
//
// In languages such as English this is fairly simple 
// Note this still has to be used with printf etc to get the right formating
function zmVlang( $langVarArray, $count )
{
    krsort( $langVarArray );
    foreach ( $langVarArray as $key=>$value )
    {
        if ( abs($count) >= $key )
        {
            return( $value );
        }
    }
    die( 'Error, unable to correlate variable language string' );
}

// This is an version that could be used in the Russian example above
// The rules are that the first word form is used if the count ends in
// 0, 5-9 or 11-19. The second form is used then the count ends in 1
// (not including 11 as above) and the third form is used when the 
// count ends in 2-4, again excluding any values ending in 12-14.
// 
// function zmVlang( $langVarArray, $count )
// {
//  $secondlastdigit = substr( $count, -2, 1 );
//  $lastdigit = substr( $count, -1, 1 );
//  // or
//  // $secondlastdigit = ($count/10)%10;
//  // $lastdigit = $count%10;
// 
//  // Get rid of the special cases first, the teens
//  if ( $secondlastdigit == 1 && $lastdigit != 0 )
//  {
//      return( $langVarArray[1] );
//  }
//  switch ( $lastdigit )
//  {
//      case 0 :
//      case 5 :
//      case 6 :
//      case 7 :
//      case 8 :
//      case 9 :
//      {
//          return( $langVarArray[1] );
//          break;
//      }
//      case 1 :
//      {
//          return( $langVarArray[2] );
//          break;
//      }
//      case 2 :
//      case 3 :
//      case 4 :
//      {
//          return( $langVarArray[3] );
//          break;
//      }
//  }
//  die( 'Error, unable to correlate variable language string' );
// }

// This is an example of how the function is used in the code which you can uncomment and 
// use to test your custom function.
//$monitors = array();
//$monitors[] = 1; // Choose any number
//echo sprintf( $zmClangMonitorCount, count($monitors), zmVlang( $zmVlangMonitor, count($monitors) ) );

// In this section you can override the default prompt and help texts for the options area
// These overrides are in the form show below where the array key represents the option name minus the initial ZM_
// So for example, to override the help text for ZM_LANG_DEFAULT do
$OLANG = array(
	'OPTIONS_FFMPEG' => array(
		'Help' => "Parameters in this field are passwd on to FFmpeg. Multiple parameters can be separated by ,~~ ".
		          "Examples (do not enter quotes)~~~~".
		          "\"allowed_media_types=video\" Set datatype to request fromcam (audio, video, data)~~~~".
		          "\"reorder_queue_size=nnn\" Set number of packets to buffer for handling of reordered packets~~~~".
		          "\"loglevel=debug\" Set verbosiy of FFmpeg (quiet, panic, fatal, error, warning, info, verbose, debug)"
	),
	'OPTIONS_LIBVLC' => array(
		'Help' => "Parameters in this field are passwd on to libVLC. Multiple parameters can be separated by ,~~ ".
		          "Examples (do not enter quotes)~~~~".
		          "\"--rtp-client-port=nnn\" Set local port to use for rtp data~~~~". 
		          "\"--verbose=2\" Set verbosity of libVLC"
	),
	
//    'LANG_DEFAULT' => array(
//        'Prompt' => "This is a new prompt for this option",
//        'Help' => "This is some new help for this option which will be displayed in the popup window when the ? is clicked"
//    ),
);

?>
