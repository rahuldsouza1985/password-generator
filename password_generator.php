<?php
	$password = '';
	for($i = 0; $i < 20; $i++) {
		$password .= chr(rand(33,127));
	}
	
	echo $password;
