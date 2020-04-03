<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("headincludes.php"); ?>
</head>

<body>
    <!-- banner -->
    <div class="banner jarallax">
        <!-- agileinfo-dot -->
        <div class="agileinfo-dot">
            <div class="w3layouts-header-top">
                <div class="w3-header-top-grids">
                    <div class="w3-header-top-left">
                        <p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +91 9876066607</p>
                    </div>
                    <div class="w3-header-top-right">
                        <div class="w3-header-top-right-text">
                            <p><i class="fa fa-home" aria-hidden="true"></i> #159, Gopal Nagar, Jalandhar</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="head">
                <div class="container">
                    <div class="navbar-top">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand logo">
                                <a href="index.php"><img src="images/logo.png" height="80" width="195"></a>
                            </div>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav link-effect-4">
                                <li class="active"><a href="index.php" data-hover="Home">Home</a></li>
                                <li><a href="#about" class="scroll">About</a></li>
                                <li><a href="#services" class="scroll">Services</a></li>
                                <li><a href="#gallery" class="scroll">Gallery</a></li>
                                <li><a href="#contact" class="scroll">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div>
            <div class="w3layouts-banner-slider">
                <div class="container">
                    <div class="slider">
                        <div class="callbacks_container">
                            <ul class="rslides callbacks callbacks1" id="slider4">
                                <li>
                                    <div class="agileits-banner-info">
                                        <h3>Warranty</h3>
                                        <div class="w3-button">
                                            <div class="w3ls-button">
                                                <a href="#about" class="scroll">About</a>
                                            </div>
                                            <div class="w3l-button">
                                                <a href="#" data-toggle="modal" data-target="#myModal">More</a>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agileits-banner-info">
                                        <h3>Demo & Installation</h3>
                                        <div class="w3-button">
                                            <div class="w3ls-button">
                                                <a href="#about" class="scroll">About</a>
                                            </div>
                                            <div class="w3l-button">
                                                <a href="#" data-toggle="modal" data-target="#myModal">More</a>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agileits-banner-info">
                                        <h3>Door Step Repair</h3>
                                        <div class="w3-button">
                                            <div class="w3ls-button">
                                                <a href="#about" class="scroll">About</a>
                                            </div>
                                            <div class="w3l-button">
                                                <a href="#" data-toggle="modal" data-target="#myModal">More</a>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agileits-banner-info">
                                        <h3>Annual Maintenance</h3>
                                        <div class="w3-button">
                                            <div class="w3ls-button">
                                                <a href="#about" class="scroll">About</a>
                                            </div>
                                            <div class="w3l-button">
                                                <a href="#" data-toggle="modal" data-target="#myModal">More</a>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agileits-banner-info">
                                        <h3>Spare Parts</h3>
                                        <div class="w3-button">
                                            <div class="w3ls-button">
                                                <a href="#about" class="scroll">About</a>
                                            </div>
                                            <div class="w3l-button">
                                                <a href="#" data-toggle="modal" data-target="#myModal">More</a>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agileits-banner-info">
                                        <h3>Reliable Staff</h3>
                                        <div class="w3-button">
                                            <div class="w3ls-button">
                                                <a href="#about" class="scroll">About</a>
                                            </div>
                                            <div class="w3l-button">
                                                <a href="#" data-toggle="modal" data-target="#myModal">More</a>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                        <script>
                        // You can also use "$(window).load(function() {"
                        $(function() {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager: true,
                                nav: true,
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
                        <!--banner Slider starts Here-->
                    </div>
                </div>
            </div>
        </div>
        <!-- //agileinfo-dot -->
    </div>
    <!-- //banner -->
    <!-- modal -->
    <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        Something
                        <span>About US...</span>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="agileits-w3layouts-info">
                        <img src="images/logo1.png" alt="" />
                        <p>We are the best electronic dealers in the city where you can find a really huge range
                            of electronics and appliances under varied categories at the best prices alongside we offer
                            attractive deals and discounts that you can’t avoid. At Sukhjinder Enterprises you can get
                            the
                            home appliances like washer dryer, LED TVs, geysers, home theatre etc, kitchen appliances
                            like dishwasher, food processors, kitchen chimney etc, air conditioners and air purifiers,
                            laptops & computers, mobile phones and tabs and many more under one roof at really
                            affordable prices. So feel free to visit us for your daily need appliances and upgrade your
                            lifestyle with amazing products on offers and discounts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal -->
    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <div class="about-heading">
                <h2>About Us</h2>
                <p>Want to know about us?</p>
            </div>
            <div class="w3l-about-grids">
                <div class="col-md-6 w3ls-about-left">
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fas fa-space-shuttle fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Mission</h5>
                            <p>To offer a range of products at affordable prices, which add to comfort of life through
                                saving in manual labour, time and energy or for entertainment.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fas fa-eye fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Vision</h5>
                            <p>Let us endeavour to make Sukhjinder Enterprises a trusted household name.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fas fa-lightbulb fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Ideology</h5>
                            <p>The ease in our lives is a result of products that not just follow orders, but understand
                                what consumers want, intuitively. This evolved understanding helps them play a more
                                fulfilling role in the lives of consumers.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 w3ls-about-right">
                    <div class="w3ls-about-right-img">

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- services -->
    <div class="services" id="services">
        <div class="container">
            <div class="about-heading">
                <h3>Services</h3>
                <p>We provide these services</p>
            </div>
            <div class="w3-agileits-services-grids">
                <div class="col-md-4 w3-agileits-services-left">
                    <div class="services-info">
                    </div>
                </div>
                <div class="col-md-8 w3-agileits-services-right">
                    <div class="services-right-grids">
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-award fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Warranty</h5>
                                <p>We provide warranty and post-warranty repairs and maintenance of Consumer
                                    Electronics, Appliances, etc in accordance with the
                                    standards and procedures set by manufacturers.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-home fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Demo & Installation</h5>
                                <p>Live demonstration of all features of the product , Provide handy care tips
                                    Our engineers do more than just install - They also interconnect all compatible
                                    products that you own.</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="services-right-grids">
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-tools fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Door Step Repair</h5>
                                <p>An average Indian household today uses at least 10 to 15 electrical appliances which
                                    demand proper installation and
                                    continuous tuning to give optimum performance for a minimum period of 8 to 10 years.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-file-signature fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Annual Maintenance Contract</h5>
                                <p>Electronic devices no doubt make our life easy and convenient. But their unexpected
                                    breakdown cannot be ruled out.Serviceman AMC gets you One full year
                                    coverage for your home electronic appliance.</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="services-right-grids">
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-cogs fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Spare Parts</h5>
                                <p>Many people believe in saving a few rupees by buying duplicate parts which are
                                    “as good as the original”. It is always advisable to use Genuine Spare
                                    parts which have been tested for reliability.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-users fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Reliable Staff</h5>
                                <p>We have those people that are working here from the start and are trained and
                                    experienced well to handle all types of problems.</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- gallery -->
    <div class="gallery" id="gallery">
        <div class="container">
            <div class="about-heading">
                <h3>Gallery</h3>
                <p>We deal in</p>
            </div>
        </div>
        <div class="gallery-grids">
            <div class="gallery-top-grids">
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/01.png" data-lightbox="example-set">
                            <img src="images/01.png" alt="" />
                            <div class="g-captn">
                                <h4>Washing Machines</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/02.png" data-lightbox="example-set">
                            <img src="images/02.png" alt="" />
                            <div class="g-captn">
                                <h4>LED TVs</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/03.png" data-lightbox="example-set">
                            <img src="images/03.png" class="img-responsive" alt="" />
                            <div class="g-captn">
                                <h4>Air Conditioners</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/04.png" data-lightbox="example-set">
                            <img src="images/04.png" alt="" />
                            <div class="g-captn">
                                <h4>Refrigerators</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="gallery-top-grids">
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/05.png" data-lightbox="example-set">
                            <img src="images/05.png" alt="" />
                            <div class="g-captn">
                                <h4>Ovens</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/06.png" data-lightbox="example-set">
                            <img src="images/06.png" alt="" />
                            <div class="g-captn">
                                <h4>Home Theater Systems</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/07.png" data-lightbox="example-set">
                            <img src="images/07.png" alt="" />
                            <div class="g-captn">
                                <h4>Laptops</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/08.png" data-lightbox="example-set">
                            <img src="images/08.png" alt="" />
                            <div class="g-captn">
                                <h4>Heaters</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!-- subscribe -->
    <div class="subscribe">
        <div class="container">
            <div class="about-heading agile-subscribe-heading">
                <h3>Subscribe with Us</h3>
                <p>To recieve any news or updates, subscribe with us.</p>
            </div>
            <div class="subscribe-grid">
                <form action="#" method="post">
                    <input type="text" placeholder="Subscribe" name="Subscribe" required="">
                    <button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- //subscribe -->
    <!-- map -->
    <div class="agileits-w3layouts-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.7453914166426!2d75.5677012651011!3d31.33840393143011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a892f253967%3A0xe8556d84da4aa24b!2sGopal%20Nagar%2C%20Jalandhar%2C%20Punjab%20144008!5e0!3m2!1sen!2sin!4v1581447268774!5m2!1sen!2sin"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- //map -->
    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="about-heading">
                <h3>Contact</h3>
                <p>Get in touch with us.</p>
            </div>
            <div class="address">
                <div class="col-sm-4 address-grids">
                    <h4>Address :</h4>
                    <p>#159, Gopal Nagar<br>
                        <span>Jalandhar,</span>
                        Punjab 144008
                    </p>
                </div>
                <div class="col-sm-4 address-grids">
                    <h4>Phone :</h4>
                    <p>+91 9876066607</p>
                </div>
                <div class="col-sm-4 address-grids">
                    <h4>Email :</h4>
                    <p>info@tanejaelectricals.com</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="contact-form">
                <h4>Contact Form</h4>
                <form action="#" method="post">
                    <div class="fields-grid">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Full Name" required="">
                            <label>Full Name</label>
                            <span></span>
                        </div>
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="Phone" required="">
                            <label>Phone</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="Email" required="">
                            <label>Email</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="Subject" required="">
                            <label>Subject</label>
                            <span></span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="styled-input textarea-grid">
                        <textarea name="Message" required=""></textarea>
                        <label>Message</label>
                        <span></span>
                    </div>
                    <input type="submit" value="SEND">
                </form>
            </div>
        </div>
    </div>
    <!-- //contact -->
    <!-- footer -->
    <?php require_once("footer.php"); ?>
    <!-- //footer -->
</body>

</html>