<?php
$name = $_POST["name"];
$email = $_POST["email"];
$pw = $_POST["password"];
$id= 777;


sign_up($name,$email,$pw, $id);

# query database to see if user typed the right password
function sign_up($name,$email, $pw, $id) {
	$db = new PDO("mysql:dbname=simpsons", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$db->query("INSERT INTO students VALUES (777, $name, $email, $pw)");

  // prepare sql and bind parameters
  $stmt = $db->prepare("INSERT INTO students (id, name, email, password)
  VALUES (:id, :name, :email, :password)");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $pw);

  $stmt->execute();

  }
?>
