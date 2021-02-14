   <body id="home" class="scrollspy">
      <div class="navbar-fixed">
         <nav class="blue-grey darken-3">
            <div class="container">
               <div class="nav-wrapper">
                  <a href="#home" class="brand-logo"><img src="<?= base_url('assets/img/logo/nav.png'); ?>" class="responsive-img" style="width: 120px; height: 50px; margin-top: 6%;"> </a>
                  <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                     <li><a href="#about">About Us</a></li>
                     <li><a href="#services">Services</a></li>
                     <li><a href="#menu">Menu</a></li>
                     <li><a href="#contact">Contact Us</a></li>
                     <li><a href="#help">Help</a></li>
                     <li><a href="<?= base_url('auth'); ?>" class="waves-effect waves-light btn-small white blue-grey-text text-darken-3 btn-login" style="border-radius: 5px;">Log In</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>

      <!-- sidenav -->
      <ul class="sidenav" id="mobile-nav">
         <li><a href="#about">About Us</a></li>
         <li><a href="#services">Services</a></li>
         <li><a href="#menu">Menu</a></li>
         <li><a href="#contact">Contact Us</a></li>
         <li><a href="#help">Help</a></li>
         <li><a href="<?= base_url('auth'); ?>">Log In</a></li>
      </ul>

      <!-- slider -->
      <div class="slider">
         <ul class="slides">
            <li>
               <img src="assets/img/slider/1.jpg">
               <div class="caption left-align">
                  <h3>Experience Knowledge Excellence</h3>
                  <h5 class="light grey-text text-lighten-3">We are here to help!
                  </h5>
               </div>
            </li>
            <li>
               <img src="assets/img/slider/2.jpg">
               <div class="caption right-align">
                  <h3>Experience Knowledge Excellence</h3>
                  <h5 class="light grey-text text-lighten-3">We are here to help!</h5>
               </div>
            </li>
            <li>
               <img src="assets/img/slider/3.jpg">
               <div class="caption center-align">
                  <h3>Experience Knowledge Excellence</h3>
                  <h5 class="light grey-text text-lighten-3">We are here to help!</h5>
               </div>
            </li>
            <li>
               <img src="assets/img/slider/4.jpg">
               <div class="caption left-align">
                  <h3>Experience Knowledge Excellence</h3>
                  <h5 class="light grey-text text-lighten-3">We are here to help!</h5>
               </div>
            </li>
         </ul>
      </div>

      <!-- About Us -->
      <section id="about" class="about scrollspy">
         <div class="container">
            <div class="row">
               <h3 class="center light blue-grey-text text-darken-4">About Us</h3>
               <div class="col m6 s12 light" style="padding-right: 40px;">
                  <h5>We Are Professionals</h5>
                  <p style="text-align: justify; text-indent: 45px;">We have established this catering service since 2012. This catering is a family business in the culinary sector whose business license was officially registered with the Integrated Licensing Service Agency (BP2T) in May 2013. There are 3 types of services that customers usually order, namely ordering snack boxes, Rice box and buffet. Our food category is basically Indonesian food, but we also modify western food with Indonesian food for certain events according to customer orders.</p>
                  <br>

                  <h5>#3 Category Order History</h5>
                  <ul class="collapsible">
                     <li>
                        <div class="collapsible-header">
                           <i class="material-icons">fastfood</i>Snacks Box
                           <span class="badge">
                              <i class="material-icons">arrow_drop_down</i>
                           </span>
                        </div>
                        <div class="collapsible-body">
                           <ol>
                              <?php foreach ($sb as $a) : ?>
                                 <li><b> <?= $a['mp_name']; ?> / </b><i style="color: blue;">Rp. <?= number_format($a['mp_price'], 2, ",", "."); ?></i>
                                 </li>
                                 <ul>
                                    <li><?= $a['mp_desc']; ?></li>
                                 </ul>
                              <?php endforeach; ?>
                           </ol>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header">
                           <i class="material-icons">local_dining</i>Rice Box
                           <span class="badge">
                              <i class="material-icons">arrow_drop_down</i>
                           </span>
                        </div>
                        <div class="collapsible-body">
                           <ol>
                              <?php foreach ($rb as $b) : ?>
                                 <li><b> <?= $b['mp_name']; ?> / </b><i style="color: blue;">Rp. <?= number_format($b['mp_price'], 2, ",", "."); ?></i>
                                 </li>
                                 <ul>
                                    <li><?= $b['mp_desc']; ?></li>
                                 </ul>
                              <?php endforeach; ?>
                           </ol>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header">
                           <i class="material-icons">bento</i>Dessert Box
                           <span class="badge">
                              <i class="material-icons">arrow_drop_down</i>
                           </span>
                        </div>
                        <div class="collapsible-body">
                           <ol>
                              <?php foreach ($db as $c) : ?>
                                 <li><b> <?= $c['mp_name']; ?> / </b><i style="color: blue;">Rp. <?= number_format($c['mp_price'], 2, ",", "."); ?></i>
                                 </li>
                                 <ul>
                                    <li><?= $c['mp_desc']; ?></li>
                                 </ul>
                              <?php endforeach; ?>
                           </ol>
                        </div>
                     </li>
                  </ul>
                  <br>
               </div>

               <div class="col m6 s12 light" style="padding-left: 40px; padding-top: 15px;">
                  <center>
                     <div class="row valign-wrapper blue-grey lighten-5 ccc">
                        <div class="col m9 s9">
                           <h6 style="text-align: right;"><b>Founder and Owner</b></h6>
                           <p class="black-text" style="text-align: right;">
                              LASMINI<br>
                              <strong>"Business is Humanity"</strong>
                           </p>
                        </div>
                        <div class="col m3 s3">
                           <img src="assets/img/home_profile/a.png" class="circle responsive-img cc-img">
                        </div>
                     </div>
                  </center>

                  <div class="row valign-wrapper blue-grey lighten-5 cc z-depth-2">
                     <div class="col m4 s4">
                        <img src="assets/img/home_profile/b.png" class="circle responsive-img cc-img">
                     </div>
                     <div class="col m8 s8">
                        <h6><b>CEO</b></h6>
                        <p>
                           SUPRIYANTO <br>
                           <strong>"Ready to serve and help your stomach be satisfied"</strong>
                        </p>
                     </div>
                  </div>

                  <center>
                     <div class="row valign-wrapper blue-grey lighten-5 ccc">
                        <div class="col m10 s10">
                           <h6 style="text-align: right;"><b>Web Developer</b></h6>
                           <p class="black-text" style="text-align: right;">
                              SAVIRA FATIKA<br>
                              <strong>"Learning by Doing, Thanking by Improving"</strong>
                           </p>
                        </div>
                        <div class="col m2 s2">
                           <img src="assets/img/home_profile/pp.jpg" class="circle responsive-img cc-img">
                        </div>
                     </div>
                  </center>

               </div>
            </div>
         </div>
         </div>
      </section>

      <!-- Our services -->
      <div id="services" class="parallax-container scrollspy">
         <div class="parallax"><img src="assets/img/slider/6.jpg"></div>

         <div class="container clients">
            <h3 class="center white-text">Our Services</h3>

            <div class="row">
               <div class="col m4 s12">
                  <div class="card-panel center">
                     <i class="material-icons medium blue-grey-text text-darken-3">book_online</i>
                     <h5>Online Ordering</h5>
                     <p>Now ordering from home is even easier. Just sign in and add the order, you will get a payment receipt. Contact our cellphone number to confirm payment. The order will be delivered to the house.</p>
                     <a href="#help" class="waves-effect waves-light btn-small blue-grey darken-3">how to order</a>
                  </div>
               </div>
               <div class="col m4 s12">
                  <div class="card-panel center">
                     <i class="material-icons medium blue-grey-text text-darken-3">devices</i>
                     <h5>DSS App</h5>
                     <p>We are ready to help offer menu recommendations based on your needs regarding menu packages through the decision support system feature on this website. Enjoy the convenience.</p>
                     <a href="<?= base_url('dss'); ?>" class="waves-effect waves-light btn-small blue-grey darken-3">Get Started</a>
                  </div>
               </div>
               <div class="col m4 s12">
                  <div class="card-panel center">
                     <i class="material-icons medium blue-grey-text text-darken-3">card_membership</i>
                     <h5>Membership</h5>
                     <p>Why sign up? You can surf this website for easier ordering, view information on the best menu packages, get menu package recommendations and dive into decision support system (DSS) features.</p>
                     <a href="<?= base_url('auth/registration'); ?>" class="waves-effect waves-light btn-small blue-grey darken-3">Join Us</a>
                  </div>
               </div>
            </div>

         </div>
      </div>

      <!-- menu -->
      <section id="menu" class="services blue-grey lighten-5 scrollspy">
         <div class="container">
            <h3 class="light center grey-text text-darken-3" style="margin-bottom: 25px;">Menu Recommendations</h3>
            <!-- <hr style="width: 30%; align-items: center;"><br> -->
            <div class="row">
               <?php foreach ($rec as $r) : ?>
                  <div class="col m3 s12">
                     <div class="block-2 ftco-animate">
                        <div class="flipper">
                           <div class="front" style="background-image: url(<?= base_url('assets/img/menu/') . $r['mp_image'] ?>);">
                              <div class="box">
                                 <h5><?= $r['mp_name']; ?></h5>
                                 <p>Rp. <?= number_format($r['mp_price'], 2, ",", "."); ?></p>
                              </div>
                           </div>
                           <div class="back">
                              <!-- back content -->
                              <blockquote class="light">
                                 <p>&ldquo;<?= $r['mp_desc']; ?>&rdquo;</p>
                              </blockquote>
                              <div class="author d-flex">
                                 <div class="name align-self-center"><?= $r['mp_name']; ?><span class="position">Rp. <?= number_format($r['mp_price'], 2, ",", "."); ?></span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>
         </div>
      </section>

      <!-- Contact Us -->
      <section id="contact" class="contact scrollspy">
         <div class="container">
            <h3 class="light center grey-text text-darken-3">Contact Us</h3>
            <div class="row">
               <div class="col m5 s12">
                  <div class="card-panel blue-grey darken-3 center white-text">
                     <i class="material-icons">email</i>
                     <h5>Contact</h5>
                     <p>catering.svr@gmail.com</p>
                  </div>
                  <ul class="collection with-header">
                     <li class="collection-header">
                        <h4>Our Office</h4>
                     </li>
                     <li class="collection-item row">
                        <div class="col m2 s2 center"><i class="material-icons">call</i></div>
                        <div class="col m10 s10">+62 813 9201 7999</div>
                     </li>
                     <li class="collection-item row">
                        <div class="col m2 s2 center"><i class="material-icons">location_on</i></div>
                        <div class="col m10 s10" style="text-align: justify;">Malangan 1 No.432 RT03/RW04 Tidar Utara, Magelang Selatan, Kota Magelang, Central Java, Indonesia, 56125.</div>
                     </li>
                  </ul>
               </div>

               <div class="col m7 s12">
                  <form>
                     <div class="card-panel">
                        <h5>Find our location with google maps</h5><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506122.51814390486!2d109.37194418076183!3d-7.674315110117897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f4103fe2a65%3A0xf85cd18ff96820d4!2sSavira%20Catering!5e0!3m2!1sen!2sid!4v1602619066271!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                     </div>
                  </form>
               </div>

            </div>
         </div>
      </section>

      <!-- Help -->
      <section id="help" class="help scrollspy blue-grey darken-3 white-text">
         <div class="container">
            <h6 class="center">WE ARE HERE TO HELP!</h6><br>
            <div class="row">

               <div class="col m4 s12" style="padding-right: 30px;">
                  <h6>
                     Why use a DSS App?
                  </h6>
                  <p style="text-align: justify; text-indent: 45px;">
                     The problem is when we recommend menu packages to you, the packages we offer are not necessarily what you need. The solution DSS App will help offer menu recommendations based on your needs with 6 assessment criteria, namely type of package (rice box, snack box, buffet, etc.). C2. Budget amount (menu package price). C3. Theme of the event (wedding receptions, thanksgiving, birthday parties, etc.). C4. Expired time. C5. Food ingredients (organic, non-organic, instant). C6. Calories per serving.</p>
                  <br>
               </div>

               <div class="col m4 s12" style="padding-left: 30px;">
                  <h6>How to Order</h6>
                  <ol style="text-align: justify;">
                     <li>Sign in with a member account, if you don't have an account, register first.</li>
                     <li>Select the ordering menu on the sidebar.</li>
                     <li>Click the "make order" button.</li>
                     <li>Fill in the order data on the order form.</li>
                     <li>Click the "ordered" button then return to the order menu click the "print" link to print / download the payment receipt.</li>
                     <li>Contact our cellphone number to confirm payment. The order will be delivered to the house.</li>
                  </ol>
               </div>

               <div class="col m4 s12 light" style="padding-left: 30px;">
                  <p style="text-align: justify; text-indent: 45px;">To cooperate with our business, please contact via email, whatsapp, or fill in the "contact us" form above.</p>
                  <h6>How to Register<h6>
                        <ol style="text-align: justify;">
                           <li>Click the "join us" button in the membership box above / <a href="<?= base_url('auth/registration'); ?>">click here</a>.</li>
                           <li>Fill in your personal data on the registration form.</li>
                           <li>After successful confirmation via email. Email confirmation maximum 24 hours</li>
                           <li>Sign In and enjoy member features.</li>
                        </ol>
               </div>

            </div>
         </div>
      </section>

      <!-- button back to top -->
      <button id="top">
         <i class="material-icons">arrow_upward</i>
      </button>


      <!-- footer -->
      <footer class="blue-grey darken-3 white-text center">
         Copyright &copy;
         <script>
            document.write(new Date().getFullYear());
         </script> All rights reserved | Savira Catering
      </footer>