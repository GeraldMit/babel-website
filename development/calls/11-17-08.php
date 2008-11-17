<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 11/17/2008";
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
				<li>Updates for RTP Eclipse DemoCamp 2008</li>
				<ul>
					<li>November 12</li>
					<li>44 people attended, including Eclipse committers and users from IBM, Oracle, NetApp, Duke University, and NC State University</li> 
					<li>6 presenters</li>
					<li>Kit presented the Babel project</li>
					<li>Discussed with a few people about the idea of the Babel project after the demo</li> 
				</ul>
				<li>Updates for Adobe translation contributions</li>
				<ul>
					<li>translation zips attached to IPZilla CQ</li> 
					<li>waiting for IP clearence</li>
				</ul>
				<li>Recent patches deployed to live server</li>
				<li>Denis will kick off the a build to regenerate the language packs with the fixes</li>
				<li>Creation of Bugzilla components for Babel project</li>
				<ul>
					<li>When we started the Babel project, we created the "core" component for all the tools plugins</li> 
					<li>We probably should rename "core" to "plugins"</li>
					<li>We should create a "translations" component for problems with translations</li> 
				</ul>
				<li>EclipseCon</li>
				<ul>
					<li>We probably do not have enough materials for a 4-hour tutorial</li> 
					<li>An one hour long talk to review the Babel project and to teach Eclipse developers on how to use the pseudo translation language packs to test for unexternalized strings and truncation problems should be the right amount of time</li>
					<li>Kit will submit a proposal this week</li>
				</ul>
				<li>[Bug 217263] files like *test* could be skipped</li>
				<ul>
					<li>See the bug for more comments</li> 
					<li>We may need PDE's help to define a "translatable file exclude/include list"</li>
					<li>Translation tools (besides Babel) will be able to filter in/out files during extraction</li>
				</ul>
				<li>Thanks to Adobe (Morten, Jeff, Margaret) for their translation contributions</li>
				<li>Margaret: question about the copyright header in the properties files</li>
				<li>Denis: the Eclipse IP team is looking into whether we should copyright the translation of the properties files</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>