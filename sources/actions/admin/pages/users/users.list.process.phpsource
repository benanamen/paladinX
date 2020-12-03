<?php
/*
	users.list.process.php
	02 Dec 2020 23:28 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
*/

function adminUser_list_process($db, &$data) {

	if (!Hash::matchPost('ADMIN')) Bomb::lang('adminHashFailed');

	$data['admin_userStmt'] = $db->prepExec([
		0, 10
	], 'users_getUsers', 'admin');
	$data['admin_userStmt']->lock();
	
	$data['contentFilePath'] = 'actions/admin/pages/%s/%s.list';

} // adminUser_list_process