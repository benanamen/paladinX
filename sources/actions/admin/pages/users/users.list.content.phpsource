<?php
/*
	users.list.content.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606782283
*/

function content_users($data) {
	template_adminUserHeader();
	while ($row = $data['admin_userStmt']->fetch()) template_adminUserLine($row);
	template_adminUserFooter();
} // content_users