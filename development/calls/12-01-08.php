<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle		= "Eclipse Babel Project Development Meeting: 12/01/2008";
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
				<li>Wayne Beaton</li>
			</ul>
			<h2>Minutes:</h2>
			<ol>
				<li>[Bug 256252] unable to satisfy dependency messages</li>
				<ul>
					<li>this is caused by all the test plugins</li>
					<li>Babel generates the language packs for the test plugins, by the host (code) plugins are not available</li>
					<li>one workaround until Platform or PDE implements the plugin exclude list is to mark all the test plugins in the DB to be inactive</li>
					<li>Kit has collected a list of the test plugins for the Eclipse Platform Project</li>
					<li>Denis will test the patch SQL statements on the staging server</li>
				</ul>
				<li>[Bug 256203] error loading translate page in IE 6 and IE 7</li>
				<ul>
					<li>this is blocking all IE 6 and IE 7 users</li> 
					<li>Gabe has fixed the problem</li> 
					<li>Need to deploy the fix to the live server ASAP</li> 
				</ul>
				<li>Babel Project review</li>
				<ul>
					<li>Usually, about 1 year after we start an Eclipse project, we should have either a release review or continuation review</li>
					<li>Wayne did a quick review of the Bable project and qave us some constructive comments</li>
					<li>Wayne's comments can be found <a href="http://dev.eclipse.org/mhonarc/lists/babel-dev/msg00553.html">here</a></li>
					<li>A few areas we should update:</li>
					<ul>
						<li>The project summary page</li> 
						<li>The Getting Started tab was grayed out</li> 
						<li>Project plan out dated</li> 
						<li>No release plan</li> 
						<li>Request for another project mentor</li> 
					</ul>
					<li>We are doing well on monitoring the newsgroup and mailing lists and getting the questions answered</li> 
					<li>In general, newsgroup is geared towards end users, and mailing list is more for developers</li> 
				</ul>
				<li>Other questions:</li>
				<ul>
					<li>Margaret: the percentage complete for Eclipse Platform project is about 60+%, even after Adobe's translation contribution. Any problem?</li> 
					<li>Denis: the low number could be caused by the test plugins and also the fact that many SWT files are not translatable and we did not import the translations that are the same as English</li> 
					<li>Kit: let's wait till we finish applying the SQL patch to exclude the test plugins and touch up the stats and see if that's any better</li> 
					<li>Margaret: will the Eclipse 3.4 properties files extraction zip be updated after the test plugin exclusion?</li> 
					<li>Denis: we've stopped the cron job for the extraction, but we can run that again after the patch</li> 
				</ul>
			</ol>
		</div>
	</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>