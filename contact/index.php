<?php
include($_SERVER['DOCUMENT_ROOT'].'/book/includes/functions.php');

$swdbpage = array(
  'title'       => 'Contact the Author',
  'description' => 'Contact Karl Stolley, author of How to Design and Write Web Pages Today.',
  'swfobject'   => false,
  'js'          => '',
  'bodyclass'   => 'contact'
);

swdb_header($swdbpage);

?>
  <div id="promo">
    <div class="summary">
      <h2>Contact the Author</h2>
      <p>
        You can contact Karl by sending an @reply on Twitter to 
        <a href="http://twitter.com/karlstolley">@karlstolley</a> or by liking or writing on the wall for the
        <cite><a href="https://www.facebook.com/pages/How-to-Design-and-Write-Web-Pages-Today/145726625482580">How to Design and Write Web Pages Today</a></cite>
        page on Facebook. Or just use the email form below.
      </p>
    </div>
    <!--
      <div class="feature">
      </div>
    -->
  </div>

  <div id="content">

    <div id="main">
      <h2>Who Doesn't Like a Nice Email?</h2>
      <p>
        Nice little form will go here.
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