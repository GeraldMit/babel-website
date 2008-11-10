<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 11/10/2008";
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
				<li>Janice</li>
				<li>Antoine</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Updates from last meeting</li>
				<li>New language pack download site status - need to add a banner and prepare for mirroring, Denis will take the item</li>
				<li>A few fixes are ready to be deployed to the live server. We will tag the code when Antoine is ready.</li>
				<li>Japanese translations status - we are still waiting on an action from the JWG, Kit will send a follow-up e-mail</li>
				<li>Kit is working on the approval to travel to EclipseCon next year. In the mean time, Kit will submit a talk for Babel to review the project and show people how to use the pseudo translation language for globalization test (like test for label truncations and unexternalized strings).</li>
				<li>Denis is willing to present the talk if Kit is not available. Kit will add Denis as a second presenter.</li>
				<li>Margaret: Adobe will have some Eclipse 3.4 translations to contribute soon. Is the large translation contribution process still the same?</li>
				<li>Kit: Yes, just package them in the locale folder structure, we can import them easily.</li>
				<li>Margaret: any size limit?</li>
				<li>Denis: the contribution has to go through IP. There is a 10 MB limit for Bugzilla bug attachment.</li>
				<li>Antoine: is the translation sync up script done?</li>
				<li>Denis: yes, it updated about 400K strings.</li>
				<li>Denis will post some stats when he has that available.</li>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>