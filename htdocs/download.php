<?php
  $page_title = 'Downloads';
  $page_name = 'download';
  $page_authors = 'Adrien Nader';

  include('inc/header.php');
  include('inc/navigation.php');
  include('inc/right.php');
?>
  <div id="middle">
    <h1>Downloads</h1>
    There are several available builds related to the Mingw-w64 project.
    Each provides different versions and features.
    <ul class="features">
      <li class="features">Host: the architecture the toolchain runs on.</li>
      <li class="features">Target: the architecture the toolchain builds for.</li>
      <li class="features">
        CRT: C runtime (base C functions and API).
        <ul class="feature-values">
          <li>v2: Unicode entry points, DLL delayed loader, Driver Development
          Kit (from ReactOS), DirectX Development Kit (from Wine), POSIX-style
          large file system, C99 math, C99 printf/scanf and C++ style
          no-inline.</li>
          <li>v3 (trunk): adds improved C99 math, wide variants for C99 printf
          and scanf.</li>
        </ul>
      </li>
      <li class="features">
        C++ Exception Model:
        <ul class="feature-values">
          <li>SJLJ: slower but compatible for everything.</li>
          <li>Dwarf2: faster but exceptions cannot be thrown across DLL boundaries and has some bugs or limitations.</li>
          <li>SEH: fastest but 64-bit only because of a <a href="http://patft.uspto.gov/netacgi/nph-Parser?Sect1=PTO1&amp;Sect2=HITOFF&amp;d=PALL&amp;p=1&amp;u=%2Fnetahtml%2FPTO%2Fsrchnum.htm&amp;r=1&amp;f=G&amp;l=50&amp;s1=5,628,016.PN.&amp;OS=PN/5,628,016&amp;RS=PN/5,628,016">patent</a>.</li>
        </ul>
      </li>
      <li class="features">
        GCC Threading Model: Win32 is default while POSIX allows C++11
        threading.</li>
      <li class="features">Package Manager: simplifies management of software (install, remove, update).</li>
      <li class="features">Additional Software: software not part of the toolchain but available (possibly through a package manager).</li>
    </ul>

    <br/>

<?php include('downloads/automated-builds.php'); ?> <br/>
<?php include('downloads/cygwin.php'); ?> <br/>
<?php include('downloads/fedora.php'); ?> <br/>
<?php include('downloads/mingw-builds.php'); ?> <br/>
<?php include('downloads/yypkg.php'); ?> <br/>
<?php include('downloads/source.php'); ?> <br/>
<?php include('downloads/others.php'); ?> <br/>

  </div>

<?php include('inc/footer.php'); ?>
