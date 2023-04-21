<?php
// Include yvette.php file to establish database connection
session_start();
include 'yves.php';



if (isset($_POST['username']) && isset($_POST['password'])) {
  // Retrieve the user from the database
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE (username='$username' OR email='$username') AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    // Login successful, store user data in session and redirect to dashboard
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    header('Location: dashboard.php');
    exit();
  } else {
    // Login failed, display error message
    echo "Invalid username/email or password.";
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <br><br>
  <h1 style="text-align: center;">NIZEYIMANA YVES</h1>
  <hr>
  <br><br>
    <h2 style="text-align: center;">Login</h2>
    <form method="POST" action="login.php" style="text-align: center; font-size: 150%">
  <label for="username">Username/Email:</label>
  <input type="text" id="username" name="username" placeholder="Enter your username or email"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" placeholder="Enter your password">
<br><br>
      <input type="submit" value="Login" style="
        color: #f2f2f2;
        text-align: center;
        padding: 4px 4px;
        text-decoration: none;
        background-color: #4CAF50;
        border-radius: 20px;
        width: 100px;
        height:30px">
    </form> <br><br>
    <p style="text-align: center;">
    <a href="index.php" style="display: inline-block; text-align: center; color: #f2f2f2; padding: 6px 12px; text-decoration: none; background-color: black; border-radius: 20px; width: 100px; height: 20px;">Back to Home</a>
    <a href="registration.php" style="display: inline-block; color: #f2f2f2; padding: 6px 12px; text-decoration: none; background-color: #4CAF50; border-radius: 20px; width: 100px; height: 15px; margin-right: 10px;">Register here</a>  
    <a href="reset_password.php" style="display: inline-block; color: #f2f2f2; padding: 6px 12px; text-decoration: none; background-color: black; border-radius: 20px; width: 100px; height: 20px; margin-right: 10px;">Reset password</a>
    
</p>
<br>

  <?php include 'footer.php';?>
  </body>
</html>
