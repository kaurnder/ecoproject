<?php 
/* Template Name: New Home Page */
get_header('custom');
$bannerheading =  get_field('Banner-heading');
$bannerimg =  get_field('banner_image');
$bannerdesc =  get_field('Banner_desc');
$bannerlogo1 =  get_field('banner_logo1');
$bannerlogo2 =  get_field('banner_logo2');
$bannerlogo3 =  get_field('banner_logo3');

$Aboutimg =  get_field('about_img');
$About_heading1 =  get_field('about_heading1');
$About_heading2 =  get_field('about_heading2');
$About_desc =  get_field('about_desc');

$skills_heading1 =  get_field('skills_heading1');
$skills_heading2 =  get_field('skills_heading2');
$skills_img1 =  get_field('skills_img1');
$skills_img2 =  get_field('skills_img2');
$skills_img3 =  get_field('skills_img3');
$skills_img4 =  get_field('skills_img4');

$services_heading1 =  get_field('services_heading1');
$services_heading2 =  get_field('services_heading2');
$services_desc =  get_field('services_desc');

$card_img =  get_field('card_img');
$card_title =  get_field('card_title');
$card_desc =  get_field('card_desc');
$card_btn=  get_field('card_btn');

$card_img2 =  get_field('card_img2');
$card_title2 =  get_field('card_title2');
$card_desc2 =  get_field('card_desc2');
$card_btn2=  get_field('card_btn2');

$card_img3 =  get_field('card_img3');
$card_title3 =  get_field('card_title3');
$card_desc3 =  get_field('card_desc3');
$card_btn3=  get_field('card_btn3');

$card_img4 =  get_field('card_img4');
$card_title4 =  get_field('card_title4');
$card_desc4 =  get_field('card_desc4');
$card_btn4=  get_field('card_btn4');

$card_img5 =  get_field('card_img5');
$card_title5 =  get_field('card_title5');
$card_desc5 =  get_field('card_desc5');
$card_btn5=  get_field('card_btn5');

$card_img6 =  get_field('card_img6');
$card_title6 =  get_field('card_title6');
$card_desc6 =  get_field('card_desc6');
$card_btn6=  get_field('card_btn6');

$blog_title1 =  get_field('blog-heading1');
$blog_title2 =  get_field('blog_heading2');
$blog_desc=  get_field('blog_desc');
$blog_img=  get_field('blog_img');
?>
<div class="position-relative">
  <img src="<?=$bannerimg;?>" class="img-fluid" alt="Background Image">
  <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
    <h1 class="fw-bold header-text">
      <?=$bannerheading;?>
    </h1>
    <p class="">
      <?=$bannerdesc;?>
    </p>
    <div class="marquee mt-4 marque-img">
      <img src="<?=$bannerlogo1;?>" class="mx-2">
      <img src="<?=$bannerlogo2;?>" class="mx-2 ">
      <img src="<?=$bannerlogo3; ?>" class="mx-2 ">
      <img src="<?=$bannerlogo4;?>" class="mx-2 ">
    </div>
  </div>
</div>

<section id="myabout">
  <div class="container d-flex flex-column  flex-lg-row gap-5 mt-5">
    <div class="img-conatiner">
      <img src="<?=$Aboutimg?>" style="height: 100%;
    width: 178rem;" alt="" height="500" class="sec-img">
    </div>
    <div class="text-container d-flex flex-column justify-content-center ">
      <h4 class="text-secondary">
        <?=$About_heading1?>
      </h4>
      <h2 class="fw-bold">   
        <?=$About_heading2?>
      </h2>
      <p class="fw-normal"> </p>
      <?=$About_desc?>
    </div>
  </div>
</section>

<section  style="margin-top:8rem;">
  <div
    class="container p-4 skills-sec d-flex flex-column justify-content-around mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="sec-title mx-4 ">
      <h5 class="text-secondary colr">
        <?=$skills_heading1?>
      </h5>
      <h2 class="fw-bold">
        <?=$skills_heading2?>
      </h2>
    </div>
    <div class="img-section row justify-content-center mt-3">
      <div class="col-4 col-lg-2"><img src="<?=$skills_img1?>"></div>
      <div class="col-4 col-lg-2"><img src="<?=$skills_img2?>"></div>
      <div class="col-4 col-lg-2"><img src="<?=$skills_img3?>"></div>
      <div class="col-4 col-lg-2"><img src="<?=$skills_img4?>"></div>
    </div>
  </div>
</section>

<section id="myblogs" class="p-4" style="margin-top:8rem;  background-color:bisque; " >
  <div class="container d-flex flex-column  flex-lg-row gap-5 mt-5" style="margin-top:8rem;">
    <div class="text-container d-flex flex-column justify-content-center ">
      <h4 class="text-secondary">
        <?=$blog_title1 ?>
      </h4>
      <h2 class="fw-bold">
        <?=$blog_title2 ?>
      </h2>
      <p class="fw-normal">
        <?=$blog_desc ?>
      </p>
    </div>
    <div class="img-conatiner my-4">
      <img src="<?=$blog_img; ?>" alt="" height="1900" width="4000" class="sec-img">
    </div>
  </div>
