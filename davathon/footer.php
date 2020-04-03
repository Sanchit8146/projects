<footer class=footer-area id="contact">
    <div class=container>
        <div class=row>
            <div class="col-lg-6 col-md-6">
                <div class=single-footer-widget>
                    <h3>Venue Location</h3><span><i class=icofont-calendar></i> Event Postponed!!
                        <!--19<sup>th</sup> March, 2020--></span>
                    <p><i class=icofont-google-map></i> Room-12, DAVIET, KABIR NAGAR, Jalandhar</p><a
                        href="tel:+91-81460-90777" class=contact-authority><i class=icofont-phone></i>
                        +91-81460-90777</a>
                    <a href="tel:+91-70096-50472" class=contact-authority><i class=icofont-phone></i>
                        +91-70096-50472</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class=single-footer-widget>
                    <h3>Social Connection</h3>
                    <p style="margin-top:-12px;">Don't miss a thing! To receive daily news, you should connect to
                        our
                        social
                        area for any proper updates
                        anytime.</p>
                    <ul class=social-links>
                        <li><a href="https://twitter.com/dav_a_thon" class=twitter target=_blank><i
                                    class=icofont-twitter></i></a></li>
                        <li><a href="https://www.instagram.com/dav_a_thon/" class=instagram target=_blank><i
                                    class=icofont-instagram></i></a></li>
                    </ul>
                </div>
            </div>
            <div class=col-lg-12>
                <div class=copyright-area>
                    <div class=logo><a href=index></a></div>
                    <ul>
                        <li><a href="#header">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#schedule">Schedule</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#sponsor">Sponsors</a></li>
                    </ul>
                    <p><i class=icofont-copyright></i> Designed and Developed by Sanchit Gupta</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class=back-to-top>Top</div>
<script src="assets/js/sweetalert2.all.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/lax.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
new WOW().init();
//sweet alerts
$('.reg').on('click', function() {
    Swal.fire({
        icon: 'error',
        title: 'Sorry....',
        text: 'Registerations will open soon!'
    })
});
$('.sch').on('click', function() {
    Swal.fire({
        icon: 'error',
        title: 'Sorry....',
        text: 'Schedule will be uploaded soon!'
    })
});
$(window).load(function() {
    Swal.fire({
        icon: 'error',
        title: 'Sorry...',
        text: 'Event has been postponed due to possible effect of Coronavirus. New details will be uploaded soon!!'
    })
});
/*window.onload = function() {
    var fscreen = document.documentElement;
    if (fscreen.requestFullscreen) {
        fscreen.requestFullscreen();
    } else if (docElm.mozRequestFullScreen) {
        docElm.mozRequestFullScreen();
    } else {
        docElm.webkitRequestFullScreen();
    }
}*/
//Disabling all the keys
window.oncontextmenu = function() {
    return false;
}
$(document).keydown(function(event) {
    if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event
            .keyCode == 74) || (event.ctrlKey && event.keyCode == 85) || (event.keyCode == 123)) {
        return false;
    }
});
</script>