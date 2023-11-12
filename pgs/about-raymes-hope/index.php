<?php

  $pageDepth = "../../";
  $pageIdentity = "about";
  
  require $pageDepth . "assets/sys/sys-constants.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="About Rayme's Hope" />
    <title>About Rayme's Hope</title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?=$pageDepth?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Rayme core CSS -->
    <link href="<?=$pageDepth?>assets/css/rayme_main.css" rel="stylesheet" />
  </head>

  <body>
    <a class="visually-hidden-focusable" href="#content">Skip to main content</a>
    
    <main>
    <?php
        /*
        ******************
        * NAVIGATION-FULL
        ******************
        */
        include $pageDepth . "pgs/page-parts/navigation-full.php";
      ?>

      <!--
        Body Content Starts here
      -->
      <span id="content"></span>

      <div class="container">

        <div class="row mt-5">
            <div class="col my-2">
              <h1>About Rayme's Hope</h1>
              <p>Placeholder Content</p>
              <p>Link to the <a href="board.php">Rayme's Hope Board Page</a></p>

            </div>
        </div>

        
      </div><!-- div container end -->

    </main>

  <?php
    /*
    *****************
    * FOOTER-MINIMAL
    *****************
    */
    include $pageDepth . "pgs/page-parts/footer-minimal.php";
  ?>

    <script src="<?=$pageDepth?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
