<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 12/15/2008";
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
				<li>Margaret</li>
				<li>Antoine</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>[Bug 258749] spaces at end of string trimmed</li>
				<ul>
					<li>Kit: according to Java resource bundle's spec, we should include all characters till the end of line</li>
					<li>Denis: It's a general practice to trim the spaces before and after a string, sounds like we shouldn't trim the spaces after the string in this case</li>
					<li>Denis will take a look at this</li>
				</ul>
				<li>{Bug 258218] "non-translatable" check box should apply to all strings</li>
				<ul>
					<li>Kit: I've added comments in the bug describing a case where we shouldn't apply "non-translatable" to all values found, plan to reject this bug</li>
					<li>Denis: agree</li>
					<li>Antoine: agree</li> 
				</ul>
				<li>[Bug 258217] need to mark string inherited from parent locale</li>
				<ul>
					<li>Denis has some design ideas, will add comments to the bug</li>
				</ul>
				<li>[Bug 237745] Contribution of Japanese language pack for Ganymede</li>
				<ul>
					<li>Antoine fixed the escape character problem, translations imported to staging server, need review</li> 
					<li>Kit will review</li> 
				</ul>
				<li>[Bug 258783] SVN translation contribution</li>
				<ul>
					<li>SVN translation contribution by Igor Burilo</li>
					<li>Kit restructured the language fragment into importable zip</li> 
					<li>Denis will open IPzilla</li> 
				</ul>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>