<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 01/19/2009";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>Margaret</li>
				<li>Antoine</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>EclipseCon is approaching, I'd like to have a few things cleaned up to give new users a good impression of Babel</li>
				<li>Language Pack ZIPs</li>
				<ul>
					<li>The Language Pack ZIPs download page is live</li>
					<li>The banner on the Language Pack ZIPs download page is for Eclipse, not Babel</li>
					<li>Denis, is that intentional so it's consistent with download page of other Eclipse projects, or it's a bug?</li>
					<li>Looks like the languages are not in any order, I'd like them to be in alphabetical order, so it's easier for users to find their language</li>
				</ul>
				<li>Language names not consistent throughout Babel</li>
				<ul>
					<li>We have different ways to present the language name on translation progress page, translation page, stats page</li>
					<li>For the different variations of English, we use AustralianEnglish and CanadianEnglish</li>
					<li>For the different variations of Chinese, we use ChineseSimplified and ChineseTraditional</li>
					<li>I prefer to have the language in front and the variation desc at the end so the languages are grouped together</li>
					<li>We have a few options to choose from: EnglishCanadian, English(Canadian), English-Canadian</li>
				</ul>
				<li>Progress on integrating p2 meta data generator and XSLT transform script?</li>
				<ul>
					<li>Antoine has the metadata generator part working, working on the XSLT part</li>
				</ul>
				<li>"Unspecified" project version</li>
				<ul>
					<li>We don't include the "Unspecified" project version translations in any of the language packs</li>
					<li>I think it's a little confusing</li>
					<li>If we don't have a need for that, I'd like to remove them</li>
					<li>Comments?</li>
				</ul>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>