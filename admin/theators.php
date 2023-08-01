<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../sources/css/style2.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>CINEMA : theoters</title>
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
                            <h2>Theaters</h2>
                            <button href="#" class="add-btn btn">Add New</button>
                        </div>
                        <table class="All Theaters" style="margin-top : 50px;">
                            <thead>
                                <td>Theatre ID</td>
                                <td>Theatre Name</td>
                                <td>Theatre Location</td>
                                <td>Capacity</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>New Empiriyal</td>
                                    <td>Kurunegala</td>
                                    <td>200</td>
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