<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# test.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Babel Project Downloads";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Babel Team";
	
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Section title</h2>
		<p>
		Eclipse is a global community. It is in everyone�s interest
		to ensure that Eclipse is available and translated in as many locales as
		possible. 
		</p>
		<p>
		Babel will be a set of tools to make the job of globalizing
		Eclipse projects easier. We also want to provide ways for people world
		wide, who are interested, to contribute translations in their language
		of choice.
		</p>
		<p>
		The project will include tools and activities that
		are needed to adapt the Eclipse deliverables to properly run in multiple
		locales and to translate selected Eclipse projects into multiple
		different languages (French, Japanese, German, etc). The project could
		eventually include tools to aid in the following areas: Enablement testing (E.g.
		can the software run in different language environments and handle
		multiple scripts, etc.), translatability testing (is it ready for
		translation?), preparation for translation (preparation of resource
		bundles), Translation testing (Is the translation acceptable?), and more.
		</p>

	</div>
	<div id="rightcolumn">
     <div class="sideitem">
       <h6>Incubation</h6><p>
       <div align="center">
         <a href="/projects/what-is-incubation.php">
           <img align="center" src="/images/egg-incubation.png" border="0"/>
         </a>
       </div>
       <div align="center">  
         This project is in the 
         <a href="/projects/dev_process/validation-phase.php">Incubation Phase</a>
       </div>
     </div>
	  <div class="sideitem">
			<h6>Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/proposals/babel/" target="_blank">Project Proposal</a></li>
			</ul>
		</div>
	
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>