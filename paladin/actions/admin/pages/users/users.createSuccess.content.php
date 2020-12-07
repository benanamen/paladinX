<?php
/*
	users.createSuccess.content.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606902353
*/

function content_users($data) {
	
	template_section(
		'#userCreated.splash',
		Lang::getByName('createSuccessTitle', 'adminUser'),
		sprintf(
			Lang::getByName('createSuccessDesc', 'adminUser'),
			htmlspecialchars($_POST['username'])
		)
	);

} // content_users