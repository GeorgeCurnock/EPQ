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
$tblname = "forumquestion";

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$dbname")or die("cannot select DB");

$myusername = $_SESSION['myusername'];
$topic = $_POST['topic'];
$detail = $_POST['detail'];
$datetime = date("d/m/y h:i:s");

$sql = "INSERT INTO $tblname(Topic, Detail, Username, DateTime)VALUES('$topic',"
        . " '$detail', '$myusername', '$datetime')";
$result = mysql_query($sql);

if($result){
    echo "<meta http-equiv='refresh' content=0;url='../Forum/MainForum.php>";
}
else{
    echo "Error";
}
mysql_close();
?>
    

