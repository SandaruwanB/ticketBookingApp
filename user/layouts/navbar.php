<?php
  $url = $_SERVER['REQUEST_URI'];
?>

<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container-fluid">
    <a class="navbar-brand fs-4 p-0 fw-bold text-white text-uppercase" href="index.php"><i class="fa fa-video-camera me-1 col_wight fs-1 align-middle"></i><span style="color : #fFF; font-size: 2rem; text-shadow: 2px 1px;">Cine</span><span style="color : #fFF; font-size: 2rem; text-shadow: 2px 1px;">ma</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0">

        <li class="nav-item">
        <?php 
          if($url == "/moviebooker/user/"){
            echo '<a class="nav-link active" aria-current="page" href="/moviebooker/user/">Home</a>';
          }
          else{
            echo '<a class="nav-link" aria-current="page" href="/moviebooker/user/">Home</a>';
          }
        ?>
        </li>
		    <li class="nav-item">
        <?php 
          if($url == "/moviebooker/user/theotors.php"){
            echo '<a class="nav-link active" aria-current="page" href="/moviebooker/user/theotors.php">Theaters</a>';
          }
          else{
            echo '<a class="nav-link" aria-current="page" href="/moviebooker/user/theotors.php">Theaters</a>';
          }
        ?>
        </li>
		
		    <li class="nav-item">
        <?php 
          if($url == "/moviebooker/showTime.php"){
            echo '<a class="nav-link active" aria-current="page" href="/moviebooker/showTime.php">Rates & show times</a>';
          }
          else{
            echo '<a class="nav-link" aria-current="page" href="/moviebooker/showTime.php">Rates & show times</a>';
          }
        ?>
        </li>
		
		    <li class="nav-item">
          <?php 
            if($url == "/moviebooker/buy_tickets.php"){
              echo '<a class="nav-link active" aria-current="page" href="/moviebooker/buy_tickets.php">Buy tickets</a>';
            }
            else{
              echo '<a class="nav-link" aria-current="page" href="/moviebooker/buy_tickets.php">Buy tickets</a>';
            }
          ?>
        </li>	
        
        <li class="nav-item">
          <?php 
            if($url == "/moviebooker/user/complain.php"){
              echo '<a class="nav-link active" aria-current="page" href="/moviebooker/user/complain.php">complain</a>';
            }
            else{
              echo '<a class="nav-link" aria-current="page" href="/moviebooker/user/complain.php">complain</a>';
            }
          ?>
        </li>	
      </ul>
	    <ul class="navbar-nav mb-0 ms-auto">
        <li class="nav-item ms-3">
              <a class="nav-link button" data-bs-toggle="modal" data-bs-target="#signup-modal" href="#">SIGN UP</a>
        </li>
      </ul>
    </div>
  </div>
</nav>