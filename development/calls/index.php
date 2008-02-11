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
	$pageTitle 		= "Eclipse Babel Project Development Meetings";
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
		<h2>Call Info</h2>
		<p>Toll-free in the US: (866) 484-4232</p>
		<p>Alternate: :(702) 894-2358</p>
		<p>Code: 8151429</p>
		<p>Call time: Mondays, 10:00 a.m. Pacific</p>
		
		<h2>Call Archive</h2>
		<ul>
			<li><a href="02-11-08.php">February 11, 2008</a></li>
			<li><a href="02-04.php">February 04, 2008</a></li>
			<li><a href="01-28-08.php">January 28, 2008</a></li>
			<li><a href="01-21-08.php">January 21, 2008</a></li>
			<li><a href="01-14-08.php">January 14, 2008</a></li>
			<li><a href="12-17-07.php">December 17, 2007</a></li>
			<li><a href="12-10-07.php">December 10, 2007</a></li>
			<li><a href="12-03-07.php">December 3, 2007</a></li>
			<li><a href="11-26-07.php">November 26, 2007</a></li>
			<li><a href="11-12-07.php">November 12, 2007</a></li>
		</ul>		
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
