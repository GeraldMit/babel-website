<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Help Lead Babel";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Denis Roy";
			
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<img align="left" src="http://dev.eclipse.org/huge_icons/categories/applications-internet.png" style="padding-right: 5px; padding-bottom: 50px;" /><p>The goal of the Babel project is to have multiple companies and individuals 
		from the open source community to coordinate together to set the strategies 
		and directions for globalizing the Eclipse projects. Eclipse is a global community. 
		It is in everyone's interest to ensure that Eclipse is globalized and translated 
		in as many languages as possible.</p>
		<p>We need your help to make Eclipse a worldwide success! If you, as a company or 
		individual, would like to step forward to help co-lead the Eclipse Babel Project, 
		please contact Kit Lo (kitlo.at.us.ibm.com).</p>
		<p align="center"><a href="./">&laquo; Back to Babel</a></p>
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
