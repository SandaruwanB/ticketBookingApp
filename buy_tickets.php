<?php
  include_once('./database/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Tickets</title>
    <link href="./sources/css/bootstrap.min.css" rel="stylesheet" >
	  <link href="./sources/css/font-awesome.min.css" rel="stylesheet" >
	  <link href="./sources/css/global.css" rel="stylesheet">
	  <link href="./sources/css/index.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	  <script src="./sources/js/bootstrap.bundle.min.js"></script>
    
    <style>
    
        body{
          font-family: 'Lato', sans-serif;
        }

        ul{
          list-style:none;
          padding:0;
        }

        h1,h2,h3,h4,h5{
          font-weight:bold; 
        }

        h6{
          font-weight:normal; 
        }

        p{
          font-size:50px; 
        }

        .custom-bg{
          background: #ff4444;
          color:#fff;
          display: inline-block;
          transition: 0.3s;
          padding:10px 22px!important;
          border-radius:10px;
          border:1px solid #ff4444;
        }

        .custom-bg:hover{
          background:#000;
          border:1px solid #000;
          color:#fff;!important;
        } 

        .button {
          background: #000;
          color:#fff;
          display: inline-block;
          transition: 0.3s;
          padding:13px 40px!important;
          border-radius:10px;
          border:1px solid #ff4444;
          margin-left: 80px;
        }

        .button3 {
          background-color: white; 
          color: black; 
          border: 2px solid #f44336;
        }

        .button3:hover {
          background-color: #f44336;
          color: white;
        }

        #search{
          width : 500px;
          padding : 10px 50px;
          border-radius : 10px;
          border : 2px solid #091C7A;
        }
        .fa-search{
          position : absolute;
          top : 10px;
          font-size : 1.5rem;
          left : 20px;
        }

        @media screen and (max-width : 500px) {
          #search{
            width : 380px;
          }
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
    <section id="header">

      <?php
        include_once("./layouts/navbar.php");
      ?>

    </section>

    <img src="./sources/img/wall_img.jpg" width="85%" height="350px" style="object-fit : cover;">

    <section id="upcome" class="p_3 bg-light">
      <div class="container-xl">
        <div class="row upcome_1 text-center">
          <div class="col-md-12">
            <h3 class="mb-0">BOOK TICKETS</h3>
            <hr class="line me-auto ms-auto">
          </div>
        </div>
      </div>
      <div class="container">
          <form>
            <div class="form-group d-flex justify-content-center" style="position : relative;">
              <div class="mt-4 d-inline" style="position : relative;">
                <input type="text" id="search" name="search" placeholder="Search Movie..." required>
                <i class="fa fa-search" aria-hidden="true"></i>
              </div>
            </div>
          </form>
        </div>
        <br><br>
    </section>

    <section id="movieContent" class="p_3 bg-light">
		</section>
    
    <script src="./sources/js/jquery.min.js"></script>
    <script>
      window.onload = loadPage();
      window.onscroll = function() {myFunction()};
      let movie = "";
      let hall = "";
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

      $('#search').on('keyup', function () {
        const value = $('#search').val();
        if(value == ""){
          loadPage();
        }
        else{
          $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
              searchMovie : true,
              text : value,
            },
            dataType: "text",
            success: function (response) {
              $('#movieContent').html(response);
            }
          });
        }
      });

      function loadPage(){
        $.ajax({
          type: "post",
          url: "/moviebooker/database/actions.php",
          data: {
            getLatestMovies : true,
          },
          dataType: "text",
          success: function (response) {
            $('#movieContent').html(response);
          }
        });
      }


      function bookSeat(id,hallid){
        movie = id;
        hall = hallid;

        $.ajax({
          type: "post",
          url: "/moviebooker/database/actions.php",
          data: {
            getBookingDatesTimes : true,
            id : id,
          },
          dataType: "text",
          success: function (response) {
            const value = JSON.parse(JSON.parse(response));
            let str =  '<div id="loader" class="d-none"></div><div id="data"><h5 style="color : #000;">CHOOSE DATE TIME</h5>';
                str += '<div class="mt-4 text-center" style="width : 76%; margin-left : 12%;">';
                str += '<div class="mt-3 mb-1 text-start">';
                str += '<span class="text-start d-block">Date</span>';
                str += '<select class="form-control" id="date">';
                str += '<option>Choose Date</option>';
                for(let i=0; i<value.length; i++){
                  str += '<option value="'+ value[i]['date'] +'">'+ value[i]['date'] +'</option>';
                }
                str += '</select>'
                str += '<span class="text-start" style="color : red; font-size : 12px;" id="setErr"></span>';
                str += '</div>';
                str += '<div class="mt-3 mb-1 text-start">';
                str += '<span class="text-start mt-3 mb-0 d-block">Time</span>';
                str += '<select class="form-control" id="time">';
                str += '<option>Choose Time</option>';
                for(let i=0; i<value.length; i++){
                  str += '<option value="'+ value[i]['time'] +'">'+ value[i]['time'] +'</option>';
                }
                str += '</select>';
                str += '<span class="text-start" style="color : red; font-size : 12px;" id="setErr1"></span>';
                str += '</div>';
                str += '</div>';
                str += '</div>';
                str += '<div class="mt-3 text-end p-2">'; 
                str += '<button class="btn btn-md btn-primary" onclick="bookNow()">Book Now</button>';
                str += '</div></div>';

                $('#myModal').css("display", "flex");
                $('#content').html(str);
          }
        });
      }

      function bookNow(){
        const date = $('#date').val();
        const time = $('#time').val();
        window.location.replace("/moviebooker/book.php?tid="+ hall +"&fid="+ movie +"&date="+ date +"&time="+ time);
      }

      $('.close').click(function (e) { 
        e.preventDefault();
        $('#myModal').css("display", "none");
      });
    </script>
    
  </body>
  
</html>