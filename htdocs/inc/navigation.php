<?php $current = $_SERVER['REQUEST_URI']; ?>

    <!-- LEFT COLUMN -->
    <div id="left">
      <ul>
        <li>
          <a href="index.php" title="Return to the main page" class="home"><span>Home</span></a>
        </li>
        <li>
          <a href="download.php" title="Download and Install Mingw-w64" class="install">
            <img alt="dowload icon" src="/img/icons/download-green.png"><span>Downloads</span>
          </a>
          <ul>
            <li><a href="download.php#arch" title="Download and install mingw-w64 on Arch Linux">Arch Linux</a></li>
            <li><a href="download.php#cygwin" title="Download and install mingw-w64 on Cygwin">Cygwin</a></li>
            <li><a href="download.php#fedora" title="Download and install mingw-w64 on Fedora">Fedora Project</a></li>
            <li><a href="download.php#mingw-builds" title="Download and install mingw-w64 on Windows">Mingw-builds Project</a></li>
            <li><a href="download.php#win-builds" title="Download and install mingw-w64 on Windows and Linux">Win-builds</a></li>
            <li><a href="download.php#darwin" title="Download and install mingw-w64 on Mac OS X">Darwin</a></li>
            <li><a href="download.php#source" title="Get Mingw-w64 sources">Sources</a></li>
            <li><a href="download.php#others" title="See other downloads">Everything Else</a></li>
          </ul>
        </li>
        
        <li>
          <a href="http://sourceforge.net/p/mingw-w64/wiki2/Home/" class="documentation">
            <img alt="documentation icon" src="/img/icons/chat-blue.png"/>Documentation
          </a>
          <ul>
            <li><a href="http://sourceforge.net/p/mingw-w64/wiki2/Home/">Wiki</a></li>
            <li><a href="http://sourceforge.net/p/mingw-w64/wiki2/History/">History</a></li>
            <li><a href="http://sourceforge.net/p/mingw-w64/wiki2/FAQ/">FAQ</a></li>
            <li><a href="http://mingw-w64.sourceforge.net/libmangle/">libmangle</a></li>
            <li><a href="http://sourceforge.net/p/mingw-w64/wiki2/gendef/">gendef</a></li>
          </ul>
        </li>

        <li>
          <a href="http://sourceforge.net/projects/mingw-w64/support" class="help">
            <img alt="help icon" src="/img/icons/help-purple.png"/>Help
          </a>
          <ul>
            <li><a href="http://lists.sourceforge.net/mailman/listinfo/mingw-w64-public">Public Mailing List</a></li>
            <li><a href="irc://irc.oftc.net/#mingw-w64">IRC Channel</a></li>
            <li><a href="http://sourceforge.net/p/mingw-w64/discussion/">Discussion Forum</a></li>
            <li><a href="http://sourceforge.net/p/mingw-w64/_list/tickets">Issue tracker</a></li>
          </ul>
        </li>

        <li>
          <a href="contribute.php" class="donate">
            <img alt="donation icon" src="/img/icons/upload-blue.png"/>Get Involved
          </a>
          <ul>
            <li>
              <a href="contribute.php">Contribute</a>
            </li>
            <li>
              <a href="donations.php">Donate</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="" class="friends"><span>Friends</span></a>
          <ul>
            <?php
              include('projects.php');
              foreach($associated_projects as $link) {
                echo '<li>'.$link.'</li>';
              }
            ?>
          </ul>
        </li>

      </ul>

    </div>
