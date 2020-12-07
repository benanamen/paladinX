<?php
/*
	login.modalForm.php
	07 Dec 2020 07:13 GMT
	Paladin X.4 (Squire 4)
	Jason M. Knight, Paladin Systems North
	
	Last Modified: 1606386717
*/

function login_modalRun($data, $id) {

	echo '
		<fieldset>
			<label>
				', Lang::get('@username_loginModal'), ':<br>
				<input type="text" name="username" required><br>
			</label><label>
				', Lang::get('@password_loginModal'), ':<br>
				<input type="password" name="password" required><br>
			</label>
		</fieldset>';
		
	template_submitsAndHiddens('#' . $id, Lang::get('@submit_loginModal'));
	
} // login_modalRun