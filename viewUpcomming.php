<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Movie Details</title>
	    <link href="sources/css/bootstrap.min.css" rel="stylesheet" >
	    <link href="sources/css/font-awesome.min.css" rel="stylesheet" >
	    <link href="sources/css/global.css" rel="stylesheet">
	    <link href="sources/css/index.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	    <script src="js/bootstrap.bundle.min.js"></script>
		
		<style>
		
		    .container {
			    display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
		    }

            .item-image {
			    flex: 1;
                text-align: center;
		    }

            .item-image img {
			    max-width: 100%;
                height: auto;
		    }

            .item-details {
			    flex: 1;
                text-align: left;
                padding: 20px;
		    }

            h2 {
			    font-weight:bold;
                margin-top: 0;
		    }

            h5 {
			    font-weight: normal;
            }

		    h4 {
			    font-weight: bold; 
            }

		    p {
			    font-size: 15px; 
		    }

            button {
			    background-color: #ff4444;
                color: white;
			    display: inline-block;
			    transition: 0.3s;
                padding: 15px 30px;
                border-radius: 10px;
			    border: 1px solid #ff4444;
                cursor: pointer;
		    }

            button:hover {
			    background: #000;
                border: 1px solid #000;
                color: #fff;!important;
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
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
			
			<?php
			include_once("./layouts/navbar.php");
			?>
			
		</section>
		
		<section id="upcome" class="p_3 bg-light">
			<div class="container">
				<div class="item-image">
					<img src="sources/img/image7.jpg" alt="Item Image">
				</div>
				<div class="item-details">
					<h2>Ponniyin Selvan - Part 2</h2>
					<br>
					<h5>Runtime: 2h 44m</h5>
					<br>
					<h4>SYNOPSIS</h4>
					<p>A plot to murder the king and the two princes of the Chola dynasty is underfoot. Can the Cholas survive the wrath of the Pandiya rebels, who are being led by the vengeful Nandhini?</p>
					<button>Buy Tickets</button>
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