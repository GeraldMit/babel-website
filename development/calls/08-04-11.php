<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 08/11/2008";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Kit Lo";
	$html = <<<EOHTML
	<div id="maincontent">
		<div id="midcolumn">
			<h1>$pageTitle</h1>
			<h2>Attendees:</h2>
			<ul>
				<li>Kit</li>
				<li>Matt</li>
				<li>Karl</li>
				<li>Denis</li>
				<li>Gabe</li>
				<li>Margaret</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>Werner has a few status updates:</li> 
				<ul>
					<li>Eclipse Magazine article submission, submit before late September</li> 
					<li>Eclipse Summit Europe presentation proposal</li>
					<li>Werner will speak at Berlin.jar about Java and Eclipse</li>
					<li>Anyone has any article suggestions or presentation ideas, please forward to werner.keil@gmx.net</li>
				</ul>
				<li>A few fixes at staging server should be released.</li> 
				<ul>
					<li>[Bug 242011] mysql ENCRYPT not available on windows - hinders development</li> 
					<li>[Bug 242915] login/logout button does not work correctly</li>
					<li>[Bug 237257] Translation editor &lt;br /&gt; and " problem</li>
					<li>[Bug 225894] Ability to take over English translation with one click</li>
				</ul>
				<li>Denis and Gabe will review the first 2 and apply the patches to the staging server.</li> 
				<li>Progress from Matt and Karl:</li>
				<ul>
					<li>Matt is working on a filter to switch among untranslated/translated/all string.</li> 
					<li>Karl is working on the generate1.php file.</li>
				</ul> 
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>