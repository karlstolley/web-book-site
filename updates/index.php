<?php
include($_SERVER['DOCUMENT_ROOT'].'/book/includes/functions.php');

$swdbpage = array(
  'title'       => 'Updates',
  'description' => 'Updates and corrections to How to Design and Write Web Pages Today.',
  'swfobject'   => false,
  'js'          => '',
  'bodyclass'   => 'updates'
);

swdb_header($swdbpage);

?>
  <div id="promo">
    <div class="summary">
      <h2>Updates and Corrections</h2>
      <p>
        The Web evolves, and books aren’t perfect. Find out what’s changed.
      </p>
    </div>
    <!--
      <div class="feature">
      </div>
    -->
  </div>

  <div id="content">

    <div id="main">
      <h2>Nothing Yet.</h2>
      <p>
        No updates or corrections yet. Found something? <a href="/book/contact/">Let the author
        know</a>.
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