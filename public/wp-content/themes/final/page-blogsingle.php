<?php

   /*
Template Name: Single Blog Page Template
*/


 get_header(); ?>


    <div class="firstPageBlog">
        <div class="content contents">
            <div class="container">
                <div class="col-lg-7 blog blogSingle">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/card1.png" alt="">
                    <div class="absolute_image">
                        <p>Interesting Facts I Bet You Never Knew About BLOGS.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secondPageBlogSingle">
        <div class="content container">
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit gravida eleifend. Mauris fringilla urna at lectus dapibus laoreet. Proin id sem consequat arcu ultrices porta ac a leo. Quisque quis blandit magna, ut bibendum nibh. Donec
                pulvinar risus nulla, vel fermentum quam tempus ac. Vivamus nunc massa, egestas at auctor nec, vehicula sed ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4>
            <p>Aenean placerat pulvinar quam, et convallis arcu feugiat et. Duis aliquet iaculis dapibus. Aenean blandit massa vel lacus luctus cursus. Sed aliquam ipsum non nibh commodo, non efficitur magna tempus. Curabitur eget mi magna. Maecenas mollis
                lectus nulla, nec laoreet justo efficitur et. Maecenas ac justo eget sapien hendrerit sollicitudin in et ipsum.</p>
            <ul>
                <li>Aenean placerat pulvinar quam, et convallis arcu feugiat et.</li>
                <li>Duis aliquet iaculis dapibus.</li>
                <li>Aenean placerat pulvinar quam, et convallis arcu feugiat et. Duis aliquet iaculis dapibus. Aenean blandit massa vel lacus luctus cursus.</li>
                <li>Sed aliquam ipsum non nibh commodo, non efficitur magna tempus.</li>
                <li>Curabitur eget mi magna. Maecenas mollis lectus nulla, nec laoreet justo efficitur et. Maecenas ac justo eget sapien hendrerit sollicitudin in et ipsum.</li>
            </ul>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/img1big.png" alt="">
            <h5>Vestibulum ornare dapibus elit vitae commodo. Donec nec tellus velit. Duis sem leo, tempus quis arcu ac, suscipit consectetur odio. Maecenas mattis lacinia arcu, sed tempor ligula blandit a.</h5>
            <h3>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</h3>
            <p>Aenean placerat pulvinar quam, et convallis arcu feugiat et. Duis aliquet iaculis dapibus. Aenean blandit massa vel lacus luctus cursus. Sed aliquam ipsum non nibh commodo, non efficitur magna tempus. Curabitur eget mi magna. Maecenas mollis
                lectus nulla, nec laoreet justo efficitur et. Maecenas ac justo eget sapien hendrerit sollicitudin in et ipsum.</p>
        </div>
    </div>
    <div class="thirdPageBlogSingle">
        <div class="container thirdPageBlogSingle">
            <p>Related Blogs</p>
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
            </div>
        </div>
    </div>


<?php get_footer(); ?>