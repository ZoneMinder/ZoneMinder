<ul class="nav nav-pills nav-stacked" role="tablist">
	<li><a href="?view=monitor">Add New Monitor</a></li>
	<li><input class="btn btn-default btn-block" type="button" name="editBtn" value="<?= $SLANG['Edit'] ?>" onclick="editMonitor( this )" disabled="disabled"/></li>
	<li><input class="btn btn-default btn-block" type="button" name="deleteBtn" value="<?= $SLANG['Delete'] ?>" onclick="deleteMonitor( this )" disabled="disabled"/></li>
      		<li><a href="?view=groups"><?= sprintf( $CLANG['MonitorCount'], count($displayMonitors), zmVlang( $VLANG['Monitor'], count($displayMonitors) ) ).($group?' ('.$group['Name'].')':'')?></a></li>
</ul>

