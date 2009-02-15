<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 01/26/2009";
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
				<li>Antoine</li>
				<li>Jeff</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Recent activities</li>
				<ul>
					<li>Actuate contributed BIRT 2.3.1 and DTP 1.6.2 translations in 6 languages, waiting for IP review</li>
					<li>MTJ map file problem, Antoine is working with MTJ committer to figure out the correct SVN map file syntax</li>
					<li>p2 meta data integration - Antoine has finished the integration but still not work, asking Pascal for advice</li>
					<li>Get rid of BABEL_BASE_DIR in server PHP's, Antoine must be very busy</li>
				</ul>
				<li>JWG is starting to translate the doc files</li>
				<li>We need to figure out the infrastructure to support translation of doc files</li>
				<ul>
					<li>How to extract doc/cshelp plugins, html/xml files?</li>
					<li>Need plain editor for entering doc translations for now</li>
					<li>Where do we store the doc translations, CVS? SQL DB? Antoine opened bug 262124</li>
					<li>How do we build the language packs for the doc plugins?</li>
				</ul>
				<li>We think we should store the doc translations in the SQL DB. That way, both the string translations and doc translations are at one place. It will make the building of the language packs easier.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>