<?php
  $page_title = 'Downloads and Installation';
  $page_name = 'download';
  $page_authors = 'Adrien Nader';

  include('inc/header.php');
  include('inc/navigation.php');
?>
  <div id="middle">
    <h1>Downloads and Installation</h1>

<?php
include('downloads/cygwin.php');
include('downloads/fedora.php');
include('downloads/mingw-builds.php');
include('downloads/yypkg.php');
include('downloads/others.php');
?>

  </div>

<?php include('inc/footer.php'); ?>
