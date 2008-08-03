<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 07/28/2008";
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
				<li>Gabe</li>
				<li>Margaret</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Kit: I have a design question related to "possibly incorrect translations" (bug 230949). </li> 
				<li>Changed English strings, for example, words being capitalized or changed to plural, will cause translations to be "possibly incorrect".</li> 
				<li>If the translation actually needs to be changed, then it's easy. Translator will update the translation and save.</li>
				<li>However, if translation does not need to be changed (for example, double-byte languages do not have plural numbers, translation does not need to be changed), do we need a "confirm" button?</li>
				<li>If anyone has any idea about the design of the UI, please let Kit know.</li>
				<li>Kit: I discovered some Simplified Chinese translations in the Traditional Chinese folder by one user.</li>
				<li>Not sure if it was just a mistake or not.</li>
				<li>Sent an e-mail to the user to confirm about 2 weeks ago, but did not receive any response.</li>
				<li>Don't want to ban the user because it could be just a careless mistake.</li>
				<li>Denis: Bugzilla has a function to temporarily suspend an ID with note.</li>
				<li>We could add a note and ask the user to contact us.</li>
				<li>Kit: That sounds like a good function. I will collect more info and work with Denis off-line on that.</li>
				<li>Gabe: We probably should implement a filter to show all translations from a user.</li>
				<li>Kit: That's a useful function for language champions. Let's open a bug for that.</li>   
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
					<li>Actuate's BIRT 2.3 Translation for 6 languages - passed IP, imports reviewed by Denis, Kit, Doshiro-san. JWG did not respond to review request yet. We think these translations should be in good quality. We will go ahead and release them to the server.</li> 
					<li>JWG's contributions - waiting for NEC to sign the Eclipse Employer Consent form.</li>
				</ul>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>