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
    <meta name="description" content="Rayme's Hope Food Program" />
    <title>Food | Rayme's Hope</title>
    
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
              <h1>Feed, Nutritional Help: More Information</h1>
              <p>We all know how crucial consistent feeding and necessary supplements are to the well being of our horses, and that is why Rayme's Hope is committed to helping those who are struggling to feed their horses. You may just need a few bales of hay or a bag of grain, or you may need help during a long term crisis. We will help with the short term and work with you to seek long term solutions to ensure that your horse does not miss any meals.</p>
              <p>
                <a href="../get-help/?type=feed">Request feed and nutritional help</a>
              </p>

            </div>
        </div>

        
      </div><!-- div container end -->

    </main>

    <?php
      include $pageDepth . "pgs/page-parts/footer-full.php";
    ?>

    <script src="<?= $pageDepth ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
