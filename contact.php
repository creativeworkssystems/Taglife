<?php include 'header.php'; ?>

    <!-- BANNER -->
    <div class="contact carousel slide sawtooth white" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/contact_banner.jpg" alt="...">
                <div class="carousel-caption">
                    <img src="images/contact_us.png" alt="">
                    <h3 class="hidden-xs">Fill Out the form Below</h3>
                    <small class="hidden-xs">and our manager contact you shortly </small>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER #END -->


    <!-- CONTACT -->
    <div class="container-fluid contact sawtooth black">
        <div class="animatedParent animateOnce  imagery">
            <img src="images/envelope.png" class="hidden-xs hidden-sm animated bounceInLeft envelope delay-100" alt="" >
            <img src="images/pen_red.png" class="hidden-xs hidden-sm animated bounceInRight pen_red delay-200" alt="" >
            <img src="images/pen_orange.png" class="hidden-xs hidden-sm animated fadeInRight pen_orange delay-300" alt="" >
            <img src="images/pen_pink.png" class="hidden-xs hidden-sm animated fadeInRight pen_pink delay-500" alt="" >
        </div>
        <div class="row">
            <form class="form-horizontal contact_form" id="main-contact-form" method="post" action="mailer.php">
                <div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" id="companyname" name="companyname" class="form-control" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea class="form-control" id="message" name="message" rows="10" cols="10" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="g-recaptcha" data-theme="dark" data-sitekey="6Lep-woUAAAAAEXsBLlMAHm3bCw2B_XwZ4UNGVju"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-default btn-lg btn_orange">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="info  contact">

            <div class="row">
                <div class="col-md-3 col-md-offset-1 text-center">
                    <h3>OR CONTACT:</h3>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-sm-offset-2">
                            <img src="images/jess.jpg"  class="img-responsive pull-left" alt="">
                        </div>
                        <div class="col-xs-8 col-sm-6">
                            <p>Jessica Smith <br />
                            <a href="tel:+1-646-558-0032">+1-646-558-0032</a></p>
                            <p><a href="mailto:forbrands@snaptag.com">forbrands@taglife.co</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 text-center">
                    <h3>Follow Us On:</h3>
                    <div class="clearfix"></div>
                    <a href="#"><img src="images/instagram.jpg" alt=""></a>
                    <a href="#"><img src="images/fb.jpg" alt=""></a>
                    <a href="#"><img src="images/tw.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT #END -->

    <script type="text/javascript">

    </script>

<?php include 'footer.php'; ?>
