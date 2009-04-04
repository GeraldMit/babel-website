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
	$pageTitle 		= "Eclipse Babel Project Downloads";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Jess Garms";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	# Get Build date
	$europa_build_str 	= "";
	$ganymede_build_str = "";
	$filename = $App->getDownloadBasePath() . "/technology/babel/babel_language_packs/index.php";
	if(file_exists($filename)) {
    	$build_date = date("F d, Y", filemtime($filename));
	}

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<style>
#known-issues li{
   list-style-image: url();
}

ol#known-issues li{
	margin-top: 10px;
}

ol#known-issues ul li{
   list-style-image: url();
   list-style: none;
	margin-top: 0px;
}

#known-issues ul li.stop{
   list-style-image: url(http://dev.eclipse.org/small_icons/actions/process-stop.png);
   font-style: italic;
   font-weight: bold;
}
</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>The Babel Project is in incubation and has not yet produced full translations for Eclipse Ganymede and Europa. All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.php" target="_blank">Eclipse 
          Foundation Software User Agreement</a> unless otherwise specified.</p>
		<p>The Babel project produces weekly language packs from the translations entered using the Translation Tool. You can use the Babel Language Pack Update Sites to download the languages packs, or download the Babel Language Pack zips from the following link.</p>

		<p><b>Babel Language Packs built on $build_date</b></p>

		<p><table><tr><td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td><td><font size="+1"><b>Babel Language Pack Update Site for Galileo</b></font><br />
		Includes Eclipse SDK 3.5, BIRT 2.5, Datatools 1.7 &#160;<a href="http://babel.eclipse.org/babel/importing.php">[Request more projects]</a><br />
		<font size="+1">http://download.eclipse.org/technology/babel/update-site/galileo</b></font></td></tr></table></p>

		<p><table><tr><td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td><td><font size="+1"><b>Babel Language Pack Update Site for Ganymede</b></font><br />
		Includes Eclipse SDK 3.4, CDT 5.0, Webtools 3.0 &#160;<a href="http://babel.eclipse.org/babel/importing.php">[Request more projects]</a><br />
		<font size="+1">http://download.eclipse.org/technology/babel/update-site/ganymede</b></font></td></tr></table></p>

		<p><table><tr><td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td><td><font size="+1"><b>Babel Language Pack Update Site for Europa</b></font><br />
		Includes Eclipse SDK 3.3 &#160;<a href="http://babel.eclipse.org/babel/importing.php">[Request more projects]</a><br />
		<font size="+1">http://download.eclipse.org/technology/babel/update-site/europa</b></font></td></tr></table></p>

		<p><table><tr><td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td><td><font size="+1"><b>Babel Language Pack zips</b></font></a><br />
		Includes Eclipse Galileo, Ganymede and Europa<br />
		<a href="http://download.eclipse.org/technology/babel/babel_language_packs">
		<font size="+1"><b>http://download.eclipse.org/technology/babel/babel_language_packs</b></font>
		</a></td></tr></table></p>

		<p>Before you download and use any of the language packs, please read these known issues:</p>
		
	  <ol id="known-issues" style='margin-left: 10px;'>
	  	<li>Not all of the existing Eclipse Foundation Projects are included in Babel yet.  
	  	If you encounter a project that you would like to help translate, <a href="/projects">tell that project's leaders</a>.
	  	<li>Not all languages are included in Babel yet.
	  	Request an additional language through <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?bug_file_loc=http%3A%2F%2F&bug_severity=normal&bug_status=NEW&comment=&contenttypeentry=&contenttypemethod=autodetect&contenttypeselection=text%2Fplain&data=&description=&flag_type-1=X&flag_type-2=X&flag_type-4=X&flag_type-6=X&form_name=enter_bug&maketemplate=Remember%20values%20as%20bookmarkable%20template&op_sys=Linux&priority=P3&product=Babel&rep_platform=PC&short_desc=Please%20add%20a%20new%20language%20to%20Babel&version=unspecified">Bugzilla</a>.
	  </ol></p><br />
	  <h2>Using the language packs</h2>
	  <p>If the system locale for your operating system is already in the language you want to launch Eclipse in, all you have to do is to launch Eclipse normally and the language packs will be loaded.</p>
	  <p>If the system locale is in English, and you want to launch Eclipse in another language, you have to launch Eclipse with the <b>-nl</b> command line argument:</p>
	  <code>eclipse.exe -nl fr</code>
	  <p>Replace <b>fr</b> with the locale you wish to use. See <a href="http://help.eclipse.org/help33/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/running_eclipse.htm">"Running Eclipse"</a> for more details. Also see the <a href="http://www.eclipse.org/articles/Article-Speak-The-Local-Language/article.html">"Teach Your Eclipse to Speak the Local Lingo"</a> Eclipse Corner Article for more examples on how to launch Eclipse in different languages (including bi-directional language like Arabic) and different operating systems (like Linux and Mac OS X).</p>
	  <br />
	  
	<h2>Other downloads</h2>
	<ul><li>Nightly Build update site: <b>http://build.eclipse.org/technology/babel/test-updates/ganymede</b></li>
	<li><a href="/downloads/download.php?file=/technology/babel/babel-database.sql.gz">Babel Server Nightly mysqldump</a></li>
	<li><a href="/downloads/download.php?file=/technology/babel/eclipse_properties-R-3.5.tar.gz">Eclipse Platform R-3.5 English .properties files</a> (rebuilt nightly)</li>
	<li><a href="/downloads/download.php?file=/technology/babel/eclipse_properties-R-3.4.tar.gz">Eclipse Platform R-3.4 English .properties files</a></li>
	<li><a href="/downloads/download.php?file=/technology/babel/eclipse_properties-R-3.3.1.tar.gz">Eclipse Platform R-3.3.1 English .properties files</a></li>
	</ul><br /><br /><br />
	</div>
</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
