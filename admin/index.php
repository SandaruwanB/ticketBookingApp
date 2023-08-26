<?php
    include_once("../database/connection.php");

    $query1 = mysqli_query($con, "SELECT * FROM bookings");
    $query2 = mysqli_query($con, "SELECT * FROM nowShowing");
    $query3 = mysqli_query($con, "SELECT * FROM upcomming");
    $query4 = mysqli_query($con, "SELECT * FROM filmHalls");
    $query5 = mysqli_query($con, "SELECT * FROM users");
    $bookings = mysqli_num_rows($query1);
    $nowShowing = mysqli_num_rows($query2);
    $upcomming = mysqli_num_rows($query3);
    $theaters = mysqli_num_rows($query4);
    $users = mysqli_num_rows($query5);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../sources/css/style2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>CINEMA : admin dashbord</title>
        <style>
            .headers{
                margin-top : 30px;
                width : 100%;
                display : grid;
                column-gap : 10px;
                grid-template-columns : 1fr 1fr 1fr 1fr 1fr;
            }
            .grid-cols{
                border-radius : 5px;
                text-align : center;
                padding : 30px 40px;
                background : #091C7A;
                color : #fff;
            }
            .grid-cols a{
                text-decoration : none;
                color :#fff;
            }
            #customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            
            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: transparent;
                color: #222B45;
            }

            .table-content{
                width : 100%;
                margin-top : 50px;
            }
        </style>
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
                    <div class="user">
                        <img src="../sources/img/image1.jpg" alt="" style="border-radius : 30px;">
                    </div>
                </div>
                <div class="tables">
                    <div class="all-theaters">
                        <div class="heading">
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                </div>
                <div style="marging-top : 30px; width : 98%; margin-left : 1%; background : #F7F9FC; height: 100vh; border-radius: 20px; position : relative;">
                    <div class="headers">
                        <div class="grid-cols">
                            <h3>Total Bookings</h3>
                            <h1 style="margin-top : 20px;"><?= $bookings ?></h1>
                            <a href="/moviebooker/admin/bookings.php"><h5 style="margin-top : 20px; font-size : 1rem;">View&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></h5></a>
                        </div>
                        <div class="grid-cols">
                            <h3>Current Movies</h3>
                            <h1 style="margin-top : 20px;"><?= $nowShowing ?></h1>
                            <a href="/moviebooker/admin/currentMovies.php"><h5 style="margin-top : 20px; font-size : 1rem;">View&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></h5></a>
                        </div>
                        <div class="grid-cols">
                            <h3>Upcomming Movies</h3>
                            <h1 style="margin-top : 20px;"><?= $upcomming ?></h1>
                            <a href="/moviebooker/admin/upcommingMovies.php"><h5 style="margin-top : 20px; font-size : 1rem;">View&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></h5></a>
                        </div>
                        <div class="grid-cols">
                            <h3>Total Theaters</h3>
                            <h1 style="margin-top : 20px;"><?= $theaters ?></h1>
                            <a href="/moviebooker/admin/theators.php"><h5 style="margin-top : 20px; font-size : 1rem;">View&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></h5></a>
                        </div>
                        <div class="grid-cols">
                            <h3>Total Users</h3>
                            <h1 style="margin-top : 20px;"><?= $users ?></h1>
                            <a href="/moviebooker/admin/admins.php"><h5 style="margin-top : 20px; font-size : 1rem;">View&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></h5></a>
                        </div>
                    </div>
                    <div class="table-content">
                        <h3 style="color : #222B45;">Recent Bookings</h3>
                        <hr style="background : #C5CEE0; height : 3px; border: none; margin-bottom : 30px;">
                        <table id="customers">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Movie</th>
                                <th>Theater</th>
                                <th>Date</th>
                                <th>Total Seats</th>
                            </tr>
                            <?php
                                $query = mysqli_query($con, "SELECT * FROM bookings,filmHalls,nowShowing WHERE nowShowing.id=bookings.movieId AND filmHalls.id=bookings.hallId ORDER BY bid DESC LIMIT 8");
                                $loop = 1;
                                while($row = mysqli_fetch_Assoc($query)){
                                    if($row['boxSeats'] == "null" && $row['normalSeats'] == "null"){
                                        continue;
                                    }
                                    else{
                                        echo '<tr>
                                            <td>'.$loop.'</td>
                                            <td>'.$row['username'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['filmName'].'</td>
                                            <td>'.$row['hallName'].' - '.$row['location'].'</td>
                                            <td>'.$row['filmDate'].'</td>
                                            <td>'.$row['elderTickets']+$row['childTickets'].'</td>
                                        </tr>';
                                        ++$loop;
                                    }
                                }
                            ?>
                            <tr>
                                <td colspan="7" style="text-align: center"><a href="/moviebooker/admin/bookings.php" style="text-decoration: none; color : #222B45;">View All Bookings</a></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>    
        </div>

    </body>
    <script src="../sources/js/jquery.min.js"></script>
        <script src="../sources/js/main.js"></script>    
</html>