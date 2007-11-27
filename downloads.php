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
	$pageTitle 		= "Eclipse Babel Project";
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
		SwissPost - PostFinance has been kind enough to provide translations in French, German,
		and Italian for the following Eclipse 3.3 plugins:
		
		<pre>
			List of Plugins:
org.eclipse.core.contenttype.nl1_3.2.0.v200609270227.jar	
org.eclipse.core.expressions.nl1_3.2.1.v200609270227.jar	
org.eclipse.core.filebuffers.nl1_3.2.1.v200609270227.jar	
org.eclipse.core.filesystem.nl1_1.0.0.v200609270227.jar	
org.eclipse.core.jobs.nl1_3.2.0.v200609270227.jar	
org.eclipse.core.resources.nl1_3.2.1.v200609270227.jar	
org.eclipse.core.runtime.compatibility.auth.nl1_3.2.0.v200609270227.jar	
org.eclipse.core.runtime.compatibility.nl1_3.1.100.v200609270227.jar	
org.eclipse.core.runtime.nl1_3.2.0.v200609270227.jar	
org.eclipse.core.variables.nl1_3.1.100.v200609270227.jar	
org.eclipse.equinox.common.nl1_3.2.0.v200609270227.jar	
org.eclipse.equinox.preferences.nl1_3.2.1.v200609270227.jar	
org.eclipse.equinox.registry.nl1_3.2.1.v200609270227.jar	
org.eclipse.help.appserver.nl1_3.1.100.v200609270227.jar	
org.eclipse.help.base.nl1_3.2.1.v200609270227.jar	
org.eclipse.help.nl1_3.2.1.v200609270227.jar	
org.eclipse.help.ui.nl1_3.2.0.v200609270227.jar	
org.eclipse.help.webapp.nl1_3.2.1.v200609270227	
org.eclipse.jface.databinding.nl1_1.0.0.v200609270227.jar	
org.eclipse.jface.nl1_3.2.1.v200609270227.jar	
org.eclipse.jface.text.nl1_3.2.1.v200609270227.jar	
org.eclipse.platform.doc.isv.nl1_3.2.1.v200609270227.jar	
org.eclipse.platform.doc.user.nl1_3.2.1.v200609270227.jar	
org.eclipse.platform.nl1_3.2.0.v200609270227	
org.eclipse.platform.source.nl1_3.2.1.v200609270227	
org.eclipse.rcp.nl1_3.2.0.v200609270227.jar	
org.eclipse.rcp.source.nl1_3.2.1.v200609270227	
org.eclipse.search.nl1_3.2.1.v200609270227.jar	
org.eclipse.swt.nl1_3.2.1.v200609270227.jar	
org.eclipse.text.nl1_3.2.0.v200609270227.jar	
org.eclipse.ui.browser.nl1_3.2.0.v200609270227.jar	
org.eclipse.ui.cheatsheets.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.console.nl1_3.1.100.v200609270227.jar	
org.eclipse.ui.editors.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.externaltools.nl1_3.1.101.v200609270227.jar	
org.eclipse.ui.forms.nl1_3.2.0.v200609270227.jar	
org.eclipse.ui.ide.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.intro.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.intro.universal.nl1_3.2.1.v200609270227	
org.eclipse.ui.navigator.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.navigator.resources.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.presentations.r21.nl1_3.2.0.v200609270227.jar	
org.eclipse.ui.views.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.views.properties.tabbed.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.workbench.nl1_3.2.1.v200609270227.jar	
org.eclipse.ui.workbench.texteditor.nl1_3.2.0.v200609270227.jar	
</pre>
		</p>
		

	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
