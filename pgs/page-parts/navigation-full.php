<?php

  /**
   * Primary navigation that applies across the entire site.   * 
   */

?>
      <!-- 
        Navigation: Start
      -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Navigation bar for Rayme's Hope">
        <div class="container">

          <a class="navbar-brand" href="<?=$pageDepth?><?= RH_HOME_PG ?>">Rayme's Hope</a>
          <span class="text-white d-none d-sm-none d-md-none d-lg-block"> | &nbsp;&nbsp;&nbsp;</span>
          <span class="text-white d-none d-sm-none d-md-none d-lg-block">Helping horses during human crisis</span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navCollapsibleFull1" aria-controls="navCollapsibleFull1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse justify-content-end" id="navCollapsibleFull1">
            <ul class="navbar-nav mb-2 mb-md-0">

              <ul class="nav col-12 col-md-auto my-2 justify-content-center">
                <li class="nav-item">
                  <?php
                    if ( isset($pageIdentity) && $pageIdentity == "gethelp" ) {
                      print "<a class=\"nav-link active text-white fw-bold\" aria-current=\"page\" href=\"" . $pageDepth . "pgs/get-help\">Get Help</a>";
                    } else {
                      print "<a class=\"nav-link text-white\" href=\"" . $pageDepth . "pgs/get-help\">Get Help</a>";
                    }
                  ?>                  
                </li>

                <li class="nav-item pl-4">
                  <?php
                      if ( isset($pageIdentity) && $pageIdentity == "donate" ) {
                        print "<a class=\"nav-link active text-white fw-bold\" aria-current=\"page\" href=\"" . $pageDepth . "pgs/donate\">Donate</a>";
                      } else {
                        print "<a class=\"nav-link text-white\" href=\"" . $pageDepth . "pgs/donate\">Donate</a>";
                      }
                  ?>                  
                </li>
              </ul>
  
              <div class="pt-3 px-2 d-none d-lg-block d-md-block text-white">|</div>
              
              <ul class="nav col-12 col-md-auto my-2 justify-content-center">
                <li class="nav-item">
                  <?php
                      if ( isset($pageIdentity) && $pageIdentity == "programs" ) {
                        print "<a class=\"nav-link active text-white fw-bold\" aria-current=\"page\" href=\"" . $pageDepth . "pgs/programs\">Programs</a>";
                      } else {
                        print "<a class=\"nav-link text-white\" href=\"" . $pageDepth . "pgs/programs\">Programs</a>";
                      }
                  ?>  
                </li>

                <li class="nav-item">
                  <?php
                      if ( isset($pageIdentity) && $pageIdentity == "contactus" ) {
                        print "<a class=\"nav-link active text-white fw-bold\" aria-current=\"page\" href=\"" . $pageDepth . "pgs/contact-us\">Contact Us</a>";
                      } else {
                        print "<a class=\"nav-link text-white\" href=\"" . $pageDepth . "pgs/contact-us\">Contact Us</a>";
                      }
                  ?>  
                </li>
                
                <li class="nav-item">
                  <?php
                      if ( isset($pageIdentity) && $pageIdentity == "about" ) {
                        print "<a class=\"nav-link active text-white fw-bold\" aria-current=\"page\" href=\"" . $pageDepth . "pgs/about-raymes-hope\">About</a>";
                      } else {
                        print "<a class=\"nav-link text-white\" href=\"" . $pageDepth . "pgs/about-raymes-hope\">About</a>";
                      }
                  ?>  
                </li>
              </ul>

            </ul>
          </div>
          
        </div>
      </nav>
      <!-- 
        Navigation: End
      -->