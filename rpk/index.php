<?php
include($_SERVER['DOCUMENT_ROOT'].'/book/includes/functions.php');

$swdbpage = array(
  'title'       => 'Rapid Prototyping Kit (RPK)',
  'description' => 'The Rapid Prototyping Kit used in How to Design and Write Web Pages Today.',
  'swfobject'   => false,
  'js'          => '',
  'bodyclass'   => 'rpk'
);

swdb_header($swdbpage);

?>
  <div id="promo">
    <div class="summary">
      <h2>Rapid Prototyping Kit (RPK)</h2>
      <p>
        The Rapid Prototyping Kit is a set of starter files and folders to get your site built quickly according to Web standards and best practices.
      </p>
    </div>
    <!--
      <div class="feature">
      </div>
    -->
  </div>

  <div id="content">

    <div id="main">
      <h2>Download Options</h2>
      <p>
        You can download the RPK in a few of different forms; all are in <code>.zip</code> format,
        so <a href="http://www.7-zip.org/download.html">you might need 7-zip</a> to open them on
        your computer if it has no archiving program. <strong>Here are the three versions used in
        the book</strong>, which match the content of the book and will always be available here:
      </p>
      <ul>
        <li><a href="/book/rpk/rpk.zip">rpk.zip</a>: Basic XHTML version of the RPK used throughout
        most of the book (see Chapters 9-19)</li>
        <li><a href="/book/rpk/rpk-php.zip">rpk-php.zip</a>: PHP-based version of the RPK (see
        Chapter 21)</li>
        <li>Coming soon: <a href="/book/rpk/#rpk-wp.zip">rpk-wp.zip</a>: WordPress-theme version of the
        RPK for use with WordPress version 3.1 (see Chapter 22)</li>
      </ul>
      <p class="warning">
        <strong>The RPK HTML files use root-relative paths to load CSS and JavaScript.</strong> They
        were created for use with a local development Web server and the
        <code>http://localhost/</code> URL; <a href="/book/resources/xampp/">set one up yourself
        with XAMPP</a>. If you are opening your files directly in the browser, you must change the
        root-relative paths to relative (see Chapter 20 in the book for more on paths). For example,
        instead of <code>href="/css/screen.css"</code>, remove the slash so it reads
        <code>href="css/screen.css"</code>. Use your text editor to do a search and replace in the
        prototype HTML files; search for <code>="/</code> and replace with <code>="</code>. You will
        have to alter those relative paths if you start building a folder-oriented site
        architecture. (Again, you're better off <a href="/book/resources/xampp/">setting up
        XAMPP</a>.)
      </p>
      <p>
        Each of those versions of the RPK includes version 1.5.1 of <a
        href="http://jquery.com">jQuery</a> and <a
        href="http://code.google.com/p/swfobject/">SWFObject</a> version 2.2. Consider upgrading
        those as new versions are released. Test your site locally using 
        <a href="http://www.apachefriends.org/en/xampp.html">XAMPP</a> before uploading to
        your live site to make sure that everything works.
      </p>
      <h2>Other Download Options</h2>
      <p>
        Adventurous writer/designers can download <a
        href="/book/rpk/rpk-html5.zip">rpk-html5.zip</a>, which is an HTML5 version of the RPK.
        The only differences from the XHTML version of the RPK are:
      </p>
        <ul>
          <li>The DOCTYPE declaration is <code>&lt;!DOCTYPE html&gt;</code></li>
          <li>The <code>&lt;html&gt;</code> tag is simplified to  <code>&lt;html lang="en" id="example-com"&gt;</code></li>
          <li>The UTF-8 character set is specified via the new <code>&lt;meta charset="utf-8" /&gt;</code> syntax</li>
          <li>The validator link in the footer refers to HTML5</li>
        </ul>
      <p>
        Everything else is essentially the same in the HTML5 version as the basic XHTML version of
        the RPK, meaning that your CSS and JavaScript developed with the XHTML version should work
        seamlessly with it.
      </p>
      <p>
        For even more adventurous writers/designers, you can <a
        href="http://github.com/karlstolley/rpk">browse and download</a> newer versions of the
        different RPKs at <a href="http://github.com/">GitHub</a>. Those versions may differ from
        what’s in the book.
      </p>
      
    </div>

  <!--
    <div id="supporting">
    </div>
  -->
  </div>

<?php

swdb_footer($swdbpage);

?>