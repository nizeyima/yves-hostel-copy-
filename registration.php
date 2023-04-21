<?php
include 'yves.php';
error_reporting(0);
if(isset($_POST['submit']))

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Extract form data using PHP $_POST superglobal

  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $phone_number = $_POST['phone_number'];
  $country = $_POST['country'];
  $course = $_POST['course'];


  // Prepare SQL query to insert data into database
  $query=mysqli_query($conn,"INSERT INTO users(name, username, email, password, dob, gender, phone_number, country, course)
  VALUES ('$name', '$username', '$email', '$password', '$dob', '$gender', '$phone_number', '$country', '$course')");

  $msg="Registration successfull. Now You can login !";


  // Redirect user to login page after successful registration
if ($query) {
  header('Location: login.php');
  exit();
}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body style="text-align: center;">
    <h1>NIZEYIMANA YVES</h1>
    <hr>
<form class="form-login" method="post">
		        <h2 class="form-login-heading">Hostel Registration</h2>
		        <p style="padding-left: 1%; color: green">
		        	<?php if($msg){
echo htmlentities($msg);
		        		}?>


		        </p>
         

      <!--<label for="profile_photo">Attach Profile Photo:</label>
      <input type="file" id="profile_photo" name="profile_photo">-->

    
<div class="form-container">
  <div class="form-box box1">
    <!-- First half of the form goes here -->
    <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name"><br><br>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Choose a username"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email"><br><br>
      <label for="password">Password:</label>
<input type="password" id="password" name="password" placeholder="Choose a password"><br><br>
      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" placeholder="YYYY-MM-DD">
  </div>
 <div class="form-box box2">
    <!-- Second half of the form goes here -->
    <label for="gender">Gender:</label>
      <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select><br><br>
    <label for="phone_number">Phone Number:</label>
     <input type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number"><br><br>

      <label for="country">Country:</label>
      <input type="text" id="country" name="country" placeholder="Enter your country"><br><br>
      <label for="course">Course:</label>
      <input type="text" id="course" name="course" placeholder="Enter your course"><br></br>
      <button type="submit" name="submit" value="Register" style="background-color: green; color: white; border-radius: 20px; width: 90px; height: 30px;"><i class="fa fa-user"></i> Register</button>
              </br> <br>
              
		            
              <div class="registration">
Registered now<br/>
		            </div>
		        </div>

  </div>
</div>

		      </form>	  	
	  	</div>
	  </div>
<p style="text-align: center; font-size: 20px;">
  <a href="./login.php" style="display: inline-block; text-align: center; color: #fff; padding: 6px 6px; text-decoration: none; background-color: #4CAF50; border-radius: 20px; width: 90px; height: 30px;">Login </a>
  <a href="index.php" style="display: inline-block; text-align: center; color: #fff; padding: 6px 6px; text-decoration: none; background-color: black; border-radius: 20px; width: 90px; height: 30px;"> Home</a>
</p>

<br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>

</body>
</html>