<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 02/02/2009";
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
				<li>Antoine</li>
				<li>Jeff</li>
				<li>Nigel</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>p2 meta data integration - asked Pascal to take a look</li>
				<li>Aptana may have a solution for the doc translation, Antoine is contacting Paul to see if Aptana is willing to contribute any tools</li>
				<li>Bug 261252 - DSDP language pack building problem</li>
				<li>I've seen some "unused NLS string found" messages in Eclipse log file reported by Equinox, they are not causing any problem right now, but nice to clean them up, will open enhancement defect later</li>
				<li>The REST API Antoine worked on is not ready</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>