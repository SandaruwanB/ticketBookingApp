<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>How Many Tickets</title>
	    <link href="sources/css/bootstrap.min.css" rel="stylesheet" >
	    <link href="sources/css/font-awesome.min.css" rel="stylesheet" >
	    <link href="sources/css/global.css" rel="stylesheet">
	    <link href="sources/css/index.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	    <script src="js/bootstrap.bundle.min.js"></script>
        
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

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            form {
                background-color: #f2f2f2;
                padding: 20px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input[type="number"] {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
            }

            #total {
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
        
            .close-button {
                width: 30px;
                height: 30px;
                position: relative;
                cursor: pointer;
            }

            .close-line {
                width: 100%;
                height: 2px;
                background-color: white;
                position: absolute;
                top: 50%;
                left: 0;
                transform: translateY(-50%) rotate(135deg);
            }

            .close-line::before {
                content: '';
                width: 100%;
                height: 2px;
                background-color: inherit;
                position: absolute;
                top: 0;
                right: 0;
                transform: rotate(-90deg);
            }
        
        </style>
        
    </head>
    
    <body>

        <section id="footer_b" class="pt-3 pb-3">
            <div class="container-xl">
                <div class="row footer_b1">
                    <div class="close-button" onclick="goBack()">
                    <div class="close-line">
                    </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="upcome" class="p_3 bg-light">
            <div class="container-xl">
                <div class="row upcome_1 text-center">
                    <div class="col-md-12">
                        <h3 class="mb-0">HOW MANY TICKETS ?</h3>
                        <hr class="line me-auto ms-auto">
                    </div>
                </div>
                <div class="container">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="allTickets">No. Of Full Tickets</label>
                            <input type="number" id="allTickets" name="allTickets" min="0" value="0">
                        </div>
                        <div class="form-group">
                            <label for="kidsTickets">No. Of Kids Tickets</label>
                            <input type="number" id="kidsTickets" name="kidsTickets" min="0" value="0">
                        </div>
                        <div class="form-group">
                            <label for="total">Total Tickets</label>
                            <div id="total">0</div>
                            <hr>
                        </div>
                        <p>(NOTE: One Box can accommodate two persons)</p>
                        <div class="form-group">
                            <h6 class="mb-0 mt-3"><a class="button_1" href="seat_book.php">CONTITNUE</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <script>
        function goBack() {
            window.history.back();
        }
        </script>
        
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
        
    </body>

</html>
