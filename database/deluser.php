<?php
    include_once('./connection.php');

    if(isset($_GET['uid'])){
        $id = $_GET['uid'];
        $query = mysqli_query($con, "DELETE FROM users WHERE userName='".$id."'");
        echo "<script>window.location.replace('/moviebooker/admin/admins.php')</script>";
    }

