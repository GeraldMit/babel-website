<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 07/14/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>John</li>
				<li>Matt</li>
				<li>Karl</li>
				<li>Denis</li>
				<li>Jeff</li>
				<li>Margaret</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Introducing 3 co-ops working with Kit: John Ryding, Matt Mazaika, and Karl Mittmann.</li> 
				<li>John, Matt, and Karl are currently working on Eclipse related projects in IBM. They will work part time on Babel.</li> 
				<li>Status of "critical bugs for Ganymede":</li> 
				<ul>
					<li><del>235132 - translations in some language packs do not show up because of extra folder name in language packs</del> - dup of 221675</li> 
					<li><del>217183 - Generate translated plug-ins for multiple project versions</del> - resolved</li>
					<li><del>222660 - Problem with opening plugin.xml editor</del> - resolved</li>
					<li><del>235022 - Unhandled event loop exception - Dependency Tab</del> - dup of 222660</li>
					<li><del>235553 - Corrupted package path (OpenTypeDialog)</del> - resolved</li>
					<li>235607 - Missing contribution in update-site for EMF Compare - Kit did the investigation, Denis will take a look</li>
					<li><del>237275 - Update map files for Eclipse 3.4</del> - resolved</li>
					<li>238587 - generate proper host-fragment tolerance range for language fragments - Kit will take a look</li>
				</ul>
				<li>Everyone, please let Kit know if you have any bugs you think we should add to the list. Thanks!</li>
				<li>Kit found some problems with some recent translations. We need to come up with an easy way to undo the translations.</li>
				<li>One suggestion is to add an "Undo" button next to each entry in the "Recent Translations" table.</li>
				<li>Only a special group of people should be allowed to perform the undo's (e.g. language champions or committers).</li>
				<li>A voting system for translations will also solve the problem, but that's a longer term improvement.</li>
				<li>Stefan Mücke proposed to contribute a translation tool to Babel. Denis and Kit agree that it's a good addition to Babel, but there are some overlapping with Pascal's Message Editor.</li>
				<li>It'd be great if Stefan and Pascal can work together to merge functions of the two editors.</li>
				<li>Margaret noticed that the directory structure for the Japanese translation contribution from JWG does not match what we have on the translation server.</li>
				<li>Denis will post some info to the mailing list about his import script to align the file names and the string names.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>