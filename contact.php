    <?php include('include/header.php'); ?>
    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h3>Contact Us</h3>
                    <h4><a href="index.php"> Home </a> > Contact </h4>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->
 <!--/    
==================================================-->

    <!-- Start: Contact Section 
==================================================-->
    <section class="contact-page">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>Send Us Message</h3>
                <p>Drop us a line or give us a ring. We love to hear from you and are happy to answer any questions. </p>
                
            </div>
            <!-- End: Heading -->
            <h3>OUR ADDRESS</h3>
<p>Shop C1 alhamsad tower offosite ado bayero mall (Shoprite)</p>
<P> zoo road kano Kano, Nigeria</P>

<h3>OUR EMAILS</h3>

<p>Office: nakontechproject@gmail.com</p>
<p>Personal: khaleedsalis@gmail.com</p>

<h3>PHONE CONTACTS</h3>
<p>+234 (0) 8026336861
<p>+234 (0) 8036078959

            <div class="row">
                <div class="col-md-6 col-xs-12 inner-contact">
                    <!--  Contact Form  -->
                    <div class="contact-form">
                        <form method="post" action="contactthanks.php" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6 col-xs-12">
                                    <input class="con-field" name="name" id="name" type="text" placeholder="Enter Your Name" autofocus required pattern="[a-zA-Z ]+$" title="Valid Name Here">
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <input class="con-field" name="email" id="email" type="email" placeholder="Enter Your Email" required>
                                </div>                            
                                <div class="col-lg-12 col-xs-12">
                                    <input class="con-field" name="phone" id="phone" type="text" placeholder="Enter Your Phone With Country Code" pattern="[0-9+]+$" title="Valid Phone Number Here" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-xs-12">
                                    <textarea class="con-field" name="message" id="message" rows="6" placeholder="Write Your Message" required></textarea>
                                    <div class="submit-area">
                                        <input type="submit" name="send" id="submit-contact" class="btn-alt" value="Send Message">
                                        <div id="msg" class="message"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End:Contact Form  -->
                </div>
                <div class="col-md-6 col-xs-12" id="map">
                     <!-- Google Map -->
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1951.4786728087565!2d8.536318316760903!3d11.97745339389844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11ae81afb2508533%3A0x8351b8519b045ccd!2sAlhamsad%20Towers!5e0!3m2!1sen!2sug!4v1575197299114!5m2!1sen!2sug" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
                </div>
            </div>
         <!-- row /- -->
        </div>
        <!-- container /- -->
    </section>
    <!-- End : Contact Section 
==================================================-->
<?php include('include/footer.php'); ?>