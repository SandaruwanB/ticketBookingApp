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
        $capacity = json_encode($_POST['capacity']);
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        $boxes = $_POST['boxes'];

        mysqli_query($con, "INSERT INTO filmHalls(hallName,location,address,capacity,contact,email,description,boxes) VALUES('".$theatername."', '".$location."', '".$address."', '".$capacity."', '".$contact."', '".$email."', '".$description."', ".$boxes.")");
        echo "success";
    }

    else if(isset($_POST['editTheater'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $location = $_POST['location'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $boxes = $_POST['boxes'];
        $description = $_POST['description'];
        $capacity = json_encode($_POST['capacity']);

        mysqli_query($con, "UPDATE filmHalls SET hallName='".$name."', location='".$location."', address='".$address."', capacity='".$capacity."', contact='".$contact."', email='".$email."', description='".$description."', boxes=".$boxes." WHERE id=".$id."");
        echo "success";
    }


    else if(isset($_POST['addUpcomingMovie'])){
        $image = $_POST['image'];
        $filmname = $_POST['filmname'];
        $duration = $_POST['duration'];
        $rdate = $_POST['rdate'];
        $lang = $_POST['lang'];
        $decription = $_POST['description'];

        mysqli_query($con, "INSERT INTO upcomming(filmName,description,duration,image,releasingDate,language) VALUES('".$filmname."', '".$decription."', '".$duration."', '".$image."', '".$rdate."', '".$lang."')");
        echo "success";
    }

    else if(isset($_POST['editUpcommingMovie'])){
        $itemid = $_POST['itemid'];
        $filmname = $_POST['filmname'];
        $duration = $_POST['duration'];
        $rdate = $_POST['rdate'];
        $lang = $_POST['lang'];
        $description = $_POST['description'];

        mysqli_query($con, "UPDATE upcomming SET filmName='".$filmname."', description='".$description."', duration='".$duration."', releasingDate='".$rdate."', language='".$lang."' WHERE id=".$itemid."");
        echo "success";
    }

    else if(isset($_POST['addCurrentMovie'])){
        $filmname = $_POST['filmname'];
        $duration = $_POST['duration'];
        $lang = $_POST['lang'];
        $description = $_POST['description'];
        $image = $_POST['image'];

        mysqli_query($con, "INSERT INTO nowShowing(filmName, duration, description, image, language) VALUES('".$filmname."', '".$duration."', '".$description."', '".$image."', '".$lang."')");
        echo "success";
    }

    else if(isset($_POST['editCurrentMovie'])){
        $filmname = $_POST['filmname'];
        $duration = $_POST['duration'];
        $lang = $_POST['lang'];
        $description = $_POST['description'];
        $itemid = $_POST['itemid'];

        mysqli_query($con, "UPDATE nowShowing SET filmName='".$filmname."', duration='".$duration."', description='".$description."', language='".$lang."' WHERE id=".$itemid."");
        echo "success";
    }

    else if(isset($_POST['addTicket'])){
        $filmHall = $_POST['filmHall'];
        $film = $_POST['film'];
        $ePrice = $_POST['ePrice'];
        $sTicket = $_POST['sTicket'];
        $boxPrice = $_POST['boxPrice'];
        $showTime = json_encode($_POST['showTime']);

        mysqli_query($con, "INSERT INTO tiketsAndPricing(hallid,movieid,elderTicket,youngerPrice,showingDates,boxPrice) VALUES(".$filmHall.", ".$film.", '".$ePrice."', '".$sTicket."', '".$showTime."', '".$boxPrice."')");        
        echo "success";
    }

    else if(isset($_POST['editTicket'])){
        $theater = $_POST['theater'];
        $film = $_POST['film'];
        $cPrice = $_POST['cPrice'];
        $ePrice = $_POST['ePrice'];
        $boxPrice = $_POST['boxPrice'];
        $id = $_POST['id'];
        $dates = json_encode($_POST['dates']);
        
        mysqli_query($con, "UPDATE tiketsAndPricing SET hallid=".$theater.", movieid=".$film.", elderTicket='".$ePrice."', youngerPrice='".$cPrice."', showingDates='".$dates."', boxPrice='".$boxPrice."' WHERE tid=".$id."");
        echo "success";
    }

    else if(isset($_POST['getDatesAndTimes'])){
        $id = $_POST['id'];
        $query = mysqli_query($con, "SELECT * FROM tiketsAndPricing WHERE tid=".$id."");
        $row = mysqli_fetch_assoc($query);
        echo json_encode($row['showingDates']);
    }

    else if(isset($_POST['getCapacityEdit'])){
        $id = $_POST['id'];
        $query = mysqli_query($con, "SELECT * FROM filmHalls WHERE id=".$id."");
        $row = mysqli_fetch_assoc($query);
        echo $row['capacity'];
    }

    else if(isset($_POST['getRowsAndCols'])){
        $film = $_POST['film'];
        $theater = $_POST['theater'];
        $date = $_POST['date'];
        $time = $_POST['hours'].":".$_POST['mins'];
        $date = $_POST['year']."-".$_POST['month']."-".$_POST['date'];

        $query = mysqli_query($con, "SELECT * FROM tiketsAndPricing,nowShowing,filmHalls WHERE tiketsAndPricing.hallid =filmHalls.id AND tiketsAndPricing.movieid=nowShowing.id AND tiketsAndPricing.hallid=".$theater." AND nowShowing.id=".$film."");
        $row = mysqli_fetch_assoc($query);

        echo json_encode($row);
    }

    else if(isset($_POST['logout'])){
        session_destroy();
        echo "success";
    }