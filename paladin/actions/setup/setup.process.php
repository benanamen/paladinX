<?php
/*
	setup.process.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606713060
*/

function process_action($db, &$data) {

	if ($db->tableExists('users')) Bomb::lang('setupAlreadyRun');
	
	if (
		array_key_exists('stage', $_POST) &&
		is_numeric($_POST['stage'])
	) {
		Load::isolate('actions/setup/setup.install.php');
		return install($db);
	}
	
	$data = [
		'contentFilePath' => 'actions/%s/%s',
		'pageName' => 'setup',
		'pageTitle' => 'Setup'
	];
	
} // process_action