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
				<li>Antoine</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>New update site status - built on 10/29, available now</li>
				<li>New language pack download site status - will include in next weekly build</li>
				<li>We are getting little involvement from projects to maintain their map files in Babel. Anything we should do?</li>
				<ul>
					<li>We've suggested to the Eclipse Planning Council to make that a requirement for the Galileo.</li> 
					<li>We may setup "Map Files Champions" asking volunteers to keep the map files for Eclipse projects up-to-date.</li> 
				</ul>
				<li>Eclipse DemoCamps</li>
				<ul>
					<li>Kit will demo Babel on 11/12 in RTP.</li> 
					<li>Demos are not very formal. You don't have to be experts in all areas.</li>
					<li>Please consider setting one up to demo Babel if you have a few hours.</li>
					<li>See this link for more info: http://wiki.eclipse.org/Eclipse_DemoCamps_November_2008</li> 
				</ul>
				<li>WTP 2.0 map files problem</li>
				<ul>
					<li>Kit opened CVS Viewer bug 250671, but it has been closed as NON-ECLIPSE.</li> 
					<li>Denis will investigate and help.</li>
				</ul>
				<li>Eclipse Planning Council meeting</li>
				<ul>
					<li>Kit has proposed the following 3 Babel topics for discussion in the up coming Eclipse Planning Council meeting. The chair of the Planning Council Rich Gronback has already added Babel participation as a Must-Do requirement for the Galileo release, and indicated an M6 completion date.</li>
					<ul>
						<li>each Eclipse project should add the Babel Pseudo Translation Test to their release plan to make sure their project is properly globalized, with all strings externalized, and all layout problems fixed</li>
						<li>each Eclipse project should define their project map files at the Babel Translation Server so translators around the world could help translating the Eclipse project</li>
						<li>each Eclipse project should freeze their translatable strings at M6 to give translators enough time for translation before project release date</li>
					</ul>
				</ul>
				<li>[bug 248981] unsatisfied dependency messages when uninstalling Babel language packs</li>
				<ul>
					<li>Map files are including test and doc plugins, but the test plugins are not built into the downloadable zips</li> 
					<li>Project builds probably have some scripts to remove them</li>
					<li>Babel language packs are built based on the map files; we are building language fragments for the test plugins too, but the host plugins are not found</li>
					<li>Denis to talk to Eclipse build person (Kim) to understand their build process</li>
				</ul>
				<li>Release plan</li>
				<ul>
					<li>We received some notifications from EMO requesting use to keep our release plan up-to-date</li> 
					<li>Kit will start drafting the release plan</li>
				</ul>
				<li>Translation sync up script - still running, greatly improves translations in repository, 1.7 million strings in repository so far</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>