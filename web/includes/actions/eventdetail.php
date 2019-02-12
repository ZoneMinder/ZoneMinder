<?php
//
// ZoneMinder web action file
// Copyright (C) 2019 ZoneMinder LLC
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

if ( !isset($_REQUEST['markEids']) ) {
  Warning('Events actions require eids');
  return;
}

// Event scope actions, view permissions only required
if ( !canEdit('Events') ) {
  Warning("Events actions require Edit permissions");
  return;
} // end if ! canEdit(Events)

if ( $action == 'eventdetail' ) {
  $dbConn->beginTransaction();
  foreach ( $_REQUEST['markEids'] as $markEid ) {
    dbQuery('UPDATE Events SET Cause=?, Notes=? WHERE Id=?',
      array(
        $_REQUEST['newEvent']['Cause'],
        $_REQUEST['newEvent']['Notes'],
        $markEid
      )
    );
  }
  $dbConn->commit();
  $refreshParent = true;
  $closePopup = true;
}
?>
