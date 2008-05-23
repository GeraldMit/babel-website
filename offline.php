<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Babel Project - Offline";
	$pageKeywords	= "";
	$pageAuthor		= "Denis Roy";
			
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>The Babel server translation tool is currently offline for some database maintenance.</p>
		<p>While you wait, go to our <a href="download.php">download page</a> and download the latest language packs.</p>
		<p>We apologize for the inconvenience -- please check back later.</p>
		
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
				<li><a href="http://babel.eclipse.org/">Translation tool</a></li>
				<li><a href="http://www.eclipse.org/proposals/babel/" target="_blank">Project Proposal</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
