<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buy Tickets</title>
    <link href="sources/css/bootstrap.min.css" rel="stylesheet" >
	  <link href="sources/css/font-awesome.min.css" rel="stylesheet" >
	  <link href="sources/css/global.css" rel="stylesheet">
	  <link href="sources/css/index.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	  <script src="sources/js/bootstrap.bundle.min.js"></script>
    
    <style>
    
        body{
          font-family: 'Lato', sans-serif;
        }

        ul{
          list-style:none;
          padding:0;
        }

        h1,h2,h3,h4,h5{
          font-weight:bold; 
        }

        h6{
          font-weight:normal; 
        }

        p{
          font-size:50px; 
        }

        .custom-bg{
          background: #ff4444;
          color:#fff;
          display: inline-block;
          transition: 0.3s;
          padding:10px 22px!important;
          border-radius:10px;
          border:1px solid #ff4444;
        }

        .custom-bg:hover{
          background:#000;
          border:1px solid #000;
          color:#fff;!important;
        } 

        .button {
          background: #000;
          color:#fff;
          display: inline-block;
          transition: 0.3s;
          padding:13px 40px!important;
          border-radius:10px;
          border:1px solid #ff4444;
          margin-left: 80px;
        }

        .button3 {
          background-color: white; 
          color: black; 
          border: 2px solid #f44336;
        }

        .button3:hover {
          background-color: #f44336;
          color: white;
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
          </div><!-- /.modal-content -->
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
            <h3 class="mb-0">BUY TICKETS</h3>
            <hr class="line me-auto ms-auto">
          </div>
        </div>
      </div>
    </section>
    
    <section id="upcome" class="p_3 bg-light">
      <div class="container">
        <h3 style="font-weight:normal;">Guththila</h3>
        <hr style="height:1px; width:70%; border-width:0; color:gray; background-color:gray">
        <i class="fa fa-map-marker"><span style="font-weight: bold;"> SAVOY METRO MAHARAGAMA - MAHARAGAMA</span></i>
        <br><br>
        <a class="button button3" href="ticket_book.php">7.00 PM</a>
        <a class="button button3" href="ticket_book.php">2.30 PM</a>
        <a class="button button3" href="ticket_book.php">10.15 AM</a>
        <br><br>
        <i class="fa fa-map-marker"><span style="font-weight: bold;"> SAVOY METRO GAMPAHA - GAMPAHA</span></i>
        <br><br>
        <a class="button button3" href="ticket_book.php">3.00 PM</a>
        <a class="button button3" href="ticket_book.php">7.30 PM</a>
        <a class="button button3" href="ticket_book.php">10.15 AM</a>
        <br><br>
        <i class="fa fa-map-marker"><span style="font-weight: bold;"> SAVOY PREMIER RAJAGIRIYA - RAJAGIRIYA</span></i>
        <br><br>
        <a class="button button3" href="ticket_book.php">10.30 AM</a>
        <a class="button button3" href="ticket_book.php">7.00 PM</a>
        <br><br>
        <i class="fa fa-map-marker"><span style="font-weight: bold;"> SINEXPO 3D - KURUNEGALA</span></i>
        <br><br>
        <a class="button button3" href="ticket_book.php">3.00 PM</a>
        <a class="button button3" href="ticket_book.php">10.15 AM</a>
        <a class="button button3" href="ticket_book.php">7.15 PM</a>
        <a class="button button3" href="ticket_book.php">12.30 PM</a>
        <br><br><br>
        <h3 style="font-weight:normal;">Ksheera Sagaraya Kalabina</h3>
        <hr style="height:1px; width:70%; border-width:0; color:gray; background-color:gray">
        <i class="fa fa-map-marker"><span style="font-weight: bold;"> SAVOY METRO MAHARAGAMA - MAHARAGAMA</span></i>
        <br><br>
        <a class="button button3" href="ticket_book.php">4.45 PM</a>
        <br><br>
        <i class="fa fa-map-marker"><span style="font-weight: bold;"> SINEXPO 3D - KURUNEGALA</span></i>
        <br><br>
        <a class="button button3" href="ticket_book.php">5.00 PM</a>
        <br><br><br>
        <h3 style="font-weight:normal;">Yugathra</h3>
        <hr style="height:1px; width:70%; border-width:0; color:gray; background-color:gray">
        <i class="fa fa-map-marker"><span style="font-weight: bold;"> SAVOY METRO MAHARAGAMA - MAHARAGAMA</span></i>
        <br><br>
        <a class="button button3" href="ticket_book.php">12.30 PM</a>
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