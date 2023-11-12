<?php

  $pageDepth = "../../";
  $pageIdentity = "contactus";
  
  require $pageDepth . "assets/sys/sys-constants.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Rayme's Hope Contact Page" />
    <title>Contact Us | Rayme's Hope</title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?=$pageDepth?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Rayme core CSS -->
    <link href="<?=$pageDepth?>assets/css/rayme_main.css" rel="stylesheet" />

    <!--ReCAPTCHA entry -->
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lct27UjAAAAAEl3bOOsNixr_6kKrKbNaZ14UZgh"></script>

    <!-- Core page script -->
    <script src="contactus.js"></script>

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
              <h1>Contact Us</h1>
              <p>If you are looking for immediate help, please use our <a href="<?= $pageDepth ?>pgs/get-help">help request form</a>.</p>
              <p>Required fields are followed by an asterisk "*".</p>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
              <form action="contact-submitted.php" method="post" name="contactus" id="contactus">
                
                <div class="mb-3">
                  <label for="firstName" class="form-label">First Name *</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                
                <div class="mb-3">
                  <label for="lastName" class="form-label">Last Name *</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>

                <div class="mb-3 fw-bold">
                  <p>Please include one or both of email and phone number as a way to contact you:
                </div>
                
                <div class="mb-3 offset-1">
                  <label for="emailAddr" class="form-label">Email</label>
                  <input type="email" class="form-control" id="emailAddr" name="emailAddr" placeholder="myname@email.com">
                </div>

                <div class="mb-3 offset-1">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="(###) ###-####" max=18>
                </div>

                <div class="mb-3">
                  <label for="howCanWeHelp" class="form-label">Main Message *</label>
                  <textarea class="form-control" id="howCanWeHelp" name="howCanWeHelp" rows="3" required max=1000></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

              </form>

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

    <script src="<?= $pageDepth ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
