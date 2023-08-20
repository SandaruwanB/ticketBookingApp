<?php 
    require_once("./database/connection.php");
    $filmId = $_GET['fid'];
    $cdate = $_GET['date'];
    $ctime = $_GET['time'];
    $theaterId = $_GET['tid'];
    $time = explode(":",$ctime);
    $date = explode("-",$cdate);

    $query = mysqli_query($con, "SELECT * FROM tiketsAndPricing,nowShowing,filmHalls WHERE tiketsAndPricing.hallid =filmHalls.id AND tiketsAndPricing.movieid=nowShowing.id AND tiketsAndPricing.hallid=".$theaterId." AND nowShowing.id=".$filmId."");
    $allDetails = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Buy Tickets - Cinema Films and Theaters</title>
	    <link href="./sources/css/bootstrap.min.css" rel="stylesheet" >
	    <link href="./sources/css/font-awesome.min.css" rel="stylesheet" >
	    <link href="./sources/css/global.css" rel="stylesheet">
	    <link href="./sources/css/index.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        
        <style>
        
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 500px;
                margin: 0 auto;
                padding: 20px;
            }

            h1,h2,h3,h4,h5,h6 {
                font-weight: normal; 
                color: white;
            }

            form {
                background-color: black;
                padding: 10px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                color: white;
                display: block;
                margin-bottom: 5px;
            }

            input[type="number"] {
                width: 100%;
                padding: 8px;
                border-radius: 5px;
                border: 1px solid #ccc;
            }

            #total {
                color: white;
                font-size: 18px;
                font-weight: bold;
                margin-top: 10px;
            }

            input[type="submit"] {
                background-color: #4CAF50;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }

            p {
                font-size: 15px; 
                text-align: center;
            }

            .custom-bg {
                background: #000;
                color: #fff;
                display: inline-block;
                transition: 0.3s;
                padding: 18px 65px!important;
                border-radius: 25px;
                border: 1px solid #ff4444;
            }

            .custom-bg:hover {
                background: #ff4444;
                border: 1px solid #000;
                color: #fff;!important;
            } 

            .buttonTime {
                background: #fff;
                color: #000;
                display: inline-block;
                transition: 0.3s;
                padding: 10px 18px!important;
                border-radius: 10px;
                border: none;
            }

            #date {
                font-size: 24px;
                text-align: left;
                margin-top: 16px;
                font-size: 25px;
                font-weight: bold;
            }

            .seat-booking {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                text-align: center;
            }

            .screen {
                background-color: #333;
                color: #fff;
                padding: 10px;
                margin-bottom: 20px;
                font-size: 18px;
            }

            .seats {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .row {
                display: flex;
                justify-content: center;
                margin-bottom: 10px;
            }

            .seat {
                width: 40px;
                height: 40px;
                background-color: #ccc;
                margin-right: 10px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .seat:hover {
                background-color: #999;
            }

            .seat.selected {
                background-color: #00bcd4;
            }

            .booking-summary {
                background-color: #f1f1f1;
                padding: 10px;
                border-radius: 5px;
                margin-top: 20px;
            }

            .booking-summary h3 {
                margin-top: 0;
            }

            .booking-summary p {
                margin-bottom: 10px;
            }

            #book-now {
                background-color: #00bcd4;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            #book-now:hover {
                background-color: #008fb3;
            }

            .line-container {
                margin: 20px; /* Adjust the margin to create space around the line */
            }

            .subtracted-line {
                border: none;
                border-top: 2px solid black;
                margin-left: 80px; /* Adjust the margin-left value to subtract from the left side */
            }

            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

                /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin: 15% auto; /* 15% from the top and centered */
                padding: 20px;
                border: 1px solid #888;
                width: 45%; /* Could be more or less, depending on screen size */
            }

                /* The Close Button */
            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }
        </style>
        
    </head>
    
    <body>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modalContent"></div>
            </div>
        </div>
        <section id="subs" class="pb-5 pt-5 bg_LightSteelBlue">
            <div class="container-xl">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <Button class="btn btn-md btn-outline-info" onclick="goBack()">Go Back</Button>
                        <div id="date"></div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">
                        <div>
                            <div>
                                <h4 style="color : #000; font-weight : bold; font-size : 24px;"><?= $allDetails['hallName']." , ".$allDetails['location'] ?> </h4>
                            </div>
                            <div>
                                <h5 style="color : #091C7A; font-weight : bold;">Movie : <span style="color : #000; font-size : 1rem;"><?= $allDetails['filmName'] ?></span></h5>
                            </div>
                            <div>
                                <h5 style="color : #091C7A; font-weight : bold;">Time : <span style="color : #000; font-size : 1rem;"><?= $_GET['time'] ?></span></h5>
                            </div>
                            <div>
                                <h5 style="color : #091C7A; font-weight : bold;">Date : <span style="color : #000; font-size : 1rem;"><?= $_GET['date'] ?></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="" class="p_3 bg-light">
            <div class="container-xl">
                <h3 style="color: #333; text-align: center;">ODC</h3>
                <h6 style="color: #808080; text-align: center;">( Full. Rs.<?= $allDetails['elderTicket'] ?>.00 / Half. Rs.<?= $allDetails['youngerPrice'] ?>.00 / Box Ticket. Rs.<?= $allDetails['boxPrice'] ?>.00 )</h6>
                <div class="line-container">
                    <hr class="subtracted-line">
                </div>
                <div class="seat-booking">
                    <div class="screen">Boxes</div>
                        <div class="row" id="boxes">
                        </div>
                    <div class="screen">Normal Seats</div>
                    <div class="seats">
                        <div class="row" id="normalSeats">
                        </div>
                    </div>
                    <div class="booking-summary">
                        <h3 style="color : #091C7A;">Booking Summary</h3>
                        <p>( box ticket allocate for two persons )</p>
                        <h5 style="color : #000;">You Selected <span id="selectedBoxes">0</span> Boxes & <span id="selectedSeats">0</span> Seats.</h5>
                        <button id="book-now" onclick="showModal()">Book Now</button>
                    </div>
                </div>
            </div>
        </section>
        
        <script>

        </script>
        
        <script src="./sources/js/jquery.min.js"></script>
        <script>
            // Get the current date
            var currentDate = new Date();
            
            // Define an array of month names
            var months = [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ];
            
            // Define an array of weekday names
            var weekdays = [
                "Sunday", "Monday", "Tuesday", "Wednesday",
                "Thursday", "Friday", "Saturday"
            ];
            
            // Generate the formatted date string
            var formattedDate = weekdays[currentDate.getDay()] + ", " + months[currentDate.getMonth()] + " " + currentDate.getDate() + ", " + currentDate.getFullYear();

            // Update the date element in the HTML
            document.getElementById("date").innerHTML = formattedDate;


            function showModal() {
                $('#myModal').css("display", "block");
            }
            $('.close').click(function (e) { 
                e.preventDefault();
                $('#myModal').css("display", "none");
            });
        </script>
        <script src="./sources/js/main.js"></script>    
        <script>
            let boxesStr = "";
            let normalStr = "";
            let childrenTicket = 0;
            let eldersTicket = 0;
            let boxTicket = 0;
            const boxesArray = [];
            const normalArray = [];
            const bookedBox = [10,20,3];
            const bookedNormal = [3,10,37];
            const selectedBox = [];
            const selectedNormal = [];
            window.onload = getSeats();
            
            function getSeats() {
                $.ajax({
                    type: "post",
                    url: "/moviebooker/database/actions.php",
                    data: {
                        getRowsAndCols : true,
                        theater : <?= $theaterId ?>,
                        film : <?= $filmId ?>,
                        year : <?= $date[0] ?>,
                        month : <?= $date[1] ?>,
                        date : <?= $date ?>,
                        hours : <?= $time[0] ?>,
                        mins : <?= $time[1] ?>
                    },
                    dataType: "text",
                    success: function (response) {
                        const finalVal = JSON.parse(response);
                        childrenTicket = finalVal['youngerPrice'];
                        eldersTicket = finalVal['elderTicket'];
                        boxTicket = finalVal['boxPrice'];

                        for(let i=1; i<=parseInt(finalVal['boxes']); i++){
                            boxesArray.push(i);
                            if(findBookedBox(i)){
                                boxesStr += '<button style="background : #091C7A;" value="'+i+'" onclick="addItemBox(this.value)" class="seat" disabled></button>';
                            }
                            else{
                                boxesStr += '<button value="'+i+'" onclick="addItemBox(this.value)" class="seat"></button>';
                            }
                        }
                        for(let k=1; k<=parseInt(finalVal['capacity']); k++){
                            normalArray.push(k);
                            if(findBookedNormal(k)){
                                normalStr += '<button value="'+k+'" style="background : #091C7A;" onclick="addItemNormal(this.value)" class="seat" disabled></button>';
                            }
                            else{
                                normalStr += '<button value="'+k+'" onclick="addItemNormal(this.value)" class="seat"></button>';
                            }
                        }
                        $('#boxes').html(boxesStr);
                        $('#normalSeats').html(normalStr);
                        console.log(finalVal);
                    }
                });
            };


            function addItemBox(id){
                if(findOnBoxArray(id)){
                    let index = selectedBox.indexOf(id);
                    selectedBox.splice(index,1);
                }
                else{
                    selectedBox.push(id);
                }
                printBoxVals();
                $('#selectedBoxes').text(selectedBox.length);
            }
            function printBoxVals (){
                boxesStr = "";
                for(let i=0; i<boxesArray.length; i++){
                    if(findBookedBox(i+1)){
                        boxesStr += '<button style="background : #091C7A;" class="seat" disabled></button>';
                    }
                    else{
                        if(findOnBoxArray(i+1)){
                            boxesStr += '<button value="'+(i+1)+'" style="background : #0f0;" onclick="addItemBox(this.value)" class="seat"></button>';
                        }
                        else{
                            boxesStr += '<button value="'+(i+1)+'" onclick="addItemBox(this.value)" class="seat"></button>';
                        }
                    }
                }
                $('#boxes').html(boxesStr);
            }
            function findOnBoxArray(value){
                for(let i=0; i<selectedBox.length; i++){
                    if(selectedBox[i] == value){
                        return true;
                        break;
                    }
                    else{
                        continue;
                    }
                }
            }           
            function findBookedBox (id){
                for(let i=0; i<bookedBox.length; i++){
                    if(bookedBox[i] == id){
                        return true;
                        break;
                    }
                    else{
                        continue;
                    }
                }
            }


            function addItemNormal(id){
                if(findOnNormalArray(id)){
                    const index = selectedNormal.indexOf(id);
                    selectedNormal.splice(index,1);
                }
                else{
                    selectedNormal.push(id);
                }
                printNormalVals();
                $('#selectedSeats').text(selectedNormal.length);
            }
            function printNormalVals (){
                normalStr = "";
                for(let i=0; i<normalArray.length; i++){
                    if(findBookedNormal(i+1)){
                        normalStr += '<button style="background : #091C7A;" class="seat" disabled></button>';
                    }
                    else{
                        if(findOnNormalArray(i+1)){
                            normalStr += '<button value="'+(i+1)+'" style="background : #0f0;" onclick="addItemNormal(this.value)" class="seat"></button>';
                        }
                        else{
                            normalStr += '<button value="'+(i+1)+'" onclick="addItemNormal(this.value)" class="seat"></button>';
                        }
                    }
                }
                $('#normalSeats').html(normalStr);
            }
            function findOnNormalArray(value){
                for(let i=0; i<selectedNormal.length; i++){
                    if(selectedNormal[i] == value){
                        return true;
                        break;
                    }
                    else{
                        continue;
                    }
                }
            }
            function findBookedNormal(id){
                for(let i=0; i<bookedNormal.length; i++){
                    if(bookedNormal[i] == id){
                        return true;
                        break;
                    }
                    else{
                        continue;
                    }
                }
            }


            function goBack(){
                window.history.back();
            }
            
        </script>    
    </body>
    
</html>
