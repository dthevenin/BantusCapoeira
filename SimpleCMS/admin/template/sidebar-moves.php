<?php
/**
 * Sidebar Moves Template
 *
 * @package GetSimple
 */
?>
<ul class="snav">
	<li id="sb_moves" ><a href="moves.php" accesskey="<?php echo find_accesskey(i18n_r('SIDE_VIEW_MOVES'));?>" <?php check_menu('moves');  ?>><?php i18n('SIDE_VIEW_MOVES'); ?></a></li>
	<li id="sb_newmove" ><a href="editmove.php" accesskey="<?php echo find_accesskey(i18n_r('SIDE_CREATE_NEW_MOVE'));?>" <?php if((!isset($_GET['id'])) && (get_filename_id()==='edit'))  { echo 'class="current"'; } ?>><?php i18n('SIDE_CREATE_NEW_MOVE'); ?></a></li>
	<?php if((isset($_GET['id']) && $_GET['id'] != '') && (get_filename_id()==='edit')) { ?><li id="sb_pageedit" ><a href="#" class="current"><?php i18n('EDITPAGE_TITLE'); ?></a></li><?php } ?>
	<?php exec_action("pages-sidebar"); ?>
</ul>

<?php if(get_filename_id()==='edit') { ?>
<p id="js_submit_line" ></p>
<p id="pagechangednotify"></p>
<p id="autosavenotify"></p>
<?php } ?>