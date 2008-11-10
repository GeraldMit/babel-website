<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 11/03/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Denis</li>
				<li>Antoine</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Discussed EclipseCon and Antoine's committer rights</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>