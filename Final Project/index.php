
<?php 
  // require_once 'db.php'; 
  require_once 'header.php';  
    $social="SELECT * FROM socials WHERE status = 'active' limit 4";
   $social_query=mysqli_query($db,$social);

   $services="SELECT * FROM services WHERE status = 1 limit 6";
   $services_query=mysqli_query($db, $services);

   $education="SELECT * FROM educations WHERE status = 1 ORDER BY year DESC";
   $education_query=mysqli_query($db, $education);

   $portfolios="SELECT * FROM portfolios WHERE status = 1 limit 6 ";
   $portfolios_query=mysqli_query($db, $portfolios);

   $address="SELECT * FROM office_address WHERE status = 1";
   $address_query=mysqli_query($db, $address);

   $success="SELECT * FROM item WHERE status = 1";
   $success_query=mysqli_query($db, $success);

      $images="SELECT * FROM images WHERE status = 1";
   $images_query=mysqli_query($db, $images);

   // $images_id="SELECT * FROM images ";
   // $images_query_id=mysqli_query($db, $images);

 ?>
        <!-- main-area -->
<main>

<!-- banner-area -->
<section id="home" class="banner-area banner-bg fix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6">
                <div class="banner-content">
                    <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                    <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Tyson Sujon</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Tyson Sujon, professional web developer with long time experience in this field​.</p>
                    <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                    <ul>
                 <?php foreach ($social_query as $key => $value) { ?> 
                    <li><a target="_blank" href="<?=$value['link']?>"><i class="<?= $value['icon']?>"></i></a></li>
                <?php  } ?>
                            
                           
                    </ul>
                    </div>
                    <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                <div class="banner-img text-right">
                    <img src="front/img/banner/banner_img_me.png" width="600px" height="840px" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape"><img src="front/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
</section>
<!-- banner-area-end -->

<!-- about-area-->
<section id="about" class="about-area primary-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img  src="front/img/banner/banner_img5.png" title="me-01" alt="me-01">
                </div>
            </div>
            <div class="col-lg-6 pr-90">
                <div class="section-title mb-25">
                    <span>Introduction</span>
                    <h2>About Me</h2>
                </div>
                <div class="about-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas
                        quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime
                        blanditiis culpa vitae velit. Numquam!</p>
                    <h3>Education:</h3>
                </div>
                <!-- Education Item -->
                <?php foreach ($education_query as $key => $value): ?>
                    
                <div class="education">

                        <div class="year"><?=$value['year']?></div>
                        <div class="line"></div>
                        <div class="location">
                        <span><?=$value['title']?></span>
                        <div class="progressWrapper">
                            <div class="progress">
                                <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width:  <?= $value['progress']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php endforeach ?>
                
                <!-- End Education Item -->
                
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- Services-area -->
<section id="service" class="services-area pt-120 pb-50">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>WHAT WE DO</span>
                    <h2>Services and Solutions</h2>
                </div>
            </div>
        </div>
		<div class="row">
            
            <?php foreach ($services_query as $key => $value) { ?>
        
           
        <div class="col-lg-4 col-md-6">
        <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                    <i class="<?= $value['icon']?>"></i>
                    <h3><?= $value['name']?></h3>
                    <p>
                        <?= $value['summary']?>
                    </p>
                </div>
            </div>

          <?php   }  ?>
			
			
		</div>
	</div>
</section>
<!-- Services-area-end -->

<!-- Portfolios-area -->
<section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>Portfolio Showcase</span>
                    <h2>My Recent Best Works</h2>
                </div>
            </div>
        </div>
        <div class="row">
    <?php foreach ($portfolios_query as $key => $portfolio): ?>

        <div class="col-lg-4 col-md-6 pitem">
        <div class="speaker-box">
            <div class="speaker-thumb">
                <img width="250px" height="500px" src="dashboard/upload/thumbnail/<?= $portfolio['thumbnail']?>" alt="img">
            </div>
            <div class="speaker-overlay">
                <span><?= $portfolio['category']?></span>
                <h4><a href="portfolio-single.html"><?= $portfolio['title']?></a></h4>
                <a  href="portfolio-single.php?id=<?= $portfolio['id']?>" class="arrow-btn">More information <span></span></a>
            </div>
        </div>
    </div>  

    <?php endforeach ?>
            
        </div>
    </div>
</section>
<!-- services-area-end -->


<!-- fact-area -->
<section class="fact-area">
    <div class="container">
        <div class="fact-wrap">
            <div class="row justify-content-between">
                
<?php foreach ($success_query as $key => $value): ?>
<div class="col-xl-2 col-lg-3 col-sm-6">
    <div class="fact-box text-center mb-50">
        <div class="fact-icon">
             <i class="<?php echo $value['icon'] ?>"></i>
        </div>
    <div class="fact-content">
        <h2><span class="count"><?=$value['result']?></span></h2>
        <span><?=$value['name']?></span>     
    </div>
   </div>
</div>

<?php endforeach ?>
        
            </div>
        </div>
    </div>
</section>
<!-- fact-area-end -->

<!-- testimonial-area -->
<section class="testimonial-area primary-bg pt-115 pb-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>testimonial</span>
                    <h2>happy customer quotes</h2>
                </div>
            </div>
        </div>
 <div class="row justify-content-center">
    <div class="col-xl-9 col-lg-10">
         <div class="testimonial-active">
        <?php foreach ($images_query as $key => $value): ?>

           
            
   
        <div class="single-testimonial text-center">
            <div class="testi-avatar">
                <img width="100px" height="100px" src="dashboard/upload/cv/<?= $value['my_image']?>" alt="img">
            </div>
            <div class="testi-content">
                <h4><span>“</span><?= $value['summary']?> <span>”</span></h4>
                <div class="testi-avatar-info">
                    <!-- name -->
                    <!-- <h5>tonoy jakson</h5>  -->
                    <h5><?= $value['title']?></h5> 
                   <!--  attribute -->
                    <span><?= $value['category']?></span>
                    <!-- <span>head of idea</span> -->
                </div>
            </div>
        </div>
        <?php endforeach ?>
                </div>
            </div>
        </div> 
    </div>
</section>
<!-- testimonial-area-end -->

            <!-- brand-area -->
            
                    
<div class="barnd-area pt-100 pb-100">
     <div class="container">
                <div class="row brand-active">
                        
                            
            <?php foreach ($images_query as $key => $value): ?>
                <div class="col-xl-2">
                    <div class="single-brand">
                
                <img width="100px" height="100px" src="dashboard/upload/all_image/<?= $value['logo']?>" alt="img">

                     </div>
                </div>   
            <?php endforeach ?>
                            
                         
                    </div>
                </div>               
              </div>           
                
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            
                    <?php foreach ($address_query as $key => $value): ?>
        <div class="contact-content">
        <p><?=$value['summary']?></p>
        <h5>OFFICE IN <span><?=$value['location']?></span></h5>
                <div class="contact-list">
                    <ul>
                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$value['address']?></li>
                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$value['phone']?></li>
                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$value['email']?></li>
                    </ul>
                </div>
                    <?php endforeach ?>
                                <!-- <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p> -->
                                
                            </div>
                        </div>
            <div class="col-lg-6">
                <div class="contact-form">

                    <form action="contact-post.php" method="POST">
                        <input type="text" name="name" id="name" placeholder="your name *">
                        <input type="email" name="email" id="email" placeholder="your email *">
                        <textarea name="message" id="message" placeholder="your message *"></textarea>
                        <button class="btn">SEND</button>
                    </form>
                </div>
                
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

 <?php require_once 'footer.php'; ?>
