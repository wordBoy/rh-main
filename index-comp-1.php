<?php

  $pageDepth = "";
  $pageIdentity = "home";

  require $pageDepth . "assets/sys/sys-constants.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Rayme's Hope home page" />
    <title>Home | Rayme's Hope</title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?= $pageDepth ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Rayme core CSS -->
    <link href="assets/css/rayme_main.css" rel="stylesheet" />
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
            <div class="col-12 d-flex justify-content-center fs-3 mt-4">
            <h2>Community Programs</h2>
            </div>
        </div>

        <!-- 
          Services Block
        -->
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col d-flex justify-content-center my-2">
                <div class="card" style="width: 18rem;">
                  <img src="assets/imgs/istock-draft/istockphoto-1276714803-1024x1024_food.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Feed, Nutritional Help</h5>
                    <p class="card-text">Keeping our horses healthy during a crisis is one of our first priorities. Feed, hay and essential care products are a must.</p>
                    <a href="<?= $pageDepth ?>pgs/programs/programs-food.php" class="">Food Program details</a>
                  </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center my-2">
              <div class="card" style="width: 18rem;">
                <img src="assets/imgs/rh-imgs/Derrick-with-karma_750x500.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title text-center">Care</h5>
                  <p class="card-text">We understand the hard work, dedication and commitment that goes into keeping your horse healthy; Our goal is to help provide discounted fees for routine services and emergency assistance during your crisis.</p>
                  <a href="<?= $pageDepth ?>pgs/programs/programs-care.php" class="">Care Program details</a>
                </div>
              </div>
            </div>
            <div class="col d-flex justify-content-center my-2">
              <div class="card" style="width: 18rem;">
                <img src="assets/imgs/rh-imgs/Isaac-with-rock_1024x682.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title text-center">Youth Programs</h5>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="<?= $pageDepth ?>pgs/programs/programs-youth.php" class="">Youth Program details</a>
                </div>
              </div>
            </div>
        </div>

        <!-- 
          Donation Block 
        -->
        <div class="row mt-5">
          <div class = "col-md">
            <h2 class="fs-4">About Rayme's Hope</h2>
            <img src="assets/imgs/rh-imgs/Beau-2_198w-x-267h.jpg" style="width: 99px; height: 134px; float:left; margin-right: 6px;" class="img-thumbnail" alt="TBD">
            <p>Rayme’s Hope was born out of the needs of our neighbors. Adults and children alike found themselves facing the real possibility of losing their horse. From a crying 11 year old to a phone call from intensive care, the heartbreak and feelings of hopelessness are raw,  deep and beyond describable.  Real pain and real loneliness settle in as those around us begin encouraging us to sell our friend; our horse. Truly only a horse person understands the depth of the relationship that we have with our horses. But few are able to identify exactly what it is that the horseless world is missing about the whole “horse thing” and I can only find one word to describe it. Trust.</p>
            <p>And this one word, “trust” has a depth that is unfathomable. We talk so much about trust when it comes to building our relationship with our horses, but no one ever talks about trusting that someone will be there to stand in the gap when we falter. When we miss a step or there are circumstances beyond our control.Or perhaps we did screw up and found ourselves without what we needed when it was time to care for our horse. Regardless, the suffering of both human and horse begin an intertwined journey which ends in pain for one or the other, and many times both.</p>
            <p>For those who find themselves in this painful place, there are few places to turn. Friends and family either cannot or will not step up and the feelings of isolation set in. An internal struggle is raging that only an animal lover can understand. What does an individual horse person do? They lose trust. From a child whose parents told them that the horse was theirs forever to an urgent phone call for one more favor not granted, they lose trust. And they have not only lost trust, for trust and faith go hand in hand. They lose faith. </p>
          </div>
          <!--
          <div class = "col-1 d-flex justify-content-center align-items-center">
            <div class="d-none d-xl-block" style="border-left: 1px rgb(129, 129, 129) solid; height: 5rem; width: 1px;">
            </div>
          </div>
          -->
          <div class = "col-md py-5">            
            <div class="card text-bg-light">
              <div class="card-body">
                <h2 class="card-title fs-4">Support our Mission: Donate Today!</h2>
                <p class="card-text">As a registered non-profit, we rely on donations to carry out our mission. Become a member of our support community!</p>
                <a href="<?= $pageDepth ?>pgs/donate" class="fw-bolder">Donate Today</a>
              </div>
            </div>
          </div>
          <!--
          <div class="col d-flex justify-content-center align-items-center" style="background-color: cornflowerblue;height: 20rem;">
            Donation block
          </div>
          -->
      </div>
        
      </div>

    </main>

    <?php
      /*
      *****************
      * FOOTER-MINIMAL
      *****************
      */
      include $pageDepth . "pgs/page-parts/footer-full.php";
    ?>

    <script src="<?= $pageDepth ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
