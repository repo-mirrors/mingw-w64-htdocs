<?php
  require_once('magpies/rss_fetch.inc');

  $url = "http://sourceforge.net/export/rss2_keepsake.php?group_id=202880";
  $rss = fetch_rss($url);
  $news_items = 10;

  $page_title = 'GCC for both x64 &amp; x86 Windows!';

  include('inc/header.php');
  include('inc/navigation.php');
  include('inc/right.php');

?>


    <!-- MAIN CONTENT AREA -->
    <div id="middle">
      <h1>Overview</h1>
       <p>
         Mingw-w64 delivers runtime, headers and libs for developing both 64 bit (x64) and 32 bit (x86) windows applications using GCC and other free software compilers.
      </p>
      <p>
        <strong>Version 3.0</strong> is the stable release and is required for GCC 4.8. A lot of development has gone into it; main changes include:
        <ul>
          <li>Much improved floating point math performance</li>
          <li>Improved MSVC compiler intrinsics performance</li>
          <li>C99 printf includes wide variants</li>
          <li>C99 scanf, including wide variants</li>
          <li>Partial C1X secure CRT support</li>
          <li>Partial MS Secure CRT templates for C++</li>
          <li>Overall improved Windows 7 and 8 win32 API support</li>
          <li>POSIX-style Larg File Support</li>
          <li>New component library: winpthreads, a pthreads implementation for Windows</li>
          <li>New component library: winstorecompat, a Windows Store
          compatibility code (still partial)</li>
        </ul>
      </p>
      <p>
        <em>Version 2.0</em> is the previous release; it greatly expands the support for Windows Vista/7 APIs.
      </p>
      <p>
        Use the latest point version of GCC 4.7 or 4.8. Versions down to 4.5.1 are supported but each new version brings many improvements.
      </p>
      <p>
        The <a href="http://sourceforge.net/projects/mingw-w64">project page</a> has the full list of <a href="http://sourceforge.net/projects/mingw-w64/files/">releases</a> and more <a href="http://sourceforge.net/apps/trac/mingw-w64/">details</a>.
        You can report bugs via the <a href="http://sourceforge.net/tracker/?group_id=202880">Issue Tracker</a> or notify us directly on <a href="irc://irc.oftc.net/#mingw-w64">IRC</a> on #mingw-w64 on OFTC, via the <a href="http://irc.oftc.net/?channels=#mingw-w64">web-based client</a> or via a relay on freenode.
      </p>
      <div class="projects">
        <h3>Projects successfully using MinGW-w64</h3>
        <?php include('projects.php'); ?>
      </div>

      <div class="news">
        <h3>Live Project Feed</h3>
        <ul>
          <?php
            for ($i=0; $i<$news_items; $i++) {
              $date = date("j F h:i A", $rss->items[$i]['date_timestamp']);
              $link = htmlspecialchars($rss->items[$i]['link']);
              $title = ($rss->items[$i]['title']);
              $title = preg_replace("/made 1 file-release changes/",
                "has released 1 file", $title);
              $title = preg_replace("/made (\d+) file-release changes/",
                "has released $1 files", $title);
              $title = htmlspecialchars($title);
              echo '<li><a href="'.$link.'"><span class="date">'.$date.': </span>'.$title.'</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>

<?php include('inc/footer.php'); ?>
