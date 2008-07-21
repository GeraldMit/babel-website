<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Contributing large translations sets to Babel";
	$pageKeywords	= "NLPack, translation, .properties, submit, contribute, donate, give";
	$pageAuthor		= "Denis Roy";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<link href="../babel.css" rel="stylesheet" type="text/css" />
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>To contribute large translation sets (translated .properties files) to Babel:</p>
		<ul>
		<li>Make sure your directory structure is laid out as per the recommendation below.</li>
		<li>Try to use the UTF-8 encoding for all files</li> 
		<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Babel&component=Server">Open a Bug against Babel/Server</a></li>
		<li>Attach your contribution ZIP file to the bug.</li>
		<li>State any details regarding the contribution:</li>
			<ul><li>which individuals or corporate entities have participated</li>
			<li>copyright information</li>
			<li>software used to generate the translations</li>
			<li>specific file encodings</li>
			<li>etc...</li></ul>
		</ul>
		<p>Once attached, the Babel team will review your contribution and submit it through the Eclipse Legal process.  If it is approved, your contribution will be imported into the Babel server and included in the subsequent nightly build.</p>
		<br /><br />
		<div class="sectionTitle">Recommended directory structure</div>
		<p>Translated .properties files should be structured as below for importing.  Replace <language> with the ISO language code (and optional locale).</p>
		<pre>
language\
	eclipse\
		plugins\
			org.eclipse.pluginName\
				plugin.properties
				org\
			    eclipse\
			    	etc...
language\
	eclipse\
		plugins\
			org.eclipse.pluginName\
				plugin.properties
				org\
			    eclipse\
			    	etc...
</pre>
		<p>Here is an example of a French translation set:<br />
		<img src="babel1.png" alt="Babel directory structure" /></p>
		<br /><br /> 
	</div>
</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
