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
	$pageTitle 		= "Eclipse Babel Project Development Meeting: 12/17/07";
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
			<li>Werner Keil</li>
			<li>Pascal Essiembre</li>
			<li>Denis Roy</li>
			<li>Gabe</li>
		</ul>


<ol>
 <li>Server-side
     Translation Project: Kit Lo
 <ol>
  	<li>Haven’t done much as Denis was pulled away for EclipseCon</li>
  	<li>Only people that should be allowed to give property files should be committers – Denis will work that in</li>
  	<li>If an outside contributor wants to donate, they can create a bug, give it to the committer the zip file and we can upload</li>
  	<li>Denis will continue to work on the import code, Gabe will work on the UI to let the common person to come in and transform the strings</li>
  	<li>Kit to come up w/ a certain spec and post to the newsgroup and email it out by the end of the week. </li>
  	<li>The server should be ready to populate by the end of this week. </li>
  	<li>Gabe is going to work on a script to populate the translated side of the data from the Swiss Post-provided language packs. 
  		<ol>
  			<li>They modified the 3.2 translations and fixed the manifest files</li>
  			<li>We have to unpack the NL packs them and put back onto the server</li>
  			<li>Denis suggested that we wait on this until January 7th</li>
  		</ol>
  	</li>
 </ol>
 </li>

 <li>Globalization to the website
 	<ol>
 		<li>Kit wrote a guideline but hasn't posted it yet. Will finish up in a week or so.</li>
 	</ol>
 </li>

 <li>EclipseCon
     Short Talks (2)
 <ol>
  <li>We have had 1 short talk accepted.</li>
  <li>Still waiting on approval for the 2nd.</li>
 </ol>
 </li>
 
 <li>Cancel the next two meetings due to the holiday: December 24th, December 31st.
 	<ol>
 		<li>Resume on January 7th</li>
 	</ol>
 </li>
 
</ol>
		
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
