<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 08/04/2008";
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
				<li>Gabe</li>
				<li>Margaret</li>
				<li>Jeff</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Kit: Denis, Matt and I fixed a few bugs last week. Denis is on vacation this week. Is he the only one who could deploy the fixes to the live server?</li> 
				<li>Gabe: Yes, he is the one who can do that.</li> 
				<li>Kit: Okay, we will wait.</li>
				<li>Kit: Strings marked as "non-translatable" have no history. We cannot tell who did that and when.</li>
				<li>Gabe: We currently just mark the strings as "non-translatable" in the strings table. That's a good point. Recording the who and when info will be helpful.</li>
				<li>Kit: I will check if we have a bug opened for that. I will open one if we don't have one opened.</li>
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
				<li>Status of translation contributions": (no change)</li> 
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