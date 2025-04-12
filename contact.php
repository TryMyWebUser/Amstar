<?php
include("header.php");
?>

<!-- Page Title -->
<section class="page-title" style="background-image: url(assets/images/background/bg-26.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>Contact Us</h1>
                </div>
                <ul class="bread-crumb style-two">
                    <li><a href="index.php">Home </a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form section -->
<section class="contact-form-section style-four">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="office-address">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-geolocation"></i></div>
                        <h4>Visit Us</h4>
                        <div class="text">Door No.214, Lenin Street, Vilankurichi, Coimbatore, Tamil Nadu - 641035</div>
                    </div>
                    <div class="text">We look forward to developing new opportunities and producing world class products
                        for our customers. Contact our team for discussion.</div>
                </div>
                <div class="contact-info mb-30">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-call"></i></div>
                                <h4>Phone (India)</h4>
                                <div class="text">
                                    <a href="tel:8848508417">+91 8848508417</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-call"></i></div>
                                <h4>Phone (Soudhi)</h4>
                                <div class="text">
                                    <a href="tel:00966501784948">+91 00966501784948</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-correspondence"></i></div>
                                <h4>Email</h4>
                                <div class="text"><a
                                        href="mailto:salesamstarpumps@gmail.com">salesamstarpumps@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon"><i class="flaticon-correspondence"></i></div>
                                <h4>Email</h4>
                                <div class="text"><a
                                        href="mailto:serviceamstarpumps@gmail.com">serviceamstarpumps@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-box">
                    <div class="sec-title">
                        <div class="sub-title">Send Message</div>
                        <h2>Need Help? Send Message</h2>
                        <div class="text">We have facility to produce advance work various industrial applications based
                            on <br> specially developed technology.</div>
                    </div>
                    <!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" name="form_name" value="" placeholder="Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" name="email" value="" placeholder="Your Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input id="phone" type="text" name="form_phone" value=""
                                            placeholder="Enter Your PHone Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Subject</label>
                                        <input id="subject" type="text" name="subject" value=""
                                            placeholder="Enter the Subject of the Message" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" name="form_message"
                                            placeholder="Enter Your Massage"></textarea>
                                        <div class="form-btn">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="theme-btn btn-style-one" type="submit"
                                                data-loading-text="Please wait..."><span><i
                                                        class="flaticon-up-arrow"></i>Send Now</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Contact Form-->
                </div>
            </div>
            <!-- <div class="col-lg-4 mt-5">
                <img src="assets/images/contact.png" class="img-fluid">
            </div> -->
        </div>
    </div>
</section>

<!-- Map Section -->

<section class="map-section">
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3915.5021204914215!2d77.01913447504626!3d11.07590558909165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sDoor%20No.214%2C%20Lenin%20Street%2C%20Vilankurichi%2C%20Coimbatore%2C%20Tamil%20Nadu%20-%20641035!5e0!3m2!1sen!2sin!4v1713170375099!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- Contact info section two -->

<?php
include("footer.php");
?>