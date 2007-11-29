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
	$pageTitle 		= "Eclipse Babel Project Messages Editor";
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

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>
		From an email posted to babel-dev by Pascal Essiembre:
		</p>
		<p>
		Like discussed in last Babel meeting, here is a list of features for the 
		ResourceBundle editor plugin, comparing the Babel rewrite to its SourceForge 
		equivalent.  Vision for the plugin can be found further down.   
		</p>
		<p> 
		Please note that until all features have been ported over, I would not 
		consider the plugin “stable”.  I will keep you posted on the porting 
		progress through the mailing list.</p>
		<p>
		<h3>Implemented</h3>
		(Features found in both SourceForge version AND Babel version):
		<ul>
			<li>Can edit values of all locales at once for a given key.</li>
			<li>Keys are always sorted for ease of reference.</li>
			<li>Can report missing and duplicate values (still in progress).</li>
			<li>Non-ASCII character conversion to/from Unicode. Not yet configurable.</li>
			<li>Multiple properties file formatting options (key grouping, line wrapping, etc).  Not yet configurable.</li> 
			<li>Can toggle between flat and hierarchical view of keys.</li>
		</ul>
		
		<h3>Not yet ported over</h3>
		(found in SourceForge version only for now):
		<ul>
			<li>Supports Eclipse "nl" structure for I18N of plugins.</li>
			<li>All refactoring options (renaming, deleting, copying, keys or group of keys).</li>
			<li>Wizard for creating new resource bundles.</li>
			<li>Preferences pages (formatting options, performance tuning, etc)</li>
			<li>Reporting of similar values.</li>
		</ul>
		
		<h3>New features</h3>
		(found in Babel version only):
		<ul>
			<li>Use of the problems view to report validation warnings (needs polishing)</li>
			<li>Folding of locale fields when translating, to clean up the editor when dealing with many locales.</li>
		</ul> 
		
		<h3>Vision</h3>
		My vision for this plugin has always been to be a front-end desktop utility/application of choice for all translation purposes when developing applications.   To accomplish this, I envision this for the plugin: 
		<ul>
			<li>Integrate message key refactoring with several referencing file types.  For example, renaming a key in the Babel Editor would not only update it for all related properties files, but also renamed its references found in other files such as Java, JSP, etc.</li>
			<li>Provide the optional ability to configure the editor to hookup with online translation services to facilitate translation.  For example, when editing text for any locale, you could have a button next to the text field that says “Translate from…” where the corresponding value in the selected locale (for the same key) is sent for translation, and the text field is populated with the result.</li>
			<li>Support several other repository formats.  The editor already abstracts the actual storage mechanism for messages.  As long a key/value concept is used for internationalization, any storage mechanism can be supported.  Some coming to mind:  XML files, relational databases, web services.</li>
			<li>Being able to run the plugin as stand-alone RCP application for translators.   This is a frequent request I get that translators could benefit from using the same interface as developers for translating, without having to install a full-blown IDE. </li>
			<li>The formatting options (preferences) should also be made easily exportable so that developers and translators can share and use the same company standards (I have received complaints about different formatting options causing CVS synchronization issues).</li>
		</ul>
		</p>
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
