<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 12/08/2008";
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
				<li>[Bug 256252/256430] unable to satisfy dependency messages</li>
				<ul>
					<li>Pascal (from p2 team) suggested generating p2 metadata to have the feature optionally requires the plug-ins it includes and for each fragment to have a non greedy dependency on its host</li>
					<li>We need some more instructions on how to do that</li>
					<li>Kit and Antoine will try that</li>
				</ul>
				<li>Site generation php</li>
				<ul>
					<li>Kit: are we using that on the live server?</li> 
					<li>Denis: no, we are still using generate1.php</li>
					<li>Antoine is still working on a few bugs, will test throughly on the staging server before deploying to live server</li> 
				</ul>
				<li>Deploy recent patches to live server</li>
				<ul>
					<li>A few recent patches should be deployed to the live server, especially the IE problem on translate page</li>
					<li>The new site generate php should not affect anything since we are not calling that yet</li>
					<li>Denis will deploy the recent patches to the live server today</li>
				</ul>
				<li>[Bug 257902] make Babel server consumable by other organizations</li>
				<ul>
					<li>Current focus of Babel is to have make sure Babel translators have all the tools needed to perform the translations</li> 
					<li>This bug may be a lower priority</li> 
					<li>Antoine: Babel's tools are actually very close to be consumable by other organizations, we just need to fix a few bugs</li> 
					<li>We appreciate if Antoine could be the focus of this effort</li> 
				</ul>
				<li>Moving meeting agendas and archives to Wiki</li>
				<ul>
					<li>Many Eclipse projects have their meeting agendas and archives at the Eclipse Wiki</li> 
					<li>That way, anyone can submit agendas for future meetings</li> 
					<li>Denis, please help layout the structure at the Wiki</li> 
					<li>Kit and others can help move the info over to the Wiki</li> 
				</ul>
				<li>Other questions:</li>
				<ul>
					<li>Margaret: the percentage complete stats are still not up-to-date</li> 
					<li>Denis: please open a bug, we will follow-up on that</li> 
				</ul>
				<li>We plan on not having a meeting on December 29th</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>