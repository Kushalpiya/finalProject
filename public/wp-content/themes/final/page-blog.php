<?php

   /*
Template Name: Blog Page Template
*/


 get_header(); ?>


    <div class="firstPageBlog">
        <div class="content">
            <div class="container">
                <div class="col-lg-7 col-md-7 blog">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/img1.png" alt="">
                    <div class="absolute_image">
                        <p>Vivamus vitae finibus dolor. Suspendisse finibus ante in sapien fermentum.</p>
                    </div>
                </div>
            </div>
            <div class="container bottomtext">
                <div class="text">
                    <span>November 11, 2021</span>
                    <p>Morbi pellentesque justo non magna iaculis efficitur in quis magna. Vivamus consectetur placerat iaculis. Aenean in orci et libero auctor elementum non in diam. Suspendisse vel urna luctus, tristique purus a, commodo metus. Nam commodo
                        turpis eget magna placerat, quis molestie mauris volutpat</p>
                    <a href="<?php echo site_url('/blogsingle') ?>" class="button">
                        <p>Read More →</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="secondPageBlog">
        <div class="container">
            <h6 class="blogNotes">More Blog Notes</h6>
            <div class="category">
                <h5>Category:</h5>
                <h4>news</h4>
                <h4>travel</h4>
                <h4>blogs</h4>
                <h4>facts</h4>
                <h4>global</h4>
            </div>
            <div class="search">
                <input type="text" name="" id="blogSearch">
                <div class="latest">
                    <div class="titleLatest">
                        <p>latest</p>
                        <img src="img/down.png" alt="">
                    </div>
                    <div class="dropdown">
                        <h6>alphabetical order</h6>
                        <hr>
                        <h6>featured</h6>
                        <hr>
                        <h6>latest</h6>
                        <hr>
                        <h6>oldest</h6>
                    </div>
                </div>
            </div>
            <div class="cards">
            	 <a href="<?php echo site_url('/blogsingle') ?>">
                <div class="card1">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/card1.png" alt="">
                    <div class="descCard">
                        <h6>June 11, 2021</h6>
                        <h5>Interesting Facts I Bet You Never Knew About BLOGS</h5>
                    </div>
                </div>
            </a>
             <a href="<?php echo site_url('/blogsingle') ?>">
                <div class="card2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/card2.png" alt="">
                    <div class="descCard">
                        <h6>June 11, 2021</h6>
                        <h5>Everything You Wanted to Know About BLOGS and Were Too Embarrassed to Ask</h5>
                    </div>
                </div>
            </a>
             <a href="<?php echo site_url('/blogsingle') ?>">
                <div class="card3">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/card3.png" alt="">
                    <div class="descCard">
                        <h6>June 11, 2021</h6>
                        <h5>What Can You Do To Save Your BLOGS From Destruction By Social Media?</h5>
                    </div>
                </div>
            </a>
             <a href="<?php echo site_url('/blogsingle') ?>">
                <div class="card4">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/card4.png" alt="">
                    <div class="descCard">
                        <h6>June 11, 2021</h6>
                        <h5>White Paper: Call to NASA for Low-Cost Innovation, New Talent Pipeline in Missions</h5>
                    </div>
                </div>
            </a>
             <a href="<?php echo site_url('/blogsingle') ?>">
                <div class="card5">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/card5.png" alt="">
                    <div class="descCard">
                        <h6>June 11, 2021</h6>
                        <h5>Becoming Friends with a Mars Rover</h5>
                    </div>
                </div>
            </a>
             <a href="<?php echo site_url('/blogsingle') ?>">
                <div class="card6">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/card6.png" alt="">
                    <div class="descCard">
                        <h6>June 11, 2021</h6>
                        <h5>Some Assembly Required: Documentation in Mars Rover Design</h5>
                    </div>
                </div>
            </a>
            </div>
            <div class="cardNumber">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ArrowLtbutton.png" alt="">
                <div class="numbers">
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <p>4</p>
                    <p>5</p>
                    <p>6</p>
                    <p>7</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ArrowRtbutton.png" alt="">
            </div>

        </div>
    </div>
    <div class="contactBlog">
        <div class="contacts container">
            <h3>Proin pretium risus suscipit viverra mattis. Aliquam non nunc ligula.</h3>
            <p>Integer at neque ac metus fringilla dapibus et eu eros.</p>
            <a href=" # " class="button">
                <p>Contact →</p>
            </a>
        </div>
    </div>


<?php get_footer(); ?>