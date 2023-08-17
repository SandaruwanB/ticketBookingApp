<?php
	include_once("./database/connection.php");
	$id = $_GET['fid'];
?>

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
		
		<section id="upcome" class="p_3 bg-light" style="height : 84vh">
			<div class="row mt-5 mb-4" style="height : 100%">
				<?php
					$query = mysqli_query($con, "SELECT * FROM upcomming WHERE id=".$id."");
					$row = mysqli_fetch_assoc($query);
				?>
				<div class="col-lg-2">
				</div>
				<div class="col-sm-12 col-md-4 col-lg-3">
					<img src=<?= $row['image'] ?> style="width : 100%" alt="Item Image">
				</div>
				<div class="col-sm-12 col-md-6 col-lg-5">
					<h2><?= $row['filmName'] ?></h2>
					<br>
					<?php
						$time = explode('.', $row['duration']);
					?>
					<h5>Runtime: <?= $time[0]."h ".$time[1]."m" ?></h5>
					<h5>Releasing Date: <?= $row['releasingDate'] ?></h5>
					<h5>Language: <?= $row['language'] ?></h5>
					<br>
					<h4>SYNOPSIS</h4>
					<p><?= $row['description'] ?></p>
				</div>
				<div class="col-lg-2">
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