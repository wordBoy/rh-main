<?php

  $pageDepth = "../../";
  require $pageDepth . "assets/sys/sys-constants.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Rayme's Hope home page" />
    <title>Contact Form Submitted | Rayme's Hope</title>
    
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
        * NAVIGATION
        ******************
        */
        include $pageDepth . "pgs/page-parts/navigation-full.php";
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
        include $pageDepth . "pgs/page-parts/hero-title-1.php";
      ?>

      <div class="container">

        <div class="row">
            <div class="col">
              <h1>Thank you. We received your request.</h1>
              <p>Thank-you for contacting us. We will get back to you as soon as possible.</p>
              <p><a href="<?=$pageDepth?><?= RH_HOME_PG ?>">Return to our Home Page</a>
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
