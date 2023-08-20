<?php 
    require_once("./database/connection.php");
    $filmId = $_GET['fid'];
    $cdate = $_GET['date'];
    $ctime = $_GET['time'];
    $theaterId = $_GET['tid'];

    $query = mysqli_query($con, "SELECT * FROM tiketsAndPricing,nowShowing,filmHalls WHERE tiketsAndPricing.hallid =filmHalls.id AND tiketsAndPricing.movieid=nowShowing.id AND tiketsAndPricing.hallid=".$theaterId."");
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
	    <script src="./js/bootstrap.bundle.min.js"></script>
        
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

        </style>
        
    </head>
    
    <body>
        <section id="subs" class="bg_LightSteelBlue" >
            <div class="container-xl pt-5">
                <Button class="btn btn-md btn-outline-info">Go Back</Button>
            </div>
        </section>

        <section id="subs" class="pb-5 bg_LightSteelBlue">
            <div class="container-xl">
                <div id="date"></div>
                <div></div>
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
                        <div class="row">
                            <?php 
                                $totBoxes = $allDetails['boxes'];
                                while($totBoxes > 0){
                                    echo '<button class="seat"></button>';
                                    --$totBoxes;
                                }
                            ?>
                        </div>
                    <div class="screen">Normal Seats</div>
                    <div class="seats">
                        <div class="row">
                            <?php
                                $normalSeats = $allDetails['capacity'];
                                while($normalSeats > 0){
                                    echo '<button class="seat"></button>';
                                    --$normalSeats;
                                }
                            ?>
                        </div>
                    </div>
                    <div class="booking-summary">
                        <h3 style="color : #091C7A;">Booking Summary</h3>
                        <p>( box ticket allocate for two persons )</p>
                        <h5 style="color : #000;">Selected Seats: <span id="selected-seats">0</span></h5>
                        <h5 style="color : #000;">Total: Rs.<span id="total-price">0</span></h5>
                        <button id="book-now">Book Now</button>
                    </div>
                </div>
            </div>
        </section>
        
        <script>
        const allTicketsInput = document.getElementById('allTickets');
        const kidsTicketsInput = document.getElementById('kidsTickets');
        const totalElement = document.getElementById('total');
        
        allTicketsInput.addEventListener('input', updateTotal);
        kidsTicketsInput.addEventListener('input', updateTotal);
        
        function updateTotal() {
            const allTickets = parseInt(allTicketsInput.value);
            const kidsTickets = parseInt(kidsTicketsInput.value);
            const totalPrice = allTickets + kidsTickets;
            totalElement.textContent =  + totalPrice;
        }
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
        </script>
        <script src="./sources/js/main.js"></script>        
    </body>
    
</html>
