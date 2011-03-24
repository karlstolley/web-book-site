<?php
include($_SERVER['DOCUMENT_ROOT'].'/book/includes/functions.php');

$swdbpage = array(
  'title'       => 'Examples',
  'description' => 'Live examples from How to Design and Write Web Pages Today.',
  'swfobject'   => false,
  'js'          => '',
  'bodyclass'   => 'examples'
);

swdb_header($swdbpage);

?>
  <div id="promo">
    <div class="summary">
      <h2>Live Examples</h2>
      <p>
        Links and live examples from the book and additional, supplemental material for each chapter.
      </p>
    </div>
    <!--
      <div class="feature">
      </div>
    -->
  </div>

  <div id="content">

    <div id="main">
      <!--NB: Glossary mentions additional terms to be found on the companion site-->
      <div id="part-i">
      <h2>Chapter 1: Why Write for the Web?</h2>
        <div class="chapter">
          <h3>Downloads and Utilities</h3>
          <ul>
            <li><a href="http://tweetdeck.com">TweetDeck</a> (Cross-platform social networking application)</li>
          </ul>
          <h3>Websites</h3>
          <ul>
            <li><a href="http://www.onguardonline.gov/">On Guard Online</a> (Privacy and safety)</li>
            <li><a href="http://twitter.com/">Twitter</a> (Microblogging)</li>
            <li><a href="http://diigo.com/">Diigo</a> (Social bookmarking)</li>
            <li><a href="http://www.facebook.com/">Facebook</a> (Social networking)</li>
            <li><a href="http://www.myspace.com/">MySpace</a> (Social networking)</li>
            <li><a href="http://www.linkedin.com/">LinkedIn</a> (Social networking)</li>
            <li><a href="http://picasa.google.com/">Picasa</a> (Photo sharing)</li>
            <li><a href="http://www.flickr.com/">Flickr</a> (Photo sharing)</li>
            <li><a href="http://www.youtube.com/">YouTube</a> (Video sharing)</li>
            <li><a href="http://www.viddler.com/">Viddler</a> (Video sharing)</li>
          </ul>
        </div>
      <h2>Chapter 2: Reading the Web</h2>
        <div class="chapter">
          <h3>Downloads and Utilities</h3>
          <ul>
            <li><a href="http://www.mozilla.com/firefox">Mozilla Firefox</a> (Open-source Web browser)</li>
            <li><a href="https://addons.mozilla.org/firefox/addon/60">Chris Pederick’s Web Developer Add-on for Firefox</a> (Firefox add-on)</li>
            <li><a href="http://www.google.com/chrome/">Google Chrome</a> (Webkit-based browser)</li>
            <li><a href="https://chrome.google.com/extensions/detail/bfbameneiokkgbdmiekhjnmfkcnldhhm">Chris Pederick’s Web Developer Add-on for Google Chrome</a> (Chrome extension)</li>
            <li><a href="http://www.opera.com/">Opera</a> (Web browser)</li>
            <li><a href="http://www.apple.com/safari/download/">Safari for Windows</a> (Webkit-based browser)</li>
            <li><a href="http://expression.microsoft.com/en-us/dd565874.aspx">Microsoft Expression Web SuperPreview</a> (Internet Explorer testing; requires Windows/IE8)</li>
            <li><a href="http://home.pacific.net.sg/~kennethkwok/lynx/">Lynx for Windows</a> (Text-only Web browser)</li>
            <li><a href="http://www.apple.com/downloads/macosx/unix_open_source/lynxtextwebbrowser.html">Lynx for Mac OS X</a> (Text-only Web browser)</li>
          </ul>
        </div>
      <h2>Chapter 3: Creating Web Content</h2>
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="http://www.gimp.org">GIMP: GNU Image Manipulation Program</a> (Cross-platform free and open-source graphics software)</li>
          <li><a href="http://audacity.sourceforge.net">Audacity</a> (Cross-platform free and open-source audio software)</li>
          <li><a href="http://fixounet.free.fr/avidemux/">Avidemux</a> (Cross-platform free and open-source video software)</li>
        </ul>
        <h3>Websites</h3>
        <ul>
          <li><a href="http://www.blogarithms.com/index.php/mp3secrets/">The Secret Lives of MP3 Files</a> (Guidance in MP3 audio preparation)</li>
        </ul>
        </div>
      <h2>Chapter 4: Standards-Based Web Pages</h2>
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="http://validator.w3.org">W3C Markup Validation Service</a> (XHTML/HTML validator)</li>
          <li><a href="http://jigsaw.w3.org/cssvalidator/">W3C CSS Validation Service</a> (CSS validator)</li>
        </ul>
        <h3>Websites</h3>
        <ul>
          <li><a href="http://www.webpagesthatsuck.com/">Web Pages that Suck</a> (Gallery of bad design)</li>
          <li><a href="http://www.webstandards.org/">Web Standards Project (WaSP)</a> (Standards advocacy and education group)</li>
          <li><a href="http://www.w3.org/">World Wide Web Consortium (W3C)</a> (Group behind the recommendations that make up many Web standards)</li>
          <li><a href="http://www.csszengarden.com/">CSS Zen Garden</a> (Site of CSS designs using the exact same XHTML)</li>
        </ul>
        </div>
      <h2>Chapter 5: Preparing to Write and Design</h2>
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="http://portableapps.com">PortableApps.com</a> (Free and open-source Windows applications that can be run on a USB drive)</li>
          <li><a href="http://www.freesmug.org/portableapps/">FreeSMUG.org</a> (Free and open-source Mac OS X applications that can be run on a USB drive)</li>
          <li><a href="http://notepad-plus-plus.org/">Notepad++ (“Notepad plus”)</a> (Recommended free text editor for Windows; can be run from USB drive)
          <p>
            Download the <strong>zip package</strong> of Notepad++ (not the installer);
            when you unzip it, there will be two folders: <code>ansi</code> and <code>unicode</code>. Throw the <code>ansi</code> folder away, and move
            the <code>unicode</code> folder to your desktop or USB drive. The 
            <code>Notepad++</code> program is inside of the <code>unicode</code> folder
            (you can rename <code>unicode</code> to <code>notepad++</code> if you wish).
          </p>
          </li>
          <li><a href="http://www.barebones.com/products/textwrangler/">TextWrangler</a> (Recommended free text editor for Mac OS X; also <a href="http://itunes.apple.com/us/app/textwrangler/id404010395?mt=12">available via the Mac App Store</a>)</li>
          <li><a href="http://winscp.net/">WinSCP</a> (Recommended free and open-source FTP/SFTP client for Windows)</li>
          <li><a href="http://cyberduck.ch/">Cyberduck</a> (Recommended free and open-source FTP/SFTP client for Mac OS X</li>
          <li><a href="http://www.mozilla.com/firefox">Mozilla Firefox</a> (Recommended baseline development browser)</li>
          <li><a href="https://addons.mozilla.org/firefox/addon/60">Chris Pederick’s Web Developer Add-on for Firefox</a> (Recommended Firefox add-on for Web design and development)</li>
        </ul>
        </div>
      </div>

      <div id="part-ii">
      <h2>Chapter 6: Accessibility</h2>
        <div class="chapter">
        <h3>Websites</h3>
          <ul>
            <li><a href="http://www.w3.org/WAI/">Web Accessibility Initiative (WAI)</a> (W3C organization)</li>
            <li><a href="http://www.w3.org/WCAG/">Web Content Accessibility Guidelines (WCAG)</a> (W3C recommendation)</li>
            <li><a href="http://www.alistapart.com/articles/tohellwithwcag2">“To Hell with WCAG 2”</a> (<cite>A List Apart</cite> article by Joe Clarke)</li>
            <li><a href="http://www.section508.gov/">Section 508</a> (United States government IT accessibility)</li>
            <li><a href="http://access-board.gov/sec508/standards.htm">Section 508 guidelines and standards</a> (United States Access Board)</li>
          </ul>
        </div>
      <h2>Chapter 7: Usability</h2>
        <div class="chapter">
          <!--Nothing really in chapter, except for Nielsen stuff, which, blech. Bonus things here?-->
        </div>
      <h2>Chapter 8: Sustainability</h2>
        <div class="chapter">
          <!--Git stuff; mod_rewrite?-->
        </div>
      </div>

      <div id="part-iii">
      <h2>Chapter 9: Structured Content: XHTML Overview</h2>
        <div class="chapter">
        <h3>Websites</h3>
        <ul>
          <li><a href="http://htmldog.com/reference/htmltags/">HTML Dog HTML Tag Reference</a> (Language reference)</li>
          <li><a href="http://reference.sitepoint.com/html">SitePoint HTML Reference</a> (Language Reference)</li>
          <li><a href="http://microformats.org">Microformats.org</a> (Language reference)</li>
        </ul>
        <h3>Examples</h3>
          <ul>
            <li>XHTML Strict DOCTYPE (p. 94):
            <pre class="prettyprint">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;</pre>
            </li>
            <li>The Global Structure of Web Pages (p. 96):
            <pre class="prettyprint">&lt;html&gt;&#10;  &lt;head&gt;&#10;  &lt;/head&gt;&#10;  &lt;body&gt;&#10;  &lt;/body&gt;&#10;&lt;/html&gt;</pre>
            
            </li>
            <li>Content Type and Character Encoding <code class="prettyprint">&lt;meta /&gt;</code> Tag (p. 97):
            <pre class="prettyprint">&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;</pre>
            </li>
            <li>Uniquely Identifying Pieces of Structure with <code class="prettyprint">id</code> (p. 98-99):
            <pre class="prettyprint">&lt;body&gt;&#10;  <strong>&lt;div id=&quot;header&quot;&gt;</strong>&#10;    &lt;h1&gt;John Smith&#39;s Home Page&lt;/h1&gt;&#10;  <strong>&lt;/div&gt;</strong>&#10;  <strong>&lt;div id=&quot;content&gt;</strong>&#10;    &lt;h2&gt;Portfolio Overview&lt;/h2&gt;&#10;    &lt;p&gt;Read all about &lt;a href=&quot;portfolio.htm&quot;&gt;my portfolio&lt;/a&gt;...&lt;/p&gt;&#10;    &lt;h2&gt;Latest Projects&lt;/h2&gt;&#10;    &lt;p&gt;Read all about my &lt;a href=&quot;latest-projects.htm&quot;&gt; latest projects&lt;/a&gt;...&lt;/p&gt;&#10;  <strong>&lt;/div&gt;</strong>&#10;  &lt;ul <strong>id=&quot;navigation&quot;</strong>&gt;&#10;    &lt;li&gt;&lt;a href=&quot;index.htm&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;&#10;    &lt;li&gt;&lt;a href=&quot;resume.htm&quot;&gt;Resume&lt;/a&gt;&lt;/li&gt;&#10;    &lt;li&gt;&lt;a href=&quot;contact.htm&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;&#10;  &lt;/ul&gt;&#10;  <strong>&lt;div id=&quot;footer&quot;&gt;</strong>&#10;    &lt;p&gt;&#10;      All site content is licensed for use under a&#10;      &lt;a rel=&quot;license&quot; href= &quot;http://creativecommons.org/licenses/by/3.0/us/&quot;&gt;&#10;      Creative Commons Attribution 3.0 United States License&lt;/a&gt;.&#10;    &lt;/p&gt;&#10;  <strong>&lt;/div&gt;</strong>&#10;&lt;/body&gt;</pre>
            </li>
            <li>Associating Similar, Repeated Structures with <code class="prettyprint">class</code> (p. 100):
            <pre class="prettyprint">&lt;p&gt;&#10;  I enjoyed Peter Jackson&#39;s &lt;cite <strong>class=&quot;film&quot;</strong>&gt;Lord of the Rings&lt;/cite&gt;&#10;  films, especially &lt;cite <strong>class=&quot;film&quot;</strong>&gt;The Two Towers&lt;/cite&gt;, but I do&#10;  not think that they were as good as the original &#10;  &lt;cite <strong>class=&quot;book&quot;</strong>&gt;Lord of the Rings&lt;/cite&gt; books by J. R. R. Tolkien.&#10;&lt;/p&gt;</pre>
            </li>
          </ul>
        </div>
      <h2>Chapter 10: Presentation and Design: CSS Overview</h2>
        <div class="chapter">
        <h3>Websites</h3>
        <ul>
          <li><a href="http://htmldog.com/reference/cssproperties/">HTML Dog CSS Properties</a> (Language reference)</li>
          <li><a href="http://reference.sitepoint.com/css">SitePoint CSS Reference</a> (Language reference)</li>
          <li><a href="http://www.stuffandnonsense.co.uk/archives/css_specificity_wars.html">“CSS Specificity Wars”</a> (Blog post by Andy Clarke)</li>
        </ul>
        <h3>Examples</h3>
        <ul>
          <li><a href="/book/examples/10/xhtml-sample.htm">A Sample of XHTML</a> (p. 104)</li>
          <li><a href="/book/examples/10/xhtml-css-sample.htm">A Sample of XHTML with a Cascade</a> (p. 104)</li>
          <li><a href="/book/examples/10/descendant-selectors.htm">Descendant Selectors</a> (p. 108)</li>
          <li><a href="/book/examples/10/child-selectors.htm">Child Selectors on Nested Lists</a> (p. 110)</li>
          <li><a href="/book/examples/10/hanging-indents.htm">Hanging Indents</a> (p. 115)</li>
        </ul>
        </div>
      <h2>Chapter 11: Rapid Prototyping</h2>
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="/book/rpk/">Rapid Prototyping Kit (RPK)</a></li>
          <li><a href="http://www.7-zip.org/download.html">7-Zip</a> (File archive program for Windows and other operating systems)</li>
          <li><a href="http://developer.yahoo.com/yui/reset/">Yahoo! YUI Reset CSS</a> (CSS reset file)</li>
          <li><a href="http://jquery.com">jQuery</a> (JavaScript library)</li>
        </ul>
        <h3>Examples</h3>
        <ul>
          <li><a href="/book/rpk/htdocs/">Browsable RPK</a> (p. 124; download <a href="/book/rpk/">your own copy</a>)</li>
        </ul>
        </div>
      <h2>Chapter 12: Writing with Source in a Text Editor</h2>
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="http://notepad-plus-plus.org/">Notepad++ (“Notepad plus”)</a> (Recommended free text editor for Windows; can be run from USB drive)</li>
          <li><a href="http://www.barebones.com/products/textwrangler/">TextWrangler</a> (Recommended free text editor for Mac OS X; also <a href="http://itunes.apple.com/us/app/textwrangler/id404010395?mt=12">available via the Mac App Store</a>)</li>
        </ul>
        <h3>Websites</h3>
        <ul>
          <li><a href="http://en.wikipedia.org/wiki/Newline">Newline</a> (Wikipedia entry)</li>
        </ul>
        <h3>Examples</h3>
        <ul>
          <li><a href="/book/examples/12/views/">One Page, Many Views</a> (p. 134-137)</li>
          <li><a href="/book/examples/12/views/highlighting-error.htm">Highlighting Error</a> (p. 137)</li>
          <li><a href="/book/examples/12/source-formatting.htm">Format Source However You'd Like</a> (p. 138-142)</li>
        </ul>
        </div>
      <h2>Chapter 13: Page Metadata</h2>
        <div class="chapter">
        <h3>Websites</h3>
        <ul>
          <li><a href="http://webaim.org/techniques/screenreader/">“Designing for Screen Reader Compatibility”</a> (WebAIM article)</li>
          <li><a href="http://www.webmaster-toolkit.com/mime-types.shtml">MIME Types List</a> (Webmaster Toolkit reference)</li>
        </ul>
        <h3>Examples</h3>
        <ul>
          <li>Mismatched Character Encoding (p. 149)</li>
          <li>Correct Character Encoding (p. 150)</li>
          <li>Title Bar Example (p. 152)</li>
          
        </ul>
        </div>
      <h2>Chapter 14: Page Branding</h2>
        <div class="chapter">
        <h3>Websites</h3>
        <ul>
          <li><a href="http://www.mezzoblue.com/tests/revised-image-replacement/">Revised Image Replacement</a> (Dave Shea’s gallery of CSS image-replacement techniques)</li>
          <li><a href="http://validator.w3.org">W3C Markup Validation Service</a> (XHTML/HTML validator)</li>
          <li><a href="http://jigsaw.w3.org/cssvalidator/">W3C CSS Validation Service</a> (CSS validator)</li>
          <li><a href="http://creativecommons.org">Creative Commons</a> (Content licensing)</li>
        </ul>
        </div>
      <h2>Chapter 15: Navigation</h2>
        <div class="chapter">
          <!--Nothing in the chapter, really.-->
        </div>
      <h2>Chapter 16: Text Content</h2>
        <div class="chapter">
          <!--Nothing in the chapter, really.-->
        </div>
      <h2>Chapter 17: Page Layout</h2>
        <div class="chapter">
        <h3>Websites</h3>
        <ul>
          <li><a href="http://960.gs">960 Grid System</a> (Layout approaches)</li>
          <li><a href="http://978.gs">978 Grid System</a> (Layout approaches)</li>
          <li><a href="http://www.quirksmode.org/css/condcom.html">Quirksmode.org Conditional Comments</a> (Internet Explorer work-arounds)</li>
          <li><a href="http://msdn.microsoft.com/en-us/library/cc351024(VS.85).aspx">CSS Compatibility and Internet Explorer</a> (Internet Explorer work-arounds)</li>
        </ul>
        </div>
      <h2>Chapter 18: Multimedia Content</h2>
        <!--HTML5 stuff?-->
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="http://mediaplayer.yahoo.com/">Yahoo! Media Player</a> (Audio player)</li>
          <li><a href="http://wpaudioplayer.com/">WordPress Audio Player</a> (Audio player)</li>
          <li><a href="http://1bit.markwheeler.net/">1 Bit Audio Player</a> (Audio player)</li>
          <li><a href="http://code.google.com/p/swfobject/">SWFObject</a> (Standards-compliant Flash media loader)</li>
        </ul>
        <h3>Websites</h3>
        <ul>
          <li><a href="http://www.youtube.com/">YouTube</a> (Video sharing)</li>
          <li><a href="http://www.viddler.com/">Viddler</a> (Video sharing)</li>
          <li><a href="http://www.vimeo.com">Vimeo</a> (Video sharing)</li>
        </ul>
        </div>
      <h2>Chapter 19: Performance and Interaction</h2>
        <div class="chapter">
          <!--Libraries under Downloads and Utilities?-->
          <h3>Websites</h3>
          <ul>
            <li><a href="http://jquery.com">jQuery</a> (JavaScript library)</li>
            <li><a href="http://docs.jquery.com">jQuery Docs</a> (JavaScript library documentation)</li>
            <li><a href="http://api.jquery.com">jQuery API</a> (JavaScript library API documentation)</li>
            <li><a href="http://plugins.jquery.com">jQuery Plugins</a> (JavaScript library plugins)</li>
            <li><a href="http://mootools.net/">MooTools</a> (JavaScript library)</li>
            <li><a href="http://prototypejs.org/">Prototype</a> (JavaScript library)</li>
            <li><a href="http://code.google.com/apis/libraries/devguide.html">Google Libraries API</a> (Google-hosted libraries)</li>
          </ul>          
        </div>
      </div>

      <div id="part-iv">
      <h2>Chapter 20: Site Architecture</h2>
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="http://www.apachefriends.org/en/xampp-windows.html">XAMPP for Windows</a> (Development Web server)</li>
          <li><a href="http://www.apachefriends.org/en/xampp-macosx.html">XAMPP for Mac OS X</a> (Development Web server)</li>
        </ul>
        <h3>Websites</h3>
        <ul>
          <li><a href="http://www.apachefriends.org/en/faq-xampp.html">XAMPP</a> (Development Web server documentation)</li>
        </ul>
        </div>
      <h2>Chapter 21: Reusing and Dynamically Generating Content</h2>
        <div class="chapter">
        <h3>Websites</h3>
        <ul>
          <li><a href="http://php.net/docs.php">PHP documentation</a> (Language reference)</li>
        </ul>
        </div>
      <h2>Chapter 22: Dynamic Sites in WordPress</h2>
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="http://wordpress.org/download/">WordPress.org</a> (Blogging software)</li>
        </ul>
        <h3>Websites</h3>
        <ul>
          <li><a href="http://opensource.org/">Open Source Initiative</a> (Open source information)</li>
          <li><a href="http://wordpress.org/">WordPress.org</a> (Blogging software)</li>
          <li><a href="http://codex.wordpress.org/">Wordpress Codex</a> (WordPress documentation)</li>
        </ul>        </div>
      <h2>Chapter 23: Going Live</h2>
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="http://winscp.net/">WinSCP</a> (FTP/SFTP client for Windows)</li>
          <li><a href="http://cyberduck.ch/">Cyberduck</a> (FTP/SFTP client for Mac OS X)</li>
          <li><a href="http://filezilla-project.org/">FileZilla</a> (FTP/SFTP client for all operating systems)</li>
        </ul>
        <h3>Websites</h3>
        <ul>
          <li><a href="http://no-www.org">no-www.org</a> (Site arguing against www. in Web URLs)</li>
          <li><a href="http://www.yes-www.org/">www.yes-www.org</a> (Site arguing for www. in Web URLs)</li>
        </ul>
      </div>
      <h2>Chapter 24: Tracking Visitors, Sharing Content</h2>
        <div class="chapter">
        <h3>Downloads and Utilities</h3>
        <ul>
          <li><a href="http://www.mrunix.net/webalizer/">Webalizer</a> (Hosted site statistics)</li>
          <li><a href="http://www.labsmedia.com/clickheat/index.html">ClickHeat</a> (Hosted interaction tracking)</li>
          <li><a href="http://www.addthis.com/">AddThis</a> (JavaScript-based sharing button)</li>
        </ul>
        <h3>Websites</h3>
        <ul>
          <li><a href="http://www.google.com/analytics/">Google Analytics</a> (Remote site statistics)</li>
          <li><a href="http://creativecommons.org">Creative Commons</a> (Content licensing)</li>
        </ul>
        </div>
      </div>

    </div>

  <!--
    <div id="supporting">
    </div>
  -->
  </div>

<?php

swdb_footer($swdbpage);

?>