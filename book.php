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

            .modal{
                width : 100%;
                height : 100%;
                background : rgba(0,0,0,0.6);
                display : none;
                justify-content : center;
                align-items : center;
            }

            .modal .modal-content{
                width : 500px;
                padding : 20px;
                position: relative;
            }

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


            #loader {
                position: absolute;
                left: 59%;
                top: 55%;
                z-index: 1;
                width: 60px;
                height: 60px;
                margin: -76px 0 0 -76px;
                border: 5px solid #f3f3f3;
                border-radius: 50%;
                border-top: 5px solid #091C7A;
                -webkit-animation: spin 0.8s linear infinite;
                animation: spin 0.8s linear infinite;
            }

            @-webkit-keyframes spin {
                0% { -webkit-transform: rotate(0deg); }
                100% { -webkit-transform: rotate(360deg); }
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            .card{
                border:none;
            }

            .form-control {
                border-bottom: 2px solid #eee !important;
                border: none;
                font-weight: 600
            }

            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: #8bbafe;
                outline: 0;
                box-shadow: none;
                border-radius: 0px;
                border-bottom: 2px solid blue !important;
            }



            .inputbox {
                position: relative;
                margin-bottom: 20px;
                width: 100%
            }

            .inputbox span {
                position: absolute;
                top: 7px;
                left: 11px;
                transition: 0.5s
            }

            .inputbox i {
                position: absolute;
                top: 13px;
                right: 8px;
                transition: 0.5s;
                color: #3F51B5
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0
            }

            .inputbox input:focus~span {
                transform: translateX(-0px) translateY(-15px);
                font-size: 12px
            }

            .inputbox input:valid~span {
                transform: translateX(-0px) translateY(-15px);
                font-size: 12px
            }

            .card-blue{

                background-color: #492bc4;
            }

            .hightlight{

                background-color: #5737d9;
                padding: 10px;
                border-radius: 10px;
                margin-top: 15px;
                font-size: 14px;
            }

            .yellow{

                color: #fdcc49; 
            }

            .decoration{

                text-decoration: none;
                font-size: 14px;
            }

            .btn-success {
                color: #fff;
                background-color: #492bc4;
                border-color:#492bc4;
            }

            .btn-success:hover {
                color: #fff;
                background-color:#492bc4;
                border-color: #492bc4;
            }


            .decoration:hover{

                text-decoration: none;
                color: #fdcc49; 
            }

            .loader2{
                width : 100%;
                height : 100vh;
                position : absolute;
                top : 0;
                left : 0;
                background : rgba(0,0,0,0.6);
                display : flex;
                justify-content : center;
                align-items : center;
            }
        </style>
        
    </head>
    
    <body>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="content text-center mt-1" id="content" style="color : #000;">
                </div>
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

            <div class="loader2 d-none" id="loader2">
                <div class="spinner-border text-light" role="status">
                    <span class="sr-only">Loading...</span>
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
        </script>
        <script src="./sources/js/main.js"></script>    
        <script>
            let boxesStr = "";
            let normalStr = "";
            let bookerEmail = "";
            let bookerName = "";
            let childrenTicket = 0;
            let eldersTicket = 0;
            let boxTicket = 0;
            let childTicketsCount = 0;
            let elderTicketCount = 0;

            const boxesArray = [];
            const normalArray = [];
            const bookedBox = [];
            const bookedNormal = [];
            const selectedBox = [];
            const selectedNormal = [];

            window.onload = getSeats();
            
            function getSeats() {
                $.ajax({
                    type: "post",
                    url: "/moviebooker/database/actions.php",
                    data: {
                        getCurrentRows : true,
                        theater : <?= $theaterId ?>,
                        film : <?= $filmId ?>,
                        year : <?= $date[0] ?>,
                        month : <?= $date[1] ?>,
                        date : <?= $date[2] ?>,
                        hours : <?= $time[0] ?>,
                        mins : <?= $time[1] ?>
                    },
                    dataType: "text",
                    success: function (response) {
                        const value = JSON.parse(response);
                        const normal = value[0];
                        const boxes = value[1];

                        for(let i=0; i<normal.length; i++){
                            let loopingArray = JSON.parse(normal[i]);
                            for(let k=0; k<loopingArray.length; k++){
                                bookedNormal.push(loopingArray[k]);
                            }
                        }

                        for(let i=0; i<boxes.length; i++){
                            let loopingArray = JSON.parse(boxes[i]);
                            for(let k=0; k<loopingArray.length; k++){
                                bookedBox.push(loopingArray[k]);
                            }
                        }

                        $.ajax({
                            type: "post",
                            url: "/moviebooker/database/actions.php",
                            data: {
                                getRowsAndCols : true,
                                theater : <?= $theaterId ?>,
                                film : <?= $filmId ?>,
                                year : <?= $date[0] ?>,
                                month : <?= $date[1] ?>,
                                date : <?= $date[2] ?>,
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
                            }
                        });
                    }
                });
                
            }


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

            function showModal() {
                if(selectedBox.length == 0){
                    if(selectedNormal.length == 0){
                        displayErr("You didn't select any boxes or seats.");
                        $('#myModal').css("display", "flex");
                    }
                    else{
                        displayModalContent();
                        $('#myModal').css("display", "flex");
                    }
                }
                else{
                    displayModalContent();
                    $('#myModal').css("display", "flex");
                }
            }
            $('.close').click(function (e) { 
                e.preventDefault();
                closeModal();
            });
            function closeModal(){
                $('#myModal').css("display", "none");
            }


            function displayModalContent(){
                let str =  '<div id="loader" class="d-none"></div><div id="data"><h3 style="color : #000;">Booking Details</h3>';
                str += '<div class="mt-2 text-start p-2" style="background : #f2f2f2;">';
                str += '<h6 style="color : #000;">Total Seats : <span>'+(selectedNormal.length)+'</span></h6>';
                str += '<h6 style="color : #000;">Total Boxes : <span>'+(selectedBox.length)+'</span></h6>';
                str += '</div>';
                str += '<div class="mt-4 text-center" style="width : 76%; margin-left : 12%;">';
                str += '<p>Please Specify Your Tickets</p>';
                str += '<div class="mt-3 mb-1 text-start">';
                str += '<span class="text-start">Full Tickets</span>';
                str += '<input type="number" placeholder="Full Tickets" id="fullTick" onchange="addFullTicket(this.value)">';
                str += '<span class="text-start" style="color : red; font-size : 12px;" id="setErr"></span>';
                str += '</div>';
                str += '<div class="mt-3 mb-1 text-start">';
                str += '<span class="text-start mb-0">Half Tickets</span>';
                str += '<input type="number" placeholder="Half Tickets"  id="halfTick" onchange="addHalfTicket(this.value)">';
                str += '<span class="text-start" style="color : red; font-size : 12px;" id="setErr1"></span>';
                str += '</div>';
                str += '</div>';
                str += '<div class="mt-3 text-start p-2" style="background : #f2f2f2;">';
                str += '<h6 style="color : #000;">Cost for Full Seats : <span>Rs.'+(elderTicketCount*eldersTicket)+'.00</span></h6>';
                str += '<h6 style="color : #000;">Cost for Half Seats : <span>Rs.'+(childTicketsCount*childrenTicket)+'.00</span></h6>';
                str += '<h6 style="color : #000;">Cost for Boxes : <span>Rs.'+(selectedBox.length*boxTicket)+'.00</span></h6>';
                str += '<h6 style="color : #000;">Total Charge for Tickets : <span>'+(selectedNormal.length > 0 ? childTicketsCount > 0 || elderTicketCount > 0 ? 'Rs.'+(selectedBox.length*boxTicket + elderTicketCount*eldersTicket + childTicketsCount*childrenTicket )+'.00' : "Please Choose Ticket Types" : 'Rs.'+(selectedBox.length*boxTicket)+'.00')+'</span></h6>';
                str += '</div>';
                str += '<div class="mt-3 text-end p-2">'; 
                str += '<button class="btn btn-md btn-primary" onclick="gotoPayment()">Pay Now</button>';
                str += '</div></data>';

                $('#content').html(str);
            }
            function displayContent2(){
                let str = '<div class="card p-3">';
                str += '<div class="text-start mt-2 mb-4"><h6 style="color : #000;">Total Payment : <span>Rs.'+(selectedBox.length*boxTicket + elderTicketCount*eldersTicket + childTicketsCount*childrenTicket )+'.00</span></h6></div>';
                str += '<h6 class="text-uppercase" style="color : #000">Payment details</h6>';
                str += '<div class="text-center mt-3 mb-2" id="alert-setter"></div>';
                str += '<div class="inputbox mt-3"> <input type="text" id="email" name="email" class="form-control" required="required"> <span>Email Address</span> </div>';
                str += '<div class="inputbox mt-3"> <input type="text" id="cardholder" name="name" class="form-control" required="required"> <span>Name on card</span> </div>';
                str += '<div class="inputbox mt-3">';
                str += '<input type="text" name="name" class="form-control" id="cardnumber" required="required"> <i class="fa fa-credit-card"></i> ';
                str += '<span>Card Number</span> ';
                str += '</div> ';
                str += '<div class="row">';
                str += '<div class="col">';
                str += '<div class="d-flex flex-row">';
                str += '<div class="mt-3 mr-2"> <input type="month" value="0000-00" name="name" id="expire" class="form-control" required="required"> <span>Expiry</span> </div>';
                str += '<div class="mt-3 mr-2"> <input type="text" name="name" id="cvv" class="form-control" required="required"> <span>CVV</span> </div>';
                str += '</div>';                       
                str += '</div>'
                str += '<div class="mt-3"><button class="btn btn-md btn-success" onclick="payForTickets()">Pay Now</button></div>';
                str += '</div>';
                str += '</div>';

                $('#content').html(str);

            }
            function displayOTP(){
                let str = '<div class="card p-3 text-center">';
                str += '<h6 class="text-uppercase" style="color : #000">verification</h6>';
                str += '<div class="text-center mt-3 mb-2" id="alert-setter2"></div>';
                str += "<p style='padding-top : 20px; padding-left : 30px; padding-right : 30px;'>Please verify it's you. check your mobile number and take the otp send from your banking partner and enter that in here.</p>";
                str += '<div class="mt-1 mr-2" > <input type="text" id="otp" name="name" class="form-control w-50" style="margin-left : 25%;" required="required"> <span>OTP</span> </div>';
                str += '<div class="mt-5"><button class="btn btn-md btn-success" onclick="verify()">Verify</button></div>';
                str += '</div>';

                $('#content').html(str);
            }
            function setSuccessModal(){
                let str = '<div class="card p-3 text-center">';
                str += '<div class="p-3 text-center"><h5 style="color : #000;">Succcess!</h5><p>Your seats are booked check your email address for more info.</p></div>';
                str += '<div class="text-center"><button class="btn btn-md btn-outline-success" onclick="success()">Done</button></div>';
                str += '</div>';

                $('#content').html(str);
            }
            function displayErr(errText){
                let str = '<div class="alert alert-info">' + errText + '</div>';
                str += '<div class="text-end mt-3">';
                str += '<button id="close" onclick="closeModal()" class="btn btn-md btn-primary">close</button>';
                str +='</div>';

                $('#content').html(str);
            }

            function gotoPayment(){
                const length = parseInt(childTicketsCount)+parseInt(elderTicketCount);
                if(selectedNormal.length == length){
                    $('#loader').removeClass("d-none");
                    setTimeout(()=>{
                        $('#loader').addClass("d-none");
                        displayContent2();
                    }, 3000)
                }
                else{
                    $('#setErr').text("Your selected seats and this seats are not equal.");
                    $('#setErr1').text("Your selected seats and this seats are not equal.");
                }
            }

            function payForTickets(){
                bookerEmail = $('#email').val();
                bookerName = $('#cardholder').val();
                const cardNumber = $('#cardnumber').val();
                const expire = $('#expire').val();
                const cvv = $('#cvv').val();

                if(bookerEmail == "" || cardholder == "" || cardNumber == "" || cvv == ""){
                    $('#alert-setter').html('<div class="alert alert-danger">all fields are required</div>');
                }
                else if(cvv.length != 3 || cardNumber.length != 12){
                    $('#alert-setter').html('<div class="alert alert-danger">invalid card detils</div>');
                }
                else{
                    closeModal();
                    $('#loader2').removeClass("d-none");
                    setTimeout(()=>{
                            $('#loader2').addClass("d-none");
                            $('#myModal').css("display", "flex");
                            displayOTP();
                    }, 3000);

                }
            }
            function verify(){
                const otp = $('#otp').val();
                if(otp == "" || otp.length != 4){
                    $('#alert-setter2').html('<div class="alert alert-danger">invalid OTP code</div>');
                }
                else{
                    closeModal();
                    $('#loader2').removeClass("d-none");
                    $.ajax({
                        type: "post",
                        url: "/moviebooker/database/actions.php",
                        data: {
                            bookSeats : true,
                            boxes : selectedBox,
                            normal : selectedNormal,
                            email : bookerEmail,
                            paid : ((selectedBox*boxTicket)+(childTicketsCount*childrenTicket)+(elderTicketCount*eldersTicket)),
                            childTickets : childTicketsCount,
                            elderTickets : elderTicketCount,
                            boxTickets : selectedBox.length,
                            bookerName : bookerName,
                            movie : <?= $filmId ?>,
                            hall : <?= $theaterId ?>,
                            year : <?= $date[0] ?>,
                            month : <?= $date[1] ?>,
                            date : <?= $date[2] ?>,
                            hour : <?= $time[0] ?>,
                            mins : <?= $time[1] ?>,
                        },
                        dataType: "text",
                        success: function (response) {
                            $('#loader2').addClass("d-none");
                            $('#myModal').css("display", "flex");
                            setSuccessModal();
                        }
                    });
                }
            }
            function addFullTicket(value){
                elderTicketCount = value;
                displayModalContent();
                $('#halfTick').val(childTicketsCount);
                $('#fullTick').val(value);
            }
            function addHalfTicket(value){
                childTicketsCount = value;
                displayModalContent();
                $('#fullTick').val(elderTicketCount);
                $('#halfTick').val(value);
            }

            function success(){
                window.location.reload();
            }

        </script>    
    </body>
    
</html>
