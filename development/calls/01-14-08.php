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
	$pageTitle 		= "Eclipse Babel Project Development Meeting: 01/14/08";
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
			<li>Chris Nguyen</li>
			<li>Kit Lo</li>
			<li>Nigel Westbury</li>
			<li>Denis Roy</li>
			<li>Gabe</li>
			<li>Antoine Toulme</li>
			<li>Jess Garms</li>
		</ul>


<ol>
 <li>Server-side
     Translation Project: Denis
 <ol>
  	<li>Gabe hasn't had time to work on the imports
  	<ol>
  		<li>Ran into some issues while running into the Escape Unicode</li>
  		<li>Will hopefully get this done by the end of this week</li>
  	</ol>
  	</li>
  	
  	<li>Staging Area
  	<ol>
  		<li>Has anyone had time to look at the staging area? So far there hasn't been 
  		any feedback. Please post all comments to the mailing list</li>
  	</ol>
  	</li>
  	
  	<li>Directory Structure of Strings
  	<ol>
  		<li>Translatable Structure. Proposal: File - key name</li>
  	</ol>
  	</li>
  </ol>
  </li>
  
  <li>Copyright information: Kit Lo
  <ol>
  	<li>We may have to look into copyrighting the strings</li>
  	<li>Should we save the copyright information somewhere?</li>
  	<li>Terms of use in Eclipse.org may contain information for this</li>
  </ol>
  </li>
  
  <li>Runtime Plugin Status
  <ol>
  	<li>Should documentation be in a wiki?</li>
  	<li>Kit will try it out and get status back to the group</li>
  </ol>
  </li>
  
  <li>Antoine Toulme from Intalio
  <ol>
  	<li>Wants to contribute to the editor</li>
  </ol>
  </li>
</ol>		
 
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
