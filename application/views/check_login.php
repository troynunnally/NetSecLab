<?php
//HTML code
$username = 'root';
$password = 'root';
$host = 'localhost';
$database  = 'users';
$passwordtable = 'users';
$redirectURL = '/index.php/site';
//SQL credentials
/*
	Get Username POST data
*/
if(isset($_POST['myusername'])) {
	$myusername=$_POST['myusername'];
} else {
	die(" Please enter your username <br /> </body></html>"); //Redirect, error message, back button
}

/*
	Get Password POST data
*/
if(isset($_POST['mypassword'])) {
	$mypassword=$_POST['mypassword'];
} else {
	die("$registration_redirect Please enter your password <br /> $registration_back_button </body></html>"); //Redirect, error message, back button
}
/*
	Connecting to MySQL database
*/
$link = mysqli_connect($host, $username, $password, $database) or die ("ERROR, could not establish connection to database in check_login.php, please contact the webmaster");
/*
	Force charset to UTF8 for security purposes
*/
if (!mysqli_set_charset($link, "utf8"))
    printf("Error loading character set utf8: %s\n", mysqli_error($link));

/*
	Prevent SQL injection
*/
/////////  Enable if magicquotes used ////////
//$myusername = stripslashes($myusername);  //
//$mypassword = stripslashes($mypassword);  //
//////////////////////////////////////////////
$myusername = mysqli_real_escape_string($link, $myusername);
$mypassword = mysqli_real_escape_string($link, $mypassword);
 $saltedhash = md5($mypassword); //our passwords are md5 hashed
/*
	Authenticate user
*/
$sql = "SELECT userid, pass FROM $passwordtable WHERE userid='$myusername' AND pass='$saltedhash'";
$result=mysqli_query($link,$sql) or die(mysqli_error($link));
$count=mysqli_num_rows($result);
if($count==1) {
	echo("validated");
	//Start Session and Store username/password
	session_start();
	$_SESSION['myusername']=$myusername;
	$_SESSION['mypassword']=$mypassword;


	header("location:$redirectURL");
} else {
	echo('
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
		<html>
		<head>
		<meta http-equiv="REFRESH" content="3;url=/index.php/login"></HEAD>   
		<BODY>
		Invalid/ wrong username or password... <br> Please try again. You will be redirected in 3 seconds.
		</BODY>
		</HTML>');
}
/*
	Done with MySQL, closing connection
*/
mysqli_close($link);
?>
