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
	$pageTitle 		= "Eclipse Babel Project Development Meeting: 11/12/07";
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
		<h2>Attendees:</h2>
		<ul>
			<li>Jess Garms</li>
			<li>Kit Lo</li>
			<li>Chris Nguyen</li>
			<li>Denis Roy</li>
			Pat Huff
Nigel Westbury
Mike Milinkovich
Rich Gronback
Gabe
			
		</ul>
	
	<ol>
		<li>Action Item: Jess Garms to create page for Babel Meeting notes</li>
		<li>Talks for EclipseCon
			<ol><li>Needs Jess and Chris N. to create account to join as speaker</li></ol>
		</li>
		
		<li>Pascal’s code is ready to go
		<ol>
			<li>He sent out an email for more information</li>
			<li>Action Item: Jess to create a web page with Pacal’s information (for his contribution)</li>
		</ol>
		</li>
		<li>Server side Translation Project
		<ol>
			<li>Denis and Kit to create a kit for the strings for the translation project</li>
		</ol>
		</li>
	</ol>
		
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
