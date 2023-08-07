<?php
    include_once("./database/connection.php");
    $id = $_GET['tid'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Theaters Information</title>
        <link href="sources/css/bootstrap.min.css" rel="stylesheet" >
	    <link href="sources/css/font-awesome.min.css" rel="stylesheet" >
	    <link href="sources/css/global.css" rel="stylesheet">
	    <link href="sources/css/index.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	    <script src="sources/js/bootstrap.bundle.min.js"></script>
        
        <style>
        
            .rectangle{
                width: 800px;
                height: 450px;
                background: linear-gradient(to bottom, #ff0000 0%, #ff6666 100%);
				color: white;
				position: relative;
            }

            .rect{
                text-align: center;
				position: absolute;
				left: 50%;
				transform: translate(-50%, 150%);
				font-size: 35px;
				text-transform: uppercase;
				text-shadow: 2px 3px 4px #000000;
				font-weight: bold;
            }

            h1,h2,h3,h4,h5 {
                font-weight:bold; 
            }
            
            h6 {
                font-weight:normal; 
            }

            p {
                font-size:15px; 
            }

			.button_1 {
				background-color: #ff4444;
                color: white;
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

            <?php
            include_once("./layouts/navbar.php");
            ?>
            
        </section>

        <img src="sources/img/wall_img.jpg" width="1520px" height="480px">
        
        <section id="upcome" class="p_3 bg-light">
            <?php
                $query = mysqli_query($con, "SELECT * FROM filmHalls WHERE id=".$id."");
                $row = mysqli_fetch_assoc($query);
            ?>
            <div class="container-xl">
                <div class="row upcome_1 text-center">
                    <div class="col-md-12">
                        <h1><?= $row['hallName'] ?> <?= $row['location'] ?></h1>
                        <hr class="line me-auto ms-auto">
                    </div>
                </div>
            </div>
            <div class="theater_info_mainwrp">
                <div class="container">
                    <div class="theater_inner_wrp">
                        <div class="row upcome_2 mt-4">
                            <div class="col-sm-8">
                                <div class="theater_slider">
                                    <div class="rectangle"><p class="rect"><?= $row['hallName'] ?> <?= $row['location'] ?></p></div>
                                    <p><p><?= $row['description'] ?></p></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="theaterinfo_right">
                                    <div class="theater_contact_info">
                                        <h5>Contact Details</h5>
                                        <table class="100%">
                                            <tr>
                                                <td width="30%">Address : </td>
                                                <td width="70%"><?= $row['address'] ?></td>
                                            </tr>
                                            <tr height="10"></tr>
                                            <tr>
                                                <td>Telephone : </td>
                                                <td><a href=<?= "tel:".$row['contact'] ?>><?= $row['contact'] ?></a> </td>
                                            </tr>
                                            <tr height="10"></tr>
                                            <tr>
                                                <td>Email :</td>
                                                <td><a href=<?= "mailto:".$row['email'] ?>><?= $row['email'] ?></a></td>
                                            </tr>
                                            <tr height="20"></tr>
                                        </table>
                                    </div>       
                                    <div class="facilities_wrp">
                                        <h5>Facilities</h5>
                                        <div class="facilities_item">
                                            <div class="row upcome_2 mt-4">
                                                <div class="col-sm-4">
                                                    <img src="sources/img/parking_icon.jpg" class="img-responsive" alt="EAP Theater Facilities">
                                                </div>
                                                <div class="col-sm-8">
                                                    <h6>Car Parking</h6>
                                                    <p>Car parking available for customers.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="facilities_item">
                                            <div class="row upcome_2 mt-4">
                                                <div class="col-sm-4">
                                                    <img src="sources/img/snack_icon.jpg" class="img-responsive" alt="EAP Theater Facilities">
                                                </div>
                                                <div class="col-sm-8">
                                                    <h6>Snack Shop</h6>
                                                    <p>Enjoty snacks and special offers at our snack shop.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="facilities_item">
                                            <div class="row upcome_2 mt-4">
                                                <div class="col-sm-4">
                                                    <img src="sources/img/restaurant_icon.jpg" class="img-responsive" alt="EAP Theater Facilities">
                                                </div>
                                                <div class="col-sm-8">
                                                    <h6>Restaurant</h6>
                                                    <p>Enjoy our delicious meals and great hospitality at our restaurants.</p>
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

            <section id="upcome" class="p_3 bg-light">
                <div class="container-xl">
                    <div class="inner_bg">
                        <div class="container">
                            <div class="theater_nowshowing_movie">
                                <h3>Now Showing Movies at Sinexpo 3D</h3>
                                <div class="row">
                                    <div class="col-sm-3 0">
                                        <div class="nowshowing_movie">
                                            <img src="https://www.eapmovies.com/components/com_eapmovies/includes/images/movies/movies_1329/movies_1329_6459e42a48726_gu_poster.jpg" class="img-responsive" />
                                            <div class="nsm_bottom_wrp">
                                                <h6>Guththila</h6>
                                                <div class="ns-movie-time-wrap">
                                                    10:15 am
                                                </div>
                                                <a href="#" class="button_1">Buy Tickets</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 1">
                                        <div class="nowshowing_movie">
                                            <img src="https://www.eapmovies.com/components/com_eapmovies/includes/images/movies/movies_1329/movies_1329_6459e42a48726_gu_poster.jpg" class="img-responsive" />
                                            <div class="nsm_bottom_wrp">
                                                <h6>Guththila</h6>
                                                <div class="ns-movie-time-wrap">
                                                    12:30 pm                                   
                                                </div>    
                                                <a href="#" class="button_1">Buy Tickets</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-sm-3 2">
                                        <div class="nowshowing_movie">
                                            <img src="https://www.eapmovies.com/components/com_eapmovies/includes/images/movies/movies_1329/movies_1329_6459e42a48726_gu_poster.jpg" class="img-responsive" />
                                            <div class="nsm_bottom_wrp">
                                                <h6>Guththila</h6>
                                                <div class="ns-movie-time-wrap">
                                                    2:45 pm                                    
                                                </div>    
                                                <a href="#" class="button_1">Buy Tickets</a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-sm-3 3">
                                        <div class="nowshowing_movie">
                                            <img src="https://www.eapmovies.com/components/com_eapmovies/includes/images/movies/movies_1329/movies_1329_6459e42a48726_gu_poster.jpg" class="img-responsive" />
                                            <div class="nsm_bottom_wrp">
                                                <h6>Guththila</h6>
                                                <div class="ns-movie-time-wrap">
                                                    7:15 pm                                    
                                                </div>    
                                                <a href="#" class="button_1">Buy Tickets</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
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