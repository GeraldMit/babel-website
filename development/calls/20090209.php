<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 02/09/2009";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>Gabe</li>
				<li>Antoine</li>
				<li>Jeff</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>p2 meta data integration</li>
				<ul>
					<li>Seems to work, is that complete?</li>
					<li>We just need some cleanup to remove some unnecessary files</li>
				</ul>
				<li>Bug 264037 - GEF strings not available for translation, Antoine will take a look</li>
				<li>Bug 261252 - DSDP language pack building problem, we tried a few patches but the problem is still not resolved, will continue to work on it</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>