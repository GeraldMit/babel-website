<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 06/02/2008";
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
				<li>Jeff</li>
				<li>Pascal</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>With a new major release of Eclipse, many will be looking for language
					packs for 3.4, so we'll be getting a lot of new eyeballs on our project.</li>
				<li>We want to discuss any specific accomplishments and/or goals we'd like
					to achieve before the big Ganymede release.</li>
				<li>We are starting to collect a list of "critical bugs for Ganymede". Here is what I have so far:</li> 
				<ul>
					<li>235132 - translations in some language packs do not show up because of extra folder name in language packs</li> 
					<li>217183 - Generate translated plug-ins for multiple project versions</li> 
					<li>222660 - Problem with opening plugin.xml editor</li>
					<li>235022 - Unhandled event loop exception - Dependency Tab (dup of 222660?)</li> 
					<li>221970 - need a way to mark a string non-translatable</li> 
				</ul>
				<li>Everyone, please let Kit know if you have any bugs you think we should add to the list. Thanks!</li>				                    
				<li>Jeff analyzed the strings we have in the DB and found a list of strings that we should not translate.</li>
				<li>Jeff will pass the list to Kit and Gabe to process and mark the strings non-translatable in the DB</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>