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

    else if(isset($_GET['ufid'])){
        $id = $_GET['ufid'];
        $query = mysqli_query($con, "DELETE FROM upcomming WHERE id=".$id."");
        echo "<script>window.location.replace('/moviebooker/admin/upcommingMovies.php')</script>";
    }

    else if(isset($_GET['cfid'])){
        $id = $_GET['cfid'];
        $query = mysqli_query($con, "DELETE FROM nowShowing WHERE id=".$id."");
        echo "<script>window.location.replace('/moviebooker/admin/currentMovies.php')</script>";
    }
    
    else if(isset($_GET['tbid'])){
        $id = $_GET['tbid'];
        $query = mysqli_query($con, "DELETE FROM tiketsAndPricing WHERE tid=".$id."");
        echo "<script>window.location.replace('/moviebooker/admin/pricing.php')</script>";
    }