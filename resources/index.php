<?php
include($_SERVER['DOCUMENT_ROOT'].'/book/includes/functions.php');

$swdbpage = array(
  'title'       => 'Resources',
  'description' => 'Resources and downloads mentioned in How to Design and Write Web Pages Today by Karl Stolley',
  'swfobject'   => false,
  'js'          => '',
  'bodyclass'   => 'resources'
);

swdb_header($swdbpage);

?>
  <div id="promo">
    <div class="summary">
      <h2>Resources and Downloads</h2>
      <p>
        A topical list of helpful websites, downloads, language references, validators, and other essentials for Web writing and design.
      </p>
    </div>
    <!--
      <div class="feature">
      </div>
    -->
  </div>

  <div id="content">

    <div id="main">
      <h2>Part I. What Am I Writing?</h2>

      <div id="part-i">
      <h3>Chapter 1: Why Write for the Web?</h3>
        <div class="chapter">
          <h4>Downloads and Utilities</h4>
          <ul>
            <li><a href="http://tweetdeck.com">TweetDeck</a> (Cross-platform social networking application)</li>
          </ul>
          <h4>Websites</h4>
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
      <h3>Chapter 2: Reading the Web</h3>
        <div class="chapter">
          <h4>Downloads and Utilities</h4>
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
          <h4>Websites</h4>
          <ul>
            <li>OLD WEBSITES OF MINE MENTIONED IN THE CHAPTER?</li>
          </ul>
        </div>
      <h3>Chapter 3: Creating Web Content</h3>
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="http://www.gimp.org">GIMP: GNU Image Manipulation Program</a> (Cross-platform free and open-source graphics software)</li>
          <li><a href="http://audacity.sourceforge.net">Audacity</a> (Cross-platform free and open-source audio software)</li>
          <li><a href="http://fixounet.free.fr/avidemux/">Avidemux</a> (Cross-platform free and open-source video software)</li>
        </ul>
        <h4>Websites</h4>
        <ul>
          <li><a href="http://www.blogarithms.com/index.php/mp3secrets/">The Secret Lives of MP3 Files</a> (Guidance in MP3 audio preparation)</li>
        </ul>
        </div>
      <h3>Chapter 4: Standards-Based Web Pages</h3>
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="http://validator.w3.org">W3C Markup Validation Service</a> (XHTML/HTML validator)</li>
          <li><a href="http://jigsaw.w3.org/cssvalidator/">W3C CSS Validation Service</a> (CSS validator)</li>
        </ul>
        <h4>Websites</h4>
        <ul>
          <li><a href="http://www.webpagesthatsuck.com/">Web Pages that Suck</a> (Gallery of bad design)</li>
          <li><a href="http://www.webstandards.org/">Web Standards Project (WaSP)</a> (Standards advocacy and education group)</li>
          <li><a href="http://www.w3.org/">World Wide Web Consortium (W3C)</a> (Group behind the recommendations that make up many Web standards)</li>
          <li><a href="http://www.csszengarden.com/">CSS Zen Garden</a> (Site of CSS designs using the exact same XHTML)</li>
        </ul>
        </div>
      <h3>Chapter 5: Preparing to Write and Design</h3>
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="http://portableapps.com">PortableApps.com</a> (Free and open-source Windows applications that can be run on a USB drive)</li>
          <li><a href="http://www.freesmug.org/portableapps/">FreeSMUG.org</a> (Free and open-source Mac OS X applications that can be run on a USB drive)</li>
          <li><a href="http://notepad-plus-plus.org/">Notepad++ (“Notepad plus”)</a> (Recommended free text editor for Windows; can be run from USB drive)</li>
          <li><a href="http://www.barebones.com/products/textwrangler/">TextWrangler</a> (Recommended free text editor for Mac OS X; also <a href="http://itunes.apple.com/us/app/textwrangler/id404010395?mt=12">available via the Mac App Store</a>)</li>
          <li><a href="http://winscp.net/">WinSCP</a> (Recommended free and open-source FTP/SFTP client for Windows)</li>
          <li><a href="http://cyberduck.ch/">Cyberduck</a> (Recommended free and open-source FTP/SFTP client for Mac OS X</li>
          <li><a href="http://www.mozilla.com/firefox">Mozilla Firefox</a> (Recommended baseline development browser)</li>
          <li><a href="https://addons.mozilla.org/firefox/addon/60">Chris Pederick’s Web Developer Add-on for Firefox</a> (Recommended Firefox add-on for Web design and development)</li>
        </ul>
        </div>
      </div>

      <h2>Part II. Issues and Challenges</h2>

      <div id="part-ii">
      <h3>Chapter 6: Accessibility</h3>
        <div class="chapter">
        <h4>Websites</h4>
          <ul>
            <li><a href="http://www.w3.org/WAI/">Web Accessibility Initiative (WAI)</a> (W3C organization)</li>
            <li><a href="http://www.w3.org/WCAG/">Web Content Accessibility Guidelines (WCAG)</a> (W3C recommendation)</li>
            <li><a href="http://www.alistapart.com/articles/tohellwithwcag2">“To Hell with WCAG 2”</a> (<cite>A List Apart</cite> article by Joe Clarke)</li>
            <li><a href="http://www.section508.gov/">Section 508</a> (United States government IT accessibility)</li>
            <li><a href="http://access-board.gov/sec508/standards.htm">Section 508 guidelines and standards</a> (United States Access Board)</li>
          </ul>
        </div>
      <h3>Chapter 7: Usability</h3>
        <div class="chapter">
          <!--Nothing really in chapter, except for Nielsen stuff, which, blech. Bonus things here?-->
        </div>
      <h3>Chapter 8: Sustainability</h3>
        <div class="chapter">
          <!--Git stuff; mod_rewrite?-->
        </div>
      </div>

      <h2>Part III. Strategies for Success</h2>

      <div id="part-iii">
      <h3>Chapter 9: Structured Content: XHTML Overview</h3>
        <div class="chapter">
        <h4>Websites</h4>
        <ul>
          <li><a href="http://htmldog.com/reference/htmltags/">HTML Dog HTML Tag Reference</a> (Language reference)</li>
          <li><a href="http://reference.sitepoint.com/html">SitePoint HTML Reference</a> (Language Reference)</li>
          <li><a href="http://microformats.org">Microformats.org</a> (Language reference)</li>
        </ul>        
        </div>
      <h3>Chapter 10: Presentation and Design: CSS Overview</h3>
        <div class="chapter">
        <h4>Websites</h4>
        <ul>
          <li><a href="http://htmldog.com/reference/cssproperties/">HTML Dog CSS Properties</a> (Language reference)</li>
          <li><a href="http://reference.sitepoint.com/css">SitePoint CSS Reference</a> (Language reference)</li>
          <li><a href="http://www.stuffandnonsense.co.uk/archives/css_specificity_wars.html">“CSS Specificity Wars”</a> (Blog post by Andy Clarke)</li>
        </ul>
        </div>
      <h3>Chapter 11: Rapid Prototyping</h3>
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="http://www.7-zip.org/download.html">7-Zip</a> (File archive program for Windows and other operating systems)</li>
          <li><a href="http://developer.yahoo.com/yui/reset/">Yahoo! YUI Reset CSS</a> (CSS reset file)</li>
          <li><a href="http://jquery.com">jQuery</a> (JavaScript library)</li>
        </ul>
        </div>
      <h3>Chapter 12: Writing with Source in a Text Editor</h3>
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="http://notepad-plus-plus.org/">Notepad++ (“Notepad plus”)</a> (Recommended free text editor for Windows; can be run from USB drive)</li>
          <li><a href="http://www.barebones.com/products/textwrangler/">TextWrangler</a> (Recommended free text editor for Mac OS X; also <a href="http://itunes.apple.com/us/app/textwrangler/id404010395?mt=12">available via the Mac App Store</a>)</li>
        </ul>
        <h4>Websites</h4>
        <ul>
          <li><a href="http://en.wikipedia.org/wiki/Newline">Newline</a> (Wikipedia entry)</li>
        </ul>
        </div>
      <h3>Chapter 13: Page Metadata</h3>
        <div class="chapter">
        <h4>Websites</h4>
        <ul>
          <li><a href="http://webaim.org/techniques/screenreader/">“Designing for Screen Reader Compatibility”</a> (WebAIM article)</li>
          <li><a href="http://www.webmaster-toolkit.com/mime-types.shtml">MIME Types List</a> (Webmaster Toolkit reference)</li>
        </ul>
        </div>
      <h3>Chapter 14: Page Branding</h3>
        <div class="chapter">
        <h4>Websites</h4>
        <ul>
          <li><a href="http://www.mezzoblue.com/tests/revised-image-replacement/">Revised Image Replacement</a> (Dave Shea’s gallery of CSS image-replaement techniques)</li>
          <li><a href="http://validator.w3.org">W3C Markup Validation Service</a> (XHTML/HTML validator)</li>
          <li><a href="http://jigsaw.w3.org/cssvalidator/">W3C CSS Validation Service</a> (CSS validator)</li>
          <li><a href="http://creativecommons.org">Creative Commons</a> (Content licensing)</li>
        </ul>
        </div>
      <h3>Chapter 15: Navigation</h3>
        <div class="chapter">
          <!--Nothing in the chapter, really.-->
        </div>
      <h3>Chapter 16: Text Content</h3>
        <div class="chapter">
          <!--Nothing in the chapter, really.-->
        </div>
      <h3>Chapter 17: Page Layout</h3>
        <div class="chapter">
        <h4>Websites</h4>
        <ul>
          <li><a href="http://960.gs">960 Grid System</a> (Layout approaches)</li>
          <li><a href="http://978.gs">978 Grid System</a> (Layout approaches)</li>
          <li><a href="http://www.quirksmode.org/css/condcom.html">Quirksmode.org Conditional Comments</a> (Internet Explorer work-arounds)</li>
          <li><a href="http://msdn.microsoft.com/en-us/library/cc351024(VS.85).aspx">CSS Compatibility and Internet Explorer</a> (Internet Explorer work-arounds)</li>
        </ul>
        </div>
      <h3>Chapter 18: Multimedia Content</h3>
        <!--HTML5 stuff?-->
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="">Yahoo! Media Player</a> (Audio player)</li>
          <li><a href="">WordPress Audio Player</a> (Audio player)</li>
          <li><a href="">1 Bit Audio Player</a> (Audio player)</li>
          <li><a href="http://code.google.com/p/swfobject/">SWFObject</a> (Standards-compliant Flash media loader)</li>
        </ul>
        <h4>Websites</h4>
        <ul>
          <li><a href="http://www.youtube.com/">YouTube</a> (Video sharing)</li>
          <li><a href="http://www.viddler.com/">Viddler</a> (Video sharing)</li>
          <li><a href="http://www.vimeo.com">Vimeo</a> (Video sharing)</li>
        </ul>
        </div>
      <h3>Chapter 19: Performance and Interaction</h3>
        <div class="chapter">
          <!--Libraries under Downloads and Utilities?-->
          <h4>Websites</h4>
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

      <h2>Part IV. Problems and Solutions</h2>

      <div id="part-iv">
      <h3>Chapter 20: Site Architecture</h3>
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="http://www.apachefriends.org/en/xampp-windows.html">XAMPP for Windows</a> (Development Web server)</li>
          <li><a href="http://www.apachefriends.org/en/xampp-macosx.html">XAMPP for Mac OS X</a> (Development Web server)</li>
        </ul>
        <h4>Websites</h4>
        <ul>
          <li><a href="">XAMPP</a> (Development Web server documentation)</li>
        </ul>
        </div>
      <h3>Chapter 21: Reusing and Dynamically Generating Content</h3>
        <div class="chapter">
        <h4>Websites</h4>
        <ul>
          <li><a href="http://php.net/docs.php">PHP documentation</a> (Language reference)</li>
        </ul>
        </div>
      <h3>Chapter 22: Dynamic Sites in WordPress</h3>
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="http://wordpress.org/download/">WordPress.org</a> (Blogging software)</li>
        </ul>
        <h4>Websites</h4>
        <ul>
          <li><a href="http://opensource.org/">Open Source Initiative</a> (Open source information)</li>
          <li><a href="http://wordpress.org/">WordPress.org</a> (Blogging software)</li>
          <li><a href="http://codex.wordpress.org/">Wordpress Codex</a> (WordPress documentation)</li>
        </ul>        </div>
      <h3>Chapter 23: Going Live</h3>
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="http://winscp.net/">WinSCP</a> (FTP/SFTP client for Windows)</li>
          <li><a href="http://cyberduck.ch/">Cyberduck</a> (FTP/SFTP client for Mac OS X)</li>
          <li><a href="http://filezilla-project.org/">FileZilla</a> (FTP/SFTP client for all operating systems)</li>
        </ul>
        <h4>Websites</h4>
        <ul>
          <li><a href="http://no-www.org">no-www.org</a> (Site arguing against www. in Web URLs)</li>
          <li><a href="http://www.yes-www.org/">www.yes-www.org</a> (Site arguing for www. in Web URLs)</li>
        </ul>
      </div>
      <h3>Chapter 24: Tracking Visitors, Sharing Content</h3>
        <div class="chapter">
        <h4>Downloads and Utilities</h4>
        <ul>
          <li><a href="http://www.mrunix.net/webalizer/">Webalizer</a> (Hosted site statistics)</li>
          <li><a href="http://www.labsmedia.com/clickheat/index.html">ClickHeat</a> (Hosted interaction tracking)</li>
          <li><a href="http://www.addthis.com/">AddThis</a> (JavaScript-based sharing button)</li>
        </ul>
        <h4>Websites</h4>
        <ul>
          <li><a href="http://www.google.com/analytics/">Google Analytics</a> (Remote site statistics)</li>
          <li><a href="http://creativecommons.org">Creative Commons</a> (Content licensing)</li>
        </ul>
        </div>
      </div>

    </div>

  <!--
    <div id="supporting">
      Essential resources could go in here, e.g., HTMLDog stuff, plugins
    </div>
  -->
  </div>

<?php

swdb_footer($swdbpage);

?>