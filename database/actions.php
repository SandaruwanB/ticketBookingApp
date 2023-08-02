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

    else if(isset($_POST['editUserData'])){
        $user = $_POST['user'];
        $title = $_POST['title'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = mysqli_query($con, "SELECT * FROM users WHERE email='".$email."' AND userName<>'".$user."'");
        if(mysqli_num_rows($query) > 0){
            echo "exists";
        }
        else{
            if($password == ""){
                mysqli_query($con, "UPDATE users SET title='".$title."', email='".$email."', firstName='".$firstname."', lastName='".$lastname."', mobile='".$mobile."' WHERE userName='".$user."'");
                echo "success";
            }
            else{
                $actPass = password_hash($password, PASSWORD_DEFAULT);
                mysqli_query($con, "UPDATE users SET title='".$title."', email='".$email."' firstName='".$firstname."', lastName='".$lastname."', mobile='".$mobile."', password='".$actPass."' WHERE userName='".$user."'");
                echo "success";
            }
        }
    }


    else if(isset($_POST['adminAdd'])){
        $title = $_POST['title'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $actPass = password_hash($password, PASSWORD_DEFAULT);

        $query = mysqli_query($con, "SELECT * FROM users WHERE email='".$email."' OR userName='".$username."'");
        if(mysqli_num_rows($query) > 0){
            echo "user";
        }
        else{
            mysqli_query($con, "INSERT INTO users(email,title,firstName,lastName,mobile,userName,password,role) VALUES('".$email."', '".$title."', '".$fname."', '".$lname."', '".$mobile."', '".$username."', '".$actPass."', 1)");
            echo "success";
        }
    }

    else if(isset($_POST['customerAdd'])){
        $title = $_POST['title'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $actPass = password_hash($password, PASSWORD_DEFAULT);

        $query = mysqli_query($con, "SELECT * FROM users WHERE email='".$email."' OR userName='".$username."'");
        if(mysqli_num_rows($query) > 0){
            echo "user";
        }
        else{
            mysqli_query($con, "INSERT INTO users(email,title,firstName,lastName,mobile,userName,password,role) VALUES('".$email."', '".$title."', '".$fname."', '".$lname."', '".$mobile."', '".$username."', '".$actPass."', 2)");
            echo "success";
        }
    }

    else if(isset($_POST['addNewTheater'])){
        $theatername = $_POST['name'];
        $location = $_POST['location'];
        $address = $_POST['address'];
        $capacity = $_POST['capacity'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        mysqli_query($con, "INSERT INTO filmHalls(hallName,location,address,capacity,contact,email) VALUES('".$theatername."', '".$location."', '".$address."', ".$capacity.", '".$contact."', '".$email."')");
        echo "success";
    }

    else if(isset($_POST['editTheater'])){
        $theaterId = $_POST['theaterId'];
        $theatername = $_POST['name'];
        $location = $_POST['location'];
        $address = $_POST['address'];
        $capacity = $_POST['capacity'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        mysqli_query($con, "UPDATE filmHalls SET hallName='".$theatername."', location='".$location."', address='".$address."', capacity=".$capacity.", contact='".$contact."', email='".$email."' WHERE id=".$theaterId."");
        echo "success";
    }



    else if(isset($_POST['logout'])){
        session_destroy();
        echo "success";
    }