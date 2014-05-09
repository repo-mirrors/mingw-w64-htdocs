<?php
  $page_title = 'Downloads and Installation';
  $page_name = 'download';
  $page_authors = 'Adrien Nader';

  include('inc/header.php');
  include('inc/navigation.php');
  include('inc/right.php');
?>
  <div id="middle">
    <h1>Downloads and Installation</h1>
    Several builds related to the Mingw-w64 project are available.
    Each build provides different versions and features. The main criteria are:
    <ul class="features">
      <li class="features">Host: the architecture on which the toolchain runs.</li>
      <li class="features">Target: the architecture on which the executables
      made by the toolchain will run. Most commonly, Host and Target are the
      same and the compiler is said to be "native". When Host and Target
      differ, the compiler is a "cross-compiler".</li>
      <li class="features">
        C++ Exception Model: use SEH when available, SJLJ otherwise and avoid Dwarf2:
        <ul class="feature-values">
          <li>SJLJ: slower but available for every architecture.</li>
          <li>SEH: fastest but limited to 64-bit because of a <a href="http://patft.uspto.gov/netacgi/nph-Parser?Sect1=PTO1&amp;Sect2=HITOFF&amp;d=PALL&amp;p=1&amp;u=%2Fnetahtml%2FPTO%2Fsrchnum.htm&amp;r=1&amp;f=G&amp;l=50&amp;s1=5,628,016.PN.&amp;OS=PN/5,628,016&amp;RS=PN/5,628,016">patent</a>.</li>
          <li>Dwarf2: faster than SJLJ and usually on par with SEH but has known limitations and bugs; avoid unless you're aware of all of them.</li>
        </ul>
      </li>
      <li class="features">
        C11/C++11 Threading: C11 and C++11 have added threading support at the
	language level; this requires the winpthreads library which comes with
	the toolchains and changes little for users not relying on it.</li>
      <li class="features">Package Manager: simplifies management of software (install, remove, update).</li>
      <li class="features">Additional Software: software not part of the toolchain but available (possibly through a package manager).</li>
    </ul>

<?php include('downloads/automated-builds.php'); ?> <br/>
<?php include('downloads/cygwin.php'); ?> <br/>
<?php include('downloads/fedora.php'); ?> <br/>
<?php include('downloads/mingw-builds.php'); ?> <br/>
<?php include('downloads/yypkg.php'); ?> <br/>
<?php include('downloads/source.php'); ?> <br/>
<?php include('downloads/others.php'); ?> <br/>

  </div>

<?php include('inc/footer.php'); ?>
