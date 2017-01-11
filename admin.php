<!DOCTYPE html>
<html>
	<head>
		<title>Springfield Elementary School</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link href="simpsons.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="logoarea">
			<!-- <img src="simpsons.png" alt="logo" /> -->
		</div>


		<table>
			<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Admin?</th><th>Edit</th></tr>

			<?php
			session_start();
			$name = $_SESSION["name"];
			?>
			<h1>Hello, <? print $name; ?> - Admin Page </h1>

			<div class="buttons" >
			<a href = "start.php" > <button type="button" class="btn btn-info btn-lg">Log Out</button> </a>
			<?
			$query = "SELECT *
			          FROM students";
			$db = new PDO("mysql:dbname=simpsons", "root", "");
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$rows = $db->query($query);
			foreach ($rows as $row) {
				?>

				<tr>
					<td>
						<?= $row["id"] ?>
					</td>

					<td>
						<?= $row["name"] ?>
					</td>

				<td>
					<?= $row["email"] ?>
				</td>

				<td>
					<?= $row["pwd"] ?>
				</td>

			<td>
				<?= $row["isAdmin"] ?>
			</td>

			<td>

				<form id="editInfo" action="edit_info.php" method="post" >
					<fieldset>
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
						<input type="hidden" name="name" value="<?php echo $row['name']; ?>">
						<input type="hidden" name="email" value="<?php echo $row['email']; ?>">
						<input type="hidden" name="pwd" value="<?php echo $row['pwd']; ?>">
						<input type="hidden" name="isAdmin" value="<?php echo $row['isAdmin']; ?>">

						<input type="submit" value="Edit" />
					</fieldset>
				</form>




			</td>
		</tr>

				<?php
			}
			?>

		</table>
	</div>



	</body>
</html>
