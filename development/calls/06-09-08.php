<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 06/09/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>Denis</li>
				<li>Gabe</li>
				<li>Jeff</li>
				<li>Pascal</li>
				<li>Werner</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Status of "critical bugs for Ganymede":</li> 
				<ul>
					<li><del>235132 - translations in some language packs do not show up because of extra folder name in language packs</del> - dup of 221675</li> 
					<li><del>217183 - Generate translated plug-ins for multiple project versions</del> - resolved</li>
					<li><del>222660 - Problem with opening plugin.xml editor</del> - resolved</li>
					<li><del>235022 - Unhandled event loop exception - Dependency Tab</del> - dup of 222660</li>
					<li>235553 - Corrupted package path (OpenTypeDialog)</li>
					<li>235607 - Missing contribution in update-site for EMF Compare</li>
				</ul>
				<li>Everyone, please let Kit know if you have any bugs you think we should add to the list. Thanks!</li>				                    
				<li>Need "Language Champions" to monitor the recent translations and report vandalism and errors.</li>
				<li>Denis created Wiki page: <a href="http://wiki.eclipse.org/Babel_/_Language_champions">http://wiki.eclipse.org/Babel_/_Language_champions</a></li>
				<li>Jeff will pass the list to Kit and Gabe to process and mark the strings non-translatable in the DB.</li>
				<li>Jeff: Adobe will start the translation of IES 3.4 into 6 languages.</li>
				<li>Adobe needs to coordinate with JWG to avoid duplicated translation efforts.</li>
				<li>Werner is soliciting a few companies to help Babel.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>