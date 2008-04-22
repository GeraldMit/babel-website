<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>Attendees: <br />
  - Kit <br />
  - Daniel <br />
  - Margaret <br />
  -   Jeff <br />
  - Gabe <br />
  - Pat <br />
  -   Denis <br />
  <br />
  Minutes: <br />
  - Bug 227936 submitted to request the Platform Releng   team to provide a link on the Eclipse Project Download page to the Babel   Language Pack Update Site. Hopefully that will lead to more exposure of the   Babel project and generate more interest in contributing translations and   enhancing the Babel project. <br />
  - Gabe   added a
  <FORM action="https://bugs.eclipse.org/bugs/process_bug.cgi" method="post">
  'babel needs help' page to the babel server. Please   review
  <FORM method="post" action="https://bugs.eclipse.org/bugs/process_bug.cgi">
and make suggestions for improvements: http://babel.eclipse.org/staging/help_babel.php </p>
<p><br />
  - The language IDs on the staging server are not in sync   with the live server. It's causing some problems during testing on the staging   server. Denis will synchronize the databases. <br />
  - Bug 222221 (percentage complete for some file are showing more than   100%) should be fixed by now. Reopen the bug if you still see problems. <br />
  - Language packs for RCP apps: Daniel will try   to write some scripts to pull the language packs into their builds. Will open   bugs if they have problems. <br />
  - Pseudo   translation language packs (bug 217339): Denis will try to implement   this. <br />
  - Jeff thinks that it's helpful if   non-translatable strings or files are not included in the nightly properties   files zip. We should work on bug 226378 (Non-translatable strings or files   should not be presented to user for translation) when resource is available,   which will in turn cause those non-translatable strings or files to be excluded   from the nightly properties files zip. </p>
</body>
</html>
