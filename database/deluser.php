<?php
    include_once('./connection.php');

    if(isset($_GET['uid'])){
        $id = $_GET['uid'];
        $query = mysqli_query($con, "DELETE FROM users WHERE userName='".$id."'");
        echo "<script>window.location.replace('/moviebooker/admin/admins.php')</script>";
    }

    else if(isset($_GET['cid'])){
        $id = $_GET['cid'];
        $query = mysqli_query($con, "DELETE FROM users WHERE userName='".$id."'");
        echo "<script>window.location.replace('/moviebooker/admin/customers.php')</script>";
    }

    else if(isset($_GET['tid'])){
        $id = $_GET['tid'];
        $query = mysqli_query($con, "DELETE FROM filmHalls WHERE id=".$id."");
        echo "<script>window.location.replace('/moviebooker/admin/theators.php')</script>";
    }
