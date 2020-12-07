<?php
/*
	users.create.content.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606905045
*/

function content_users($data) {
	template_adminUserForm(
		[
			'id' => -1,
			'permissionList' => [],
		],
		'admin',
		[
			'name' => 'text',
			'username' => 'text',
			'password' => 'password',
			'contact_email' => 'email'
		],
		[
			'name' => 'admin[users]',
			'value' => 'create'
		]
	);
}