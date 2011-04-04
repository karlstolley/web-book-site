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
      <div id="essentials">
      <h2>The Essentials</h2>
      <p>Bookmark these websites; you’ll need them:</p>
      <ul>
        <li><a href="http://htmldog.com/reference/htmltags/">HTML Dog HTML Tag Reference</a></li>
        <li><a href="http://reference.sitepoint.com/html">SitePoint HTML Reference</a></li>
        <li><a href="http://htmldog.com/reference/cssproperties/">HTML Dog CSS Properties</a></li>
        <li><a href="http://reference.sitepoint.com/css">SitePoint CSS Reference</a></li>
        <li><a href="http://validator.w3.org">W3C Markup Validation Service</a> (XHTML/HTML validator)</li>
        <li><a href="http://jigsaw.w3.org/cssvalidator/">W3C CSS Validation Service</a> (CSS validator)</li>
      </ul>
      <p class="warning"><strong>Do not use materials found at W3Schools</strong>. See the standards-based design community’s <a href="http://w3fools.com">response to W3Schools at w3fools.com</a>, which notes <a href="http://w3fools.com#why-w3schools-sucks">some examples of inaccuracies in W3School’s materials</a>.</p>
      <p><strong>Mac OS X users</strong> should download and install these:</p>
      <ul>
        <li><a href="http://www.barebones.com/products/textwrangler/">TextWrangler</a> (Text editor; also <a href="http://itunes.apple.com/us/app/textwrangler/id404010395?mt=12">available via the Mac App Store</a>)</li>
        <li><a href="http://www.mozilla.com/firefox">Mozilla Firefox</a> (Open-source Web browser)</li>
        <li><a href="https://addons.mozilla.org/firefox/addon/60">Chris Pederick’s Web Developer Add-on for Firefox</a> (Firefox add-on; install from within Firefox)</li>
        <li><a href="http://www.apachefriends.org/en/xampp-macosx.html">XAMPP for Mac OS X</a> (Development Web server)</li>
      </ul>
      <p><strong>Windows users</strong> should download and install these:</p>
      <ul>
        <li><a href="http://notepad-plus-plus.org/">Notepad++ (“Notepad plus”)</a> (Text editor; download the zip package; run the version in the <code>unicode</code> folder)</li>
        <li><a href="http://www.mozilla.com/firefox">Mozilla Firefox</a> (Open-source Web browser)</li>
        <li><a href="https://addons.mozilla.org/firefox/addon/60">Chris Pederick’s Web Developer Add-on for Firefox</a> (Firefox add-on; install from within Firefox)</li>
        <li><a href="http://www.apachefriends.org/en/xampp-windows.html">XAMPP for Windows</a> (Development Web server)</li>
      </ul>
      <p><strong>Windows users running USB drives</strong> should download and install these:</p>
      <ul>
        <li><a href="http://notepad-plus-plus.org/">Notepad++ (“Notepad plus”)</a> (Text editor; download the zip package; run the version in the <code>unicode</code> folder)</li>
        <li><a href="http://portableapps.com/apps/internet/firefox_portable">Mozilla Firefox, Portable Edition</a> (Open-source Web browser)</li>
        <li><a href="https://addons.mozilla.org/firefox/addon/60">Chris Pederick’s Web Developer Add-on for Firefox</a> (Firefox add-on; install from within Firefox)</li>
        <li><a href="http://www.apachefriends.org/en/xampp-windows.html">XAMPP for Windows</a> (Development Web server)</li>
      </ul>
      </div>

      <h2>Browsers and Development</h2>
      <ul>
        <li><a href="http://www.google.com/chrome/">Google Chrome</a> (Webkit-based browser)</li>
        <li><a href="https://chrome.google.com/extensions/detail/bfbameneiokkgbdmiekhjnmfkcnldhhm">Chris Pederick’s Web Developer Add-on for Google Chrome</a> (Chrome extension)</li>
        <li><a href="http://www.opera.com/">Opera</a> (Web browser)</li>
        <li><a href="http://www.apple.com/safari/download/">Safari for Windows</a> (Webkit-based browser)</li>
        <li><a href="http://expression.microsoft.com/en-us/dd565874.aspx">Microsoft Expression Web SuperPreview</a> (Internet Explorer testing; requires Windows/IE8)</li>
        <li><a href="http://home.pacific.net.sg/~kennethkwok/lynx/">Lynx for Windows</a> (Text-only Web browser)</li>
        <li><a href="http://www.apple.com/downloads/macosx/unix_open_source/lynxtextwebbrowser.html">Lynx for Mac OS X</a> (Text-only Web browser)</li>
      </ul>

      <h2>Free and Open Source Software</h2>
      <ul>
        <li><a href="http://www.7-zip.org/download.html">7-Zip</a> (File archive program for Windows and other operating systems)</li>
        <li><a href="http://portableapps.com">PortableApps.com</a> (Free and open-source Windows applications that can be run on a USB drive)</li>
        <li><a href="http://www.freesmug.org/portableapps/">FreeSMUG.org</a> (Free and open-source Mac OS X applications that can be run on a USB drive)</li>
        <li><a href="http://notepad-plus-plus.org/">Notepad++ (“Notepad plus”)</a> (Recommended free text editor for Windows; can be run from USB drive)</li>
        <li><a href="http://www.barebones.com/products/textwrangler/">TextWrangler</a> (Recommended free text editor for Mac OS X; also <a href="http://itunes.apple.com/us/app/textwrangler/id404010395?mt=12">available via the Mac App Store</a>)</li>
        <li><a href="http://winscp.net/">WinSCP</a> (FTP/SFTP client for Windows)</li>
        <li><a href="http://cyberduck.ch/">Cyberduck</a> (FTP/SFTP client for Mac OS X)</li>
        <li><a href="http://filezilla-project.org/">FileZilla</a> (FTP/SFTP client for all operating systems)</li>
        <li><a href="http://www.mozilla.com/firefox">Mozilla Firefox</a> (Recommended baseline development browser)</li>
        <li><a href="https://addons.mozilla.org/firefox/addon/60">Chris Pederick’s Web Developer Add-on for Firefox</a> (Recommended Firefox add-on for Web design and development)</li>
        <li><a href="http://www.gimp.org">GIMP: GNU Image Manipulation Program</a> (Cross-platform free and open-source graphics software)</li>
        <li><a href="http://audacity.sourceforge.net">Audacity</a> (Cross-platform free and open-source audio software)</li>
        <li><a href="http://fixounet.free.fr/avidemux/">Avidemux</a> (Cross-platform free and open-source video software)</li>
        <li><a href="http://www.apachefriends.org/en/xampp-windows.html">XAMPP for Windows</a> (Development Web server)</li>
        <li><a href="http://www.apachefriends.org/en/xampp-macosx.html">XAMPP for Mac OS X</a> (Development Web server)</li>
        <li><a href="http://www.apachefriends.org/en/faq-xampp.html">XAMPP Documentation</a> (Development Web server documentation)</li>
      </ul>

      <h2>Web Standards</h2>
      <ul>
        <li><a href="http://validator.w3.org">W3C Markup Validation Service</a> (XHTML/HTML validator)</li>
        <li><a href="http://jigsaw.w3.org/cssvalidator/">W3C CSS Validation Service</a> (CSS validator)</li>
        <li><a href="http://www.webstandards.org/">Web Standards Project (WaSP)</a> (Standards advocacy and education group)</li>
        <li><a href="http://www.w3.org/">World Wide Web Consortium (W3C)</a> (Group behind the recommendations that make up many Web standards)</li>
        <li><a href="http://www.w3.org/WAI/">Web Accessibility Initiative (WAI)</a> (W3C organization)</li>
        <li><a href="http://www.w3.org/WCAG/">Web Content Accessibility Guidelines (WCAG)</a> (W3C recommendation)</li>
        <li><a href="http://www.section508.gov/">Section 508</a> (United States government IT accessibility)</li>
        <li><a href="http://access-board.gov/sec508/standards.htm">Section 508 guidelines and standards</a> (United States Access Board)</li>
      </ul>

      <h2>Web Design Galleries and Inspiration</h2>
      <ul>
        <li><a href="http://www.csszengarden.com/">CSS Zen Garden</a> (Site of CSS designs using the exact same XHTML)</li>
      </ul>

      <h2>Language References and Software Documentation</h2>
      <ul>
        <li><a href="http://htmldog.com/reference/htmltags/">HTML Dog HTML Tag Reference</a> (Language reference)</li>
        <li><a href="http://htmldog.com/reference/cssproperties/">HTML Dog CSS Properties</a> (Language reference)</li>
        <li><a href="http://reference.sitepoint.com/html">SitePoint HTML Reference</a> (Language Reference)</li>
        <li><a href="http://reference.sitepoint.com/css">SitePoint CSS Reference</a> (Language reference)</li>
        <li><a href="http://php.net/docs.php">PHP documentation</a> (Language reference)</li>
        <li><a href="http://microformats.org">Microformats.org</a> (Language reference)</li>
        <li><a href="http://www.webmaster-toolkit.com/mime-types.shtml">MIME Types List</a> (Webmaster Toolkit reference)</li>
      </ul>

      <h2>Web Design and Development Libraries</h2>
      <ul>
        <li><a href="http://developer.yahoo.com/yui/reset/">Yahoo! YUI Reset CSS</a> (CSS reset file)</li>
        <li><a href="http://jquery.com">jQuery</a> (JavaScript library)</li>
        <li><a href="http://docs.jquery.com">jQuery Docs</a> (JavaScript library documentation)</li>
        <li><a href="http://api.jquery.com">jQuery API</a> (JavaScript library API documentation)</li>
        <li><a href="http://plugins.jquery.com">jQuery Plugins</a> (JavaScript library plugins)</li>
        <li><a href="http://mootools.net/">MooTools</a> (JavaScript library)</li>
        <li><a href="http://prototypejs.org/">Prototype</a> (JavaScript library)</li>
        <li><a href="http://code.google.com/apis/libraries/devguide.html">Google Libraries API</a> (Google-hosted libraries)</li>
        <li><a href="http://mediaplayer.yahoo.com/">Yahoo! Media Player</a> (Audio player)</li>
        <li><a href="http://wpaudioplayer.com/">WordPress Audio Player</a> (Audio player)</li>
        <li><a href="http://1bit.markwheeler.net/">1 Bit Audio Player</a> (Audio player)</li>
        <li><a href="http://code.google.com/p/swfobject/">SWFObject</a> (Standards-compliant Flash media loader)</li>
      </ul>

      <h2>Design Approaches and Techniques</h2>
      <ul>
        <li><a href="http://www.mezzoblue.com/tests/revised-image-replacement/">Revised Image Replacement</a> (Dave Shea’s gallery of CSS image-replacement techniques)</li>
        <li><a href="http://960.gs">960 Grid System</a> (Layout approaches)</li>
        <li><a href="http://978.gs">978 Grid System</a> (Layout approaches)</li>
        <li><a href="http://www.quirksmode.org/css/condcom.html">Quirksmode.org Conditional Comments</a> (Internet Explorer work-arounds)</li>
        <li><a href="http://msdn.microsoft.com/en-us/library/cc351024(VS.85).aspx">CSS Compatibility and Internet Explorer</a> (Internet Explorer work-arounds)</li>
        <li><a href="http://no-www.org">no-www.org</a> (Site arguing against www. in Web URLs)</li>
        <li><a href="http://www.yes-www.org/">www.yes-www.org</a> (Site arguing for www. in Web URLs)</li>
      </ul>

      <h2>WordPress</h2>
      <ul>
        <li><a href="http://wordpress.org/">WordPress.org</a> (Project home page)</li>
        <li><a href="http://wordpress.org/download/">WordPress.org</a> (Blogging software)</li>
        <li><a href="http://codex.wordpress.org/">Wordpress Codex</a> (WordPress documentation)</li>
      </ul>
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