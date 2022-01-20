  <div class="footer">
        <div class="contentfooter">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logowhite.png" alt="">
            <div class="menus">
                <div class="menu">
                    <h6>About us</h6>
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <h5>Lorem ipsum dolor</h5>
                    <h5>Lorem ipsum dolor</h5>
                </div>
                <div class="menu">
                    <h6>our team</h6>
                    <h5>Lorem ipsum dolor</h5>
                    <h5>Lorem ipsum dolor</h5>
                    <h5>Lorem ipsum dolor</h5>
                </div>
                <div class="menu">
                    <h6>Who we are</h6>
                    <h5>Lorem ipsum </h5>
                    <h5>Lorem ipsum </h5>
                    <h5>Lorem ipsum </h5>
                </div>
                <div class="menu">
                    <h6>Resources</h6>
                    <h5>Lorem Ist</h5>
                    <h5>Lorem </h5>
                    <h5>Lorem </h5>
                </div>
            </div>
            <div class="contactMenu">
                <div class="contactMenus">
                    <h6>Contact</h6>
                    <h5>Contact form</h5>
                    <h5>allowed@test.com </h5>
                </div>
                <div class="emailSubmit">
                    <p>Sign up for our newsletter:</p>
                    <div class="submitEmail">
                        <input type="text" name="Email" id="emailSubmit" placeholder="Email address">
                        <a href=" # " class="button">
                            <p>Submit →</p>
                        </a>
                    </div>
                </div>

            </div>
            <p>Site content copyright © 2021 Allowded Text Terms & Privacy</p>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
   <?php wp_footer(); ?>
</html>