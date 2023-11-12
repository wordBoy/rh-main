<?php

  $pageDepth = "";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Rayme's Hope home page" />
    <title>Home | Rayme's Hope</title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?=$pageDepth?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Rayme core CSS -->
    <link href="<?=$pageDepth?>assets/css/rayme_main.css" rel="stylesheet" />
  </head>

  <body>
    <main>

        <?php
        /*
        ******************
        * NAVIGATION-FULL
        ******************
        */
        include $pageDepth . "pgs/page-parts/navigation-minimal.php";
      ?>

      <!--
        Body Content Starts here
      -->
      <span id="content"></span>

      <?php
        /*
        ************
        * HERO-MAIN
        ************
        */
        include $pageDepth . "pgs/page-parts/hero-main.php";
      ?>

      <div class="container">

        <div class="row">
            <div class="col-12 d-flex justify-content-center fs-3">
              Helping horses during human crisis.
            </div>
        </div>
        
        
      </div>

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
