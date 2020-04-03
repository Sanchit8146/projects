<div class="footer-agileits-w3layouts" id="contact">
    <div class="container-fluid">
        <div class="btm-logo-w3ls">
            <h2><a href="#header"><img src="images/logo.png" height="150"></h2>
        </div>
        <div class="container ct">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <h6><span class="fa fa-phone"></span> Phone</h6>
                    <p>99999-99999</p>
                </div>
                <div class="col-sm-4 col-md-4">
                    <h6><span class="fa fa-envelope"></span> Email</h6>
                    <p>abc@gmail.com</p>
                </div>
                <div class="col-sm-4 col-md-4">
                    <h6><span class="fa fa-map-marker"></span> Address</h6>
                    <p>XYZ colony, ABC country</p>
                </div>
            </div>
        </div>
        <div class="subscribe-w3ls">
            <h6>Let us inform you about everything important directly.</h6>
            <form action="#" method="post">
                <div class="col-md-8 col-sm-8 col-xs-8 input-flds-w3-agile">
                    <input type="email" name="Email" placeholder="Email" required="">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 input-flds-w3-agile">
                    <input type="submit" value="Subscribe">
                </div>
                <div class="clearfix"> </div>
            </form>
        </div>
        <div class="social-icons-agileits">
            <ul>
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<div class="copyright-w3layouts">
    <div class="container">
        <p>&copy; 2018 . ALL RIGHTS RESERVED|MANINDER INFOTECH
        </p>
    </div>
</div>

<a href="#" class="btscroll">
</a>
<!-- //smooth scrolling -->


<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
$('.counter').countUp();
</script>
<!-- //stats -->
<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });
});
</script>
<!-- //flexSlider -->
<!-- Responsiveslides -->
<script src="js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function() {
    // Slideshow 4
    $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function() {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
            $('.events').append("<li>after event fired.</li>");
        }
    });

});
</script>
<!-- // Responsiveslides -->
<!--search-bar-->
<script src="js/main.js"></script>
<!--//search-bar-->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });
});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.btscroll').fadeIn(duration);
        } else {
            jQuery('.btscroll').fadeOut(duration);
        }
    });
    jQuery('.btscroll').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: 0
        }, duration);
        return false;
    })
});
</script>
<!-- //here ends scrolling icon -->
<!-- Js for bootstrap working-->
<script src="js/bootstrap.js"></script>
<!-- //Js for bootstrap working -->