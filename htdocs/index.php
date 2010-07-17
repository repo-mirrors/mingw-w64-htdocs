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
        The project's goal is to deliver runtime, headers, and libs for
        developing 64 bit (x64), as well as 32 bit (x86), windows applications using gcc-4.4
        or newer versions.
      </p>
      <p>
        <strong>Project Status:</strong> Version 1.0 has been released and is considered stable.
      </p>
      <p>
        You are now able to generate applications using these headers, libs and runtime together with gcc-4.4 and up. However, when compiling for 64-bit we recommend using atleast gcc-4.5.1 to take advantage of the many improvements and bug-fixes.
        If you come across any bugs, please report them via the <a href="http://sourceforge.net/tracker/?group_id=202880">Issue Tracker</a> or notify us directly on <a href="irc://irc.oftc.net/#mingw-w64">IRC</a>.
      </p>
      <p>
        Please visit the <a href="http://sourceforge.net/projects/mingw-w64">project page</a>

        for <a href="http://sourceforge.net/projects/mingw-w64/files/">releases</a> and more 
        <a href="http://sourceforge.net/apps/trac/mingw-w64/">details</a>! If you want to join us in chat, we are on the 
        <a href="http://www.oftc.net/oftc/">OFTC</a> network in the channel <a href="irc://irc.oftc.net/#mingw-w64">
        #mingw-w64</a>. You can also access this channel via a relay on <a href="http://freenode.net/">Freenode.net</a>. For users that are unfamiliar with IRC, we have a <a href="mibbit.html">
        web based client</a> available.
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
              $date = date("l, F Y h:i A", $rss->items[$i]['date_timestamp']);
              $link = htmlspecialchars($rss->items[$i]['link']);
              $title = htmlspecialchars($rss->items[$i]['title']);
              echo '<li><a href="'.$link.'"><span class="date">'.$date.'</span>'.$title.'</a></li>';
            }
          ?>
        </ul>
      </div>

      <h2>Site statistics</h2>
      <a href="http://sourceforge.net/project/stats/detail.php?group_id=202880&amp;ugn=mingw-w64&amp;mode=week&amp;type=prweb">
        <img src="http://sourceforge.net/project/stats/graph/index-graph.php?group_id=202880&amp;ugn=mingw-w64&amp;graph=prweb&amp;mode=week">
      </a>
      <a href="http://sourceforge.net/project/stats/detail.php?group_id=202880&amp;ugn=mingw-w64&amp;type=prdownload">
        <img src="http://sourceforge.net/project/stats/graph/index-graph.php?group_id=202880&amp;ugn=mingw-w64&amp;graph=prdownload&amp;mode=week">
      </a>

    </div>
        
    
    
<?php include('inc/footer.php'); ?>