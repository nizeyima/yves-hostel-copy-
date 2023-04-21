<!DOCTYPE html>
<html>
<head>
	<title>Hostel Dashboard</title>
	<!-- Include CSS and JS files -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Navigation Bar -->
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Rooms</a></li>
			<li><a href="#">Bookings</a></li>
			<li><a href="#">Guests</a></li>
			<li><a href="#">Maintenance</a></li>
			<li><a href="#">Finances</a></li>
			<li><a href="login.php">Logout</a></li>
		</ul>
	</nav>

	<!-- Dashboard Content -->
	<div class="dashboard-content" style="
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
">
		<h1>Welcome to Hostel Dashboard</h1>
        <h2>NIZEYIMANA YVES</h2>
		<p>Here are some quick stats about your hostel:</p>
		<ul>
			<li>Total Rooms: XX</li>
			<li>Available Rooms: XX</li>
			<li>Occupied Rooms: XX</li>
			<li>Upcoming Bookings: XX</li>
			<li>Revenue: $XXX</li>
		</ul>
	</div>
    <?php include 'footer.php';?>
</body>
</html>
