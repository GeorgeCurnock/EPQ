<html>
    <head>
      <link rel="stylesheet" type="text/css" href="../Styles2.css">  
    </head>
    <body>
     <body>
        <div id="wrapper">
            <div id="content">
                <?php include '../Pages/Header.php' ?>
                <?php include "../Pages/LoginBox.php" ?>
                

<?php


error_reporting(E_ALL ^ E_DEPRECATED);

$host = "mysql.hostinger.co.uk";
$password = "website";
$username = "u758334742_root";
$dbname = "u758334742_epq";
$tblname = "profile";


mysql_connect("$host", "$username", "$password") or die("Cannot connect");
mysql_select_db("$dbname") or die("cannot select DB");

$myusername = $_POST['myuser'];
$mypassword = $_POST['mypass'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql ="SELECT * FROM $tblname WHERE Username ='$myusername' and Password = '$mypassword'";
$result=mysql_query($sql);
    
$count =  mysql_num_rows($result);

if($count==1){
   $_SESSION["myusername"] = $myusername;
   $_SESSION["mypassword"] = $mypassword;
   header("location:../Login/LoginSuccess.php");
}
else {
    ?>
                <div id="ContentArea">
      Wrong Username or Password 
    
    </div> 
                </div>
        
        </div>
         <?php include "../Pages/Footer.php" ?>
    </body>
</html>
 <?php
}
?>



