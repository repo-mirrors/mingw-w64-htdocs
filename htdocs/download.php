<?php
  $page_title = 'Downloads';
  $page_name = 'download';
  $page_authors = '<a href="http://win-builds.org">Adrien Nader of win-builds.org</a>';

  include('inc/header.php');
  include('inc/navigation.php');
?>
  <div id="middle">
    <h1>Downloads</h1>

<?php
include('downloads/arch_linux.php');
include('downloads/cygwin.php');
include('downloads/fedora.php');
include('downloads/mingw-builds.php');
include('downloads/yypkg.php');
include('downloads/others.php');
?>

  </div>

<?php include('inc/footer.php'); ?>
