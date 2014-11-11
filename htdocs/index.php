<?php
  require_once('magpies/rss_fetch.inc');

  $url = "http://sourceforge.net/export/rss2_keepsake.php?group_id=202880";
  $rss = fetch_rss($url);
  $news_items = 16;

  $page_title = 'GCC for both 64 &amp; 32 bits Windows';
  $page_authors = '<a href="http://win-builds.org">Adrien Nader of win-builds.org</a>';

  include('inc/header.php');
  include('inc/navigation.php');
?>

    <!-- MAIN CONTENT AREA -->
    <div id="middle">
      <div id="intro">

        <h1>Mingw-w64</h1>
        <p>
        Mingw-w64 brings free software toolchains to Windows. It hosts a
        vibrant community which builds and debugs software for Windows while
        providing development environment for everyone to use.
        </p>
        <p>
        It has forked mingw.org in order to move forward and provide 64bit
        support and support for new APIs and has brought countless improvements
        since its creation in 2007.
        </p>

          <h2>Headers</h2>
          <p>More than a million lines of headers are already there and the
          count is continuously increasing to stay up-to-date with new versions
          of Windows.</p>

          <h2>Compiler</h2>
          <p>Mingw-w64 is not a compiler project but a project used with
          compilers. Of course, for simplicity, <a href="download.php">many
          pre-packaged toolchains are available in the Downloads
          section</a> and several of them come with additional libraries and
          tools for extra convenience.</p>

          <h2>Libraries and Runtime</h2>
          <p>All the additional libraries needed to link your code and run it
          directly on Windows are provided along with libraries like
          winpthreads which provides support for C++11 threading and
          winstorecompat, a work-in-progress convenience library to ease
          conformance with the Windows Store.</p>

          <h2>Tools</h2>
          <p>In addition to the usual compilers, linkers and debuggers from the
          toolchain, mingw-w64 provides gendef to generate Visual Studio .def
          files from a .dll, genidl to generate .idl files from a .dll and widl
          to compile them.</p>

        <h1>Version 3.0</h1>
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
                $title = preg_replace("/New file: \\/Toolchains targetting Win(\d+)\\//", "Toolchain build targetting Win$1: ", $title);
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
