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
        <strong>Project Status:</strong> Version 2.0 is the stable release; it greatly expands the support for Windows Vista/7 APIs.
      </p>
      <p><em>Version 3.0</em> In trunk, and nearing release, has some Large File Support. Note that GCC-4.8.x requires at least r5437 from trunk to support C++11 std::to_string. Earlier versions will not work.
      </p>
      <p><em>winpthreads</em> provides POSIX threads for win32 and can be used for C++11 standard threading which currently requires POSIX threads.
      </p>
      <p>
        Use the latest point version of GCC 4.7 or 4.8. Versions down to 4.5.1 are supported but each new version brings many improvements.
        The <a href="http://sourceforge.net/projects/mingw-w64">project page</a> has the full list of <a href="http://sourceforge.net/projects/mingw-w64/files/">releases</a> and more <a href="http://sourceforge.net/apps/trac/mingw-w64/">details</a>.
        You can report bugs via the <a href="http://sourceforge.net/tracker/?group_id=202880">Issue Tracker</a> or notify us directly on <a href="irc://irc.oftc.net/#mingw-w64">IRC</a> on #mingw-w64 on OFTC, via the <a href="http://irc.oftc.net/?channels=#mingw-w64">web-based client</a> or via a relay on freenode.
      </p>
      <div class="projects">
        <h3>Projects successfully using MinGW-w64</h3>
        <ul>

			<?php include('projects.php'); ?>

        </ul>
      </div>

      <div class="news">
        <h3>Live Project Feed</h3>
        <ul>
          <?php
            for ($i=0; $i<$news_items; $i++) {
              $date = date("j F h:i A", $rss->items[$i]['date_timestamp']);
              $link = htmlspecialchars($rss->items[$i]['link']);
              $title = htmlspecialchars($rss->items[$i]['title']);
              echo '<li><a href="'.$link.'"><span class="date">'.$date.': </span>'.$title.'</a></li>';
            }
          ?>
        </ul>
      </div>
    </div>

<?php include('inc/footer.php'); ?>