</section>

<section style="margin-top:8rem;" id="myskills">
<h2 class="text-center" >Our Products</h2>
    <div class="container mt-4">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured product</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"  src="<?php echo get_stylesheet_directory_uri();?>/images/Web-Development.png"/>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">product title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="<?php echo get_stylesheet_directory_uri();?>/images/testing.png" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_19623380716%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_19623380716%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div>
    </div>
<section>

<section style="margin-top:5rem;">
  <div class="conatiner mt-5">
    <div class="text-style d-flex justify-content-around m-5 ">
      <div class="heading w-25">
        <h4 class="text-secondary">
          <?=$services_heading1?>
        </h4>
        <h2 class="fw-bold">
          <?=$services_heading2?>
        </h2>
      </div>
      <div class="text w-50 d-flex align-items-center">
        <?=$services_desc?>
      </div>
    </div>
  </div>
</section>

<section id="mysection" style="margin-top:8rem;">
  <div class="conatiner">
    <div class="container mt-4">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card shadow-none p-3 mb-5 bg-body-tertiary rounded">
            <img src="<?=$card_img; ?>" class="card-img-top" alt="Card Image">
            <div class="card-body text-center">
              <h5 class="card-title">
                <?=$card_title; ?>
              </h5>
              <p class="card-text">
                <?=$card_desc;?>
              </p>
              <a href="https://google.com" class="btn btn-danger">
                <?=$card_btn; ?>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card card shadow-none p-3 mb-5 bg-body-tertiary rounded">
            <img src="<?=$card_img2; ?>" class="card-img-top" alt="Card Image">
            <div class="card-body text-center">
              <h5 class="card-title">
                <?=$card_title2; ?>
              </h5>
              <p class="card-text">
                <?=$card_desc2; ?>
              </p>
              <a href="#" class="btn btn-danger">
                <?=$card_btn2; ?>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card card shadow-none p-3 mb-5 bg-body-tertiary rounded">
            <img src="<?=$card_img3; ?>" class="card-img-top" alt="Card Image">
            <div class="card-body text-center">
              <h5 class="card-title">
                <?=$card_title3; ?>
              </h5>
              <p class="card-text">
                <?=$card_desc3; ?>
              </p>
              <a href="#" class="btn btn-danger">
                <?=$card_btn3; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-2">
      <div class="row">
        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card card shadow-none p-3 mb-5 bg-body-tertiary rounded">
            <img src="<?=$card_img4; ?>" class="card-img-top" alt="Card Image">
            <div class="card-body text-center">
              <h5 class="card-title">
                <?=$card_title4; ?>
              </h5>
              <p class="card-text">
                <?=$card_desc4; ?>
              </p>
              <a href="#" class="btn btn-danger">
                <?=$card_btn4; ?>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card shadow-none p-3 mb-5 bg-body-tertiary rounded">
            <img src="<?=$card_img5; ?>" class="card-img-top" alt="Card Image">
            <div class="card-body text-center">
              <h5 class="card-title">
                <?=$card_title5; ?>
              </h5>
              <p class="card-text">
                <?=$card_desc5; ?>
              </p>
              <a href="#" class="btn btn-danger">
                <?=$card_btn5; ?>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card card shadow-none p-3 mb-5 bg-body-tertiary rounded">
            <img src="<?=$card_img6; ?>" class="card-img-top" alt="Card Image">
            <div class="card-body text-center">
              <h5 class="card-title">
                <?=$card_title6; ?>
              </h5>
              <p class="card-text">
                <?=$card_desc6; ?>
              </p>
              <a href="#" class="btn btn-danger">
                <?=$card_btn6; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section style="margin-top:4rem; background-color:antiquewhite;" class="p-4" id="contact">
<h2 class="text-center mt-4">Contact Form</h2>
  <div class="d-flex justify-content-around mt-4">
    <div class="" >
      <img class="card-img-right flex-auto d-none d-md-block" src="<?php echo get_stylesheet_directory_uri();?>/images/contact.jpg" alt="Thumbnail" data-holder-rendered="true" style="width: 100%; height: 100%;">
   </div>
    <div class="p-4" >
     <?php echo do_shortcode('[contact-form-7 id="32c7dac" title="contact_form"]');?>
    </div>
</div>
</section>

<section>
  <!-- <?php echo do_shortcode( '[contact-form-7 id="32c7dac" title="contact_form"]');?> -->
</section>

<?php
  get_footer('custom');
  ?>
</body>

</html>