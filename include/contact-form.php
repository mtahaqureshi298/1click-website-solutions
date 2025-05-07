<section class="contact bg--properties padd-y position-relative <?= $bgContact ?>">
    <div class="contact__img">
        <img src="assets/images/contact-img.png" alt="image" class="imgFluid w-100 h-100 objectFit--contain">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="section-content <?= $textLight ?>">
                    <h2 class="heading font-light">
                        LET’S TALK <span class="color--primary font-bold">BUSINESS</span>
                    </h2>
                </div>
                <div class="d-flex flex-wrap align-items-center contact__links">
                    <a href="mailto:info@1clickwebsitesolutions.com" class="mr-3 text-capitalize <?= $textLight ?>">
                        <img src="assets/images/msg-icon.png" alt="image" class="imgFluid"> info@1clickwebsitesolutions.com
                    </a>
                    <a href="tel:8555344489" class="<?= $textLight ?>">
                        <img src="assets/images/phone-icon.png" alt="image" class="imgFluid"> (855) 534-4489
                    </a>
                </div>
                <form action="#" class="contactForm mt-3">
                    <div class="row no-gutters">
                        <div class="col-12 col-lg-6">
                            <div class="inputField">
                                <input type="text" placeholder="Your Full Name*" name="Name">
                                <input type="hidden" name="form-name" value="Contact Us Form Query">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="inputField">
                                <input type="text" placeholder="Tell/Mobile No." name="Number" id="phone-countr">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="inputField">
                                <input type="text" placeholder="Your Email Address*" name="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="inputField">
                                <textarea rows="5" placeholder="Project Details" name="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="inputField">
                                <button type="submit" class="themeBtn w-100 rounded bg--primary text-light">submit</button>
                                <input class="" type="hidden" name="ctry" value="" />
                                <input type="hidden" name="pc" value="">
                                <input type="hidden" name="cip" value="">
                                <input type="hidden" name="hiddencapcha" value="">
                                <input type="hidden" id="location" name="locationURL" value="" />
                                <script type="text/javascript">
                                    document.getElementById('location').value = window.location.href;
                                </script>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>