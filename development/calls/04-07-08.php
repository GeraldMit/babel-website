<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
p.MsoNormal {
margin:0in;
margin-bottom:.0001pt;
font-size:12.0pt;
font-family:"Times New Roman";
}
li.MsoNormal {
margin:0in;
margin-bottom:.0001pt;
font-size:12.0pt;
font-family:"Times New Roman";
}
-->
</style>
</head>

<body>
<p class="MsoNormal"><strong>Eclipse  Babel Project  Meeting: 4/07/08 (cont’d from 3/31/08)</strong></p>
<p class="MsoNormal"><strong>Attendees:</strong></p>
<ul type="disc">
  <li class="MsoNormal">Chris Nguyen</li>
  <li class="MsoNormal">Kit        Lo </li>
  <li class="MsoNormal">Pat Huff</li>
  <li class="MsoNormal">Pascal Essiembre</li>
  <li class="MsoNormal">Margaret Wong</li>
  <li class="MsoNormal">Gabe O’Brien</li>
  <li class="MsoNormal">Denis Roy</li>
  <li class="MsoNormal">Nigel Westbury</li>
  <li class="MsoNormal">Jeff</li>
</ul>
<p class="MsoNormal" style="margin-left:.25in;">&nbsp;</p>
<p class="MsoNormal">&nbsp;</p>
<ul>
<ul>
  <li>Adobe Meeting</li>
</ul>
<ul>
  <li>Went very well</li>
  <ul>
    <li>Quality of translations is a concern</li>
  </ul>
  <li>Once Adobe gets the 3.4 files they’ll be able to see  how they’re doing</li>
  <li>Denis zipped up the files for 3.3</li>
  <ul>
    <li>Once 3.4 is tagged as a release, we’ll have to figure  out another way</li>
  </ul>
</ul>
<ul>
  <li>EclipseCon Working Session Topics</li>
</ul>
<ul>
  <li>Large donations to Babel – How should we handle those?</li>
  <ul>
    <li>Current process: People attached donations to bugzilla</li>
    <ul>
      <li>Contributions are automatically under EPL</li>
      <li>When they are large contributions, they are given to  legal</li>
      <li>Works pretty well, we may just have to document this</li>
      <ul>
        <li><strong>ACTION ITEM:</strong> Denis to document the process to avoid business outage and scalability issues</li>
      </ul>
    </ul>
  </ul>
  <li>Legalities</li>
  <ul>
    <li>Should we include a translation form with each  contribution?</li>
    <ul>
      <li>We don’t need to worry about this</li>
    </ul>
  </ul>
  <li>Quality of Translated Code</li>
  <ul>
    <li>Goal: We have to have committers eventually verify the  translations</li>
    <ul>
      <li>Options:</li>
      <ul>
        <li>Perhaps have a status level for committers to verify  code (i.e. eBay)</li>
        <li>Voting? </li>
        <li>Change sets – showing people what has changed, verify</li>
        <li>How do we mark incorrect Translations?</li>
        <ul>
          <li>Suggestion – Pseudo Translation: Special tagging unique  strings that are incorrect using index numbers</li>
        </ul>
      </ul>
      <li>Until we build up the community, it will be very hard  to create a system to check the quality of code</li>
      <ul>
        <li>We should first start with voting – very long term</li>
      </ul>
      <li><strong>ACTION ITEMS</strong>:  include or recruit people to implement</li>
      <ul>
        <li>Chris and Kit to talk offline to recruit people from  Google Summer of Code – Google pays students/people. We need to submit a very  articulate document to request a project</li>
        <ul>
          <li>Denis and Gabe volunteer to be mentors</li>
        </ul>
      </ul>
    </ul>
  </ul>
  <li>Translating the same strings for each language at one  time</li>
  <ul>
    <li>Denis submitted a patch for this</li>
    <ul>
      <li>Gabe looked at it and it looks good</li>
    </ul>
  </ul>
  <li>Promote the project individually – How? – <strong>STANDING ITEM</strong></li>
  <ul>
    <li>Denis has been blogging about this</li>
    <ul>
      <li>PlanetEcilpse.org</li>
      <li>Link it to meeting minutes</li>
    </ul>
    <li>Open Source Convention in Asia</li>
    <ul>
      <li>Might not happen – very doubtful</li>
    </ul>
    <li>Eclipse Summit Europe – November</li>
    <ul>
      <li>Get Ralph to blog about us</li>
    </ul>
    <li>Chinese User Groups</li>
  </ul>
  <li>PHP Code Contribution – we need contributors</li>
  <ul>
    <li>We need to get more people into the project</li>
  </ul>
</ul>
<ul>
  <li>EclipseCon BOF Topics</li>
</ul>
<ul>
<ul>
  <li>Translation Server</li>
