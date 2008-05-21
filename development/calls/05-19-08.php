<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 05/19/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>Pat</li>
				<li>Gabe</li>
				<li>Daniel</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Margaret's question about internationalization test plan doc - we don't think we have anything at Eclipse site</li>
				<li>That brought up of the question of BVT (Build Verification Test)</li>
				<li>It's a good idea to have a BVT for our language packs, to have sure it won't crash Eclipse, and everything is loading properly</li>
				<li>Kit will think of the BVT plan</li>
				<li>Gabe has the "non-translatable string" UI working, will release after more testing</li>
				<li>Daniel reported that he was able to pull the Babel language packs from the Babel update site and integrate them into their RCP app</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>