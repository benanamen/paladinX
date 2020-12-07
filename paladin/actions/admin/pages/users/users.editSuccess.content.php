<?php
/*
	users.editSuccess.content.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606913427
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