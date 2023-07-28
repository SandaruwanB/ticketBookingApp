<?php 

    $con = new mysqli("localhost","root","","cinema");

    // if(isset($con)){
    //     echo '<p style="color:white;">' . 'database ok '. ' </p>' ;
    // }

    if(isset($_POST['submit'])){
        echo '<script>alert("pressed");</script>';
    }


?>