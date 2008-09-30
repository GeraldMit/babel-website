<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 09/22/2008";
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
				<li>[Bug 217339] generate pseudo translations language packs</li>
				<ul>
					<li>Denis to generate language packs on staging server</li> 
					<li>Antoine suggested to refactor generate1.php info different files with function to create a fragment, and function to create all fragments for a given language - good idea</li> 
					<li>Hendrik suggested to only provide the pseudo translations language packs to developers but not to make it available at the official Babel update site</li> 
					<li>Denis: maybe we could provide the pseudo translations language packs only only at the nightly update site</li> 
				</ul>
				<li>[Bug 248981] language pack problems in P2
				<ul>
					<li>since the Babel update site will pull in all translated plugins for all Eclipse projects, looks like the extra translated plugins for projects that are not install are causing problems in P2</li> 
					<li>need to investigate if there is a way to add a hook in P2 to run some scripts to clean up all unused plugins after install</li> 
					<li>or, provide some utility scripts or a Babel plugin for users to cleanup the workspace</li> 
				</ul>
				<li>[Bug 248027] on-demand NL packs generation</li>
				<ul>
					<li>since we already have all the translated jars available at the update site, maybe all we need is to different categories organized by projects, languages and let users pick what they want to download</li> 
				</ul>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>