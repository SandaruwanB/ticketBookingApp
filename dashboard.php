<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="sources/css/style2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Admin Dashbord</title>
    </head>

    <body>
        <div class="container">

            <?php
            include('./layouts/sidenavbar.php');
            ?>
            
            <div class="main">
                <div class="top-bar">
                    <div class="search">
                        <input type="text" name="search" placeholder="search here">
                        <label for="search"><i class="fa fa-search"></i></label>
                    </div>
                    <h4 style="font-size: 12px; color: #8B008B;">Welcome ! Administrator</h4>
                    <div class="user">
                        <img src="sources/img/addmin.jpg" alt="">
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="card-content">
                            <div class="number">2</div>
                            <div class="card-name">Theaters</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-building"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">5</div>
                            <div class="card-name">Movies</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-file-movie-o"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">7</div>
                            <div class="card-name">Customers</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="number">10</div>
                            <div class="card-name">Bookings</div>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-desktop"></i>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    
    </body>
    
</html>