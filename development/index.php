<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Babel project development";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Jess Garms";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<link href="../babel.css" rel="stylesheet" type="text/css" />	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>	Here are resources available if you want to get involved:
		
		<div class="sectionTitle">The Babel team</div>
		<p><ul><li><a href="https://projects.eclipse.org/projects/technology.babel/who">Babel Project Committers and Activity</a></li></ul></p>
		
		<div class="sectionTitle">Contributing translations</div>
		<p>The easiest way to get involved with Babel is to help translate Eclipse projects.</p>
		<ul>
		<li><a href="http://babel.eclipse.org/babel/">Web-based translation tool</a>: all you need is an <a href="https://dev.eclipse.org/site_login/createaccount.php">Eclipse Account</a> and a few minutes to start translating.</li>
		<li><a href="large_contributions.php">Large translation contributions</a>: if you want to submit a large translation to Babel, please follow these guidelines.</li>
		</ul>
		<br /><br />
		<div class="sectionTitle">Contributing Code</div>
		<p>Babel developers use the following resources:</p>
		<ul>
			<li><a href="https://dev.eclipse.org/mailman/listinfo/babel-dev">Developers mailing list</a></li>
			<li><a href="http://www.eclipse.org/forums/eclipse.technology.babel">Forum</a></li>
			<li><a href="http://git.eclipse.org/c/babel">Git repositories for Plugins and Translation Server</a></li>
		</ul>
		<div class="sectionTitle">Web-based server translation tool</div>
		<p>The <a href="http://babel.eclipse.org/babel">translation tool</a> is a LAMP application, so anyone with PHP and MySQL knowledge can contribute code. To help out:</p>
		<ul>
			<li><a href="http://wiki.eclipse.org/Babel_/_Server_Tool_Development_Process">Set up a Babel development environment</a> and read our development process.</li>
			<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=Technology&product=Babel&component=Server&component=Website&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&deadlinefrom=&deadlineto=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Work on the Babel Server Bugs and Enhancements</a> or open new ones.  Submit your code patches to the bugs as attachments.</li>
		</ul><p>Use the developer mailing lists (above) to discuss development issues. If you submit quality patches consistently, the Babel developers may nominate you as a committer.</p>	
		
		
		<div class="sectionTitle">Messages editor</div>
		<ul>
		<li><a href="../messages_editor">Messages Editor</a> documentation</li></ul>
		<br /><br />
		Guidelines for Release Reviews
		<li><a href="http://www.eclipse.org/projects/dev_process/release-review.php">http://www.eclipse.org/projects/dev_process/release-review.php</a></li>
		<br /><br /> 
	</div>
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
