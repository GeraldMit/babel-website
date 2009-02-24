<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 02/23/2009";
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
				<li>Gregg</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Thanks to Antoine, Sean, and Pascal! I tried the live update site. I don't see any unsatisfied dependency errors. We should also remove the language pack problem in the known-issues section on the download page.</li>
				<li>Question for Denis or Antoine, I noticed that we are asking for the release train when defining the map file. Do we still use the release_train_projects table in the DB?</li>
				<li>For bug 265092 - No fragments for stp.bpmn component, we need to add the project to a release train. Which way should we use?</li>
				<li>We should use the field on the map file definition page to set the project release train.</li>
				<li>While we are on the project release train topic, we should add Galileo release to the list (bug 262682) by M6, March 16.</li>
				<li>I noticed some P2 strings are not translated. I think it was caused by: Bug 242307 - Equinox move request to RT</li>
				<li>I've defined a new map file for P2 at the staging server. Do we run the map file processor nightly?</li>
				<li>The map processor on the live server is run nightly. The one on the staging server is manual.</li>
				<li>Many projects at staging server like BIRT, DTP. Eclipse 3.3.1 do not show any files for translation. Was it caused by the map file processing problem?</li>
				<li>The map files are probably not update-to-date. We should update the map files.</li>
				<li>I added a post to the babel-dev mailing list yesterday about "Babel Language Pack Build Tool". Please try, comment, and help improve the tool.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>