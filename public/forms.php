<!doctype html>
<html>
	<head>
		<title>Challenge Homework Day 2</title>
	<body>	
		<h1>GET</h1>
			<?php var_dump($_GET);?>

			<h1>POST</h1>
			<?php var_dump($_POST);?>	

		<form method="GET" action="/forms.php">
			<h2>Search</h2>
				<p>
					<label for="Search">Search</label>
					<input id="Search" name="Search" type="text" placeholder="In Search Of?">
				</p>
				<p>	<input type="submit" value="What now?"</p>
		</form>	

		<form method="POST" action="/forms.php">
			<h2>Log-In Form</h2>
				<p>
					<label for="log_in_username">Username</label>
					<input id="log_in_username" name="log_in_username" type="text" placeholder="Enter Username" required autofocus> 
				</p>
				<p>
					<label for="log_in_password">Password</label>
					<input id="log_in_password" name="log_in_password" type="Password" placeholder="Enter Password">
				</p>
					<p>	<input type="submit" value="Log In"</p>
		</form>	

		<form method="POST" action="/forms.php">
			<h2>Sign-Up Form</h2>
				<p>
					<label for="Name">Name</label>
					<input id="Name" name="Name" type="text" placeholder="Enter Name">
				</p>
				<p>	<label for="Email">Email</label>
					<input id="Email" name="Email" type="text" placeholder="Enter Email">
				</p>
				<p>
					<label for="sign_up_username">Username</label>
					<input id="sign_up_username" name="sign_up_username" type="text" placeholder="Enter Username">
				</p>
				<p>
					<label for="sign_up_password">Password</label>
					<input id="sign_up_password" name="sign_up_password" type="Password" placeholder="Enter Password">
				</p>
				<p>	<input type="submit" value="Send NOW!!"</p>
		</form>

		<form method="POST" action="/forms.php">
			<h2>Contact-Me</h2>
				<p>
					<label for="From">From</label>
					<input id="From" name="From" type="text" placeholder="Who are you?">
				</p>
				<p>
					<label for="Address">Address</label>
					<input id="Address" name="Address" type="text" placeholder="Where are you?">
				</p>
				<p>
					<label for="Subject">Subject</label>
					<input id="Subject" name="Subject" type="Subject" placeholder="What's your beef?">
				</p>
				<p>	<input type="submit" value="Hurry the frell up!"</p>
		</form>
	</body>
</html>