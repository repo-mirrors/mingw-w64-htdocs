<?php
  require_once('magpies/rss_fetch.inc');

  $url = "http://sourceforge.net/export/rss2_keepsake.php?group_id=202880";
  $rss = fetch_rss($url);
  $news_items = 16;

  $page_title = 'Mingw-w64 - GCC for both 64 &amp; 32 bits Windows';
  $page_authors = '<a href="http://win-builds.org">Adrien Nader of win-builds.org</a>';

  include('inc/header.php');
  include('inc/navigation.php');
  include('projects.php');

?>

    <!-- MAIN CONTENT AREA -->
    <div id="middle">
      <div class="flexbox">
        <div class="flexbox-size-wa flex-grow"><div id="intro">
          <h1>Mingw-w64 version 3.0</h1>
            <ul>
              <li>Required for GCC 4.8</li>
              <li>Much improved floating point math performance</li>
              <li>Improved MSVC intrinsics performance</li>
              <li>Addition of wide variants in C99 printf and scanf</li>
              <li>Partial C1X secure CRT support</li>
              <li>Partial MS Secure CRT templates for C++</li>
              <li>Vastly improved Windows 7 and 8 win32 API support</li>
              <li>POSIX-style Large File Support</li>
              <li>Winpthread: new library, pthreads implementation for Windows</li>
              <li>Winstorecompat: new library for Windows Store compatibility (WIP)</li>
            </ul>
          <p>
            <strong>Version 2.0</strong> focused on expanding Windows Vista/7 API support.<br>
            The <a href="http://sourceforge.net/projects/mingw-w64">project page</a> has the full list of <a href="http://sourceforge.net/projects/mingw-w64/files/">releases</a> and more <a href="http://sourceforge.net/p/mingw-w64/wiki2/Home/">details</a>.
          </p>
        </div></div>
        <div class="flexbox-size-wa"><div id="friends" style="vertical-align: top">
          <h2>Friend Projects</h2>
          <?php
            foreach($associated_projects as $link) print_listing_item($link);
          ?>
        </div></div>
      </div>
      <div class="flexbox">
        <div class="flexbox-size-wa flex-grow-shrink"><div id="projects">
          <h2>Some Projects using Mingw-w64</h2>
          <div class="flexbox">
            <?php
              print_links(array_merge($compilers_ides_tools, $providers, $builds_against));
              print_project_link('<a style="text-align: center" href="users.php">See More</a>');
              print_project_link('<a style="text-align: center" href="mailto:mingw-w64-public@lists.sourceforge.net"><strong>Add your project!</strong></a>');
            ?>
          </div>

        </div></div>

        <div class="flexbox-size-wa flex-grow-shrink"><div id="news">
          <h2>Recent Activity</h2>
          <div class="flexbox">
            <?php
              date_default_timezone_set('Etc/UTC');
              for ($i=0; $i<$news_items; $i++) {
                $date = date("j M G:i", $rss->items[$i]['date_timestamp']);
                $link = htmlspecialchars($rss->items[$i]['link']);
                $title = ($rss->items[$i]['title']);
                $title = preg_replace("/posted a comment on ticket #(\d+)/",
                  "has commented on ticket #$1", $title);
                $title = preg_replace("/MinGW-w64 - for 32 and 64 bit Windows released/", "New file:", $title);
                $title = preg_replace("/\\/Toolchain sources\\/Automated Builds\\//", "", $title);
                $title = htmlspecialchars($title);
                echo '<div class="flexbox-size-wa">';
                echo '  <div class="listing-item">';
                echo '    <span class="date">'.$date.': </span><a href="'.$link.'">'.$title.'</a>';
                echo '  </div>';
                echo '</div>';
              }
            ?>
          </div>
        </div></div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>
