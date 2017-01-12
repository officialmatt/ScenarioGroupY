<?php
session_start();

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$pw = $_SESSION["password"];
$pwConf = $_SESSION["passwordConfirm"];

$id= 67;






if (checkEqual($pw, $pwConf)) {
	print "Please make sure your passwords are equal";
}
elseif (!checkPassword($pw)) {
	print "Make sure your password follows the rules";
}
else {
	print "You are signed up!";
	sign_up($name,$email,$pw, $id);
}



header( "refresh:2;url=start.php" );

function checkPassword($pw) {
	if ( trim( $pw, 'a..z') != '' && trim( $pw, 'A..Z') != '' && strlen($pw) >= 8 )
{
  /* Password validation passes, do stuff. */
	return True;
}
else {
  /* Password validation fails, show error. */
	return False;
}
}

function checkEqual($pw, $pwConf)
{
	if ($pw == $pwConf){
		return False;
	}
	else {
		return True;
	}
}
# query database to see if user typed the right password
function sign_up($name,$email, $pw, $id) {
	$db = new PDO("mysql:dbname=simpsons", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$db->query("INSERT INTO students VALUES (777, $name, $email, $pw)");

  // prepare sql and bind parameters
  $stmt = $db->prepare("INSERT INTO students (name, email, pwd)
  VALUES ( :name, :email, :pwd)");
  //$stmt->bindParam(':id', $id);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
//	$pw1 = password_hash($pw, PASSWORD_DEFAULT);

  $stmt->bindParam(':pwd', $pw);




	try {
   $stmt->execute();
   // do other things if successfully inserted
} catch (PDOException $e) {
   if ($e->errorInfo[1] == 1062) {
      // duplicate entry, do something else
			print "Please choose a unique username!";
			header( "refresh:2;url=signup.php" );

   }
}




  }
?>
