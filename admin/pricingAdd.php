<?php
    include_once('../database/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CINEMA : Add Pricing</title>
    <link href="../sources/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
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
                <h3 class="mb-0">ADD NEW PRICING</h3>
                <hr class="line me-auto ms-auto">
            </div>
            </div>
            <div class="container-md w-50 mt-5">
                <form>
                    <div class="form-group" id="alert-setter">

                    </div>
                    <div class="form-group">
                        <label for="username">Theater Name :</label>
                        <select type="text" id="theatername" required>
                            <option value="">Select Theater</option>
                            <?php
                                $query = mysqli_query($con, "SELECT * FROM filmHalls");
                                while($row = mysqli_fetch_assoc($query)){
                                    echo "<option value='".$row['id']."'>".$row['hallName']." - ".$row['location']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Movie :</label>
                        <select type="text" id="movie" required>
                            <option value="">Select Movie</option>
                            <?php 
                                $query = mysqli_query($con, "SELECT * FROM nowShowing");
                                while($row = mysqli_fetch_assoc($query)){
                                    echo "<option value='".$row['id']."'>".$row['filmName']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="form_mobile">Children Ticket Price :</label>
                        <input type="number" step="0.1" id="cticket" style="width : 100%; border : 1px solid #ccc; padding : 10px; border-radius : 4px;" required>   
                    </div>
                    <div class="form-group">
                        <label for="form_mobile">Elder Ticket Price :</label>
                        <input type="number" step="0.1" id="eticket" style="width : 100%; border : 1px solid #ccc; padding : 10px; border-radius : 4px;" required>   
                    </div>
                    <div class="form-group">
                        <label for="form_mobile">Box Ticket Price :</label>
                        <input type="number" step="0.1" id="boxticket" style="width : 100%; border : 1px solid #ccc; padding : 10px; border-radius : 4px;" required>   
                    </div>
                    <div class="form-group">
                      <label for="form_mobile">Show Date & Time :</label>
                      <div class="form-group text-center p-0" id="alert-setter2">
                      </div>      
                      <div class='form-group' id="timelist">
                      </div>   
                      <input type="date" id="showdate" style="width : 100%; border : 1px solid #ccc; padding : 10px; border-radius : 4px;" required>  
                      <input type="time" id="time" class="mt-2" style="width : 100%; border : 1px solid #ccc; padding : 10px; border-radius : 4px;" required>
                      <button class="btn btn-sm btn-outline-primary mt-2" id="addShowDate">Add Date & Time</button> 
                    </div>
                    <h6 class="mb-0 mt-3"><button class="btn btn-md btn-success" id="addNewPricing">Add</button><button onclick="goBack()" type="button" class="btn btn-md btn-info" style="margin-left : 20px;" id="registerBtn">Cancel</button></h6>
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

    function goBack(){
      window.location.replace("/moviebooker/admin/pricing.php");
    }
    </script>
    <script src="../sources/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
  </body>
  
</html>