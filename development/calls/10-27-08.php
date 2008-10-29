<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 10/27/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>via mailing list</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>I'm very sorry about the conference call problem this week... again</li>
				<li>Will communicate the project status via mailing list</li>
				<li>new language pack download site status</li>
				<li>translation sync up script status</li>
				<li>map file processing job status (to pick up WTP 2.0 map files)</li>
				<li>Babel language pack build (Denis to talk to Kim?)</li>
				<li>release plan draft (no update from Kit)</li>
				<li>I will be out of town next week. Can anyone host the meeting? If not, we may have to cancel the next meeting.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>