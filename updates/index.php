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
      <h2>Updates</h2>
      <ul>
        <li>None yet. Have an update? <a href="/book/contact/">Let me know</a>.</li>
      </ul>
      <h2>Corrections</h2>
      <ul>
        <li><strong>Page 154</strong>: There should be no space before <code class="pp">icon</code> in the first <code class="pp">rel</code> example (the space between <code class="pp">shortcut icon</code> is correct, however). Here is the corrected version, with the correction highlighted:
        <pre class="pp">&lt;link rel=<strong>&quot;icon&quot;</strong> href=&quot;http://example.com/favicon.png&quot; type=&quot;image/png&quot; /&gt;&#10;&lt;!--For Internet Explorer; no type must be specified--&gt;&#10;&lt;link rel=&quot;shortcut icon&quot; href=&quot;http://example.com/favicon.ico&quot; /&gt;</pre>
        </li>
        <li>That’s all for now. Find a mistake that needs to be corrected? <a href="/book/contact/">Let me know</a>.</li>
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