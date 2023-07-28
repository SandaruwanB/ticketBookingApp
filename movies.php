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
                    <div class="user">
                        <img src="sources/img/addmin.jpg" alt="">
                    </div>
                </div>
                <div class="tables">
                    <div class="all-movie">
                        <div class="heading">
                            <h2>All Movies</h2>
                            <a href="movie_reg.php" class="btn">Add New</a>
                        </div>
                        <table class="All Movies">
                            <thead>
                                <td>Movie ID</td></lable>
                                <td>Movie Name</td>
                                <td>Release Date</td>
                                <td>Director</td>
                                <td>Actor</td>
                                <td>Actress</td>
                                <td>Details</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>101</td>
                                    <td>Gajaman</td>
                                    <td>2023/01/20</td>
                                    <td>Chanaka Perera</td>
                                    <td>Suneth Chithrananda</td>
                                    <td>Dasun Pathirana</td>
                                    <td>
                                        <a href="#" class="btn1"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn1"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn1"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
        
    </body>
    
</html>