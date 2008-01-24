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
	$pageTitle 		= "Eclipse Babel Project Development Meeting: 01/21/08";
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
			<li>Nigel Westbury</li>
			<li>Gabe</li>
			<li>Antoine Toulme</li>
			<li>Jess Garms</li>
			<li>Werner Keil</li>
			<li>Pascal</li>
		</ul>

<ol>
  <li>Server-side Translation       Project Update - Denis</li>
  <ol>
    <li>Almost done w/ the Map        Inputs</li>
    <ol>
      <li>PDE files can be         defined on Babel         server for version</li>
      <li>Property files can be         pulled and from CVS and imported based on tag and CVS information from         the Map file</li>
    </ol>
    <li>Directory Structure of        Strings</li>
    <ol>
      <li>Expect to see         thousands of new files next time you log on</li>
      <li>Translatable         Structure</li>
      <ol>
        <li>Proposal: File &ndash; key          name</li>
      </ol>
      <li>Reference: <a href="http://dev.eclipse.org/mhonarc/lists/babel-dev/msg00116.html">http://dev.eclipse.org/mhonarc/lists/babel-dev/msg00116.html</a></li>
    </ol>
  </ol>
  <li>EclipseCon</li>
  <ol>
    <li>Acceptance Dates:</li>
    <ol>
      <li>February 1st</li>
      <ol>
        <li>Session titles due</li>
      </ol>
      <li>February 17th </li>
      <ol>
        <li>Session content</li>
        <li>Will Nigel be there          to talk about the message editor?</li>
        <li>Any other topics</li>
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
      </ol>
    </ol>
    <li>BOF</li>
    <ol>
      <li>Introduce to the         Community</li>
      <li>Collect some new         ideas/enhancements for the project</li>
    </ol>
    <li>Babel Working Session</li>
    <ol>
      <li>Attendees:</li>
      <ol>
        <li>Kit Lo</li>
        <li>Jess Garms</li>
        <li>Chris Nguyen</li>
        <li>Denis</li>
        <li>Gabe</li>
        <li>Antoine</li>
        <li>Hughes</li>
        <li>Chris to send out          email to Babel          to find a convenient time</li>
      </ol>
    </ol>
  </ol>
  <li>Copyright information &ndash; Kit Lo</li>
  <ol>
    <li>Posted something to        the newsgroup</li>
    <ol>
      <li>IBM&rsquo;s legal&rsquo;s team         believes we need to post something in the properties files to know where         its derived from</li>
      <ol>
        <li>Hasn&rsquo;t heard back          yet</li>
      </ol>
      <li>We may have to look         into copyrighting the strings</li>
    </ol>
    <li>Should we save the        copyright information anywhere?</li>
    <li>Terms of Use in        Eclipse.org may contain information for this</li>
  </ol>
  <li>IBM Donation Status (Japanese       and Chinese)</li>
  <ol>
    <li>Once the translation        server is at the point where we can put down some strings to see how it        works</li>
  </ol>
  <li>Message Editor</li>
  <ol>
    <li>Has been some interest        in contributing from other people</li>
  </ol>
  <li>Additional Topics</li>
  <ol>
    <li>Hughes from Intalio &ndash;        will contribute to the message editor</li>
    <ol>
      <li>Discuss during face         to face</li>
      <li>Using editor to help         translators translate the properties files</li>
    </ol>
  </ol>
</ol>

	
 
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
