<?php
  $con = new mysqli("localhost","root","","movie");
    // if(isset($con)){
    //     echo '<p style="color:white;">' . 'database ok '. ' </p>' ;
    // }
    
    if(isset($_POST['submit'])){
      $movie_name =$_POST['m_name'];
      $release_date =$_POST['r_date'];
      $director = $_POST['d_name'];
      $actor = $_POST['a_name'];
      $actress = $_POST['ar_name'];
      
      $insert_movie = $con->prepare("INSERT INTO movie(movie_name, release_date, director, actor, actress) VALUES(?,?,?,?,?)");
      $insert_movie->bind_param("sssss",$movie_name,$release_date, $director, $actor, $actress);
      $insert_movie->execute();
      
      echo '<p style="color:white;">' . 'Movie Saved '. ' </p>' ;
    }
    
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #fff;
      }
      
      * {
        box-sizing: border-box;
      }
      
      /* Add padding to containers */
      .container {
        padding: 16px;
        background-color: white;
      }
      
      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }
      
      input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      
      /* Overwrite default styles of hr */
      hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
      }
      
      /* Set a style for the submit button */
      .registerbtn {
        background-color: #BA55D3;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }
      
      .registerbtn:hover {
        opacity: 1;
      }
      
      /* Add a blue text color to links */
      a {
        color: dodgerblue;
      }
      
      /* Set a grey background color and center the text of the "sign in" section */
      .signin {
        background-color: #f1f1f1;
        text-align: center;
        }
        
    </style>
    
  </head>
  
  <body>

    <form action="" method="post">
      <div class="container">
        <h1>Add Movie</h1>
        <p>Please fill Moveie Details.</p>
        <hr>

        <label for="text"><b>Movie Name</b></label>
        <input type="text" placeholder="Enter Movie Name" name="m_name" id="email" required>

        <label for="text"><b>Release Date</b></label>
        <input type="text" placeholder="Enter Release Date" name="r_date" id="email" required>

        <label for="text"><b>Director</b></label>
        <input type="text" placeholder="Enter Director" name="d_name" id="email" required>

        <label for="text"><b>Actor</b></label>
        <input type="text" placeholder="Enter Actor" name="a_name" id="email" required>

        <label for="text"><b>Actress</b></label>
        <input type="text" placeholder="Enter Actress" name="ar_name" id="email" required>
        
        <button type="submit" name="submit" class="registerbtn">Save</button>
      </div>
    </form>
  
  </body>
  
</html>
