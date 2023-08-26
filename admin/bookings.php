<?php
    include_once('../database/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../sources/css/style2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>CINEMA : bookings</title>
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
                            <h2>Bookings</h2>
                        </div>
                        <table class="All Theaters" style="margin-top : 50px;">
                            <thead>
                                <td>#</td>
                                <td>Booked by</td>
                                <td>Email</td>
                                <td>Movie</td>
                                <td>Theater</td>           
                                <td>Date</td>
                                <td>Time</td>                     
                                <td>Box Number</td>
                                <td>Payment</td>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($con, "SELECT * FROM bookings,filmHalls,nowShowing WHERE nowShowing.id=bookings.movieId AND filmHalls.id=bookings.hallId");
                                    if(mysqli_num_rows($query) > 0){
                                        $loop = 1;
                                        while($row = mysqli_fetch_assoc($query)){
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
                                                    <td>'.$row['elderTickets'].'</td>
                                                    <td>'.$row['childTickets'].'</td>
                                                    <td>Rs.'.$row['paid'].'.00</td>
                                                </tr>';
                                                ++$loop;
                                            }
                                        }
                                    }
                                    else{
                                        echo "<tr><td colspan='6' style='text-align : center; font-size : 1rem;'>No Bookings Availble to Show.</td></tr>";
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                    </div>
                </div>
            </div>    
        </div>
    </body>    
</html>