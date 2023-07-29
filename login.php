<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
    
    <img src="sources/img/wall_img.jpg" width="85%" height="350px" style="object-fit : cover;">
    
    <section id="upcome" class="p_3 bg-light">
      <div class="container-xl">
        <div class="row upcome_1 text-center">
          <div class="col-md-12">
            <h3 class="mb-0">LOGIN TO CINEMA MOVIES</h3>
            <hr class="line me-auto ms-auto">
          </div>
        </div>
        <div class="row upcome_2 mt-4">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="upcome_2i row">
                <p style="font-size: 16px;" class="text-center">Login to get your awesome booking today and get more benifits.</p>
              </div> 
            </div>
          </div>
        </div>
        <div class="container">
          <form>
            <div class="form-group">
              <label for="username">Email or Username:</label>
              <input type="text" id="uname" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" id="pass" name="password" required>
            </div>
            <div class="form-group">
              <p style="font-size : 15px;">I don't have an account <a style="color : blue;" href="/moviebooker/register_form.php">Register Now</a></p>
            </div>
            <h6 class="mb-0 mt-3"><button class="button_1" id="loginBtn">Login</button></h6>
          </form>
        </div>
        <br><br>
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
    
    <script src="./sources/js/jquery.min.js"></script>
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
    <script src="./sources/js/main.js"></script>
  </body>
  
</html>