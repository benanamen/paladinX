<?php
/*
	users.deleteFailed.content.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606918242
*/

function content_users($data) {
	
	template_section(
		'#userDeleted.splash',
		Lang::getByName('deleteFailedTitle', 'adminUser'),
		sprintf(
			Lang::getByName('deleteFailedDesc', 'adminUser'),
			htmlspecialchars($_POST['id'])
		)
	);

} // content_users