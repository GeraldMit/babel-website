<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 09/08/2008";
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
				<li>Karl</li>
				<li>Gregg</li>
				<li>Gabe</li>
				<li>Margaret</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>2 co-ops working with Kit (John and Matt) have finished their internship and left.</li> 
				<li>Karl and a new co-op Gregg will continue to help the Babel project on a part time basis.</li>
				<li>Eclipse Planning Council is working on the 3.5 project must-do and should-do list.</li>
				<li>This is a good time to voice our input for a "Translatable String Freeze" date.</li>
				<li>A freeze date will let the translators in the community know when to expect the majority of the translatable strings.</li>
				<li>Translators can plan on their resources basing on this freeze date.</li>
				<li>The current 3.5 plan is to have "API Freeze" in Milestone 6.</li>
				<li>I think M6 is also a good time for a "Translatable String Freeze" since all projects should be pretty stable without too any API changes."
				<ul>
					<li>Kit will communicate this input to the Eclipse Planning Council.</li>
				</ul>
				<li>[Bug 246152] Some P2 strings are not extracted to the Babel server for translation - Kit will work with Denis on this.</li>
				<li>[Bug 244043] WTP 2.0.x is not included in the Babel Project - Kit will work with Denis on this.</li> 
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>