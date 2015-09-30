<!doctype html>
<html>
	<head>
		<title>My First HTML Form</title>
	</head>
	<body>
		<form method="POST" action="/my_first_form.php">
						<p>
							<label for="username">Username</label>
							<input id="username" name="username" type="text" placeholder= "Enter your username">
						</p>
						<p>
							<label for="password">Password</label>
							<input id="password" name="password" type="password" placeholder= "Enter your password">
						</p>
						<p>
							<input type="submit" value="Log In">
						</p>
					</form>

		<form method="POST" action="my_first_form.php">

						<h3>User Login<h3>

						<p>
							<label for="user_name">User Name</label>
							<input id="user_name" name="user_name" type="text">
						</p>
						<p>
							<label for="password">Password</label>
							<input id="password" name="password" type="password">
						</p>
						<p>
							<input type="submit" value="Log In">
						</p>

						<h3>Compose an Email<h3>

						<input type="checkbox" id="compose_an_email" name="compose_an_email" value-"yes" checked>
						<label for="compose_an_email">Enter Email message here!</label>
						
						<p>
							<label for="to">To</label>
							<input id="to" name="to" type="text">
						</p>
						<p>	
							<label for="from">From</label>
							<input id="from" name="from" type="text">
						</p>
						<p>
							<label for="subject">Subject</label>
							<input id="subject" name="subject" type="text">
						</p>
						<p>
							<label for="body">Body</label>
							<input id="body" name="body" type="text">
						</p>
						<p>
							<input type="submit" value="Send">
						</p>

						<h3>Multiple Choice Test<h3>

						<p>What is your favorite Star Wars movie?</p>

						<label>
							<input type="radio" name="Episode[]" value="The Phantom Menace"> The Phantom Menance</label>
						<label>
							<input type="radio" name="Episode[]" value="Attack of the Clones"> Attack of the Clones</label>
						<label>
							<input type="radio" name="Episode[]" value="Revenge of the Sith"> Revenge of the Sith</label>

						<p>
							<label for="character">Who is your favorite Star Wars character? </label>
							<select id="character" name="character[]" multiple>
								<option value="Luke_Skywalker">Luke Skywalker</option>
								<option value="Princess_Leia">Princess Leia</option>
								<option value="Han_solo">Han Solo</option>
							</select>
						</p>
						<p>
							<input type="submit" value="Submit">
						</p>

					<form method="POST" action="/my_first_form.php">
						<h3>Select Testing<h3>

							<p>
								<label for="do_you_like_to_test?">Do you like to test?</label>
							</p>
							<label for="yes_or_no">Select Yes or No: </label>
							<select id-"yes_or_no" name="yes_or_no">
								<option value="1">Yes</option>
								<option value="0" selected >No</option>
							</select>
							<p>
								<input type="submit" value="Push">
							</p>

		<?php
  			var_dump($_GET);
 			var_dump($_POST);
		?>
	</body>
</html>		