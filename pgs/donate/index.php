<?php

  $pageDepth = "../../";
  $pageIdentity = "donate";
  
  require $pageDepth . "assets/sys/sys-constants.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Rayme's Hope Donation Page" />
    <title>Donate | Rayme's Hope</title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?=$pageDepth?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Rayme core CSS -->
    <link href="<?=$pageDepth?>assets/css/rayme_main.css" rel="stylesheet" />

    <style>
      .raymeshope {
        overscroll-behavior: none;
      }
    </style>

    <script>
      
    </script>

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
              <h1>Donate to Rayme's Hope</h1>
              <p>Thank you so much for considering a donation to support our efforts. Know that your contribution is focused on our core mission. The link below will take you to our donation host site in a new tab.</p>
              <p><a href="https://www.givesendgo.com/raymeshope" target="RaymeHopeDonate" class="btn btn-primary" role="button" style="font-weight: bold;">Donate to Rayme's Hope (opens in a new window)</a></p>
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

    <script src="<?= $pageDepth ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
