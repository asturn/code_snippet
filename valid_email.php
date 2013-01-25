<?php
	$email = 'example@example';
	$email = 'example@example.com'
	echo 'PHP Version: ',phpversion(),'<br/>';
	if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
		echo $email;
		var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));
	} else {
		var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));
	}
?>