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
			<li>Pat Huff</li>
			<li>Nigel Westbury</li>
			<li>Mike Milinkovich</li>
			<li>Rich Gronback</li>
			<li>Gabe ?</li>
			
		</ul>
	
<ol>
 <li>Mike Milinkovich
 <ul>
  <li>Aptana Code – To Do List</li>
  <ul style='margin-top:0in' type=square>
   <li>Need to re-brand it to Eclipse Code</li>
   <li>Change authentication</li>
   <li>Provide some type of version control</li>
   <ul style='margin-top:0in' type=disc>
    <li>Protects against inferior translation</li>
    <li>Right now you lost the translation if inferior</li>
   </ul>
   <li>Voting/Decide which projects we want to do first</li>
   <ul>
    <li>Maybe do Eclipse 3.2 strings first</li>
   </ul>
   <li>Bjorn had idea of how you can block the properties
       (script the process of loading the strings in)</li>
   <li>Have language packs produced by Babel and hosted on Babel website so it’s all at the same place</li>
   <li>Start with Eclipse in place</li>
   <li>Pat Huff will see what contributions they can donate to
       get 3.3 in place and then migrate to 3.4</li>
   <li>Gabe and Denis will get server code up and running.</li>
   <ul style='margin-top:0in' type=disc>
    <li>Once that’s up Kit can start work</li>
   </ul>
  </ul>
 </ul>
 </li>
 <li>Recent post to newsgroup – Jess Garms
 <ul>
  <li>Someone ported the 3.2 translations of a number of
      languages to 3.3. It would be nice if we could host those for people who
      are interested</li>
  <li>In the interim if we could host that (caveat, they are
      incomplete)</li>
  <li>Is there any restriction to us posting those?  Legal?</li>
  <li>Language packs are EPL’d – so no restrictions</li>
  <li>As person whoever who opened that newsgroup to open a bug
      in bugzilla and attach strings to bug – Jess Garms will do this</li>
  <li>Jess Garms to create download page</li>
  <ul style='margin-top:0in' type=square>
   <li>Have to state various caveats since code isn’t complete</li>
  </ul>
  <li>Denis and Gabe will have website up and running w/
      language packs in a range of a month</li>
  <ul>
   <li>Available as download and in the Aptana tool at the same
       time (versus posting it as bugs)</li>
  </ul>
  <li>Should we do the 3.3 and 3.4 translations in parallel?</li>
  <ul>
   <li>Start with 3.3 translations then once we have everything
       in place, we then start with 3.4</li>
   <ul>
    <li>Have to think of how to do integrations once we get closer</li>
   </ul>
   <li>What languages do we have to support?</li>
   <li>From Eclipse perspective (from downloads)</li>
   <ul style='margin-top:0in' type=disc>
    <li>China, US, Japan, Germany, French, Korean</li>
   </ul>
   <li>Mike will send email w/ top ten Eclipse downloads by
       region</li>
  </ul>
 </ul>
 </li>
 <li>Submit a proposal for EclipseCon short talk BOF - status
 <ul>
  <li>Kit is still working on the draft</li>
  <li>Might want to add a demo – we should make this a long
      talk</li>
  <ul>
   <li>By EclipseCon we should have enough content</li>
   <li>Kit will plan for a long talk and submit proposal by
       this week and send out to Babel Committers this week.</li>
  </ul>
  <li>Deadline Nov 19<sup>th</sup></li>
 </ul>
 </li>
 <li>Pascal Essiembre’s Contribution
 <ul>
  <li>Waiting for approval before putting code back in CVS</li>
  <li>Next step needs legal approval first</li>
  <li>Denis will check what the status is</li>
  <li>CQ was created</li>
 </ul>
 </li>
 <li>Nigel Westbury’s Contribution
 <ul>
  <li>He will send out a brief description and screen shots to BabelDev</li>
  <ul style='margin-top:0in' type=square>
   <li>After that, we can submit to legal</li>
   <li>Runtime within the IDE – allows user to provide
       translation at runtime</li>
  </ul>
 </ul>
 </li>
</ol>
		
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
