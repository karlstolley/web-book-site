<?php
include($_SERVER['DOCUMENT_ROOT'].'/book/includes/functions.php');

$swdbpage = array(
  'title'       => 'XAMPP',
  'description' => 'Instructions for setting up a local web server for development, using XAMPP',
  'swfobject'   => false,
  'js'          => '',
  'bodyclass'   => 'resources'
);

swdb_header($swdbpage);

?>
  <div id="promo">
    <div class="summary">
      <h2>Setting up XAMPP</h2>
      <p>
        Web writing and design is best done with a simple Web server that runs on a USB drive or on
        your computer.
      </p>
    </div>
    <!--
      <div class="feature">
      </div>
    -->
  </div>

  <div id="content">

    <div id="main">
      <h2>Setting up XAMPP: General Notes</h2>
      <p>
        Setting up <a href="http://www.apachefriends.org/">XAMPP</a> is not terribly difficult or
        time-consuming. It lets you test your website at a special URL,
        <code>http://localhost/</code>, that makes it possible to use root-relative paths, run PHP
        scripts, and do other kinds of things your live website will do.
      </p>
      <h3 id="xampp-windows">XAMPP Setup: Windows</h3>
      <p>
        These steps have been tested with XAMPP version 1.7.4 on a USB drive on Windows XP, Windows Vista, and Windows 7.
        Please <a href="/book/contact/">contact the author</a> if you run into any problems so that
        these instructions can be improved, if necessary.
      </p>
      <ol>
        <li>
          Download either the ZIP or the 7zip archive for Windows 
          <a href="http://www.apachefriends.org/en/xampp-windows.html#641">from the XAMPP site</a>;
          <strong>do not download the installer</strong>. The 7zip archive is smaller, so it
          downloads faster; but it may take longer to unzip, up to 10 or 15 minutes, depending on
          the speed of your computer.
        </li>
        <li>
          Unzip the ZIP or 7zip archive; if you don't have an unzipping utility, try 7-Zip.
        </li>
        <li>
          Copy the unzipped <code>xampp</code> folder to the root of your USB drive (in other words,
          don’t place it inside of another folder). If your unzipping program has created a folder
          that has <code>xampp</code> inside of it (e.g., some unzipping programs will create a
          folder like <code>xampp-win32-1.7.4-VC6/</code>), move just the <code>xampp</code> folder
          to the root of your drive. Depending on the speed of your USB drive, that, too, make take
          a little while, too (15 or 20 minutes).
          <div class="screenshot">
            <img src="/book/media/img/xampp-folder.png" width="400" height="300" alt="Screenshot showing xampp folder in the root of a USB drive" />
            <p>
              Windows XP screenshot of the <code>xampp</code> folder in its proper place: in the
              root of a USB drive (in this case, the USB drive’s letter is F:).
            </p>
          </div>
        </li>
        <li>
          Load XAMPP by double-clicking on the <code>xampp</code> folder and finding and then
          double-clicking the <code>xampp-control.exe</code> file. (If you don't see the
          <code>.exe</code> extension, the file will still work--but you should Google for <em>show
          file extensions</em> and the name of your operating system (Windows 7, Windows Vista,
          Windows XP; see pages 45-47 in the book).
        </li>
        <li>
          Start the Apache web server by clicking the Start button on the XAMPP Control Panel.
          Windows Vista and Windows 7 users may get a warning about Windows Firewall; click Cancel
          on any windows that pop up.
          <div class="screenshot">
            <img src="/book/media/img/xampp-control-panel.png" width="446" height="352" alt="Screenshot showing the XAMPP control panel and Apache running" />
            <p>
              Windows XP screenshot of the XAMPP Control Panel with the Apache web server running.
            </p>
          </div>
        </li>
        <li>
          Test that XAMPP is running properly by going to the URL <code>http://localhost/</code> in
          your browser (type the whole thing, including the <code>http://</code> part; notice
          there's no www. or .com). You should see the XAMPP welcome screen if all is working
          correctly.
          <div class="screenshot">
           <img src="/book/media/img/xampp-splash.png" width="400" height="300" alt="Screenshot showing the XAMPP splash screen" />
          <p>Windows XP screenshot of the XAMPP splash screen in Firefox.</p>
          </div>
        </li>
        <li>
          Finally, you’ll want to rename the existing <code>htdocs</code> folder inside of the <code>xampp</code> folder to <code>htdocs-original</code>. (You can rename it back if you need, for example, to configure the MySQL database for use with WordPress development.) Then create your own new <code>htdocs</code> folder for your site, or download, unzip, and copy over the <code>htdocs</code> folder from the <a href="/book/rpk/">Rapid Prototyping Kit</a> and get to work on your site. (You might want to stop and restart Apache in the XAMPP Control Panel before you start working.)
        </li>
      </ol>
      <h3 id="xampp-osx">XAMPP Setup: Mac OS X</h3>
      <p>
        Unfortunately, the OS X version of XAMPP will not run on a USB drive; you must have
        administrative rights on any Mac that you wish to install XAMPP on. These instructions have
        been tested on OS X Leopard and OS X Snow Leopard using XAMPP version 1.7.3. Please 
        <a href="/book/contact/">contact the author</a> if you run into any problems so that these
        instructions can be improved, if necessary.
      </p>
      <ol>
        <li>
          Download XAMPP for Mac OS X (Universal Binary) <a
          href="http://www.apachefriends.org/en/xampp-macosx.html#849">from the XAMPP site</a>.
          Double-click the installer, and drag the XAMPP folder to your Applications folder. (You
          may have to enter your adminstrative username and/or password).
        </li>
        <li>
          Find the XAMPP Control application, which will be in an <code>XAMPP</code> folder inside
          of your Applications folder. Double-click the XAMPP Control application to launch.
        </li>
        <li>
          A little Control window will pop up; click the Start button next to Apache. You will be prompted to enter your administrative username and/or password.
          <div class="screenshot">
            <img src="/book/media/img/xampp-control-mac.png" width="205" height="138" alt="Screenshot Mac OS X XAMPP Control window" />
            <p>
              Mac OS X screenshot of the XAMPP Control window, with Apache running.
            </p>
          </div>
        </li>
        <li>Open your browser to <code>http://localhost/</code>; you should see the XAMPP splash page.</li>
        <li>
          Now things get a little complex. This is more of an explanation than a step, so skip down if you’re not interested in an explanation. The <code>Applications</code> folder on a Mac is a restricted area of sorts, so it’s important to configure XAMPP to read from an <code>htdocs</code> folder than you can write to from your user account easily.
        </li>
        <li>Go to your home folder in a Finder window (look for the little house icon with your username next to it, and click it.</li>
        <li>
          In the Finder window, create a new <code>htdocs</code> folder (File &gt; New Folder from the Finder menu). Or, download and unzip the <a href="/book/rpk/">Rapid Prototyping Kit</a> and copy its <code>htdocs</code> folder to your home folder.
        </li>
        <li>
          Find your Terminal application; it's in the Utilities folder inside of Applications. Double-click to start it. Welcome to the command line.
        </li>
        <li>
        </li>
      </ol>
    </div>

    <!--<div id="supporting">
    </div>-->

  </div>

<?php

swdb_footer($swdbpage);

?>