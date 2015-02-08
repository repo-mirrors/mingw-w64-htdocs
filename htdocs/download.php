<?php
  $page_title = 'Downloads';
  $page_name = 'download';
  $page_authors = '<a href="http://win-builds.org">Adrien Nader of win-builds.org</a>';
  $page_description = 'Prebuilt toolchains and additional libraries for a variety of hosts.';

  include('inc/header.php');
  include('inc/navigation.php');
?>
  <div id="middle">
    <h1>Downloads</h1>

<p>
Several pre-built toolchains exist and provide various combinations of versions
and configuration options which are given below. Some also provide additional
packages and package managers for very simple installations.
</p>

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
