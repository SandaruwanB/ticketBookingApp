<?php
  $url = $_SERVER['REQUEST_URI'];
?>

<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container-fluid">
    <a class="navbar-brand fs-4 p-0 fw-bold text-white text-uppercase" href="/moviebooker/"><i class="fa fa-video-camera me-1 col_wight fs-1 align-middle"></i><span style="color : #fFF; font-size: 2rem; text-shadow: 2px 1px;">Cine</span><span style="color : #fFF; font-size: 2rem; text-shadow: 2px 1px;">ma</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0">

        <li class="nav-item">
        <?php 
          if($url == "/moviebooker/"){
            echo '<a class="nav-link active" aria-current="page" href="/moviebooker/">Home</a>';
          }
          else{
            echo '<a class="nav-link" aria-current="page" href="/moviebooker/">Home</a>';
          }
        ?>
        </li>
		    <li class="nav-item">
        <?php 
          if($url == "/moviebooker/theaters.php"){
            echo '<a class="nav-link active" aria-current="page" href="/moviebooker/theaters.php">Theaters</a>';
          }
          else{
            echo '<a class="nav-link" aria-current="page" href="/moviebooker/theaters.php">Theaters</a>';
          }
        ?>
        </li>
        <li class="nav-item">
        <?php 
          if($url == "/moviebooker/book.php"){
            echo '<a class="nav-link active" aria-current="page" href="/moviebooker/book.php">Book Tickets</a>';
          }
          else{
            echo '<a class="nav-link" aria-current="page" href="/moviebooker/book.php">Book Tickets</a>';
          }
        ?>      
        <li class="nav-item">
          <?php 
            if($url == "/moviebooker/contact.php"){
              echo '<a class="nav-link active" aria-current="page" href="/moviebooker/contact.php">contact us</a>';
            }
            else{
              echo '<a class="nav-link" aria-current="page" href="/moviebooker/contact.php">contact us</a>';
            }
          ?>
        </li>	
      </ul>
	    <ul class="navbar-nav mb-0 ms-auto">
        <li class="nav-item ms-3">
          <a class="nav-link button" href="/moviebooker/login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>