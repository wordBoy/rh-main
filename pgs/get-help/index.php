<?php

  $pageDepth = "../../";
  $pageIdentity = "gethelp";

  $typeOfHelpNeeded = "";
  if ( isset( $_GET['type'] ) ) {
    $typeOfHelpNeededRaw = $_GET['type'];
    if ( !(ctype_alpha( $typeOfHelpNeededRaw ) && strlen( $typeOfHelpNeededRaw ) > 6) ) {
      $typeOfHelpNeeded = $typeOfHelpNeededRaw;
    }
    
  }

  
  require $pageDepth . "assets/sys/sys-constants.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Rayme's Hope Get Help page" />
    <title>Get Help | Rayme's Hope</title>
    
    <!-- Bootstrap core CSS -->
    <link href="<?=$pageDepth?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Rayme core CSS -->
    <link href="<?=$pageDepth?>assets/css/rayme_main.css" rel="stylesheet" />

    <!--ReCAPTCHA entry -->
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lct27UjAAAAAEl3bOOsNixr_6kKrKbNaZ14UZgh"></script>

    <!-- Core page script -->
    <script>
      let typePreset = "<?=$typeOfHelpNeeded?>";
    </script>
    <script src="gethelp.js"></script>

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
              <h1>Get Help</h1>
              <p>Use this form if you have an immediate need for assistance. <br/>If you want to make a general inquiry, use our <a href="<?= $pageDepth ?>pgs/contact-us">contact us page</a>.</p>
              <p>Required fields are followed by an asterisk "*".</p>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
              <form action="gethelp-submitted.php" method="post" name="gethelp" id="gethelp">
                
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
                  <label for="typeOfHelpNeeded" class="form-label">What type of help do you need?</label>
                  <select id="typeOfHelpNeeded" name="typeOfHelpNeeded" class="form-select" required>
                    <option selected>Choose...</option>
                    <option value="food">Food</option>
                    <option value="emergency-care">Emergency Care</option>
                    <option value="ongoing-care">Ongoing Care</option>
                    <option value="training">Training</option>
                    <option value="youth-assistance">Youth Assistance</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="howCanWeHelp" class="form-label">How can we help you? *</label>
                  <textarea class="form-control" id="howCanWeHelp" name="howCanWeHelp" rows="3" required></textarea>
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

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
