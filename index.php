<?php
include($_SERVER['DOCUMENT_ROOT'].'/book/includes/functions.php');

$swdbpage = array(
  'title'       => 'Home',
  'description' => 'Companion site for How to Design and Write Web Pages Today by Karl Stolley',
  'swfobject'   => false,
  'js'          => '',
  'bodyclass'   => 'home'
);

swdb_header($swdbpage);

?>
  <div id="promo">
    <div class="summary">
      <h2>Companion Site Home</h2>
      <p>
        Some things just don’t work in print. Here you’ll find <a href="/book/examples/">live examples</a>, <a href="/book/resources/">resources and downloads</a>, and any <a href="/book/updates/">updates</a> to the <a href="#book">book</a> <cite>How to Design and Write Web Pages Today</cite>.
      </p>
    </div>
    <div class="feature">
        <h2><a href="/book/rpk/">Need the RPK?</a></h2>
        <p>The Rapid Prototypting Kit is a set of starter files and folders to get your site built quickly according to Web standards and best practices.</p>
        <ul class="download">
          <li class="featured"><a href="/book/rpk/rpk.zip">Download the RPK</a></li>
          <li class="other"><a href="/book/rpk/">View other versions for download</a></li>
        </ul>
    </div>
  </div>

  <div id="content">

    <div id="main">
      <ul class="feature">
        <li class="examples">
          <h2><a href="/book/examples/">Examples</a></h2>
          <p>Links and live examples from the book and additional, supplemental material for each chapter.</p>
        </li>
        <li class="resources">
          <h2><a href="/book/resources/">Resources</a></h2>
          <p>A topical list of helpful websites, downloads, language references, validators, and other essentials for Web writing and design.</p>
        </li>
        <li class="updates">
          <h2><a href="/book/updates/">Updates</a></h2>
          <p>The Web evolves, and books aren’t perfect. Find out what’s changed.</p>
        </li>
      </ul>
    </div>

  <!--
    <div id="supporting">
    </div>
  -->
  </div>

<?php

swdb_footer($swdbpage);

?>