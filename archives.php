<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
$App = new App();
$Nav = new Nav();
$Menu = new Menu();
include($App->getProjectCommon());

$pageTitle = "Eclipse Babel Project Archived Downloads";
$pageKeywords = "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization,archive";
$pageAuthor = "Kit Lo";

$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
<!--
		<h2>Babel Language Pack Zips and Update Sites - R0.8.1 (2010/12/11)</h2>
		<table>
			<tr>
				<td rowspan="2" valign="top"><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td><b>Babel Language Pack Zips</b></td>
			</tr>
			<tr>
				<td>
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.8.1/helios.php">Helios</a> | 
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.8.1/galileo.php">Galileo</a> | 
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.8.1/ganymede.php">Ganymede</a> |
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.8.1/europa.php">Europa</a>
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Helios</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.8.1/helios<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Galileo</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.8.1/galileo<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Ganymede</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.8.1/ganymede<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Europa</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.8.1/europa<br />
				</td>
			</tr>
		</table>
-->
		<h2>Babel Language Pack Zips and Update Sites - R0.8.0 (2010/08/14)</h2>
		<table>
			<tr>
				<td rowspan="2" valign="top"><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td><b>Babel Language Pack Zips</b></td>
			</tr>
			<tr>
				<td>
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.8.0/helios.php">Helios</a> | 
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.8.0/galileo.php">Galileo</a> | 
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.8.0/ganymede.php">Ganymede</a> |
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.8.0/europa.php">Europa</a>
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Helios</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.8.0/helios<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Galileo</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.8.0/galileo<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Ganymede</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.8.0/ganymede<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Europa</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.8.0/europa<br />
				</td>
			</tr>
		</table>

		<h2>Babel Language Pack Zips and Update Sites - R0.7.1 (2009/11/21)</h2>
		<table>
			<tr>
				<td rowspan="2" valign="top"><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td><b>Babel Language Pack Zips</b></td>
			</tr>
			<tr>
				<td>
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.7.1/galileo.php">Galileo</a> | 
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.7.1/ganymede.php">Ganymede</a> |
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.7.1/europa.php">Europa</a>
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Galileo</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.7.1/galileo<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Ganymede</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.7.1/ganymede<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Europa</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.7.1/europa<br />
				</td>
			</tr>
		</table>

		<h2>Babel Language Pack Zips and Update Sites - R0.7.0 (2009/06/20)</h2>
		<table>
			<tr>
				<td rowspan="2" valign="top"><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td><b>Babel Language Pack Zips</b></td>
			</tr>
			<tr>
				<td>
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.7.0/galileo.php">Galileo</a> | 
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.7.0/ganymede.php">Ganymede</a> |
					<a href="http://archive.eclipse.org/technology/babel/babel_language_packs/R0.7.0/europa.php">Europa</a>
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Galileo</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.7.0/galileo<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Ganymede</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.7.0/ganymede<br />
				</td>
			</tr>
			<tr>
				<td><img src="http://dev.eclipse.org/large_icons/actions/go-bottom.png" /></td>
				<td>
					<b>Babel Language Pack Update Site for Europa</b><br />
					http://archive.eclipse.org/technology/babel/update-site/R0.7.0/europa<br />
				</td>
			</tr>
		</table>
		<br />
	</div>

EOHTML;
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
