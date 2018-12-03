    <!-- FOOTER -->
    <footer class="container-fluid" id="footer">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="images/brand_footer.jpg" alt="">
                <div class="clearfix"></div>
                <small>&copy; 2016 Taglife App. All rights reserved. Terms &amp; Conditions </small>
            </div>
        </div>
    </footer>
    <!-- FOOTER #END -->


    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="js/css3-animate-it.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/javascript">

    //COUNTER
    $(window).scroll(startCounter);
    function startCounter() {
        if ($(window).scrollTop() > 1200) {
            $(window).off("scroll", startCounter);
            $('.count').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
        }
    }

    //COUNTER
    $(window).scroll(startCounterTwo);
    function startCounterTwo() {
        if ($(window).scrollTop() > 2600) {
            $(window).off("scroll", startCounterTwo);
            $('.count_two').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
        }
    }

    //COUNTER
    $(window).scroll(startCounterThree);
    function startCounterThree() {
        if ($(window).scrollTop() > 4200) {
            $(window).off("scroll", startCounterThree);
            $('.count_three').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
        }
    }

    //ANCHOR SCROLL
    $(document).ready(function() {
        $('html, body').hide();

        if (window.location.hash) {
            setTimeout(function() {
                $('html, body').scrollTop(0).show();
                $('html, body').animate({
                    scrollTop: $(window.location.hash).offset().top
                    }, 1000)
            }, 0);
        }
        else {
            $('html, body').show();
        }
    });

    //CONTACT FORM
    $(document).ready(function() {
        $('#main-contact-form').submit(function(event) {
            event.preventDefault();

            var contactform = $('#main-contact-form');
            var formresult = $('#result');
            var formdata = $(contactform).serialize();

            $.ajax({
                type: 'POST',
                url: $(contactform).attr('action'),
                data: formdata,

                beforeSend: function() {
                    $(formresult).removeClass();
                    $(formresult).addClass('alert alert-info');
                    $(formresult).html("<span class='glyphicon glyphicon-refresh gly-spin' aria-hidden='true'></span>");
                },
                success:function(response) {
                    $(formresult).removeClass();
                    $(formresult).addClass('alert alert-success');
                    $(formresult).html(response);
                },
                error:function(data) {
                    $(formresult).removeClass();
                    $(formresult).addClass('alert alert-warning');
                    $(formresult).html(data.responseText);
                }
            });
        });
    });
    </script>

</body>
</html>
