<?php

function swdb_header($swdbpage) {
echo
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" id="sustainablewebdesign-com-book">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>'.$swdbpage['title'].': How to Design and Write Web Pages Today</title>

  <link rel="stylesheet" type="text/css" media="screen, print" href="/book/css/reset.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="/book/css/screen.css" />
  <!--[if lte IE 7>
  <link rel="stylesheet" type="text/css" media="screen" href="/book/css/screen-ie.css" />
  <![endif]-->
  <link rel="stylesheet" type="text/css" media="print" href="/book/css/print.css" />

  <meta name="description" content="'.$swdbpage['description'].'" />

<!--
  <link rel="image_src" href="http://example.com/media/share/thumbnail.jpg" />
-->

<!--REMOVE COMMENT TAGS TO USE FAVICON LINKS:-->

  <!--For most browsers:-->
<!--
  <link rel="icon" href="http://example.com/favicon.png" type="image/png" />
-->
  <!--For Internet Explorer:-->
<!--
  <link rel="shortcut icon" href="http://example.com/favicon.ico" />
-->

  <!--Load the jQuery library-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
  <!--Load the Snippet jQuery Syntax Highlighter-->
  <script type="text/javascript" src="/book/js/jquery.snippet.min.js"></script>
  <!--Load site-wide JavaScript-->
  <script type="text/javascript" src="/book/js/site.js"></script>';
  if($swdbpage['swfobject']==true) {
    echo '  <!--Load SWFObject for working with Flash media.-->
    <script type="text/javascript" src="/book/js/swfobject/swfobject.js"></script>';
  }
echo'  <!--Page-specific JavaScript, e.g., for use with SWFObject-->
  <script type="text/javascript">
  /*Page-specific JavaScript*/
  '.$swdbpage['js'].'
  </script>

</head>

<body class="'.$swdbpage['bodyclass'].'">
<div id="header">
  <h1><a href="http://sustainablewebdesign.com/book/" rel="home">How to Design
    and Write Web Pages Today</a></h1>
  <ul class="accessibility">
    <li><a href="#navigation">Jump to Navigation</a></li>
    <li><a href="#content">Jump to Content</a></li>
  </ul>
</div>
<div id="page">';
}

function swdb_footer($swdbpage) {
  echo '<!--Close #page-->
</div>
<div class="nav">
  <ul id="navigation">
    <li id="nav-home"><a href="/book/" title="Companion site overview">Home</a></li>
    <li id="nav-rpk"><a href="/book/rpk/" title="Rapid Prototyping Kit downloads">RPK</a></li>
    <li id="nav-examples"><a href="/book/examples/" title="Examples from the book">Examples</a></li>
    <li id="nav-resources"><a href="/book/resources/" title="Additional resources and reference material">Resources</a></li>
    <li id="nav-updates"><a href="/book/updates/" title="Updates and corrections to the book">Updates</a></li>
    <li id="nav-contact"><a href="/book/contact/" title="Get in touch with the author">Contact</a></li>
  </ul>
</div>

  <div id="footer">
    <div id="book">
      <h2>About the Book</h2>
      <img src="/book/media/img/book-thumb.png" height="315" width="232" alt="Cover of How to Design and Write Web Pages Today" />
      <p><em>From the publisher, Greenwood Press</em>: An introduction to standards-based Web design, this book treats creating a website from the point of view of the writer, focusing on writing concerns and how they fit with the technological challenges of the Web. Readers will learn about the reasons for writing on the Web; the challenges of writing there; and the solid, but flexible construction of individual pages. The focus is on building websites that can grow, including sites built around the popular, open-source WordPress blogging system. Rich with examples, the book demonstrates that Web writing and design can be fast and fun—and accomplished without expensive software or sophisticated programming skills.</p>
    </div>
    <div id="siteinfo">
      <p class="credits">
        Site content and design by <a href="http://karlstolley.com/">Karl Stolley</a>. Licensed for   use under
        <a href="http://creativecommons.org/licenses/by/3.0/" rel="license">Creative Commons</a>.
      </p>
      <ul class="validators">
        <li><a href="http://validator.w3.org/check?uri=referer"
          title="Validate this page’s XHTML">XHTML</a></li>
        <li><a href="http://jigsaw.w3.org/css-validator/check/referer"
          title="Validate this page’s CSS">CSS</a></li>
      </ul>
    </div>
  </div>

</body>
</html>';
}

function gist_embed($gistid) {
  $url   = 'https://gist.github.com/' . $gistid . '.json';
	if($json  = file_get_contents($url)) {
	  $contents = json_decode($json, true);
	  print $contents['div'];
	}
	else { print " - <a href=\"https://gist.github.com/".$gistid."\">View on GitHub</a>"; }
}
?>