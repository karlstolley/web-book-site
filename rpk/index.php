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
        The Rapid Prototypting Kit is a set of starter files and folders to get your site built quickly according to Web standards and best practices.
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
        You can download the RPK in a few of different forms. Here are the three versions used in the book, which match the content of the book and will always be available here.
      </p>
      <ul>
        <li><a href="/book/rpk/rpk.zip">rpk.zip</a>: Basic XHTML version of the RPK used throughout most of the book (see Chapters 9-19)</li>
        <li><a href="/book/rpk/rpk-php.zip">rpk-php.zip</a>: PHP-based version of the RPK (see Chapter 21)</li>
        <li><a href="/book/rpk/rpk-wp.zip">rpk-wp.zip</a>: WordPress-theme version of the RPK for use with WordPress v. 3.1 (see Chapter 22)</li>
      </ul>
      <p>
        Each of those versions of the RPK includes version x.x.x of jQuery and SWFObject version x.x.x. Consider upgrading those as new versions are released. Test your site locally before uploading to your live site to make sure that everything works.
      </p>
      <h2>Other Download Options</h2>
      <p>
        Adventurous writer/designers can download <a href="/book/rpk/rpk-html5.zip">rpk-html5.zip</a>, which is an HTML5 version of the RPK. However, it only changes the DOCTYPE declaration to <code>&lt;!DOCTYPE html&gt;</code> and uses the shorter <code>&lt;meta charset="utf-8" /&gt;</code> to specify the Unicode character set. Everything else is essentially the same (in that version) as the basic XHTML version of the RPK.
      </p>
      <p>
        For even more adventurous writers/designers, you can <a href="http://github.com/karlstolley/rpk">browse and download</a> newer versions of the different RPKs at <a href="http://github.com/">GitHub</a>. Those versions may differ from what’s in the book.
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