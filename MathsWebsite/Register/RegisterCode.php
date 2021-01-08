<?php

error_reporting(E_ALL ^ E_DEPRECATED);


session_start();
$host = "mysql.hostinger.co.uk";
$password = "website";
$username = "u758334742_root";
$dbname = "u758334742_epq";
$tblname = "profile";

mysql_connect("$host", "$username", "$password") or die("Cannot connect");
mysql_select_db("$dbname") or die("cannot select DB");

$name = $_POST["name"];
$myusername = $_POST["username"];

if($myusername == ""){
echo"You need to enter a username"
    . "<a href=RegisterPage.php>Retry</a>";}
else{
$mypassword = $_POST["password"];
$password2 = $_POST["password2"];
$age = $_POST["age"];
$email = $_POST["email"];
$interests = $_POST["Interests"];
$user_type = "User";



$name = stripslashes($name);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$password2 = stripslashes($password2);
$age = stripslashes($age);
$user_type = stripslashes($user_type);
$email = stripslashes($email);
$interests = stripslashes($interests);
$name = mysql_real_escape_string($name);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$password2 = mysql_real_escape_string($password2);
$age = mysql_real_escape_string($age);
$user_type = mysql_real_escape_string($user_type);
$email = mysql_real_escape_string($email);
$interests = mysql_real_escape_string($interests);


$sql ="SELECT * FROM $tblname WHERE username = '$myusername' and password = '$mypassword'";
$result=mysql_query($sql);
$count=mysql_fetch_row($result);

if(count($count) === 1){
    if($mypassword == $password2){
 
    $sql2 = "INSERT INTO $tblname (Name, Username, Password, Age, Email, Interests, UserType )
    VALUES ('$name', '$myusername', '$mypassword', '$age', '$email', '$interests', '$user_type' )";
    $result2 = mysql_query($sql2);
    $_SESSION["myusername"] = $myusername;
    $_SESSION["mypassword"] = $mypassword;
    echo "<meta http-equiv='refresh' content=0;url='../Pages/TemplateHomePage.php'>";
    }
else {
    echo"Passwords do not match"
    . "<a href=RegisterPage.php>Retry</a>";
}}
else {
echo "Sorry Record already exists";
echo "<meta http-equiv='refresh' content=2;url='../Pages/TemplateHomePage.php'>";
}}
?>