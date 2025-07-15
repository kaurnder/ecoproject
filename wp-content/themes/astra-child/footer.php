<!-- footer-start -->
<footer class="bd-footer py-4 py-md-5 mt-5  bg-dark">
        <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
          <div class="row">
            <div class="col-lg-3 mb-3">
              <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.avif" class="img-logo" width="80" height="92" class="d-block me-2" viewBox="0 0 118 94" role="img">
              </a>
              <ul class="list-unstyled small">
                <li class="mb-2 text-light " >AceWebX is a software development company yielding premium web solutions and guaranteed results. Our team of skilled and experienced professionals understand your needs perfectly to provide you with exceptional service quality and impeccable satisfying results.</li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">
              <h5 class="text-light mb-3">USEFUL LINK</h5>

              <?php
                    wp_nav_menu([
                        'theme_location'  => '',
                        'menu'            => 'Useful-link', 
                        'container'       => 'ul',
                        'container_class' => '', 
                        'menu_class'      => 'footer-menu-class', 
                    ]); 
                ?>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5 class="text-light mb-3">OUR SERVICES</h5>
              <?php
                    wp_nav_menu([
                        'theme_location'  => '',
                        'menu'            => 'Our-Services', 
                        'container'       => 'ul',
                        'container_class' => '', 
                        'menu_class'      => 'footer-menu-class', 
                    ]);
                ?>
            </div>
            <div class="col-6 col-lg-4 mb-3" >
              <h5 class="text-light mb-3">CONTACT INFO</h5>
              <ul class="list-unstyled" style="margin-left:0;">
                <li class="mb-2 text-light"><i class="fa-solid fa-phone text-light"></i>Mob: +91-998-850-5034 </li>
                <li class="mb-2 text-light"><i class="fa-solid fa-envelope"></i>hr@acewebx.com</li>
                <li class="mb-2 text-light"><i class="fa-solid fa-location-dot"></i> D-185, Industrial Area Phase 8B, S.A.S Nagar (Mohali)-160071 Punjab, India</li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
     <?php
     wp_footer();
     ?>