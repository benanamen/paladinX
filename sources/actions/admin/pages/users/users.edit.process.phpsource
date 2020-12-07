<?php
/*
	users.edit.process.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1607292541
*/

function adminUser_edit_process($db, &$data) {

	$data['pageName'] = 'users';
	
	if (
		empty($_POST['id']) ||
		!is_numeric($_POST['id'])
	) Bomb::lang('adminUserInvalidId');
	
	if (array_key_exists('userEditForm_hash', $_POST)) {
		
		if (!Hash::matchPost('userEditForm')) Bomb::lang('invalidEditHash');

		if (
			trimSamePost('id') &&
			trimSamePost('username') &&
			trimSamePost('contact_email')
		) {
			$db->prepExec([
				trimSamePost('name') ?: $_POST['username'],
				$_POST['username'],
				$_POST['contact_email'],
				$_POST['id']
			], 'users_edit', 'admin');
			
			if (!empty($_POST['permissions'])) {
				$db->prepExec([ $_POST['id'] ], 'users_flushPermissions', 'admin');
				require_once('actions/admin/pages/users/internal_setPermissions.php');
				setUserPermissions(
					$db,
					$_POST['id'],
					$_POST['permissions']
				);
			}
			
			Settings::set([
				'title' => '@editUserSuccessTitle_adminUser',
				'text' => '@editUserSuccessDesc_adminUser',
				'data' => [ $_POST['username'] ]
			], 'notice');
			
			admin_userListLoad($db, $data);
			
			return;
			
		}
		
		Settings::set([
			'title' => '@editUserErrorTitle_adminUser',
			'text' => '@editUserErrorEmptyFields_adminUser'
		], 'notice');
		
	}
	
	$stmt = $db->prepExec(
		[ $_POST['id'] ], 'users_getForEdit', 'admin'
	);
	
	if ($data['admin_userEdit'] = $stmt->fetch()) {
		$data['admin_userEdit']['permissionList'] = [];
		$stmt = $db->prepExec(
			[ $_POST['id'] ], 'users_getPermissions', 'admin'
		);
		while ($row = $stmt->fetch()) {
			$data['admin_userEdit']['permissionList'][$row['permission']] = $row['filter'];
		}
	} else Bomb::lang('adminUserInvalidId');
	
	$data['contentFilePath'] = 'actions/admin/pages/%s/%s.edit';

	Template::load('forms', 'admin_user_edit');
	
} // adminUser_edit_process
