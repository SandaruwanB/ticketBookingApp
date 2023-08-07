<?php
    include_once("../database/connection.php");
    $id = $_GET['ufid'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>CINEMA : movie details</title>
	    <link href="../sources/css/bootstrap.min.css" rel="stylesheet" >
	    <link href="../sources/css/font-awesome.min.css" rel="stylesheet" >
	    <link href="../sources/css/global.css" rel="stylesheet">
	    <link href="../sources/css/index.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	    <script src="../js/bootstrap.bundle.min.js"></script>		
		<style>
		
		    .container {
			    display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
		    }

            .item-image {
			    flex: 1;
                text-align: center;
		    }

            .item-image img {
			    max-width: 100%;
                height: auto;
		    }

            .item-details {
			    flex: 1;
                text-align: left;
                padding: 20px;
		    }

            h2 {
			    font-weight:bold;
                margin-top: 0;
		    }

            h5 {
			    font-weight: normal;
            }

		    h4 {
			    font-weight: bold; 
            }

		    p {
			    font-size: 15px; 
		    }

            button {
			    background-color: #ff4444;
                color: white;
			    display: inline-block;
			    transition: 0.3s;
                padding: 15px 30px;
                border-radius: 10px;
			    border: 1px solid #ff4444;
                cursor: pointer;
		    }

            button:hover {
			    background: #000;
                border: 1px solid #000;
                color: #fff;!important;
		    }

	    </style>
		
	</head>
	
	<body>
        <?php 
            $query = mysqli_query($con, "SELECT * FROM upcomming WHERE id=".$id."");
            $row = mysqli_fetch_assoc($query);
        ?>
    <section id="upcome" class="p_3 bg-light">
      <div class="container-xl">
        <div class="row upcome_1 text-center">
          <div class="col-md-12">
            <h3 class="mb-0" style="text-transform : uppercase;"><?= $row['filmName'] ?> MOVIE DETAILS</h3>
            <hr class="line me-auto ms-auto">
          </div>
        </div>
        <div class="container-sm">
            <section id="upcome" class="p_3 bg-light">
                <div>
                    <div class="item-image">
                        <img src=<?= $row['image'] ?> style="max-width : 55%" alt="Item Image">
                    </div>
                    <div class="item-details">
                        <h2><?= $row['filmName'] ?></h2>
                        <br>
                        <?php
                            $parts = explode(".", $row['duration']);
                        ?>
                        <h5>Runtime: <?= $parts[0] ?>h <?= $parts[1] ?>m</h5>
                        <h5>Releasing Date: <?= $row['releasingDate'] ?></h5>
                        <h5>Language: <?= $row['language'] ?></h5>
                        <br>
                        <h4>Description</h4>
                        <p><?= $row['description'] ?></p>
                        <button class="btn btn-lg btn-primary" onclick="goBack()">Go Back</button><button id="editOpen" onclick="goEdit()" value=<?= $id ?> class="btn btn-lg btn-info" style="margin-left : 10px;">Edit</button>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </section>    
    <script src="../sources/js/jquery.min.js"></script>
    <script src="../sources/js/main.js"></script>		

		
		<script>
		window.onscroll = function() {myFunction()};
		
		var navbar_sticky = document.getElementById("navbar_sticky");
		var sticky = navbar_sticky.offsetTop;
		var navbar_height = document.querySelector('.navbar').offsetHeight;
		
		function myFunction() {
			if (window.pageYOffset >= sticky + navbar_height) {
				navbar_sticky.classList.add("sticky")
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
				navbar_sticky.classList.remove("sticky");
				document.body.style.paddingTop = '0'
			}
		}

        function goBack(){
            window.location.replace("/moviebooker/admin/upcommingMovies.php");
        }

        function goEdit(){
            const id = $('#editOpen').val();
            window.location.replace("/moviebooker/admin/upmovieEdit.php?ufid="+id);
        }

		</script>
		
	</body>

</html>