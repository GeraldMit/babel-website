<p>Notes from Babel  Project BOF – March 19, 2008</p>
<p>Types of Editors:</p>
<p>&nbsp;</p>
<ol start="1" type="1">
  <li>Translation       Server Demo</li>
  <ol start="1" type="a">
    <li>How        can a contributor tell whether or not the translation string is        applicable for all versions of Eclipse when translating?</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>We should verify this before translating</li>
    </ol>
  </ol>
</ol>
<ol start="1" type="1">
  <ol start="2" type="a">
    <li>How        does a user download and install a new language pack?</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>ISSUE:</li>
      <ol>
        <li>In  the future we will bundle up only the plugins that they need – we currently  force people to download all projects</li>
        <ol>
          <li>I.e.  WTP Russian language pack by itself</li>
        </ol>
      </ol>
    </ol>
  </ol>
</ol>
<ol start="1" type="1">
  <ol start="3" type="a">
    <li>What        kind of infrastructure is behind the Babel Translation Server?</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>User wants to include another open source project</li>
    </ol>
  </ol>
</ol>
<ol start="1" type="1">
  <ol start="4" type="a">
    <li>Quality        Control – Ideas:</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>RSS feed – you can find out what happened to your  language</li>
      <ol>
        <li>Have  a team to vote on translations or revert bad translations, etc</li>
        <li>Committers  or maybe someone that has been doing a lot of work, we can vote someone as a  champion of that language</li>
      </ol>
      <li>Dictionary of words that have already been translated  by other people. This will create a sense of consistency</li>
      <li>Wikipedia.org system</li>
      <li>Talk to Localization Groups (from Eclipse Foundation)</li>
    </ol>
  </ol>
</ol>
<ol start="1" type="1">
  <ol start="5" type="a">
    <li>Can        people request different languages to be translated?</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>Open a bug</li>
    </ol>
  </ol>
</ol>
<ol start="2" type="1">
  <li>Runtime       Editor Demo</li>
  <ol start="1" type="a">
    <li>Where        do the translation strings go?</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>Goes into a delta file which should (in the future) go  to the Babel  server</li>
      <ol>
        <li>idea  is that the end user should not know where the delta file is</li>
        <li>ISSUE:  what if a translator using this editor doesn’t have internet?</li>
        <ol>
          <li>Maybe  create a function to do that</li>
          <li>If  you hover over the key (in the dialogue box) the path will appear for the file</li>
          <li>Export  translations (Maylan code)</li>
        </ol>
      </ol>
    </ol>
  </ol>
</ol>
<ol start="3" type="1">
  <li>Message       Editor</li>
  <ol start="1" type="a">
    <li>Used        to edit all Property files</li>
    <li>Really        helpful for programmers</li>
    <li>Only        one language will be displayed at a time (from English)</li>
    <li>ISSUE:</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>The key being translated doesn’t show the context of  each key</li>
      <ol>
        <li>This  makes it hard to actually do the translation</li>
        <ol>
          <li>We  need some type of UI to traces the key back to the code or give information on  that particular string</li>
        </ol>
      </ol>
    </ol>
  </ol>
</ol>
<ol start="4" type="1">
  <li>MISC       Items:</li>
  <ol start="1" type="a">
    <li>ISSUE:        Incentives for people to join/help</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>We need to come up w/ some type of system to give  people incentive to help and contribute </li>
    </ol>
  </ol>
</ol>
<ol start="4" type="1">
  <ol start="2" type="a">
    <li>Strings        NOT to be translated</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>Create a UI to show which strings not to translate</li>
      <li>Should bring up a wizard to externalize the string</li>
      <ol>
        <li>Helps  you figure out which ones being with a %</li>
      </ol>
    </ol>
  </ol>
</ol>
<ol start="4" type="1">
  <ol start="3" type="a">
    <li>Add        Notification to show which strings that were already translated have been        changed</li>
    <li>IBM        has translation tools for 3.3</li>
  </ol>
</ol>
<ol>
  <ol>
    <ol>
      <li>We want the Open Source community to help and start  this project and develop the tools we need</li>
      <li>We don’t want to be reliant on any one company</li>
    </ol>
  </ol>
</ol>
<p>&nbsp;</p>
<p>TO FIND OUT MORE INFORMATION, PLEASE GO TO:</p>
<p><a href="http://www.eclipse.org/babel">www.Eclipse.org/babel</a></p>
<ol start="1" type="1">
  <li>Contact       us at the newsgroup</li>
  <li>Look       at our bugs</li>
  <li>Open       new bugs</li>
  <li>Translate</li>
</ol>