</ul>
<ul>
  <li>How can a contributor tell whether or not the  translation string is applicable for all versions of Eclipse when translating?</li>
  <ul>
    <li>We  need to think of a better UI to answer this question</li>
  </ul>
  <li>How  does a user download and install a new language pack by individual project?</li>
  <ul>
    <li>Bug  open for this for Web API’s</li>
    <li>Motion:  Get projects to build their own language packs</li>
    <ul>
      <li>Project  language packs should be their own responsibility</li>
      <ul>
        <li>We  have to spread the news to tell them to do this on their own</li>
      </ul>
      <li>Enable  Web API -  people could consume the dump  and build their own language pack – move up in priority – maybe a do a read  only for now?</li>
      <ul>
        <li>Nigel  opened this bug already</li>
      </ul>
    </ul>
  </ul>
  <li>Quality  Control</li>
  <ul>
    <li>RSS  feed – you can find out what happened to your language</li>
    <ul>
      <li><strong>ACTION ITEM:</strong> Kit to open up a bug for  this</li>
    </ul>
    <li>Dictionary  of words that have already been translated by other people. This will create a  sense of consistency</li>
    <li>Wikipedia.org  system</li>
    <ul>
      <li><strong>ACTION ITEM: </strong>Denis to add links to  translation tool, to go to mailing list to discuss there.</li>
    </ul>
    <li>Talk  to Localization Groups (from Eclipse Foundation)</li>
    <ul>
      <li>Eclipse  foundation started this group</li>
      <li><strong>ACTION ITEM: </strong>Kit to search for regional  communities within the wiki and mailing lists – get in touch with these  communities and promote Babel</li>
    </ul>
  </ul>
</ul>
<ul>
  <li>Runtime  Editor</li>
</ul>
<ul>
  <li>Where do the translation strings go?</li>
  <ul>
    <li>Internet  Issue</li>
    <li>Nigel  may have opened up a bug to have a better UI to extract the translations in the  file – Kit to remind him.</li>
  </ul>
</ul>
<ul>
  <li>Message Editor – <strong>RESUMED  HERE – 4/7/08</strong></li>
</ul>
<ul>
  <li>The key being translated doesn’t show the context of  each key</li>
  <ul>
    <li>This  makes it hard to actually do the translation</li>
    <ul>
      <li>We  need some type of UI to traces the key back to the code or give information on  that particular string</li>
      <ul>
        <li>General  problem for the translation tool, we cannot solve this right away</li>
        <li>Work  around: Use Runtime Editor</li>
      </ul>
    </ul>
  </ul>
</ul>
<ul>
  <li>Incentives  for people to join</li>
</ul>
<ul>
  <li>Most contributions page</li>
  <ul>
    <li>Denis  is working on a page that pulls down the top 10 translators</li>
  </ul>
  <li>Put  something on the project page that we’re looking for code contributions (not  only language contributions)</li>
  <ul>
    <li><strong>ACTION ITEM:  Gabe to do this</strong></li>
  </ul>
  <li>Eclipse  Platform Page</li>
  <ul>
    <li>We  should work with the platform team to have a link to Babel there – these are high traffic pages  and if people are looking, these pages will get hit first</li>
    <ul>
      <li>URL:  download.eclipse.org/eclipse</li>
      <ul>
        <li>Link  for 3.2.1 page but no link for Babel </li>
      </ul>
      <li><strong>ACTION ITEM: Kit to open a bug against  Platform Team for this</strong></li>
    </ul>
  </ul>
  <li>Start  adding <strong>“Help Wanted”</strong> for bugs when  we create a bug that needs help</li>
  <li>Update  site for the Messages editor – may grab interest for developers</li>
  <ul>
    <li>We  have an update site for language packs – rebuilt every week</li>
    <ul>
      <li>Babel page in the  download section</li>
    </ul>
  </ul>
</ul>
<ul>
  <li>Strings  not to be translated</li>
</ul>
<ul>
  <li>Create a UI to show which strings not to translate</li>
  <li>Should  bring up a wizard to externalize the string</li>
  <ul>
    <li>Helps  you figure out which ones being with a %</li>
    <li>Eclipse  offers way to externalize strings</li>
    <ul>
      <li>Maybe  we can tie this to the message editor</li>
      <li>Server  code has a bug that the string that shouldn’t be localized</li>
      <li>Flag  a string that it should be the same across your languages</li>
    </ul>
    <li>We  may have to improve the way code is imported into the server so that it is not  presented to the translators</li>
    <ul>
      <li><strong>ACTION ITEM: Kit will open a bug to improve  this process and will mention the server code to tie them together</strong></li>
    </ul>
  </ul>
</ul>
<ul>
  <li>Add Notification to show which strings that were  already translated have been changed</li>
</ul>
<ul>
  <li>Once a day we go through all of the day’s changes and  flag people which strings have been translated to go back and check it</li>
  <li>Should  it be once or day? Or automated? </li>
  <li><strong>ACTION ITEM: Margaret to open the bug for  this.</strong></li>
</ul>
<ul>
  <li>Additional  Topics:</li>
</ul>
<ul>
<ul>
  <li>Web API</li>
</ul>
<ul>
  <li>Some  people need read access to the data</li>
  <ul>
    <li>Would  we be using web services?</li>
    <ul>
      <li>Services  to access the language database to get problematic access to DB</li>
      <li><strong>ACTION ITEM: Pascal to update the bug about  this – we need an API into the DB to write to this if you have a bugzilla  account: Bug #223036</strong></li>
    </ul>
  </ul>
</ul>
<ul>
  <li>Bugzilla</li>
</ul>
<ul>
<ul>
  <ul>
    <li>Put  some inboxes into your watch list for Babel  related messages</li>
    <li>Within  Bugzilla, go to “Preferences” link (bottom of the page) that will lead you to  “email preferences”
</li>
  </ul>
</ul>
<blockquote>
<p>
    <ul>
  Within  there you can go to the “watch list”</p>
  </blockquote>
</body>
</html>
