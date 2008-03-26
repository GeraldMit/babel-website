<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Babel Project Development";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Jess Garms";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>The Babel Project is still in the early stages of development.
		Here are resources available if you want to get involved:
		<ul>
			<li><a href="https://dev.eclipse.org/mailman/listinfo/babel-dev">Developers mailing list</a></li>
			<li><a href="https://dev.eclipse.org/mailman/listinfo/babel-translators">Translators mailing list</a></li>
			<li><a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.babel">Newsgroup</a> (<a href="http://www.eclipse.org/newsgroups/register.php">register</a>)</li>
			<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.babel/?root=Technology_Project">CVS browser</a></li>
			<li>CVS repository: :pserver:anonymous@dev.eclipse.org:/cvsroot/technology module: org.eclipse.babel</li>
		</ul>
		</p>
		<p>
		We also have weekly <a href="calls">status calls</a>, which are open to the community.
		</p>
		<p>Additionally, there is some documentation on one of the Babel components, 
		the <a href="../messages_editor">Messages Editor</a>.
		</p>
		<p>
		<p>&nbsp;</p>
		Guidelines for Release Reviews
		<li><a href="http://www.eclipse.org/projects/dev_process/release-review.php">http://www.eclipse.org/projects/dev_process/release-review.php</a></li> 
		</p>

		
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
