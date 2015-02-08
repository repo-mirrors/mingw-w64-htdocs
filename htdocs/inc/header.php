<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?=$page_title?>">
    <title><?=$page_title?> - MinGW-w64</title>
    <link href="css/main.css" type="text/css" rel="stylesheet">
<?php
  if (isset($page_name) && file_exists('css/' . $page_name . '.css')) {
    echo '<link href="css/' . $page_name . '.css" type="text/css" rel="stylesheet">';
  }
?>
  </head>
  
  <body>
    <p id="skip-to-content"><a href="#middle">Skip to main content</a></p>

    
    
    <!-- HEADER -->
    <div id="header">
      <a href="index.php" class="title">Mingw-w64 - GCC for Windows 64 &amp; 32 bits</a>
    </div>
    
