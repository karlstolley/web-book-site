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
      <h2>Title</h2>
      <p>
        Description
      </p>
    </div>
    <!--
      <div class="feature">
      </div>
    -->
  </div>

  <div id="content">

    <div id="main">
      <h2>Page Title</h2>
      
    </div>

    <div id="supporting">
    </div>

  </div>

<?php

swdb_footer($swdbpage);

?>