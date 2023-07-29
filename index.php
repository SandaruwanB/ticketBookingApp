<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Home page</title>
	    <link href="sources/css/bootstrap.min.css" rel="stylesheet" >
	    <link href="sources/css/font-awesome.min.css" rel="stylesheet" >
	    <link href="sources/css/global.css" rel="stylesheet">
	    <link href="sources/css/index.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	    <script src="sources/js/bootstrap.bundle.min.js"></script>
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

							<form class="ps-3 pe-3" action="connect.php" method="post">
								<div class="mb-3">
									<label for="username" class="form-label">Name</label>
								    <input class="form-control" type="email" id="username" required="" placeholder="Enter Name" name="username">
							    </div>							 
							    <div class="mb-3">
								    <label for="emailaddress" class="form-label">Email address</label>
								    <input class="form-control" type="email" id="emailaddress" required="" placeholder="info@gmail.com" name="emailaddress">
							    </div>							 
							    <div class="mb-3">
								    <label for="password" class="form-label">Password</label>
								    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">
							    </div>
								<div class="mb-3 text-center">
									<h6><a type="submit" class="button_1 d-block" name="submit">LOG IN</a></h6>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php
			include_once("./layouts/navbar.php");
			?>
			
		</section>
		
		<section id="center" class="center_home" style="max-height : 65vh; ">
			<div id="carouselExampleCaptions " class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="sources/img/image1.jpg" class="d-block w-100" alt="..." style="max-height : 65vh; object-fit : cover;">
					</div>					
					<div class="carousel-item">
						<img src="sources/img/image2.jpg" class="d-block w-100" alt="..." style="max-height : 65vh; object-fit : cover;">
					</div>
                    <div class="carousel-item">
                        <img src="sources/img/image3.jpg" class="d-block w-100" alt="..." style="max-height : 65vh; object-fit : cover;">
                    </div>
				</div>
				<div class="topdarker"></div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="height : 20px; top : 40%;">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="height : 20px; top : 40%;">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</section>
		
		<section id="upcome" class="p_3 bg-light">
			<div class="container-xl">
				<div class="row upcome_1 text-center">
					<div class="col-md-12">
						<h3 class="mb-0">NOW SHOWING</h3>
						<hr class="line me-auto ms-auto">
					</div>
				</div>
				<div class="row upcome_2 mt-4">
					<div class="tab-content">
						<div class="tab-pane active" id="home">
							<div class="upcome_2i row">
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/image7.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="view.php">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">PS - 2</a></h5>
													<h6 class="text-muted">Tamil</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/img14.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Guththila</a></h5>
													<h6 class="text-muted">Sinhala</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/img15.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Ksheera Sagaraya Kalabina</a></h5>
													<h6 class="text-muted">Sinhala</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/image4.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Avatar</a></h5>
													<h6 class="text-muted">UA | English</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="upcome_2i row mt-4">
									<div class="col-md-3">
										<div class="upcome_2i1 clearfix position-relative">
											<div class="upcome_2i1i clearfix">
												<img src="sources/img/image8.jpg" class="w-100" alt="abc">
											</div>
											<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
												<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
											</div>
										</div>
										<div class="upcome_2i_last bg-white p-3">
											<div class="upcome_2i_lasti row">
												<div class="col-md-9 col-9">
													<div class="upcome_2i_lastil">
														<h5><a href="#">Yugathra</a></h5>
														<h6 class="text-muted">Sinhala</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="upcome_2i1 clearfix position-relative">
											<div class="upcome_2i1i clearfix">
												<img src="sources/img/image9.jpg" class="w-100" alt="abc">
											</div>
											<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
												<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
											</div>
										</div>
										<div class="upcome_2i_last bg-white p-3">
											<div class="upcome_2i_lasti row">
												<div class="col-md-9 col-9">
													<div class="upcome_2i_lastil">
														<h5><a href="#">Dada Ima</a></h5>
														<h6 class="text-muted">Sinhala</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="upcome_2i1 clearfix position-relative">
											<div class="upcome_2i1i clearfix">
												<img src="sources/img/image10.jpg" class="w-100" alt="abc">
											</div>
											<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
												<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
											</div>
										</div>
										<div class="upcome_2i_last bg-white p-3">
											<div class="upcome_2i_lasti row">
												<div class="col-md-9 col-9">
													<div class="upcome_2i_lastil">
														<h5><a href="#">Farhana</a></h5>
														<h6 class="text-muted">Tamil</h6>
														<span class="col_red"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="upcome_2i1 clearfix position-relative">
											<div class="upcome_2i1i clearfix">
												<img src="sources/img/image11.jpg" class="w-100" alt="abc">
											</div>
											<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
												<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
											</div>
										</div>
										<div class="upcome_2i_last bg-white p-3">
											<div class="upcome_2i_lasti row">
												<div class="col-md-9 col-9">
													<div class="upcome_2i_lastil">
														<h5><a href="#">Pathaan</a></h5>
														<h6 class="text-muted">Hindi</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="popular" class="p_3 bg-light">
			<div class="container-xl">
				<div class="row upcome_1 text-center">
					<div class="col-md-12">
						<h3 class="mb-0">UPCOMING MOVIES</h3>
						<hr class="line me-auto ms-auto">
					</div>
				</div>
				<div class="row upcome_2 mt-4">
					<div class="tab-content">
						<div class="tab-pane active" id="homeo">
							<div class="upcome_2i row">
								<div class="col-md-6">
									<div class="popular_m clearfix position-relative">
										<div class="popular_m1 clearfix">
											<img src="sources/img/img18.jpg" class="w-100" height="435" alt="abc">
										</div>
										<div class="popular_m2 clearfix position-absolute w-100 top-0">
											<div class="popular_m2i clearfix p-4">
												<span class="d-block text-center play"><a class="col_red" href="#"><i class="fa fa-play-circle"></i></a></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/img16.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Insidious 5: The Red Door</a></h5>
													<h6 class="text-muted">2023 | English</h6>
												</div>
											</div>
											<div class="col-md-3 p-0 col-3">
												<div class="upcome_2i_lastir pt-3"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/img07.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">The Little Mermaid</a></h5>
													<h6 class="text-muted">May 26 | English</h6>
												</div>
											</div>
											<div class="col-md-3 p-0 col-3">
												<div class="upcome_2i_lastir pt-3"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="upcome_2i row mt-4">
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/img08.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">The Flash</a></h5>
													<h6 class="text-muted">16 Jun | English</h6>
												</div>
											</div>
											<div class="col-md-3 p-0 col-3">
												<div class="upcome_2i_lastir pt-3"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/img09.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">About My Father</a></h5>
													<h6 class="text-muted">26 May | English</h6>
												</div>
											</div>
											<div class="col-md-3 p-0 col-3">
												<div class="upcome_2i_lastir pt-3"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/img17.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Talk to Me</a></h5>
													<h6 class="text-muted">2023 | English</h6>
												</div>
											</div>
											<div class="col-md-3 p-0 col-3">
												<div class="upcome_2i_lastir pt-3"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="upcome_2i1 clearfix position-relative">
										<div class="upcome_2i1i clearfix">
											<img src="sources/img/img11.jpg" class="w-100" alt="abc">
										</div>
										<div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
											<h6 class="text-uppercase mb-0"><a class="button_2" href="#">View Details</a></h6>
										</div>
									</div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Leo</a></h5>
													<h6 class="text-muted">19 Oct | Tamil</h6>
												</div>
											</div>
											<div class="col-md-3 p-0 col-3">
												<div class="upcome_2i_lastir pt-3"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="subs" class="pt-5 pb-5 bg_red">
			<div class="container-xl">
				<div class="row subs_1">
					<div class="col-md-4">
						<div class="subs_1l">
							<h2 class="text-white mb-0 mt-2">Register Now As A Member</h2>
							<h6 class="text-white mb-0 mt-2">While you don’t have to be a registered user to buy a movie ticket, registered users can enjoy many loyalty customer benefits.</h6>
						</div>
					</div>
					<div class="col-md-8">
						<h6 class="text-uppercase mb-0"><a class="button_2" href="register_form.php" style="border:1px solid #fff; padding: 20px; font-size: 16px; margin: 15px 10px; border-radius: 12px;">Register Now</a></h6>
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
		
	</body>
	
</html>