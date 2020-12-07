<?php
/*
	users.create.process.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1607145283
*/

function adminUser_create_process($db, &$data) {

	$data['pageName'] = 'users';

	if (array_key_exists('userEditForm_hash', $_POST)) { // from Form
		
		if (!Hash::matchPost('userEditForm')) Bomb::lang('invalidEditHash');
		
		if (
			trimSamePost('username') &&
			trimSamePost('password') &&
			trimSamePost('contact_email')
		) { // create
		
			$db->prepExec([
				trimSamePost('name') ?? $_POST['username'],
				$_POST['username'],
				hash(PASSWORD_ALGO, $_POST['password']),
				$_POST['contact_email']
			], 'users_create', 'admin');
			
			if (!empty($_POST['permissions'])) {
				require_once('actions/admin/pages/users/internal_setPermissions.php');
				setUserPermissions(
					$db,
					$db->lastInsertId(),
					$_POST['permissions']
				);
			}
			
			Settings::set([
				'title' => '@createUserSuccessTitle_adminUser',
				'text' => '@createUserSuccessDesc_adminUser',
				'data' => [ $_POST['username'] ]
				
			], 'notice');
			
			admin_userListLoad($db, $data);

			return;
			
		} // create 
		
		$Settings::set([
			'title' => '@createUserErrorTitle_adminUser',
			'text' => '@createUserErrorEmptyFields_adminUser'
		], 'notice');
		
	} // from form
	
	$data['contentFilePath'] = 'actions/admin/pages/%s/%s.create';
	Template::load('forms', 'admin_user_edit');
	
} // adminUser_create_process
