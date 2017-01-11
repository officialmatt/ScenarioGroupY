<!DOCTYPE html>
<html>
	<!--
	CSE 190 M, Spring 2012
	-->
	<head>
		<title>Blog Posting</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="simpsons.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="logoarea">
			<!-- <img src="simpsons.png" alt="logo" /> -->
		</div>

		<h1>Blog Posting</h1>
		<br>
		<br>

		<ul>
			<!-- Comment out the register page. It doesn't exist.
			<li><a href="register.php">Sign Up for an Account</a></li>
			-->
			<div class = "buttons">
			<a href = "login.php" > <button type="button" class="btn btn-info btn-lg">Log In</button> </a>
			<a href = "signup.php" > <button type="button" class="btn btn-info btn-lg">Sign Up</button> </a>
		</div>


		</ul>
		<div class = "snippets" >
			<h1> Our Users Blogs </h1>
		<table>
			<?
			$query = "SELECT u.name, s.snippet, s.dateTime FROM students AS u JOIN snippets AS s ON u.id=s.user_id GROUP BY u.name";
			$db = new PDO("mysql:dbname=simpsons", "root","");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$rows = $db->query($query);
			foreach ($rows as $row) {
				?>
				<tr>
					<td>
						<?= $row["name"] ?>
					</td>

					<td>
						<?= $row["snippet"] ?>
					</td>

				<td>
					<?= $row["dateTime"] ?>
				</td>
		</tr>
		<?php
	}
	?>
		</table>
	</div>
	</body>
</html>
