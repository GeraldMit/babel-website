<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 07/21/2008";
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
				<li>John</li>
				<li>Matt</li>
				<li>Karl</li>
				<li>Denis</li>
				<li>Gabe</li>
				<li>Jeff</li>
				<li>Margaret</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Kit has a a few questions about setting up the Babel development environment.</li> 
				<li>Should each developer has his own Eclipse environment? Should all developers in an organization connect to the same web server to test their codes?</li> 
				<li>Answers from Denis and Gabe: It'd be easier if each developer could have their own dev env and web server.</li> 
				<li>Should we link our workspace folder to the web server folder?</li>
				<li>Take a look at RSE. That may be helpful.</li>
				<li>Status of "critical bugs for Ganymede": (no change)</li> 
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
				<li>Status of translation contributions":</li> 
				<ul>
					<li>Actuate's BIRT 2.3 Translation for 6 languages - passed IP, imports reviewed by Denis, Kit, Doshiro-san. Waiting for review by JWG.</li> 
					<li>JWG's contributions - waiting for NEC to sign the Eclipse Employer Consent form.</li>
				</ul>
				<li>Actuate's translation contributions may overlap with JWG's contributions. We need to come up with a policy for accepting translation contributions.</li>
				<li>Language champions should be familiar with the quality of the translation contributions by the contributors.</li>
				<li>Language champions should decide if translation contributions are in good quality and if they should be accepted.</li>
				<li>Margaret wants to know if there is a way to build test language packs.</li>
				<li>If you have the Babel development environment setup, there are some scripts you could run to create language packs in your dev env.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>