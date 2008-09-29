<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 09/22/2008";
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
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>[Bug 217339] generate pseudo translations language packs</li>
				<ul>
					<li>Denis and Gabe to review</li> 
					<li>Europa and Ganymede should not have have features with same feature version numbers - fixed</li> 
					<li>feature name changed from org.eclipse.nls to org.eclipse.babel.nls</li> 
					<li>Pseudo translation index file packaged in org.eclipse.babel.nls feature - BabelPseudoTranslationsIndex.html</li> 
					<li>BabelPseudoTranslationsIndex.html has links to open string in Babel Translation Server for easy translation correction</li> 
				</ul>
				<li>[Bug 246152] Some P2 strings are not extracted to the Babel server for translation - Kit will work with Denis on this.</li>
				<li>[Bug 244043] WTP 2.0.x is not included in the Babel Project - Kit will work with Denis on this.</li> 
				<li>[Bug 242904] Marking of non-translatable strings - Gabe to review.</li>
				<li>[Bug 248027] on-demand NL packs generation</li>
				<li>Kit will open a bug to remove Simplified Chinese in Traditional Chinese repository</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>