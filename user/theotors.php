<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CINEMA : Theaters</title>
        <link href="../sources/css/bootstrap.min.css" rel="stylesheet" >
	    <link href="../sources/css/font-awesome.min.css" rel="stylesheet" >
	    <link href="../sources/css/global.css" rel="stylesheet">
	    <link href="../sources/css/index.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	    <script src="../sources/js/bootstrap.bundle.min.js"></script>
		
		<style>
		
		    .rectangle {
			    width: 320px;
                height: 250px;
                background: linear-gradient(to bottom, #ff0000 0%, #ff6666 100%);
			    color: white;
			    position: relative;
            }

            .rect {
                text-align: center;
			    position: absolute;
			    left: 50%;
			    transform: translate(-50%, 150%);
			    font-size: 23px;
			    text-transform: uppercase;
			    text-shadow: 2px 3px 4px #000000;
			    font-weight: bold;
            }

		    .button_1 {
			    background-color: white;
                color: black;
                display: inline-block;
                transition: 0.3s;
                padding: 15px 30px!important;
                border-radius: 10px;
                border: 2px solid #ff4444;
		    }

            .button_1:hover {
			    background: #ff4444;
                border:1px solid #fff;
                color:#fff;!important;
		    }
		
	    </style>
		
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
					</div>
				</div>
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
						<h3 class="mb-0">THEATERS</h3>
						<hr class="line me-auto ms-auto">
					</div>
				</div>
				<div class="row upcome_2 mt-4">
					<div class="tab-content">
						<div class="tab-pane active" id="home">
							<div class="upcome_2i row">
								<div class="col-md-3">
									<div class="rectangle"><p class="rect">Sinexpo 3D Kurunegala</p></div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Sinexpo 3D - Kurunegala</a></h5>
													<h6 class="mb-0"><a class="button_1" href="info.php">More Info</a></h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rectangle"><p class="rect">Savoy Metro Maharagama</p></div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Savoy Metro Maharagama - Maharagama</a></h5>
													<h6 class="mb-0"><a class="button_1" href="#">More Info</a></h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rectangle"><p class="rect">Savoy Metro Gampaha</p></div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Savoy Metro Gampaha - Gampaha</a></h5>
													<h6 class="mb-0"><a class="button_1" href="#">More Info</a></h6>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="rectangle"><p class="rect">Savoy Rajagiriya</p></div>
									<div class="upcome_2i_last bg-white p-3">
										<div class="upcome_2i_lasti row">
											<div class="col-md-9 col-9">
												<div class="upcome_2i_lastil">
													<h5><a href="#">Savoy Premier Rajagiriya - Rajagiriya</a></h5>
													<h6 class="mb-0"><a class="button_1" href="#">More Info</a></h6>
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