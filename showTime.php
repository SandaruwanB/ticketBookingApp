<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rates and Show Time Page</title>
    <link href="sources/css/bootstrap.min.css" rel="stylesheet" >
	  <link href="sources/css/font-awesome.min.css" rel="stylesheet" >
	  <link href="sources/css/global.css" rel="stylesheet">
	  <link href="sources/css/index.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	  <script src="sources/js/bootstrap.bundle.min.js"></script>
    
    <style>
    
      .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
      }
  
      form {
        background-color: #f2f2f2;
        padding: 20px;
      }
  
      h2 {
        text-align: center;
        margin-bottom: 20px;
      }
  
      .form-group {
        margin-bottom: 20px;
      }
      
      label {
        display: block;
        margin-bottom: 5px;
      }
  
      input[type="text"], 
      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }   

      input[type=text], select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        width: 100%;
      }
  
      @media (max-width: 600px) {
      .container {
        padding: 10px;
      }
    
      form {
        padding: 10px;
      }
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
    
    <img src="sources/img/wall_img.jpg" width="85%" height="350px" style="object-fit : cover;">
    
    <section id="upcome" class="p_3 bg-light">
      <div class="container-xl">
        <div class="row upcome_1 text-center">
          <div class="col-md-12">
            <h3 class="mb-0">RATES AND SHOW TIME</h3>
            <hr class="line me-auto ms-auto">
          </div>
        </div>
        <div class="row upcome_2 mt-4">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="upcome_2i row text-center">
                <p style="font-size: 16px;">Please select the required theater and the showtime from the dropdown lists and it will display current rates applicable to the relevant theater and show time</p>
                <h6 style="font-weight: bold;">Note:</h6>
                <p style="font-size: 16px;">The Ticket rates and Showtimes displayed are standard rates and showtimes for the Theater ONLY. Tickets Rates and Show Tmes may differ from Movie to Movie</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <form>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" name="l_date" placeholder="" aria-label="First name">
            </div>
            <div class="form-group">
              <label for="title">Theater</label>
              <select id="form_theater" name="theater" class="required">
                <option value="0" selected = "selected">Select Theater</option>
                <option value="1">Sinexpo 3D - Kurunegala</option>
                <option value="2">Savoy Premier Rajagiriya - Rajagiriya</option>
                <option value="3">Savoy Metro Gampaha - Gampaha</option>
                <option value="4">Savoy Metro Maharagama - Maharagama</option>
              </select>
            </div>
            <div class="form-group">
              <label for="showtime">Show Time</label>
              <select id="form_theater" name="showtime" class="required">
                <option value="0" selected = "selected">Select Show Time</option>
                <option value="" >9:30 PM</option>
                <option value="" >8:00 PM</option>
                <option value="" >10:30 AM</option>
                <option value="" >1:30 PM</option>
                <option value="" >4:15 PM</option>
                <option value="" >7:00 PM</option>
                <option value="" >2:30 PM</option>
                <option value="" >6:30 PM</option>
                <option value="" >3:00 PM</option>
                <option value="" >4:30 PM</option>
                <option value="" >7:30 PM</option>
                <option value="" >11:30 AM</option>
                <option value="" >5:00 PM</option>
                <option value="" >1:15 PM</option>
                <option value="" >10:15 AM</option>
                <option value="" >4:00 PM</option>
                <option value="" >8:30 PM</option>
                <option value="" >8:00 AM</option>
                <option value="" >1:00 PM</option>
                <option value="" >10:00 PM</option>
                <option value="" >9:00 AM</option>
                <option value="" >10:15 PM</option>
                <option value="" >10:00 AM</option>
                <option value="" >4:45 PM</option>
                <option value="" >8:30 AM</option>
                <option value="" >7:45 PM</option>
                <option value="" >10:45 PM</option>
                <option value="" >7:15 PM</option>
                <option value="" >10:30 PM</option>
                <option value="" >11:30 PM</option>
                <option value="" >10:45 AM</option>
                <option value="" >9:45 PM</option>
                <option value="" >11:59 PM</option>
                <option value="" >7:00 AM</option>
                <option value="" >9:30 AM</option>
                <option value="" >12:30 PM</option>
                <option value="" >3:30 PM</option>
                <option value="" >12:15 PM</option>
                <option value="" >11:15 PM</option>
                <option value="" >6:15 PM</option>
                <option value="" >9:00 PM</option>
                <option value="" >1:00 AM</option>
                <option value="" >2:00 AM</option>
                <option value="" >12:00 PM</option>
                <option value="" >12:30 AM</option>
                <option value="" >5:00 AM</option>
                <option value="" >11:00 AM</option>
                <option value="" >7:30 AM</option>
                <option value="" >4:00 AM</option>
                <option value="" >5:30 AM</option>
                <option value="" >1:30 AM</option>
                <option value="" >2:00 PM</option>
                <option value="" >11:00 PM</option>
                <option value="" >3:45 PM</option>
                <option value="" >8:45 PM</option>
                <option value="" >11:15 AM</option>
                <option value="" >9:15 PM</option>
                <option value="" >1:45 PM</option>
                <option value="" >6:45 PM</option>
                <option value="" >6:00 PM</option>
                <option value="" >5:15 PM</option>
                <option value="" >11:55 PM</option>
                <option value="" >5:30 PM</option>
                <option value="" >8:15 PM</option>
                <option value="" >3:30 AM</option>
                <option value="" >12:45 PM</option>
                <option value="" >5:45 PM</option>
                <option value="" >3:15 PM</option>
                <option value="" >11:45 AM</option>
                <option value="" >4:30 AM</option>
                <option value="" >2:15 PM</option>
                <option value="" >6:00 AM</option>
                <option value="" >3:00 AM</option>
                <option value="" >6:30 AM</option>
                <option value="" >9:15 AM</option>
                <option value="" >12:15 AM</option>
                <option value="" >3:45 AM</option>
                <option value="" >4:15 AM</option>
                <option value="" >6:45 AM</option>
                <option value="" >2:45 AM</option>
                <option value="" >11:45 PM</option>
                <option value="" >3:15 AM</option>
                <option value="" >7:15 AM</option>
                <option value="" >7:45 AM</option>
                <option value="" >1:05 AM</option>
              </select>
            </div>
            <div class="form-group">
              <label for="username">Movie</label>
              <input type="text" id="username" name="lastname" required>
            </div>
            <h6 class="mb-0 mt-3"><a class="button_1" href="#">Get Rates</a></h6>
          </form>
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