<?php
/*
	users.list.content.php
	02 Dec 2020 23:28 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
*/

function content_users($data) {
	template_adminUserHeader();
	while ($row = $data['admin_userStmt']->fetch()) template_adminUserLine($row);
	template_adminUserFooter();
} // content_users