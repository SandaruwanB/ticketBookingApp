<?php
    include_once("../database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../sources/css/style2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>CINEMA : current movies</title>
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
                            <h2>Current Movies</h2>
                            <a href="/moviebooker/admin/currentMovieAdd.php" class="add-btn btn">Add Current Movie</a>
                        </div>
                        <table class="All Theaters" style="margin-top : 50px;">
                            <thead>
                                <td>#</td>
                                <td>Film Name</td>
                                <td>Duration</td>
                                <td>Releasing Date</td>
                                <td>Language</td>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($con, "SELECT * FROM nowShowing");
                                    if(mysqli_num_rows($query) > 0){
                                        $loop = 1;
                                        while($row = mysqli_fetch_assoc($query)){
                                            echo '<tr>
                                                <td>'.$loop.'</td>
                                                <td>'.$row['filmName'].'</td>
                                                <td>'.$row['duration'].'</td>
                                                <td>'.$row['releasingDate'].'</td>
                                                <td>'.$row['language'].'</td>
                                                <td>
                                                    <a href="#" class="btn1"><i class="fa fa-eye"></i></a>
                                                    <a href="/moviebooker/admin/customerEdit.php?uid='.$row['id'].'" class="btn1"><i class="fa fa-edit"></i></a>
                                                    <a href="/moviebooker/database/deluser.php?ufid='.$row['id'].'" class="btn1"  style="cursor : pointer;background : transparent; outline : none; border : none;"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>';
                                            ++$loop;
                                        }
                                    }
                                    else{
                                        echo '<tr><td colspan="6" style="text-align : center; font-size : 1rem;">No Movies Available.</td></tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </body>    
</html>