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
        The current state: It is already possible to generate applications using
        these headers, libs and runtime together with gcc-4.4 and up :-) There might be bugs
        here and there but everything is <i>mostly</i> complete.
      </p>
      <p>
        Please visit the <a href="http://sourceforge.net/projects/mingw-w64">project page</a>

        for <a href="http://sourceforge.net/projects/mingw-w64/files/">releases</a> and more 
        <a href="http://sourceforge.net/apps/trac/mingw-w64/">details</a>! If you want to join us in chat, we are on the 
        <a href="http://www.oftc.net/oftc/">OFTC</a> network in the channel <a href="irc://irc.oftc.net/#mingw-w64">
        #mingw-w64</a>.  For users that are unfamiliar with IRC, we have a <a href="mibbit.html">
        web based client</a> available.
      </p>

      <div class="projects">
        <h3>Projects successfully using MinGW-w64</h3>
        <ul>
          <li><a href="http://gcc.gnu.org/">GCC: The GNU Compiler Collection</a></li>
          <li><a href="http://www.gnu.org/software/binutils/">GNU Binutils</a></li>
          <li><a href="http://www.gnu.org/software/gdb/">GDB: The GNU Project Debugger</a></li>
          <li><a href="http://fedoraproject.org/wiki/MinGW">Fedora cross-compiler</a></li>

          <li><a href="http://uhexen2.sf.net/">Hexen II: Hammer of Thyrion</a></li>
          <li><a href="http://ffmpeg.mplayerhq.hu/">FFmpeg</a></li>
          <li><a href="http://www.opensc-project.org/">OpenSC</a></li>
          <li><a href="http://wiki.winehq.org/Wine64">Wine</a></li>
          <li><a href="http://mamedev.org/">MAME</a> (Yes, the arcade emulator!)</li>

          <li><a href="http://www.reactos.org/en/index.html">ReactOS</a></li>
          <li><a href="http://www.videolan.org/vlc/">VideoLAN VLC</a></li>
          <li><a href="http://sourceware.org/pthreads-win32/">pthreads</a></li>
          <li><a href="http://www.openssl.org/">OpenSSL</a></li>
          <li><a href="http://www.wxwidgets.org/">wxWidgets</a></li>
          <li><a href="http://www.codeblocks.org/">Code::Blocks</a></li>

          <li><a href="http://www.fltk.org/">FLTK</a></li>
          <li><a href="http://sbcarchiver.cjb.net/">SBC Archiver</a></li>
          <li><a href="http://www.eligis.com/">OpenLisp</a></li>
          <li><a href="http://www.gtk.org/download-windows-64bit.html">GTK+</a></li>
          <li><a href="http://gimp-win.sourceforge.net/stable.html">GIMP</a></li>
          <li><a href="http://www.mpg123.de/">mpg123</a></li>

          <li><a href="http://factorcode.org/">Factor</a></li>
          <li><a href="http://jpen.sf.net/">JPen</a></li>
          <li><a href="http://www.iauxsoft.com/">iAuxSoft</a></li>
          <li><a href="http://remood.sf.net/">ReMooD</a></li>
          <li><a href="http://emergedesktop.org">Emerge Desktop</a></li>
          <li><a href="http://www.mega-nerd.com/libsndfile/">libsndfile</a></li>
          
          <li><a href="http://www.wxperl.co.uk/building/msw.html">wxPerl PPMs</a></li>
          <li><a href="http://www.zlib.net/">zlib</a></li>
          <li><a href="mailto:mingw-w64-public@lists.sourceforge.net">Add your project!</a></li>

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