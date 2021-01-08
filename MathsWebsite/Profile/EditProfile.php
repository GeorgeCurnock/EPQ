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

$myusername = $_SESSION['myusername'];
$name = $_POST['name'];
$mypassword = $_POST['mypassword'];
$mypassword2 = $_POST['mypassword2'];
$email = $_POST['email'];
$interests = $_POST['interests'];
$age = $_POST['age'];




$mypassword = stripslashes($mypassword);
$mypassword2 = stripslashes($mypassword2);
$name = stripslashes($name);
$email = stripslashes($email);
$interests = stripslashes($interests);
$age = stripslashes($age);
$mypassword = mysql_real_escape_string($mypassword);
$mypassword2 = mysql_real_escape_string($mypassword2);
$name = mysql_real_escape_string($name);
$email = mysql_real_escape_string($email);
$interests = mysql_real_escape_string($interests);
$age = mysql_real_escape_string($age);

if($mypassword == $mypassword2){
    $sql = "Update $tblname"
            . " SET Name='$name', Password='$mypassword', Email='$email', Interests='$interests', Age='$age'
        WHERE Username = '$myusername'";
    $result = mysql_query($sql) or die("sql error");
    echo "Update Successful<br>";
    echo "<meta http-equiv='refresh' content=0;url='ViewProfile.php>";
}
else{
    echo "Passwords dont match";
}

    
    
?>
