<?php
    include_once('../database/connection.php');
    $id = $_GET['tid'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CINEMA : Edit Theater</title>
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
            <h3 class="mb-0">EDIT THEATER DETAILS</h3>
            <hr class="line me-auto ms-auto">
          </div>
        </div>
        <div class="container-md w-50 mt-5">
            <?php
                $query = mysqli_query($con, "SELECT * FROM filmHalls WHERE id=".$id."");
                $row = mysqli_fetch_assoc($query);
            ?>
          <form>
            <div class="form-group" id="alert-setter">

            </div>
            <div class="form-group">
              <label for="username">Theater Name :</label>
              <input type="text" value=<?= $row['hallName'] ?> id="theatername" name="theatername" required>
            </div>
            <div class="form-group">
              <label for="username">Location :</label>
              <input type="text" value=<?= $row['location'] ?> id="location" name="location" required>
            </div>
            <div class="form-group">
              <label for="form_mobile">Address :</label>
              <input type="text" value=<?= $row['address'] ?> name="address" id="address" required>   
            </div>
            <div class="form-group">
              <label for="form_mobile">Contact Number :</label>
              <input type="text" value=<?= $row['contact'] ?> name="contact" id="contact" required>   
            </div>
            <div class="form-group">
              <label for="form_mobile">Email :</label>
              <input type="text" value=<?= $row['email'] ?> name="email" id="email" required>   
            </div>
            <div class="form-group">
              <label for="email">Capacity :</label>
              <div class="form-group text-center p-0" id="alert-setter3">
              </div>      
              <div class='form-group' id="capacitylist">
              </div>
              <input type="number" style="width : 100%; border : 1px solid #ccc; padding : 10px; border-radius : 4px;" id="capacity" name="capacity" required>
              <button type="button" onclick="editRowArray()" class="btn btn-outline-primary btn-sm mt-2">Add Row</button>
            </div>
            <div class="form-group">
              <label for="email">Boxes :</label>
              <input type="number" style="width : 100%; border : 1px solid #ccc; padding : 10px; border-radius : 4px;" id="boxes" name="capacity" value=<?= $row['boxes'] ?> required>
            </div>
            <div class="form-group">
              <label for="email">Description :</label>
              <textarea rows="4" style="width : 100%; border : 1px solid #ccc; padding : 10px; border-radius : 4px;" id="description"><?= $row['description'] ?></textarea>
            </div>
            <h6 class="mb-0 mt-3"><button type="button" onclick="saveEditedData(this.value)" class="btn btn-md btn-success" value=<?= $id ?> id="edittheater">Save</button><button onclick="goBack()" type="button" class="btn btn-md btn-info" style="margin-left : 20px;" id="registerBtn">Cancel</button></h6>
          </form>
        </div>
      </div>
    </section>    
    <script src="../sources/js/jquery.min.js"></script>
    <script>
      const array = [];  
      window.onscroll = function() {myFunction()};
      window.onload = onLoad();
      
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
        window.location.replace("/moviebooker/admin/theators.php");
      }

      function editRowArray(){
        const capacity = $('#capacity').val();
        if(capacity == ""){
          $('#alert-setter3').text("Fill Capacity Before Add Row.");
          $('#alert-setter3').css("color", "red");
        }
        else{
          $('#alert-setter3').text("");
          array.push(capacity);
          let sring = "<ul class='list-group list-group-flush'>";
          for(let i=0; i<array.length; i++){
              sring += '<li style="display : flex; justify-content : space-between;" value="'+ array[i] +'" class="list-group-item">Row : '+ (i+1) +' Capacity : '+ array[i] +' <button type="button" class="btn btn-sm btn-danger" value="'+i+'" onclick="removeEditRow('+i+')">Remove</button></li>';
          }
          sring += "</ul>";
          $('#capacitylist').html(sring);
        }
      }

      function onLoad(){
        $.ajax({
          type: "post",
          url: "/moviebooker/database/actions.php",
          data: {
            getCapacityEdit : true,
            id : <?= $id ?>
          },
          dataType: "text",
          success: function (response) {
            const res = JSON.parse(response);
            let sring = "<ul class='list-group list-group-flush'>";
            for(let i=0; i<res.length; i++){
              array.push(res[i]);
              sring += '<li style="display : flex; justify-content : space-between;" value="'+ array[i] +'" class="list-group-item">Row : '+ (i+1) +' Capacity : '+ array[i] +' <button type="button" class="btn btn-sm btn-danger" value="'+i+'" onclick="removeEditRow('+i+')">Remove</button></li>';
            }
            sring += "</ul>";
            $('#capacitylist').html(sring);
          }
        });
      }

      function removeEditRow(id){
        $('#alert-setter3').text("");
        array.splice(id,1);
        if(array.length > 0){
        let sring = "<ul class='list-group list-group-flush'>";
        for(let i=0; i<array.length; i++){
            sring += '<li style="display : flex; justify-content : space-between;" value="'+ array[i] +'" class="list-group-item">Row : '+ (i+1) +' Capacity : '+ array[i] +' <button type="button" class="btn btn-sm btn-danger" value="'+i+'" onclick="removeEditRow('+i+')">Remove</button></li>';
        }
        sring += "</ul>";
        $('#capacitylist').html(sring);
        }
        else{
            $('#capacitylist').html(""); 
        }
      }

      function saveEditedData(id){
        const name = $('#theatername').val();
        const location = $('#location').val();
        const address = $('#address').val();
        const contact = $('#contact').val();
        const email = $('#email').val();
        const boxes = $('#boxes').val();
        const description = $('#description').val();

        if(name == "" || location == "" || address == "" || contact == "" || email == "" || array.length == 0){
          $('#alert-setter').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Error! </strong> All Fields are Required.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>');
        }
        else{
          $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
              editTheater : true,
              name : name,
              id : id,
              location : location,
              address : address,
              contact : contact,
              email : email,
              boxes : boxes,
              description : description,
              capacity : array
            },
            dataType: "text",
            success: function (response) {
              $('#alert-setter').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong>  Theater data edited successfully.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>');
            }
          });
        }
      }


    </script>
    <script src="../sources/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
  </body>
  
</html>