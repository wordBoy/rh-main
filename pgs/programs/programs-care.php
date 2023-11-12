<?php

  $pageDepth = "../../";
  $pageIdentity = "programs";

  require $pageDepth . "assets/sys/sys-constants.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Rayme's Hope Urgent and Ongoing Care" />
    <title>Urgent and Ongoing Care | Rayme's Hope</title>
    
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
              <div class="fs-5">Rayme's Hope Community Programs</div>              
              <h1>Urgent and Ongoing Care</h1>
              <p>Placeholder Content</p>
              <p><a href="index.php">Return to the programs page</a></p>

            </div>
        </div>

        
      </div><!-- div container end -->

    </main>

    <?php
      include $pageDepth . "pgs/page-parts/footer-full.php";
    ?>

    <script src= "<?= $pageDepth ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
