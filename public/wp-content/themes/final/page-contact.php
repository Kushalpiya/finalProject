<?php

   /*
Template Name: Contact Page Template
*/

 get_header(); ?>

    <div class="contactUs">
        <div class="content">
            <div class="container">
                <div class="col-lg-7 blog">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/contact.png" alt="">
                    <div class="absolute_image">
                        <h1>Contact Us</h1>
                        <p>We’re always looking for new problems to solve and great people to add to our team. Let us know how we can help!.</p>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="">
                        <p>Let’s talk about</p>
                        <div class="form-row project">
                            <input type="text" class="form-control col-md-6">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4"><h6>First Name</h6></label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4"><h6>Last Name</h6></label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress"><h6>Email Address</h6></label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2"><h6>Message</h6></label>
                            <input type="text" class="form-control" id="inputAddress2">
                        </div>
                        <h2>This site is protected by reCAPTCHA and the Google <span>Privacy Policy</span> and <span>Terms of Service</span> apply.</h2>
                        <a href=" # " class="button">
                            <p>Read More →</p>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>




<?php get_footer(); ?>