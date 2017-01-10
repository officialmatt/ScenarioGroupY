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
			<img src="simpsons.png" alt="logo" />
		</div>

		<h1>Springfield Elementary Web Site</h1>




			<?php
			session_start();
			$name = $_SESSION["name"];
			?>

			<h2>Hello <? print $name; ?> </h2>
			<br>

			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Change Password</button>

						<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Change your password</h4>
			      </div>
			      <div class="modal-body">
							<form id="passwordchange" action="change_password.php" method="post" >
								<fieldset>
									<dl>
										<dt>Current Password</dt>
										<dd>
											<input type="password" name="currentPassword" />
										</dd>
										<dt>New Password</dt>
										<dd>
											<input type="password" name="newPassword" />
										</dd>
									</dl>
									<input type="submit" value="Change" />
								</fieldset>
							</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>




	</body>
</html>
