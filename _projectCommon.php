<?php

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("Project Home", 	"/babel");
	$Nav->addCustomNav("Downloads", 		"downloads.php", 	"_self", 2);
	$Nav->addCustomNav("Contribute", 		"http://wiki.eclipse.org/Babel", 			"_self", 2);
?>