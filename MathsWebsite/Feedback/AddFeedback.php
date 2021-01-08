<?php

error_reporting(E_ALL ^ E_DEPRECATED);

    session_start(); 

if(!isset($_SESSION["myusername"])){
    echo "Session not loaded";
    echo "<meta http-equiv='refresh' content=2;url='../Pages/TemplateHomePage.php'>";
    exit();
}
$host = "mysql.hostinger.co.uk";
$password = "website";
$username = "u758334742_root";
$dbname = "u758334742_epq";
$tblname = "feedback";

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$dbname")or die("cannot select DB");
$_SESSION["prevpage"] = 'AddFeedback.php';
$myusername = $_SESSION['myusername'];
$answer = $_POST['answer'];
if(strlen($answer) > 300){
    echo 'Response too long';
    echo "<meta http-equiv='refresh' content=2;url='../Pages/About.php'>";
    exit();
}
$datetime = date("d/m/y h:i:s");
$rating = $_POST['rating'];
if($rating > 10){
    echo 'Rating too high';
    echo "<meta http-equiv='refresh' content=2;url='../Pages/About.php'>"; 
    exit();
}

$sql = "INSERT INTO $tblname(Feedback, Username, DateTime, Rating)VALUES('$answer', '$myusername', '$datetime', '$rating' )";
$result = mysql_query($sql);

if($result){
    echo "Entry successful";
    echo "<meta http-equiv='refresh' content=0;url='../Pages/About.php'>";
}
else{
    echo "Error";
}
mysql_close();
?>
    

			