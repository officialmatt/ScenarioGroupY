<?php
session_start();
$oldPW = $_POST["currentPassword"];
$newPW = $_POST["newPassword"];
$name = $_SESSION["name"];

changePassword($oldPW, $newPW, $name);




# query database to see if user typed the right password
function changePassword($oldPW, $newPW, $name) {
	$db = new PDO("mysql:dbname=simpsons", "root", "");


	$rows = $db->query("SELECT * FROM students WHERE name = 'Bart'");
	foreach ($rows as $row) {

	$realOldPw= $row["pwd"];

	}

	if ($realOldPw == $oldPW)
	{

		$count = $db->exec("UPDATE students SET pwd= '$newPW'  WHERE name='$name'");
		print "Password changed!";
		header( "refresh:1;url=grades.php" );

	}

	else {
		print "Passwords do not match, please try again!";
		header( "refresh:2;url=grades.php" );

		//print $row;
	}

}
?>
