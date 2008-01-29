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
	$pageTitle 		= "Eclipse Babel Project Development Meeting: 01/28/08";
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
			<li>Pat Huff</li>
			<li>Antoine Toulme</li>
			<li>Gabe</li>
			<li>Denis Roy</li>
			<li>Pascal</li>
			<li>Nigel Westbury</li>
			<li>Werner Keil</li>
		</ul>

<ol>
  <li>Server-side Translation       Project Update &ndash; Denis</li>
  <ol>
    <li>Import on the UI is        almost done</li>
    <ol>
      <li>Almost ready for the         General Public</li>
      <li>Release &ldquo;0&rdquo; will be         for the public</li>
      <ol>
        <li>We want something up          so we can get people to start translating</li>
      </ol>
    </ol>
  </ol>
  <li>EclipseCon</li>
  <ol>
    <li>Just submitted a BOF        session &ndash; hopefully will be accepted soon</li>
    <ol>
      <li>Introduce to the         Community</li>
      <li>Collect some new         ideas/enhancements for the project</li>
    </ol>
    <li>Need to plan a working        session for our committers</li>
    <ol>
      <li>Kit will get some         dates together</li>
      <li>Possible Attendees:</li>
      <ol>
        <li>Kit Lo</li>
        <li>Jess Garms</li>
        <li>Chris Nguyen</li>
        <li>Denis</li>
        <li>Gabe</li>
        <li>Antoine</li>
        <li>Hugh</li>
        <li>Pat Huff</li>
        <li>Pascal (tentative)</li>
        <li>Chris to send out          email to Babel          to find a convenient time</li>
      </ol>
    </ol>
    <li>2 Short talks accepted        (10 minutes each)</li>
    <ol>
      <li>Introduction to the         Eclipse Babel         Project </li>
      <ol>
        <li>Kit is going to          cover this</li>
        <li>Might be right time          to introduce the message editor</li>
        <ol>
          <li>Kit will reach out           to Nigel for more information</li>
        </ol>
      </ol>
      <li>The Eclipse Babel Project         Translation Server</li>
      <ol>
        <li>Will there be a demo          involved?</li>
        <li>Please send Kit some          slides</li>
        <li>Requested that short          talks be scheduled back to back</li>
        <ol>
          <li>First session, talk</li>
          <li>Session, demo</li>
        </ol>
      </ol>
    </ol>
  </ol>
  <li>Copyright information &ndash; Kit Lo</li>
  <ol>
    <li>No new information</li>
    <li>We may want to include        some type of comment to show an audit trail</li>
    <ol>
      <li>Bjorn is working on         the message file</li>
      <li>We currently do         record who contributes the strings and do have some sort of tracking</li>
      <ol>
        <li>The version that          will not be released this week will not have the tracking.&nbsp; However, moving forward, we will          include this</li>
      </ol>
    </ol>
  </ol>
  <li>IBM Donation Status (Japanese       and Chinese)</li>
  <ol>
    <li>Once the translation        server is at the point where we can put down some strings to see how it        works</li>
  </ol>
  <li>Additional Topics</li>
  <ol>
  	<li>Face to face opportunity for the Mylyn project</li>
  </ol>
</ol>


	
 
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
