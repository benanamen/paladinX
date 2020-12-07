<?php
/*
	users.list.process.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606923409
*/

function adminUser_list_process($db, &$data) {

	if (!Hash::matchPost('ADMIN')) Bomb::lang('adminHashFailed');

	$data['admin_userStmt'] = $db->prepExec([
		0, 10
	], 'users_getUsers', 'admin');
	$data['admin_userStmt']->lock();
	
	$data['contentFilePath'] = 'actions/admin/pages/%s/%s.list';

} // adminUser_list_process