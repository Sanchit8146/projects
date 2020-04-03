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
                                <a href="index.php"><img src="images/logo1.png" height="90" width="190"></a>
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
                                        <h3>Reliable Workers</h3>
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
                                        <h3>Security</h3>
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
                                        <h3>Residential</h3>
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
                                        <h3>Commercial</h3>
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
                                        <h3>Underground</h3>
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
                                        <h3>Automation</h3>
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
                        Goal
                        <span>of our company.....</span>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="agileits-w3layouts-info">
                        <img src="images/logo1.png" alt="" />
                        <p>The goal of our company is to provide our clients with a one-stop-shop for all of their
                            electrical needs. By providing commercial, residential, underground, security and low
                            voltage services, our team has a comprehensive understanding of the electrical industry and
                            current technology to help you with your project or product needs.Each owner and every team
                            member, work diligently to ensure only top-quality services are provided to every client.
                            Customer Satisfaction is our focus.</p>
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
                            <p>Our mission is to solve the electrical problems.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fas fa-eye fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Vision</h5>
                            <p>Our vision is to have labor and management work together lock-step insuring the success
                                of Taneja Electronics.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agileits-icon-grid">
                        <div class="icon-left hvr-radial-out">
                            <i class="fab fa-think-peaks fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="icon-right">
                            <h5>Philosophy</h5>
                            <p>Our Philosophy is understanding our customers’ needs, eliminating the obstacles we have
                                control over, and supporting each other as only a family can.</p>
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
                                <i class="fas fa-users fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Reliable Workers</h5>
                                <p>We have those people that are working here from the start and are trained and
                                    experienced well to handle all types of problems.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-home fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Residential</h5>
                                <p>Our residential services encompass everything you may need for your home.
                                    From the installation of new wiring, to repairs,
                                    and concerns you may have.</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="services-right-grids">
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-handshake fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Commercial</h5>
                                <p>We can also handle any commercial electrical need. Our team has the
                                    ability and experience to take on even the most complex electrical projects.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-tools fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Underground</h5>
                                <p>What’s even better is that all the wiring used will be installed underground – no
                                    more
                                    worry
                                    about storm damage and other similar issues.</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="services-right-grids">
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-shield-alt fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Security</h5>
                                <p>We can also customize the features and
                                    components of your security system. For example, we can provide smart locks for home
                                    – and so much more.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 services-right-grid">
                            <div class="services-icon hvr-radial-in">
                                <i class="fas fa-robot fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="services-icon-info">
                                <h5>Automation</h5>
                                <p>In today’s modern world, automation is considered a “normal” part of life. We can
                                    help you implement the automation features you desire to make home or business more
                                    convenient and safer.</p>
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
                                <h4>Safe Circuits</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/02.jpg" data-lightbox="example-set">
                            <img src="images/02.jpg" alt="" />
                            <div class="g-captn">
                                <h4>Electrical Transformer</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/03.jpg" data-lightbox="example-set">
                            <img src="images/03.jpg" alt="" />
                            <div class="g-captn">
                                <h4>Electrical Generator</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/04.jpg" data-lightbox="example-set">
                            <img src="images/04.jpg" alt="" />
                            <div class="g-captn">
                                <h4>High Tension Wires</h4>
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
                                <h4>Digital Multimeter</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/06.png" data-lightbox="example-set">
                            <img src="images/06.png" alt="" />
                            <div class="g-captn">
                                <h4>Electrical Wires</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/07.png" data-lightbox="example-set">
                            <img src="images/07.png" alt="" />
                            <div class="g-captn">
                                <h4>Circuit Breaker</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 gallery-grids-left">
                    <div class="gallery-grid">
                        <a class="example-image-link" href="images/08.png" data-lightbox="example-set">
                            <img src="images/08.png" alt="" />
                            <div class="g-captn">
                                <h4>Portable Generator</h4>
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