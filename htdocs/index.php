<?php
  require_once('magpies/rss_fetch.inc');

  $url = "http://sourceforge.net/export/rss2_keepsake.php?group_id=202880";
  $rss = fetch_rss($url);
  $news_items = 10;

  $page_title = 'Mingw-w64 - GCC for both 64 &amp; 32 bits Windows';
  $page_authors = '<a href="http://win-builds.org">Adrien Nader of win-builds.org</a>';

  include('inc/header.php');
  include('inc/navigation.php');

?>


    <!-- MAIN CONTENT AREA -->
    <div id="middle">
      <div>
        <div id="intro" style="display: inline-block">
          <h2>Mingw-w64 version 3.0</h2>
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
        </div>
        <div class="contribute" style="display: inline-block; vertical-align: top; float: right">
        </div>
        <div class="category friends" style="display: inline-block; vertical-align: top; float: right">
          <?php
            include('projects.php');
            print_links('Friend Projects', $associated_projects_divs);
          ?>
        </div>
      </div>
      <div class="flexbox">
        <div class="category projects">
          <?php
            print_links('Some Projects using Mingw-w64',
              array_merge($compilers_ides_tools, $providers, $builds_against));
            echo '<a style="text-align: center" href="users.php">See More Projects</a>';
            echo '<a style="text-align: center" href="mailto:mingw-w64-public@lists.sourceforge.net"><strong>Add your project!</strong></a>';
          ?>

        </div>

        <div class="category news">
          <h3>Latest File Releases</h3>
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
              echo '<a href="'.$link.'"><span class="date">'.$date.': </span>'.$title.'</a>';
            }
          ?>
        </div>
      </div>
    </div>

<?php include('inc/footer.php'); ?>
