<?php

error_reporting(E_ALL ^ E_DEPRECATED);

session_start();
if(!isset($_SESSION["myusername"])){
    echo "Session not loaded <br>";
    echo "you are not logged in.";
    echo "<meta http-equiv='refresh' content=2;url='../Pages/TemplateHomePage.php'>";
    exit();
}
$host = "mysql.hostinger.co.uk";
$password = "website";
$username = "u758334742_root";
$db_name = "u758334742_epq"; 
$tbl_name="forumanswer"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get value of id that sent from hidden field 
$id=$_POST['id'];

$sql="SELECT MAX(AnswerID) as AnsID FROM $tbl_name";
$result=mysql_query($sql) or die(mysql_error());
if($result){
$rows=mysql_fetch_array($result);
$Maxid = $rows['AnsID'];
$Maxid = $Maxid+1;
}
else {
$Maxid = 1;
}

// get values that sent from form 
$answer = $_POST['Answer']; 
$datetime = date("d/m/y H:i:s"); // create date and time
$myusername = $_SESSION["myusername"];
// Insert answer 

$sql2="INSERT INTO $tbl_name (QuestionID, AnswerID, Username, Answer, DateTime)VALUES('$id', '$Maxid', '$myusername', '$answer', '$datetime')";
$result2=mysql_query($sql2) or die(mysql_error());

if($result2){
echo "<meta http-equiv='refresh' content=0;url='ViewTopic.php?id=$id>";

// If added new answer, add value +1 in reply column 
$tbl_name2="forumquestion";
$sql3="UPDATE $tbl_name2 SET Replies='$Maxid' WHERE QuestionID='$id'";
$result3=mysql_query($sql3) or die(mysql_error());
}
else {
echo "ERROR";}
// Close connection
mysql_close();
?>
		