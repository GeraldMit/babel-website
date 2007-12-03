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
	$pageTitle 		= "Eclipse Babel Project Development Meeting: 12/3/07";
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
			<li>Daniel</li>
			<li>Kit Lo</li>
			<li>Chris Nguyen</li>
			<li>Denis Roy</li>
			<li>Gabe</li>
		</ul>


<ol>
 <li>Server-side
     Translation Project: Kit Lo
 <ol>
  <li>Denis
      and Kit to create a kit for the strings for the translation project</li>
  <li>Need
      some kind of marker to ignore some strings in the property files
      <ol><li>Suggesting some commenting to block some lines</li></ol>
  </li>
  <li>Problem
      is that there isn’t a real standard to this</li>
  <li>Kit
      to come up w/ a certain spec and post to the newsgroup</li>
  <li>Need
      to add this functionality to our Best Practices document</li>
 </ol>
 </li>
 <li>Language
     Packs: Daniel McGowan
 <ol>
  <li>Starting
      to develop on 3.3</li>
  <li>Need
      to get their hands on language packs to start testing</li>
  <li>Do
      we have any roadmap or any plans to do the testing?</li>
  <li>Swiss
      posts translations – they’re in Bug# 205732</li>
 </ol>
 </li>
 <li>Aptana
     Code: Denis Roy
 <ol>
  <li>Aptana
      Code doesn’t have anything for HTML or XML code</li>
  <li>Works
      well for property files but everything else is difficult</li>
  <li>In
      the future, we might be able to translate HTML files by putting the
      entire file in
      <ol><li>Store versions of the entire file: text file</li></ol>
  </li>
  <li>Denis
      will open a bug to support non-property files
      <ol><li>Workaround in the meantime is to load the entire file</li></ol>
  </li>
  </ol>
  </li>

 <li>Staging
     Area
  <ol>
  <li>Still
      very raw but will give people an idea of what they’re working on</li>
  <li>Re-direct
      was sent out last week (people were having problems logging in)</li>
  <li>People
      should review this</li>
 </ol>
 </li>
 <li>EclipseCon
     Short Talk
 <ol>
  <li>We
      may have to do a short talk instead</li>
 </ol>
 </li>
 <li>Agenda
 <ol>
  <li>Every
      Friday Chris Nguyen will send out an email to request Agenda topics –
      please make an effort to respond</li>
 </ol>
 </li>
</ol>
		
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
