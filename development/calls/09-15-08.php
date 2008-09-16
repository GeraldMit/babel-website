<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 09/15/2008";
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
				<li>Karl</li>
				<li>Gregg</li>
				<li>Gabe</li>
				<li>Margaret</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>[Bug 246152] Some P2 strings are not extracted to the Babel server for translation - Kit will work with Denis on this.</li>
				<li>[Bug 244043] WTP 2.0.x is not included in the Babel Project - Kit will work with Denis on this.</li> 
				<li>We received an e-mail from EMO that our project should have a "next release" plan and schedule. We should work on updating that. Consult our project mentors for advice if needed.</li> 
				<li>[Bug 234430] Provide another way to download language packs</li>
				<ul>
					<li>Kit: I agree with the reporter. Currently, the only way to get the language packs is to get the all translations for all projects through the update site. It's big and takes a lot of time.</li> 
					<li>Kit: Can we create something like a on-demand generation of the language packs? User selects the language, project, version, we then generate the language pack.</li> 
					<li>Gabe: It sounds feasible.</li> 
					<li>Kit will open a bug for that.</li> 
				</ul>
				<li>[Bug 242904] Marking of non-translatable strings - Gabe to review.</li>
				<li>Kit: How do I kick off the generate1.php script? Can I start that from a command line? I had some problems running that.</li>
				<li>Gabe: You may be missing the PHP/CLI (Command Line Interface) module.</li>
				<li>Kit: That may be what I was missing. I will try that again.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>