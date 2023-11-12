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
    <title>Leadership Board | Rayme's Hope</title>
    
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
            <div class="col-lg-8 my-2">
              <h1>Rayme's Hope Leadership Board</h1>
              <p>Placeholder Content - introductory paragraph</p>

              <ul class="list-unstyled mt-5">
                
              <!-- Board member name: Start -->
                <li class="clearfix my-4">
                  <img src="<?=$pageDepth?>assets/imgs/rh-imgs/board-member-placeholder_100wx135h.jpg" style="width: 100px; height: 135px; float:left; margin-right: 20px;" class="img-thumbnail" alt="TBD">
                  <p>
                    <h2 class="h5">Name, Title</h2>
                    Office description here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  </p>
                </li>
                <!-- Board member name: End -->
                
              <!-- Board member name: Start -->
                <li class="clearfix my-4">
                  <img src="<?=$pageDepth?>assets/imgs/rh-imgs/board-member-placeholder_100wx135h.jpg" style="width: 100px; height: 135px; float:left; margin-right: 20px;" class="img-thumbnail" alt="TBD">
                  <p>
                    <h2 class="h5">Name, Title</h2>
                    Office description here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  </p>
                </li>
                <!-- Board member name: End -->
                
              <!-- Board member name: Start -->
                <li class="clearfix my-4">
                  <img src="<?=$pageDepth?>assets/imgs/rh-imgs/board-member-placeholder_100wx135h.jpg" style="width: 100px; height: 135px; float:left; margin-right: 20px;" class="img-thumbnail" alt="TBD">
                  <p>
                    <h2 class="h5">Name, Title</h2>
                    Office description here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  </p>
                </li>
                <!-- Board member name: End -->

              </ul>
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
