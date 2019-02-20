<?php
//
// ZoneMinder web frame view file, $Date$, $Revision$
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
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
//

if ( !canView('Events') ) {
  $view = 'error';
  return;
}

require_once('includes/Frame.php');

$eid = validInt($_REQUEST['eid']);
if ( !empty($_REQUEST['fid']) )
  $fid = validInt($_REQUEST['fid']);

$Event = new ZM\Event($eid);
$Monitor = $Event->Monitor();

if ( !empty($fid) ) {
  $sql = 'SELECT * FROM Frames WHERE EventId = ? AND FrameId = ?';
  if ( !($frame = dbFetchOne( $sql, NULL, array($eid, $fid) )) )
    $frame = array( 'FrameId'=>$fid, 'Type'=>'Normal', 'Score'=>0 );
} else {
  $frame = dbFetchOne( 'SELECT * FROM Frames WHERE EventId = ? AND Score = ?', NULL, array( $eid, $Event->MaxScore() ) );
}
$Frame = new ZM\Frame($frame);

$maxFid = $Event->Frames();

$firstFid = 1;
$prevFid = $Frame->FrameId()-1;
$nextFid = $Frame->FrameId()+1;
$lastFid = $maxFid;

$alarmFrame = $Frame->Type()=='Alarm';

if ( isset( $_REQUEST['scale'] ) ) {
  $scale = validNum($_REQUEST['scale']);
} else if ( isset( $_COOKIE['zmWatchScale'.$Monitor->Id()] ) ) {
  $scale = validNum($_COOKIE['zmWatchScale'.$Monitor->Id()]);
} else if ( isset( $_COOKIE['zmWatchScale'] ) ) {
  $scale = validNum($_COOKIE['zmWatchScale']);
} else {
  $scale = max( reScale( SCALE_BASE, $Monitor->DefaultScale(), ZM_WEB_DEFAULT_SCALE ), SCALE_BASE );
}
$scale = $scale ?: "auto";

$imageData = $Event->getImageSrc( $frame, $scale, 0 );
if ( ! $imageData ) {
  Error("No data found for Event $eid frame $fid");
  $imageData = array();
}

$show = 'capt';
if (isset($_REQUEST['show']) && in_array($_REQUEST['show'], array('capt', 'anal'))) {
  $show = $_REQUEST['show'];
} else if ( $imageData['hasAnalImage'] ) {
  $show = 'anal';
}

$imagePath = $imageData['thumbPath'];
$eventPath = $imageData['eventPath'];
$dImagePath = sprintf( '%s/%0'.ZM_EVENT_IMAGE_DIGITS.'d-diag-d.jpg', $eventPath, $Frame->FrameId() );
$rImagePath = sprintf( '%s/%0'.ZM_EVENT_IMAGE_DIGITS.'d-diag-r.jpg', $eventPath, $Frame->FrameId() );

$focusWindow = true;

xhtmlHeaders(__FILE__, translate('Frame').' - '.$Event->Id()." - ".$Frame->FrameId() );
?>
<body>
  <div id="page">
    <div id="header">
    <form>
      <div id="headerButtons">
        <?php if ( ZM_RECORD_EVENT_STATS && $alarmFrame ) { echo makePopupLink( '?view=stats&amp;eid='.$Event->Id().'&amp;fid='.$Frame->FrameId(), 'zmStats', 'stats', translate('Stats') ); } ?>
        <?php if ( canEdit( 'Events' ) ) { ?><a href="?view=none&amp;action=delete&amp;markEid=<?php echo $Event->Id() ?>"><?php echo translate('Delete') ?></a><?php } ?>
        <a href="#" data-on-click="closeWindow"><?php echo translate('Close') ?></a>
      </div>
      <div id="scaleControl"><label for="scale"><?php echo translate('Scale') ?></label><?php echo buildSelect('scale', $scales); ?></div>
      <h2><?php echo translate('Frame') ?> <?php echo $Event->Id().'-'.$Frame->FrameId().' ('.$Frame->Score().')' ?></h2>
      <input type="hidden" name="base_width" id="base_width" value="<?php echo $Event->Width(); ?>"/>
      <input type="hidden" name="base_height" id="base_height" value="<?php echo $Event->Height(); ?>"/>
    </form>
    </div>
    <div id="content">
      <p id="image">

<?php if ( $imageData['hasAnalImage'] ) {
 echo sprintf('<a href="?view=frame&amp;eid=%d&amp;fid=%d&scale=%d&amp;show=%s">', $Event->Id(), $Frame->FrameId(), $scale, ( $show=='anal'?'capt':'anal' ) );
} ?>
<img id="frameImg" src="<?php echo validHtmlStr($Frame->getImageSrc($show=='anal'?'analyse':'capture')) ?>" width="<?php echo reScale( $Event->Width(), $Event->DefaultScale(), $scale ) ?>" height="<?php echo reScale( $Event->Height(), $Event->DefaultScale(), $scale ) ?>" alt="<?php echo $Frame->EventId()."-".$Frame->FrameId() ?>" class="<?php echo $imageData['imageClass'] ?>"/>
<?php if ( $imageData['hasAnalImage'] ) { ?></a><?php } ?>

      </p>
      <p id="controls">
<?php if ( $Frame->FrameId() > 1 ) { ?>
        <a class="btn-primary" id="firstLink" href="?view=frame&amp;eid=<?php echo $Event->Id() ?>&amp;fid=<?php echo $firstFid ?>&amp;scale=<?php echo $scale ?>&amp;show=<?php echo $show ?>"><?php echo translate('First') ?></a>
        <a class="btn-primary" id="prevLink" href="?view=frame&amp;eid=<?php echo $Event->Id() ?>&amp;fid=<?php echo $prevFid ?>&amp;scale=<?php echo $scale ?>&amp;show=<?php echo $show ?>"><?php echo translate('Prev') ?></a>
<?php
      }
      if ( $Frame->FrameId() < $maxFid ) { ?>
        <a class="btn-primary" id="nextLink" href="?view=frame&amp;eid=<?php echo $Event->Id() ?>&amp;fid=<?php echo $nextFid ?>&amp;scale=<?php echo $scale ?>&amp;show=<?php echo $show ?>"><?php echo translate('Next') ?></a>
        <a class="btn-primary" id="lastLink" href="?view=frame&amp;eid=<?php echo $Event->Id() ?>&amp;fid=<?php echo $lastFid ?>&amp;scale=<?php echo $scale ?>&amp;show=<?php echo $show ?>"><?php echo translate('Last') ?></a>
<?php } ?>
      </p>
<?php if (file_exists ($dImagePath)) { ?>
      <p id="diagImagePath"><?php echo $dImagePath ?></p>
      <p id="diagImage"><img src="<?php echo viewImagePath( $dImagePath ) ?>" width="<?php echo reScale( $Event->Width(), $Monitor->DefaultScale(), $scale ) ?>" height="<?php echo reScale( $Event->Height(), $Monitor->DefaultScale(), $scale ) ?>" class="<?php echo $imageData['imageClass'] ?>"/></p>
<?php } if (file_exists ($rImagePath)) { ?>
      <p id="refImagePath"><?php echo $rImagePath ?></p>
      <p id="refImage"><img src="<?php echo viewImagePath( $rImagePath ) ?>" width="<?php echo reScale( $Event->Width(), $Monitor->DefaultScale(), $scale ) ?>" height="<?php echo reScale( $Event->Height(), $Monitor->DefaultScale(), $scale ) ?>" class="<?php echo $imageData['imageClass'] ?>"/></p>
<?php } ?>
    </div>
  </div>
</body>
</html>
