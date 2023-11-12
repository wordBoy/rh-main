<?php
  /**
   * Full footer that applies across the entire site.
   * 
   */
?>
      <!--
        Footer: Start
      -->
      <div class="container">
        <footer class="row py-5 my-5 border-top">

          <div class="col mb-3">
            <div>
              <H5 class="text-muted">Rayme's Hope LLC</H5>
              A certified 501c3 non-profit<br/>
              Texas City, TX<br/>
            </div>
            <p class="text-muted text-small">© 2022 - Rayme's Hope LLC</p>
          </div>        

          <div class="col-lg-5 mb-3">
            <h5>Your Donation Matters</h5>
            <p>
                <img src="<?=$pageDepth?>assets/imgs/rh-imgs/Gray-mare.jpg" style="width: 99px; height: 134px; float:left; margin-right: 6px;" class="img-thumbnail" alt="TBD">
                <p><strong>We help horses during human crisis.</strong><br/>Story continues here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p><a href="<?=$pageDepth?>pgs/donate">Donate Today</a></p>
              
              </p>
          </div>

          <div class="col mb-3">
            <h5>Site Resources</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="<?= $pageDepth ?><?= RH_HOME_PG ?>" class="p-0">
                  Home
                </a>
              </li>
              <li class="nav-item mb-2">
                <a href="<?= $pageDepth ?>pgs/programs" class="p-0">
                  Programs
                </a>
              </li>
              <li class="nav-item mb-2">
                <a href="<?= $pageDepth ?>pgs/contact-us" class="p-0">
                  Contact Us</a>
              </li>
              <li class="nav-item mb-2">
                <a href="<?= $pageDepth ?>pgs/about-raymes-hope" class="p-0">
                  About
                </a>
              </li>
            </ul>
          </div>

          <div class="col mb-3">
            <h5 class="mb-4">Connect with Us</h5>
            <ul class="list-inline">
              <li class="list-inline-item">
                <!-- Facebook -->
                <a href="https://facebook.com" title="Facebook" target="Rayme_social_media">
                  <svg class="bi" width="32" height="32" title="Facebook">
                    <use xlink:href="<?=$pageDepth?>node_modules/bootstrap-icons/bootstrap-icons.svg#facebook"/>
                  </svg>
                </a>
              </li>
              <li class="list-inline-item mx-4">
                <!-- LinkedIn -->
                <a href="https://linkedin.com" title="Facebook" target="Rayme_social_media">
                  <svg class="bi" width="32" height="32" title="Linked In">
                    <use xlink:href="<?=$pageDepth?>node_modules/bootstrap-icons/bootstrap-icons.svg#linkedin"/>
                  </svg>
                </a>
              </li>
              <li class="list-inline-item">
                <!-- Twitter -->
                <a href="https://facebook.com" title="Facebook" target="Rayme_social_media">
                  <svg class="bi" width="32" height="32" title="Twitter">
                    <use xlink:href="<?=$pageDepth?>node_modules/bootstrap-icons/bootstrap-icons.svg#twitter"/>
                  </svg>
                </a>
              </li>
            </ul>
          </div>

        </footer>
      </div>
      <!--
        Footer: End
      -->