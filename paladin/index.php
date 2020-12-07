<?php
/*
	index.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1607138702
*/

include('libs/main.lib.php');

main(
	'mysql:dbname=paladintesting;host=localhost',
	'paladin_user',                        // sql username
	'',                                    // sql password
	[
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	],
	'paladin'                              // auto table prefix
);