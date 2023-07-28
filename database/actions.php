<?php

    include_once ('./connection.php');

    if(isset($_POST['addContactMessage'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $query = mysqli_query($con, "INSERT INTO contactMessages(name, email, contact, subject, message) VALUES('".$name."', '".$email."', '".$contact."', '".$subject."', '".$message."')");
        if($query){
            echo "success";
        }
    }

    else if(isset($_POST['register'])){
        $title = $_POST['title'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashPass = password_hash($password, PASSWORD_DEFAULT);

        $query = mysqli_query($con, "SELECT * FROM users WHERE email='".$email."'");
        if(mysqli_num_rows($query) > 0){
            echo "email";
        }
        else{
            $query = mysqli_query($con, "SELECT * FROM users WHERE userName='".$username."'");
            if(mysqli_num_rows($query) > 0){
                echo "user";
            }
            else{
                $query = mysqli_query($con, "INSERT INTO users(email, title, firstName, lastName, mobile, userName, password, role) VALUES('".$email."', '".$title."', '".$fname."', '".$lname."', '".$contact."', '".$username."', '".$hashPass."', 2)");
                if($query){
                    session_start();
                    $_SESSION['user'] = $username;
                    echo "success";
                }
            }
        }
    }

    else if(isset($_POST['signin'])){
        $user = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($con, "SELECT * FROM users,userRoles WHERE email='".$user."' OR userName='".$user."' AND users.role = userRoles.id");
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            $actPass = $row['password'];
            if(password_verify($password, $actPass)){
                session_start();
                $_SESSION['user'] = $row['userName'];
                if($row['type'] == "admin"){
                    echo "admin";
                }
                else{
                    echo "user";
                }
            }
            else{
                echo "pass";
            }
        }
        else{
            echo "notfound";
        }
    }