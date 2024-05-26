<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>codeNintern.com</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/icons/logo.png">
    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css"> 
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page">
		<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="home.php">
            <h3 class="font-weight-bolder mb-0">codeNintern</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contest.html">Contests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="internship.html">Internship/Placement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a id="side-search-open" class="nav-link" href="#">
                        <span class="lnr lnr-magnifier"></span>
                    </a>
                </li>
                 <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			You get skill, we are happy
            <br>
            You face trouble, we get hurt
            
            <br>
            <h2>Be part of our family and improve website. </h2> 
            <br><br>

            <h3 class="conit">Contact us</h3>
		</p>
		<p>
			<span class="fs-16 primary-color">(+91) 8960344082</span>
		</p>
		<p>master.dawn999@gmail.com</p>
	</div>
</div>

		<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/bg1.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4" id="pops">Contact Us</h1>
  </div>
</div>		<!-- Contact Form Section -->
<section id="contact-form" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-sub-title">We would love to hear from you!<br>If you have any questions, comments, or suggestions about our website, please don't hesitate to get in touch.<br>Feel free to contact us for more information about the coding contest websites we've merged and the internship and placement links we provide.</p>
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Contact Form Holder -->
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                    <form method="post" name="contact-us" id="form">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
                                <div class="success"></div>
                                <div class="error"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="Email" name="Email" placeholder="Email">
                                <div class="success"></div>
                                <div class="error"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" id="Contact" name="Contact" placeholder="Phone">
                                <div class="success"></div>
                                <div class="error"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="Message" name="Message" rows="6" placeholder="Your Message ..."></textarea>
                                <div class="success"></div>
                                <div class="error"></div>
                            </div>
                            <div id="error_msg"></div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit" value="submit"  onclick="openPopup()">Send Message</button>
                            </div>

                            <!-- popup -->
                            <div class="popup" id="popup">
                                    <img src="img/tick.png" alt="">
                                    <h4>Thank You!</h4>
                                    <p>Your details have been succesfully submitted. Thank You!</p>
                                    <button type="button" name="button" onclick="closePopup()">OK</button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- End of Contact Form Holder -->
            </div>
        </div>
        <div class="section-content pt-0">
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title">Where To Find Us?</h2>
            </div>
            <div class="row text-center mt-4">
                <div class="col-md-3" data-aos="fade-up">
                    <span class="lnr lnr-location fs-40 py-4 d-block"></span>
                    <h5>LOCATION</h5>
                    <p>Chandigarh <br>(INDIA)</p>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <span class="lnr lnr-clock fs-40 py-4 d-block"></span>
                    <h5>WORKING TIME</h5>
                    <p>Monday - Saturday</p>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                    <h5>CALL US</h5>
                    <p>(+91) 89603 44082</p>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                    <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                    <h5>EMAIL</h5>
                    <p>codeNintern@gmail.com</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End of Contact Form Section -->		<!-- Features Section-->
<section id="cta" class="bg-fixed overlay" style="background-image: url(img/bg1.jpg);">
    <div class="container">
        <div class="section-content" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mb-2">Formerly <br>Will 2 Learn</h2>
                    <p>Learning isn't about what you know, it's about what you can figure out ! </p>
                    <a class="btn btn-outline-primary btn-lg" href="home.php">codeNintern</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Features Section-->		<footer class="mastfoot my-3">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		
         	</div>
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">&copy; 2023 Kartavya. Design by <a href="https://kartavyaarya111.github.io/merge_all_sites/" target="_blank">The kartu Creations.</a>.</p>
         	</div>
           
             <div class="col-lg-4 col-md-12">
            	<nav class="nav nav-mastfoot justify-content-center">
	                <a class="nav-link" href="https://www.facebook.com/profile.php?id=100092284514390">
	                	<i class="fab fa-facebook-f"></i>
	                </a>
	                <a class="nav-link" href="https://twitter.com/CodeNintern">
	                	<i class="fab fa-twitter"></i>
	                </a>
	                <a class="nav-link" href="https://www.instagram.com/code_nintern/">
	                	<i class="fab fa-instagram"></i>
	                </a>
	                <a class="nav-link" href="https://www.linkedin.com/in/coden-intern-277115277/">
	                	<i class="fab fa-linkedin"></i>
	                </a>
	                
	            </nav>
	            </nav>
            </div>
            
        </div>
    </div>
</footer>	</div>

</div>

	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     
	 
	<!-- Main JS -->
	<script src="js/app.min.js "></script>
    <script src="js/validation.js"></script>
    <script src="js/action.js"></script>
 
</body>
</html>
