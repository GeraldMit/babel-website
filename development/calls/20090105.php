<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 01/05/2009";
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
				<li>Margaret</li>
				<li>Antoine</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Focus for next few weeks</li>
				<ul>
					<li>EclipseCon is approaching, we want to focus on cleaning up our infrastructure, present a nice image at EclipseCon</li>
					<li>finish downloadable language packs page - Denis (done)</li>
					<li>tutorial on using pseudo translations for globalization testing of Eclipse projects - Kit</li>
					<li>REST API - Antoine (done)</li>
					<li>clean language packs with no dependency errors - in progress</li>
				</ul>
				<li>Progress on integrating p2 meta data generator and XSLT transform script?</li>
				<li>Need new Bugzilla component for translation problem, Antoine needs to be authorized, Kit will work with web master</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>