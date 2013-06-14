<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>
    <meta charset="utf-8">
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
      <a href="/" class="logo" title="MinGW-w64 Home">MinGW-w64</a>
      <span class="title">GCC for both x64 &amp; x86 Windows!</span>
      <span class="sub">...now a reality</span>
    </div>
    
