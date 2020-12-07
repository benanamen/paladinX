<?php
/*
	users.delete.process.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1607141371
*/

function adminUser_delete_process($db, &$data) {

	$data['pageName'] = 'users';
	
	if (
		empty($_POST['id']) ||
		!is_numeric($_POST['id'])
	) Bomb::lang('adminUserInvalidId');
	
	if (!Hash::matchPost('admin_userAction')) Bomb::lang('invalidEditHash');
	
	$stmt = $db->prepExec([ $_POST['id'] ], 'users_delete', 'admin');
	
	if ($stmt->rowCount() === 0) {
		Settings::set([
			'title' => '@deleteUserFailedTitle_adminUser',
			'text' => '@deleteUserFailedDesc_adminUser',
			'data' => [ $_POST['id'] ]
		], 'notice');
	} else {
		$db->prepExec([ $_POST['id'] ], 'users_flushPermissions', 'admin');
		Settings::set([
			'title' => '@deleteUserSuccessTitle_adminUser',
			'text' => '@deleteUserSuccessDesc_adminUser',
			'data' => [ $_POST['id'] ]
		], 'notice');
	}
	admin_userListLoad($db, $data);
		
} // adminUser_delete_process
