<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 11/24/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>Denis</li>
				<li>Gabe</li>
				<li>Margaret</li>
				<li>Antoine</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>[Bug 249358] EMF Validation translations questions</li>
				<ul>
					<li>zh_HK is a locale supported by IBM, which actually is just a copy of zh_TW</li>
					<li>there is currently no request for zh_HK locale in Babel</li>
					<li>we can ignore the translations for now and copy that from zh_TW later if needed</li>
				</ul>
				<li>[Bug 248843] more room for the language names on the translation progress box</li>
				<ul>
					<li>Gabe will take a look at this</li> 
				</ul>
				<li>[Bug 256252] unable to satisfy dependency messages</li>
				<ul>
					<li>this is caused by all the test plugins</li> 
					<li>Babel generates the language packs for the test plugins, by the host (code) plugins are not available</li> 
					<li>one workaround until Platform or PDE implements the plugin exclude list is to mark all the test plugins in the DB to be inactive</li> 
					<li>Kit will start to collect a list of the test plugins</li> 
				</ul>
				<li>[Bug 256203] error loading translate page in IE 6 and IE 7</li>
				<ul>
					<li>this is blocking all IE 6 and IE 7 users</li> 
					<li>Gabe will take a look at this</li> 
				</ul>
				<li>[Bug 217191] DB migration scripts</li>
				<li>EclipseCon</li>
				<ul>
					<li>submission 504 - "Climb the Babel Tower"</li>
					<li>will submit another poster and BOF later</li> 
					<li>need a Babel commmitters meeting, let's plan for Monday night for now</li>
					<li>who will be attending EclipseCon? Denis and Gabe for sure, Antoine and Kit unsure yet</li>
				</ul>
				<li>We need to add the downloadable language packs link to the download page, Denis will work on this</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>