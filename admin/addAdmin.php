<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CINEMA : Add Admin</title>
    <link href="../sources/css/bootstrap.min.css" rel="stylesheet" >
    <link href="../sources/css/font-awesome.min.css" rel="stylesheet" >
    <link href="../sources/css/global.css" rel="stylesheet">
    <link href="../sources/css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="../sources/js/bootstrap.bundle.min.js"></script>
    
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
    <section id="upcome" class="p_3 bg-light">
      <div class="container-xl">
        <div class="row upcome_1 text-center">
          <div class="col-md-12">
            <h3 class="mb-0">ADD NEW ADMIN ACCOUNT</h3>
            <hr class="line me-auto ms-auto">
          </div>
        </div>
        <div class="container-md w-50 mt-5">
          <form>
            <div class="form-group">
              <label for="title">Title:</label>
              <select id="form_title" name="title" class="required">
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Dr.">Dr.</option>
                <option value="Prof.">Prof.</option>
                <option value="Rev.">Rev.</option>
              </select>
            </div>
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
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" id="pass" name="password" required>
            </div>
            <h6 class="mb-0 mt-3"><button class="btn btn-md btn-success" id="registerBtn">Add</button><a class="btn btn-md btn-info" href="/moviebooker/admin/admins.php" style="margin-left : 20px;" id="registerBtn">Cancel</a></h6>
          </form>
        </div>
      </div>
    </section>    
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