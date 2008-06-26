<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 06/23/2008";
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
				<li>Denis</li>
				<li>Gabe</li>
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
					<li>235607 - Missing contribution in update-site for EMF Compare - assigning to Kit</li>
					<li>237275 - Update map files for Eclipse 3.4 - assigning to Denis</li>
					<li>238587 - generate proper host-fragment tolerance range for language fragments</li>
				</ul>
				<li>Everyone, please let Kit know if you have any bugs you think we should add to the list. Thanks!</li>				                    
				<li>Jeff will pass the list to Kit and Gabe to process and mark the strings non-translatable in the DB.</li>
				<li>Kit: The "All Versions" and "Only Version 3.3" buttons on the translation page seem to be redundant. I'm yet to see a scenario that requires different translations for different release.</li>
				<li>Kit will open a bug to remove the "Only Version 3.3" button. We will see if there are any concerns from other users.</li>
				<li>JWG's large Japanese translation contribution (bug 237745) is waiting on CQ 2441.</li>
				<li>JWG will start translation of Eclipse docs in July.</li>
				<li>Babel Translation Server currently does not support translation of HTML/XML markup files.</li>
				<li>It should not be too hard to provide a simple plain text editor for use to translate the HTML/XML markup files. We should start looking after the holiday season.</li>
				<li>A better solution is to provide a HTML/XML markup editor that can protect un-translatable fields in the HTML/XML markup files and only allow translation of translatable strings.</li>
				<li>The HTML/XML markup editor requires more resources to develop. We really need the community's help to implement this.</li>
				<li>Werner asked if anyone is attending EclipseWorld in the fall.</li>
				<li>Pat will be going to EclipseWorld. He will mention and promote Babel. However, it's nice to have a separate session for Babel. Anyone else attending could help?</li>
				<li>Everyone worked very hard on Eclipse Ganymede release. Ganymede has just been announced. Congratulations!</li>
				<li>It's now vacation time for developers and holiday season for Canada and the U.S. We plan to cancel the next 2 project development meetings on June 30th and July 7th.</li>
				<li>If there are any urgent issues, we can communicate through e-mails and the mailing list.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>