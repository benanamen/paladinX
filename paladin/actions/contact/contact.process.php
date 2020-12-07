<?php
/*
	contact.process.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606711278
*/

function process_action($db, &$data) {

	/*
		In "real" version this would validate the form, sending
		the message if valid, and sending the appropriate handler.
		
		Handlers such as:
			actions/%s/%s_invalidForm
			actions/%s/%s_failed
			actions/%s/%s_success
	*/
	
	$data = [
		'contentFilePath' => 'actions/%s/%s.success',
		'pageName' => 'contact',
		'pageTitle' => 'Contact Us'
	];

} // process_action