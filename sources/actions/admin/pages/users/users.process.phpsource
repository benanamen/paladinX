<?php
/*
	users.process.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1607140917
*/

function admin_subProcess($db, &$data) {

	$action = $data['admin_action'] ?? 'list';
	if ($action == 1) $action = 'list';
	if (
		!safeName($action) ||
		!file_exists(
			$fn = 'actions/admin/pages/users/users.' . $action . '.process.php'
		)
	) Bomb::lang('adminUsersInvalidAction');
	
	Load::isolate($fn);
	$action = 'adminUser_' . $action . '_process';
	$action($db, $data);
	
	Template::load('admin_users');
	
} // admin_subProcess

function admin_userListLoad($db, &$data) {
	$data['pageName'] = 'users';
	Load::isolate('actions/admin/pages/users/users.list.process.php');
	// BS the authorization
	$_POST['ADMIN_hash'] = Hash::create('ADMIN');
	adminUser_list_process($db, $data);
}