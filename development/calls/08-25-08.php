<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 08/25/2008";
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
				<li>Denis</li>
				<li>Gabe</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>[Bug 244043] WTP 2.0.x is not included in the Babel Project</li> 
				<ul>
					<li>WTP provided the SQL inserts before (Bug 221503), we should ask them to do the same for WTP 2.0.x.</li> 
					<li>Denis will add a remark to the bug.</li>
				</ul>
				<li>[Bug 234181] DTP Contribution</li> 
				<ul>
					<li>German, French, S. Chinese, Japanese, Korean look okay.</li> 
					<li>There are some box chars for Spanish.</li>
					<li>Kit will figure out the encoding they use, convert the files to Unicode and pass to Denis.</li>
				</ul>
				<li>JWG translation contribution - Denis to import translation contribution.</li>
				<li>Kit: Translation hints on Babel Translation Server sometimes take a long time to process. Is there any way to cancel the process?</li> 
				<li>Denis: We've ungraded the server recently. Should be faster now. We will look at other solutions if it's a problem in the future.</li> 
				<li>There was a discussion about pseudo translation language packs in the news group recently.</li> 
				<li>There is a open bug 217339 for the enhancement.</li> 
				<li>Kit has some ideas on how to implement that, but we don't have resource to work on the enhancement.</li> 
				<li>Kit will investigate the option of creating some downloadable pseudo translation language packs.</li> 
				<li>Meeting on 9/1 will be cancelled due to U.S. and Canada holidays.</li> 
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>