<?php
/*
	users.editSuccess.content.php
	02 Dec 2020 23:28 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
*/

function content_users($data) {
	
	template_section(
		'#userEdited.splash',
		Lang::getByName('editSuccessTitle', 'adminUser'),
		sprintf(
			Lang::getByName('editSuccessDesc', 'adminUser'),
			htmlspecialchars($_POST['username'])
		)
	);

} // content_users