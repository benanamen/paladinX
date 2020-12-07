<?php
/*
	admin.extra.content.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606775730
*/

function content_extra_admin($data) {
	if (array_key_exists('adminControls', $data)) template_adminPanel($data);
} // extra_content_admin