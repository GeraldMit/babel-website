<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 12/22/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>Antoine</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>EclipseCon 2009</li>
				<ul>
					<li>EclipseCon 2009 long talk submission 504 "Climb the Babel Tower" accepted</li>
					<li>Need to share with Mori-san of JWG</li>
				</ul>
				<li>[Bug 256252/256430] unable to satisfy dependency messages</li>
				<ul>
					<li>Pascal (from p2 team) suggested generating p2 metadata to have the feature optionally requires the plug-ins it includes and for each fragment to have a non greedy dependency on its host</li>
					<li>The manually generated p2 metadata plus Sean's "XSLT transformation" seem to solve the problem</li>
					<li>We need a PHP interface to invoke these steps</li>
					<li>Antoine will take this bug</li>
				</ul>
				<li>No meeting on December 29th</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>