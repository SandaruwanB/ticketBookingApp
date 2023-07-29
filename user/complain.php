<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CINEMA : complain</title>
        <link href="../sources/css/bootstrap.min.css" rel="stylesheet" >
	    <link href="../sources/css/font-awesome.min.css" rel="stylesheet" >
	    <link href="../sources/css/global.css" rel="stylesheet">
	    <link href="../sources/css/index.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	    <script src="../sources/js/bootstrap.bundle.min.js"></script>
	</head>
	
	<body>

		<section id="header">
			<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">SIGN UP</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>

						<div class="modal-body">

							<form class="ps-3 pe-3" action="#">

								<div class="mb-3">
									<label for="username" class="form-label">Name</label>
									<input class="form-control" type="email" id="username" required="" placeholder="Enter Name">
								</div>

								<div class="mb-3">
									<label for="emailaddress" class="form-label">Email address</label>
									<input class="form-control" type="email" id="emailaddress" required="" placeholder="info@gmail.com">
								</div>
							 
							    <div class="mb-3">
								    <label for="password" class="form-label">Password</label>
								    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
							    </div>
							 
							    <div class="mb-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="customCheck1">
										<label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
									</div> 
								</div>
								
								<div class="mb-3 text-center">
									<h6><a class="button_1 d-block" href="#">LOG IN</a></h6>
								</div>

							</form>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>

			<?php
			include_once("./layouts/navbar.php");
			?>
			
		</section>

		<img src="../sources/img/wall_img.jpg" width="85%" height="350px" style="object-fit : cover;">

		<section id="upcome" class="p_3 bg-light">
			<div class="container-xl">
				<div class="row upcome_1 text-center">
					<div class="col-md-12">
						<h3 class="mb-0">SEND COMPLAIN</h3>
						<hr class="line me-auto ms-auto">
					</div>
				</div>
			</div>
		</section>
		
		<section id="contact" class="p_3 bg-light">
			<div class="container">
				<div class="row contact1">
					<div class="col-md-8">
						<div class="contact1l">
							<div class="blog1ld3 row">
								<div class="col-md-12">
									<div class="blog1ld3l">
										<input class="form-control mt-3" id="subject" placeholder="Subject" type="text">
									</div>
								</div>
							</div>
							<div class="blog1ld3 row">
								<div class="col-md-12">
									<div class="blog1ld3l">
										<textarea placeholder="Message" class="form-control form_text mt-3" id="message"></textarea>
										<h6 class="mb-0 mt-3"><button class="button_1" id="addContactMessage">Send Complain </button></h6>
									</div>
								</div> 
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact1r bg_red p-4 rounded-3 pt-5 pb-5 mt-4">
							<h6 class="text-white"> <i class="fa fa-facebook me-1 align-middle"></i>  Facebook Account</h6>
							<h6 class="text-white mt-3"> <i class="fa fa-twitter me-1 align-middle"></i>  Twitter Account</h6>
							<h6 class="text-white mt-3"> <i class="fa fa-instagram me-1 align-middle"></i>  Instagram Account</h6>
							<h6 class="text-white mt-3 mb-0"> <i class="fa fa-youtube-play me-1 align-middle"></i>  Youtube Account</h6>
							<h6 class="text-white mt-3 mb-0"> <i class="fa fa-google me-1 align-middle"></i>  Google Account</h6>
						</div>
					</div>
				</div>
				<div class="row contact2 mt-4">
					<div class="col-md-4">
						<div class="contact2i text-center bg-white shadow_box p-4">
							<span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-phone"></i></span>
							<h4 class="mt-3">Contact</h4>
							<h6 class="text-muted">+(94) 70 123 4567</h6>
							<h6 class="mb-0 text-muted">+(94) 76 123 4567</h6>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact2i text-center bg-white shadow_box p-4">
							<span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-map"></i></span>
							<h4 class="mt-3">Location</h4>
							<h6 class="text-muted">Cinema Colombo</h6>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact2i text-center bg-white shadow_box p-4">
							<span class="d-inline-block bg_red text-white fs-2 rounded"><i class="fa fa-envelope"></i></span>
							<h4 class="mt-3">Email</h4>
							<h6 class="text-muted">bookingcinema@gmail.com</h6>
							<h6 class="mb-0 text-muted">cinema@gmail.com</h6>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="footer" class="p_3">
			<div class="container-xl">
				<div class="row footer_1">
					<div class="col-md-2">
						<div class="footer_1i">
							<h6 class="text-white fw-bold">LANGUAGE MOVIES</h6>
							<hr class="line mb-4">
							<div class="row footer_1i_small">
								<h6 class="col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">English Movie</a></h6>
								<h6 class="mt-2 col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">Tamil Movie</a></h6>
	                            <h6 class="mt-2 col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">Sinhala Movie</a></h6>
	                            <h6 class="mt-2 col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">Hindi Movie</a></h6>
	                            <h6 class="mb-0 mt-2 col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#"> Action Movie</a></h6>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="footer_1i">
							<h6 class="text-white fw-bold">GENRE</h6>
							<hr class="line mb-4">
							<div class="row footer_1i_small">
								<h6 class="col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">Action Movie</a></h6>
	                            <h6 class="mt-2 col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">Romantic Movie</a></h6>
                                <h6 class="mt-2 col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">Animation Movie</a></h6>
	                            <h6 class="mt-2 col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">Comedy Movie</a></h6>
	                            <h6 class="mt-2 col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">Drama Movie</a></h6>
	                            <h6 class="mb-0 mt-2 col-md-12 col-6"><i class="fa fa-circle me-1 col_red font_10"></i> <a class="text-muted" href="#">History Movie</a></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="footer_b" class="pt-3 pb-3">
			<div class="container-xl">
				<div class="row footer_b1">
					<div class="col-md-8">
						<div class="footer_b1l">
							<p class="mb-0 fs-6 text-muted mt-1">© 2023 CINEMA Movies. All Rights Reserved | Design by <a class="col_red">Abeysekara</a></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer_b1r text-end">
							<ul class="social-network social-circle mb-0">
								<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
								<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div id="snackbar"></div>

		<script src="../sources/js/jquery.min.js"></script>
		<script>
		window.onscroll = function() {myFunction()};
		
		var navbar_sticky = document.getElementById("navbar_sticky");
        var sticky = navbar_sticky.offsetTop;
        var navbar_height = document.querySelector('.navbar').offsetHeight;
		
		function myFunction() {
			if (window.pageYOffset >= sticky + navbar_height) {
				navbar_sticky.classList.add("sticky")
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
				navbar_sticky.classList.remove("sticky");
				document.body.style.paddingTop = '0'
			}
		}
		</script>
		<script src="../sources/js/main.js"></script>
	</body>
	
</html>