<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Tickets</title>
    <link href="./sources/css/bootstrap.min.css" rel="stylesheet" >
	  <link href="./sources/css/font-awesome.min.css" rel="stylesheet" >
	  <link href="./sources/css/global.css" rel="stylesheet">
	  <link href="./sources/css/index.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	  <script src="./sources/js/bootstrap.bundle.min.js"></script>
    
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

      <?php
        include_once("./layouts/navbar.php");
      ?>

    </section>

    <img src="./sources/img/wall_img.jpg" width="85%" height="350px" style="object-fit : cover;">

    <section id="upcome" class="p_3 bg-light">
      <div class="container-xl">
        <div class="row upcome_1 text-center">
          <div class="col-md-12">
            <h3 class="mb-0">BOOK TICKETS</h3>
            <hr class="line me-auto ms-auto">
          </div>
        </div>
      </div>
      <div class="container">
          <form>
            <div class="form-group">
              <label for="username">First Name:</label>
              <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
              <label for="username">Last Name:</label>
              <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
              <label for="form_mobile">Mobile :</label>
              <input type="text" name="formmobile" id="mobile" required>   
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" id="uname" name="username" required>
              <span class="small_text">(Minimum 6 characters)</span>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" id="pass" name="password" required>
              <span class="small_text">(Should be a minimum of 4 characters)</span>
            </div>
            <div class="form-group">
              <label for="confirm-password">Confirm Password:</label>
              <input type="password" id="confirmpassword" name="confirm-password" required>
            </div>
            <h6 class="mb-0 mt-3"><button class="button_1" id="registerBtn">Register</button></h6>
          </form>
        </div>
        <br><br>
    </section>
    
    <!--section id="upcome" class="p_3 bg-light">
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
    </section-->
    
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