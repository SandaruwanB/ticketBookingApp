<?php

    include_once ('./connection.php');

    require "/media/sandaru/New Volume/My Projects/php/online movie ticket booking system/moviebooker/phpmailer/PHPMailer.php";
    require "/media/sandaru/New Volume/My Projects/php/online movie ticket booking system/moviebooker/phpmailer/SMTP.php";
    require "/media/sandaru/New Volume/My Projects/php/online movie ticket booking system/moviebooker/phpmailer/Exception.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\POP3;
    use PHPMailer\PHPMailer\SMTP;

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
        $time = $_POST['hours'].":".$_POST['mins'];
        $date = $_POST['year']."-".$_POST['month']."-".$_POST['date'];

        $query = mysqli_query($con, "SELECT * FROM tiketsAndPricing,nowShowing,filmHalls WHERE tiketsAndPricing.hallid =filmHalls.id AND tiketsAndPricing.movieid=nowShowing.id AND tiketsAndPricing.hallid=".$theater." AND nowShowing.id=".$film."");
        $row = mysqli_fetch_assoc($query);

        echo json_encode($row);
    }

    else if(isset($_POST['getCurrentRows'])){
        $film = $_POST['film'];
        $theater = $_POST['theater'];
        $time = $_POST['hours'].":".$_POST['mins'];
        $date = $_POST['year']."-".$_POST['month']."-".$_POST['date'];
        $boxSeats = array();
        $normalSeats = array();
        $test = array();

        $query = mysqli_query($con, "SELECT * FROM bookings WHERE filmDate='".$date."' AND filmTime='".$time."' AND hallId=".$theater." AND movieId=".$film."");
        $row = mysqli_fetch_assoc($query);
        array_push($test, $row['boxSeats']);
        while($row = mysqli_fetch_assoc($query)){
            if($row['boxSeats'] != "null"){
                array_push($boxSeats, $row['boxSeats']);
            }
            if($row['normalSeats'] != "null"){
                array_push($normalSeats, $row['normalSeats']);
            }
        }
        $final = array($normalSeats,$boxSeats);
        echo json_encode($final);
        
    }

    else if(isset($_POST['bookSeats'])){
        $useremail = $_POST['email'];
        $boxes = json_encode($_POST['boxes']);
        $normal = json_encode($_POST['normal']);
        $paid = $_POST['paid'];
        $childTickets = $_POST['childTickets'];
        $elderTickets = $_POST['elderTickets'];
        $boxTickets = $_POST['boxTickets'];
        $bookerName = $_POST['bookerName'];
        $movie = $_POST['movie'];
        $hall = $_POST['hall'];
        $date = $_POST['year']."-".$_POST['month']."-".$_POST['date'];
        $time = $_POST['hour'].":".$_POST['mins'];

        $query = mysqli_query($con, "INSERT INTO bookings(username,email,paid,childTickets,elderTickets,boxTickets,filmTime,boxSeats,normalSeats,filmDate,hallId,movieId) VALUES('".$bookerName."','".$useremail."',".$paid.",".$childTickets.",".$elderTickets.",".$boxTickets.",'".$time."','".$boxes."','".$normal."','".$date."',".$hall.",".$movie.")");
        if($query){
            $mail = new PHPMailer(true);
            // set to use smtp
            $mail -> isSMTP();
            // define smtp host
            $mail -> Host = "smtp.gmail.com";
            // authentication
            $mail -> SMTPAuth = "true";
            // set encryption type
            $mail -> SMTPSecure = "tls";
            // set port
            $mail -> Port = "587";
            // email username
            $mail -> Username = "ccinema.org@gmail.com";
            // password
            $mail -> Password = "ibnfvazubtdhpjfu";
            // subject
            $mail -> Subject = "CCINEMA ORG - booking details";
            // from set
            $mail -> setFrom("ccinema.org@gmail.com", "CINEMA ORG");
                    
            $email = $useremail;
            $message = "verification code is lol";
            // body
            $mail -> isHTML(true);
            $mail -> CharSet = "UTF-8";
            $mail -> Body = $message;
            // recipient
            $mail -> addAddress($email);
                    
            $mail -> Send();
            $mail ->  smtpClose();
    
            echo "success";
        }            
    }

    else if(isset($_POST['getLatestMovies'])){
        $query = mysqli_query($con, "SELECT * FROM tiketsAndPricing,filmHalls,nowShowing WHERE nowShowing.id=tiketsAndPricing.movieid AND filmHalls.id=tiketsAndPricing.hallid ORDER BY tiketsAndPricing.tid DESC LIMIT 20");
        
        $outString = '<div class="container-xl">
                        <div class="row upcome_1 text-center">
                            <div class="mb-2 container text-start" style="position: relative;">
                                <h4>Latetst Movies</h4>  
                                <hr>
                            </div>
                        </div>
                        <div class="row upcome_2 mt-2">
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="upcome_2i row">';
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $outString = $outString.'<div class="col-md-3 mt-3">
                                <div class="upcome_2i1 clearfix position-relative">
                                    <div class="upcome_2i1i clearfix">
                                        <img src="'.$row['image'].'" style="height : 490px; object-fit : cover;" class="w-100" alt="abc">
                                    </div>
                                    <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                        <h6 class="text-uppercase mb-0"><button value="'.$row['movieid'].'" onclick="bookSeat('.$row['movieid'].','.$row['hallid'].')" class="button_2">Book Now</button></h6>
                                    </div>
                                </div>
                                <div class="upcome_2i_last bg-white p-3">
                                    <div class="upcome_2i_lasti row">
                                        <div class="col-md-9 col-9">
                                            <div class="upcome_2i_lastil">
                                                <h5><a href="/moviebooker/view.php?fid='.$row['movieid'].'">'.$row['filmName'].'</a></h5>
                                                <h6 class="text-muted">'.$row['language'].'</h6>
                                                <h6 class="text-muted">'.$row['hallName'].' - '.$row['location'].'</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';        
            }
            $outString = $outString.'</div></div></div></div></div>';
        }
        else{
            $outString = '<div class="container">
                        <h4>Latest Movies</h4>
                        <hr>
                    </div>
                    <div class="w-100 text-center d-flex justify-content-center">
                        <div class="alert alert-info w-50">No Movies to Show. Please be Touch</div>
                    </div>';
        }
        echo $outString;

    }

    else if(isset($_POST['searchMovie'])){
        $text = $_POST['text'];

        $outString = '<div class="container-xl">
                        <div class="row upcome_1 text-center">
                            <div class="mb-2 container text-start" style="position: relative;">
                                <h4>Search Results for "'.$text.'"</h4>  
                                <hr>
                            </div>
                        </div>
                        <div class="row upcome_2 mt-2">
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <div class="upcome_2i row">';

        $query1 = mysqli_query($con, 'SELECT * FROM `nowShowing` WHERE MATCH(`filmName`) AGAINST("'.$text.'")');
        $row = mysqli_fetch_assoc($query1);
        if(mysqli_num_rows($query1) > 0){
            $query = mysqli_query($con , 'SELECT * FROM tiketsAndPricing,filmHalls,nowShowing WHERE nowShowing.id=tiketsAndPricing.movieid AND filmHalls.id=tiketsAndPricing.hallid AND tiketsAndPricing.movieid='.$row['id'].'');
            while($row = mysqli_fetch_assoc($query)){
                $outString = $outString.'<div class="col-md-3 mt-3">
                        <div class="upcome_2i1 clearfix position-relative">
                            <div class="upcome_2i1i clearfix">
                                <img src="'.$row['image'].'" style="height : 490px; object-fit : cover;" class="w-100" alt="abc">
                            </div>
                            <div class="upcome_2i1i1 clearfix position-absolute top-0 text-center w-100">
                                <h6 class="text-uppercase mb-0"><button value="'.$row['movieid'].'" onclick="bookSeat(this.value)" class="button_2">Book Now</button></h6>
                            </div>
                        </div>
                        <div class="upcome_2i_last bg-white p-3">
                            <div class="upcome_2i_lasti row">
                                <div class="col-md-9 col-9">
                                    <div class="upcome_2i_lastil">
                                        <h5><a href="/moviebooker/view.php?fid='.$row['movieid'].'">'.$row['filmName'].'</a></h5>
                                        <h6 class="text-muted">'.$row['language'].'</h6>
                                        <h6 class="text-muted" id="hall" value="'.$row['hallid'].'">'.$row['hallName'].' - '.$row['location'].'</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';  
            }
            $outString = $outString.'</div></div></div></div></div>';
        }
        else{
            $outString = '<div class="container">
                    <h4>Search Results for "'.$text.'"</h4>
                    <hr>
                </div>
                <div class="w-100 text-center d-flex justify-content-center">
                    <div class="alert alert-info w-50">No Movies Found for your Search</div>
                </div>';
        }
        echo $outString;
    }

    else if(isset($_POST['getBookingDatesTimes'])){
        $id = $_POST['id'];
        $finalData = array();
        $query = mysqli_query($con, "SELECT * FROM tiketsAndPricing,filmHalls,nowShowing WHERE nowShowing.id=tiketsAndPricing.movieid AND filmHalls.id=tiketsAndPricing.hallid AND tiketsAndPricing.movieid=".$id."");
        $row = mysqli_fetch_assoc($query);
        echo json_encode($row['showingDates']);
    }

    else if(isset($_POST['logout'])){
        session_destroy();
        echo "success";
    }