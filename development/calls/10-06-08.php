<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 10/06/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>Karl</li>
				<li>Gregg</li>
				<li>Denis</li>
				<li>Gabe</li>
				<li>Margaret</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>[Bug 234430] need language packs by means of other than update site</li>
				<ul>
					<li>During the generation of language packs for the update site, I'm zipping up the langauge packs at the same time.</li> 
					<li>They are now placed in the "babel_language_packs" directory on the server.</li> 
					<li>A simple Babel Language Pack Links Page is provided.</li> 
					<li>Denis, please feel free to modify the "babel_language_packs" directory path for easy deployment of the language packs to the live server.</li> 
				</ul>
				<li>[Bug 246152/244043] P2 and WTP strings not extracted to Babel server, important to fix, Kit will take a look.</li>
				<li>Margaret: Simplified Chinese's locale is "zh", while Traditional Chinese's locale is "zh_TW". Is that normal?</li>
				<li>Kit: Yes, that's Java Resource Bundle's look up mechanism. If T.Chinese translation (zh_TW) is not found, it's better to show S.Chinese (zh) than English.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>