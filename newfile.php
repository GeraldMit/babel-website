<?php
	echo "Before";
	print_r($_COOKIE);
	setcookie("Bugzilla_logincookie", "", 0, "/bugs", "bugs.eclipse.org");
	echo "Afta";
	print_r($_COOKIE);
	
?>
	