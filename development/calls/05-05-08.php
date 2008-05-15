<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$html = <<<EOHTML
	$pageTitle		= "Eclipse Babel Project Development Meeting: 05/05/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>Pat</li>
				<li>Denis</li>
				<li>Gabe</li>
				<li>Margaret</li>
				<li>Jeff</li>
				<li>Pascal</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Bug 217339 (produce pseudo translation language packs) depends on bug 226378, action plan in the following order:</li>
				<ol>
					<li>Gabe to add a "translatable" column to the English string table in database, and to work on "non-translatable" checkbox UI</li>
					<li>Kit will search and mark strings as "non-translatable"</li>
					<li>Denis will work on the pseudo translation language pack generation code</li>
					<li>Gabe will review proposed fixes for bug 221971</li>
				</ol>
				<li>English keys with no value are counted in "percentage complete" stats, causing numbers to be low. Kit will open a bug for that.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>