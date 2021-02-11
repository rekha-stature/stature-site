
<?php
/**
 * Template Name: Homepage
 */
get_header();
?>
 <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1><?php echo get_field('welcome'); ?></h1>
      <h2><?php echo get_field('tag_line');?></h2>
      <a href="<?php echo get_field('get_started');?>" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background-color: #000;">
      <div class="container">
        <div class=" row about-head" data-aos="zoom-out-down">
           <h3 class=" values" style="color: #fff;"><span class="sture">About</span> us</h3>
         </div>
          <div class="row missions">
          <div class="col-lg-6  order-1 order-lg-1 txtcontent" data-aos="fade-right">
            <h3 class="abouth">Who we <span class="abouty">are</span>!</h3>
            <p class="font-italic">
             <?= get_field('about_us');?>
            </p>
           
          </div>

          <div class="col-lg-6 order-1 order-lg-2 d-flex justify-content-center imgcontent" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <img src="<?= get_field('about_img');?>" class="img-fluid" alt="">
          </div>
        </div>
        <div class="row missions">
          <div class="col-lg-6 order-lg-1 order-1 order-lg-2 txtcontent" data-aos="fade-right">
           <h3 class="abouth">Our <span class="sture">mission</span></h3>
            <p class="font-italic">
             <?= get_field('vision');?>
            </p>
           
          </div>
           <div class="col-lg-6 order-1 order-lg-1 d-flex justify-content-center imgcontent" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <img src="<?= get_field('mission_image');?>" class="img-fluid" alt="">
          </div>
        </div>
          <div class="row missions">
          <div class="col-lg-6 order-1 order-lg-2 txtcontent" data-aos="fade-up">
             <h3 class="abouth">Our <span class="sture">vision</span></h3>
            <p class="font-italic">
             <?= get_field('mission');?>
            </p>
          </div>
           <div class="col-lg-6 order-1 order-lg-2 d-flex justify-content-center imgcontent" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <img src="<?= get_field('vision_image');?>" class="img-fluid" alt="" >
          </div>   
        </div>
       </div>
     </section>
         <section class="valucontent">
          <div class="container">


        <div class=" row values-head" data-aos="zoom-out-down">
           <h3 class=" values" style="color: #fff;"><span class="sture">Values</span> we count</h3>
         </div>
         <div class="row">
          
         <div class="col-lg-3 order-1 order-lg-2" data-aos="fade-up">
          <div class="box box1">
          	<h5>Integrity</h5>
          <div class="integrity">
          <ul> 
             <li><p>We demonstrate complete integrity, upholding honesty and strong moral principles. We do not compromise the truth.</p></li>
           </ul>
       </div>
         </div>
          </div>
          <div class="col-lg-3 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="150">
          <div class="box box2">
          	<h5>Passion</h5>
          	<div class="Passion">
             <ul> 
             <li><p>We are passionate about recruitment showing enthusiasm, energy and an understanding of our client and candidate needs.</p></li>
           </ul>
       </div>
         </div>
          </div>
          <div class="col-lg-3 order-3 order-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box box3">
          	<h5>Respect</h5>
          	<div class="respect">
            <ul> 
            <li><p>We treat our clients, candidates and each other with mutual respect and sensitivity, embracing individual diversity.</p></li>
           </ul>
       </div>
         </div>
          </div>
          <div class="col-lg-3 order-4 order-lg-4" data-aos="fade-up" data-aos-delay="450">
          <div class="box box4">
          	<h5>Community</h5>
          	<div class="community">
           <ul> 
             <li><p>We support each other as a community, caring for each other personally and professionally. We are loyal. We also support external communities and the environment through our charity work and internal environmental policy.</p></li>
           </ul>
       </div>
         </div>
          </div>
      </div>
</div>
      </div>
    </section><!-- End About Section -->


      <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h3><span class="sture">Services</span> we offer</h3>
        </div>

         <div class="row">
          
         <div class="col-lg-3 order-1 order-lg-2" data-aos="fade-up">
          <div class="box box1">
            <i class="material-icons" style="font-size:36px">developer_mode</i>
            <h5>Web development</h5>
          <div class="integrity">
          <ul> 
             <li><p>We demonstrate complete integrity, upholding honesty and strong moral principles. We do not compromise the truth.</p></li>
           </ul>
       </div>
         </div>
          </div>
          <div class="col-lg-3 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="150">
          <div class="box box2">
            <i class="material-icons" style="font-size:36px">people</i>
            <h5>IT staffing solution</h5>
            <div class="Passion">
             <ul> 
             <li><p>We are passionate about recruitment showing enthusiasm, energy and an understanding of our client and candidate needs.</p></li>
           </ul>
       </div>
         </div>
          </div>
          <div class="col-lg-3 order-3 order-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box box3">
            <i class="material-icons" style="font-size:36px">apps</i>
            <h5>App development</h5>
            <div class="respect">
            <ul> 
            <li><p>We treat our clients, candidates and each other with mutual respect and sensitivity, embracing individual diversity.</p></li>
           </ul>
       </div>
         </div>
          </div>
            <div class="col-lg-3 order-4 order-lg-4" data-aos="fade-up" data-aos-delay="450">
            <div class="box box4">
             <i class="material-icons" style="font-size:36px">analytics</i>
              <h5>Digital marketing</h5>
            <div class="community">
               <ul> 
                 <li><p>We support each other as a community, caring for each other personally and professionally. We are loyal. We also support external communities and the environment through our charity work and internal environmental policy.</p></li>
               </ul>
           </div>
           </div>
            </div>
      </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
         <div class="row section-title">
          <h3><span class="sture">Contact</span> us</h3>
        </div>
         <div class="row d-flex justify-content-center" data-aos="fade-up">
           <div class="col-lg-6 contactus">
            <h3>Send us a message</h3>
            <?php echo do_shortcode('[contact-form-7 id="274" title="getintouch"]');?>
          </div>

          <div class="col-lg-6 contactus ">
              <h3>Contact details</h3>
              <p>info@statureit.com</p>
              <p>+91 95091 633310</p><br/>
              <p>E331, Industrial Area, Sector 74, </p>
              <p>Sahibzada Ajit Singh Nagar,</p>
              <p>Punjab 160057 </p>
          	
          <!--   <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

</main>
  <?php 
  get_footer();?>