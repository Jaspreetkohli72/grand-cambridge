<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Grand Cambridge</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="reading.php">Reading</a></li>
          <li><a href="writing.php">Writing</a></li>
          <li><a href="listening.php">Listening</a></li>
          <li><a href="speaking.php">Speaking</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      ';

      if(!$loggedin){
      echo '<a href="login.php" class="log-in-btn">Log in</a>';
      }
      if($loggedin){
      echo '<a href="logout.php" class="log-in-btn">Log Out</a>';
    }
       
      
    echo '</div>
  </header>';
?>