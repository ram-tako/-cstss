<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="shortcut icon" href="assets/images/favicon.png">
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/custom-style.css">
   <title>Contact | cstss</title>
</head>

<body class="contact-page">

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="bjQ3KKHb"></script>

   <!-- nav starts -->
   <?php include 'includes/header.php';?>
   <!-- header ends -->
   <div class="site-content">
      <div class="section section-hero">
         <div class="hero__inner">
            <div class="hero-item">
               <span class="overlay"></span>
               <img class="img-100" src="assets/images/inner-banner.jpg" alt="">
               <div class="container">
                  <div class="hero-wrapper">
                     <div class="hero-inner">

                        <h2>Contact us</h2>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      

      <!-- hero section ends -->
      <div class="section section-contact">
         <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-5">
                  <div class="contact__info">
                    <div class="sec-title">
                        <p>Contact with Us</p>
                        <h2>Call Now or Write a Message</h2>
                    </div>
                    <div class="title-border-left">
                        <!-- <h2>CSTSS Contact</h2> -->
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit sed do eiusm od tempor ut labore. sit amet scelerisque eros. Phasellus hendrerit neque a augue.</p>
                    </div>
                     <!-- <ul>
                        <li><i class="fa fa-phone"></i> <a href="tel:+977-1-51864">+977-1-5186410</a> / <a href="tel:5186410">5186420</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:cstgroup912@gmail.com">cstgroup912@gmail.com</a></li>
                        <li><i class="fa fa-map-marker"></i>Balkumari - 08, Lalitpur</li>

                     </ul> -->
                     <div class="social-connect mt-4">
                         <ul>
                             <li><strong>Connect</strong></li>
                             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                             <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                         </ul>
                     </div>
                  </div>
                
                    
                </div>
                <div class="col-md-6 col-xl-7">
                    <div class="contact__form">
                        <!-- <h2>or we'll Contact you...</h2> -->
                        <div id="ContactForm">
                            <div class="alertmsg">
                              <?php if (isset($_GET['msg'])) {
                                 echo $_GET['msg'];
                                 }
                              ?>
                            </div>
                            <form method="POST" name="contactform" action="process.php">
                            <?php
                              $ipi = getenv("REMOTE_ADDR");
                              $httprefi = getenv("HTTP_REFERER");
                              $httpagenti = getenv("HTTP_USER_AGENT");
                           ?>
                            <input type="hidden" name="ip" value="<?php echo $ipi ?>" />
                            <input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
                            <input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="name" name="name" placeholder="Full Name:" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="add" name="add" placeholder="Address:" class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email:" class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="phone" name="phone" placeholder="Phone:" class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <textarea name="msg" cols="30" rows="5" class="form-control textarea" placeholder="Message:" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="captcha-sec clearfix">
                            <p> <img src="secureimage/securimage_show.php?sid=<?php echo md5(time()) ?>" width="120" align="left" id="siimage" style="padding-right:5px; padding-top:8px; border: 0" />
                            <script type="text/javascript">
                                AC_FL_RunContent( 'type','application/x-shockwave-flash','data','secureimage/securimage_play.swf?audio=secureimage/securimage_play.php&bgColor1=#8E9CB6&bgColor2=#fff&iconColor=#000&roundedCorner=5','id','SecurImage_as3','width','19','height','19','align','middle','allowscriptaccess','sameDomain','allowfullscreen','false','movie','secureimage/securimage_play?audio=secureimage/securimage_play.php&bgColor1=#8E9CB6&bgColor2=#fff&iconColor=#000&roundedCorner=5','quality','high','bgcolor','#ffffff' ); //end AC code
                            </script>
                            <noscript>
                                <object type="application/x-shockwave-flash"
                                    data="secureimage/securimage_play.swf?audio=secureimage/securimage_play.php&amp;bgColor1=#8E9CB6&amp;bgColor2=#fff&amp;iconColor=#000&amp;roundedCorner=5" id="SecurImage_as3" width="19" height="19" align="middle">
                                    <param name="allowScriptAccess" value="sameDomain" />
                                    <param name="allowFullScreen" value="false" />
                                    <param name="movie" value="secureimage/securimage_play.swf?audio=secureimage/securimage_play.php&amp;bgColor1=#8E9CB6&amp;bgColor2=#fff&amp;iconColor=#000&amp;roundedCorner=5" />
                                    <param name="quality" value="high" />
                                    <param name="bgcolor" value="#ffffff" />
                                </object>
                            </noscript>
                            </p>
                            <p>
                                <!-- pass a session id to the query string of the script to prevent ie caching -->
                                <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onClick="document.getElementById('siimage').src = 'secureimage/securimage_show.php?sid=' + Math.random(); return false"><img src="secureimage/images/refresh.gif" alt="Reload Image" border="0" onClick="this.blur()" align="bottom" /></a>
                                <!--Secure Image Ends-->
                            </p>
                            </div>
                            <div class="code-sec">
                                <input name="code" type="text" class="form-control" placeholder="Code:" required/>
                            </div>
                            <button type="submit" class="btn btn-green mt-3">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

         </div>
      </div>

      <div class="section-map">
        <div class="contact__map">
            <!-- <h2>Location</h2> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.497980115457!2d85.33232511548155!3d27.670999733694465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b4be0a5a2f%3A0x9ca1abd320973493!2sBalkumari%20Rd%208%2C%20Lalitpur%2044600!5e0!3m2!1sen!2snp!4v1642399274007!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

   </div>
    <!-- Footer starts -->
    <?php include 'includes/footer.php';?>
    <!-- footer ends -->




   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="assets/js/jquery-3.4.1.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/jquery.matchHeight-min.js"></script>
   <script src="assets/js/slick.min.js"></script>
   <script src="assets/js/jquery.fancybox.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>