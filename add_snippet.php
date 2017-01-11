<?php
$snippet = $_POST["snippet"];
$userid= 872;
$isPrivate= 0;



add_snippet($snippet,$userid,$isPrivate);
header( "refresh:2;url=start.php" );


# query database to see if user typed the right password
function add_snippet($snippet,$userid,$isPrivate) {
	$db = new PDO("mysql:dbname=simpsons", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$db->query("INSERT INTO students VALUES (777, $name, $email, $pw)");

  // prepare sql and bind parameters
  $stmt = $db->prepare("INSERT INTO snippets (snippet, user_id, isPrivate)
  VALUES (:snippet, :user_id, :isPrivate)");
  $stmt->bindParam(':snippet', $snippet);
  $stmt->bindParam(':user_id', $userid);
  $stmt->bindParam(':isPrivate', $isPrivate);

  $stmt->execute();


  }
?>
