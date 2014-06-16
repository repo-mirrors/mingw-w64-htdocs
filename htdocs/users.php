<?php
  $page_title = 'Projects Using Mingw-w64';

  include('inc/header.php');
  include('inc/navigation.php');

?>


    <!-- MAIN CONTENT AREA -->
    <div id="middle">
      <?php
        include('projects.php');

        printf('<h3>%s</h3>', 'Associated Projects');
        echo '<ul>';
        foreach($associated_projects as $link) printf('<li>%s</li>', $link);
        echo '</ul>';

        printf('<h3>%s</h3>', 'Package Providers');
        echo '<ul>';
        foreach($providers as $link) printf('<li>%s</li>', $link);
        echo '</ul>';

        printf('<h3>%s</h3>', 'Compilers and Tools');
        echo '<ul>';
        foreach($compilers_ides_tools as $link) printf('<li>%s</li>', $link);
        echo '</ul>';

        printf('<h3>%s</h3>', 'Projects using mingw-w64 to build');
        echo '<ul>';
        foreach($builds_against as $link) printf('<li>%s</li>', $link);
        echo '</ul>';
      ?>
    </div>

<?php include('inc/footer.php'); ?>
