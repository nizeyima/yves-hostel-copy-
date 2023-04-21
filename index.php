<?php include 'yves.php';?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
      /* Style the navigation bar */
      .navbar {
        background-color: #333;
        overflow: hidden;
      }
      
      /* Style the links inside the navigation bar */
      .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
      
      /* Change color on hover */
      .navbar a:hover {
        background-color: #ddd;
        color: yellowgreen;
      }
      
      /* Active link */
      .active {
        background-color: #4CAF50;
        color: blue;
      }
      
      /* Style the welcome message */
      .welcome-message {
        text-align: center;
        margin-top: 50px;
        font-size: 24px;
      }
    </style>
  </head>
  <body>
    <div class="navbar">
      <a href="registration.php" class="active">Registration</a>
      <a href="login.php">Login</a>
    </div>
    </br> </br> </br> </br> </br> </br> </br>
    <div class="welcome-message">
  <?php
    session_start();
    if (isset($_SESSION['username'])) {
      echo "Welcome, " . $_SESSION['username'];
    } else {
      echo "Welcome to hiltop hostel!";
    }
  ?>
</div>

    
   

    <style>
  /* Style the body with the background image */
  body {
    background-image: url('hostel.png');
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  /* Style the footer */
  .footer {
    background-color: black;
    color: white;
    text-align: center;
    padding: 20px;
    position: absolute;
    bottom: 0;
    width: 100%;
  }
</style>

<body>
  <div class="navbar">
    <!-- your navigation bar code here -->
  </div>
  
  <div class="welcome-message">
    <!-- your welcome message code here -->
  </div>
  
  <div class="profile">
    <!-- your profile code here -->
  </div>
  
  <div class="footer">
    &copy; 2023 Bugema University
  </div>
</body>

  </body>
</html>
