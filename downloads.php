<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Babel Project Downloads";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Babel team";
	
	
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
   list-style-image: url(https://dev.eclipse.org/small_icons/actions/process-stop.png);
   font-style: italic;
   font-weight: bold;
}
</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Babel Language Packs R0.16.1 are now available!</h2> 

		<p>Babel Language Packs R0.16.1 for 2018-12, Photon, and Oxygen release trains are now available!
			Translations in all languages for all projects in Babel up to 2019/01/26 are included in R0.16.1.</p>

		<p>Babel is currently setup to accept translation contributions in
			<a href="https://babel.eclipse.org/babel/languages.php">47 languages</a> for about 40+ Eclipse projects and sub-projects.
			Participation for each language and each project may vary.
			For some of the most common projects, the completion percentages are very high.
			See the <a href="https://babel.eclipse.org/babel/stats.php">Babel Translation Statistics</a> for more details.</p>

		<p>All downloads are provided under the terms and conditions of the 
			<a href="https://www.eclipse.org/legal/epl/notice.php" target="_blank">Eclipse Foundation Software User Agreement</a>
			unless otherwise specified.</p>

		<p>The Babel project produces language packs from the translations entered using the 
			<a href="https://babel.eclipse.org/babel/translate.php">Babel Translation Tool</a>.
			You can download the Babel Language Pack Zips from the following links, or use the Babel Language Pack Update Sites to download the languages packs.</p>
				
		<h2>Installing the language packs</h2>
		<p><ul><li>Open the install wizard with 'Help' > 'Install new software...'</li> 
			<li>Add the Babel p2 repository: https://download.eclipse.org/technology/babel/update-site/R0.16.1/2018-12/</li>
		 	<li>Select/install your language pack of choice</li>
			<li>Restart Eclipse and you should get a translated Eclipse</li></ul></p>

		<h2>Using the language packs</h2>
		<p>If the system locale for your operating system is already in the language you want to launch Eclipse in, all you have to do is to launch Eclipse normally and the language packs will be loaded.</p>
		<p>If the system locale is in English, and you want to launch Eclipse in another language, you have to launch Eclipse with the <b>-nl</b> command line argument:</p>
		<p><code>eclipse.exe -nl fr</code></p>
		<p>Replace <b>fr</b> with the locale you wish to use. See <a href="https://help.eclipse.org/help33/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/running_eclipse.htm">"Running Eclipse"</a> for more details. Also see the <a href="https://www.eclipse.org/articles/Article-Speak-The-Local-Language/article.html">"Teach Your Eclipse to Speak the Local Lingo"</a> Eclipse Corner Article for more examples on how to launch Eclipse in different languages (including bi-directional language like Arabic) and different operating systems (like Linux and Mac OS X).</p>

		<h2>
			<a href="https://download.eclipse.org/technology/babel/babel_language_packs/R0.16.1/index.php">
			Babel Language Pack Zips and Update Sites - R0.16.1</a> (2019/01/26)
		</h2>
		<table>
			<tr>
				<td rowspan="2" valign="top"><img src="https://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td><b>Babel Language Pack Zips</b></td>
			</tr>
			<tr>
				<td>
					<a href="https://download.eclipse.org/technology/babel/babel_language_packs/R0.16.1/2018-12/2018-12.php">2018-12</a> |
					<a href="https://download.eclipse.org/technology/babel/babel_language_packs/R0.16.1/photon/photon.php">Photon</a> |
					<a href="https://download.eclipse.org/technology/babel/babel_language_packs/R0.16.1/oxygen/oxygen.php">Oxygen</a>
				</td>
			</tr>
            <tr><td colspan="2">&#160;</td></tr>
			<tr>
				<td><img src="https://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for 2018-12</b><br />
					https://download.eclipse.org/technology/babel/update-site/R0.16.1/2018-12/<br />
					<a href="https://eclipse.org/downloads/download.php?file=/technology/babel/update-site/R0.16.1/babel-R0.16.1-2018-12.zip">Zipped p2 repository for 2018-12 (140 MB)</a><br />
				</td>
			</tr>
            <tr><td colspan="2">&#160;</td></tr>
			<tr>
				<td><img src="https://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Photon</b><br />
					https://download.eclipse.org/technology/babel/update-site/R0.16.1/photon/<br />
					<a href="https://eclipse.org/downloads/download.php?file=/technology/babel/update-site/R0.16.1/babel-R0.16.1-photon.zip">Zipped p2 repository for Photon (128 MB)</a><br />
				</td>
			</tr>
			<tr><td colspan="2">&#160;</td></tr>
			<tr>
				<td><img src="https://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Oxygen</b><br />
					https://download.eclipse.org/technology/babel/update-site/R0.16.1/oxygen/<br />
					<a href="https://eclipse.org/downloads/download.php?file=/technology/babel/update-site/R0.16.1/babel-R0.16.1-oxygen.zip">Zipped p2 repository for Oxygen (131 MB)</a><br />
				</td>
			</tr>
		</table>

		<h2>Important notes for Babel Language Packs R0.16.1</h2>
		<ul>
		<li>Babel Language Packs for older release trains can be found at <a href="https://archive.eclipse.org/technology/babel/index.php">Eclipse Babel Project Archived Downloads</a>.
		<li>Not all of the existing Eclipse Foundation Projects are included in Babel yet.
			If you encounter a project that you would like to help translate, <a href="/projects">tell that project's leaders</a>.
		<li>Not all languages are included in Babel yet.
			Request an additional language through <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?bug_file_loc=http%3A%2F%2F&bug_severity=normal&bug_status=NEW&comment=&contenttypeentry=&contenttypemethod=autodetect&contenttypeselection=text%2Fplain&data=&description=&flag_type-1=X&flag_type-2=X&flag_type-4=X&flag_type-6=X&form_name=enter_bug&maketemplate=Remember%20values%20as%20bookmarkable%20template&op_sys=Linux&priority=P3&product=Babel&rep_platform=PC&short_desc=Please%20add%20a%20new%20language%20to%20Babel&version=unspecified">Bugzilla</a>.
		</ul>

		<h2>Babel Pseudo Translations</h2>
		<p>Babel Pseudo Translations are a very useful tool for globalization testing of Eclipse projects.</p>
		<p>See the <a href="https://www.eclipse.org/articles/Article-babel-pseudo-translations/article.html">"Babel Pseudo Translations"</a> Eclipse Corner Article for step-by-step instructions and examples describing what are the Babel Pseudo Translations, where to download them, how to install them, and how to launch Eclipse in Babel Pseudo Translations.</p>
		<p>Eclipse developers can use the Babel Pseudo Translations to verify the translatability of their projects and make sure Eclipse excels in national language support.</p>

		<h2>Other downloads</h2>
		<ul>
		<li><a href="https://build.eclipse.org/technology/babel/babel_language_packs/">Developer and Nightly Builds</a></li>
		<li><a href="https://archive.eclipse.org/technology/babel/index.php">Eclipse Babel Project Archived Downloads</a></li>
		<li><a href="/downloads/download.php?file=/technology/babel/babel-database.sql.gz">Babel Server weekly mysqldump</a></li>
		<li><a href="/downloads/download.php?file=/technology/babel/eclipse_properties-R-3.5.tar.gz">Eclipse Platform R-3.5 English .properties files</a></li>
		<li><a href="/downloads/download.php?file=/technology/babel/eclipse_properties-R-3.4.tar.gz">Eclipse Platform R-3.4 English .properties files</a></li>
		<li><a href="/downloads/download.php?file=/technology/babel/eclipse_properties-R-3.3.1.tar.gz">Eclipse Platform R-3.3.1 English .properties files</a></li>
		</ul><br />
	</div>
</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>