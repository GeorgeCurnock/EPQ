<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../Styles2.css">
    </head>
    <body>
        <div id="wrapper">
        
        <?php include"../Pages/Header.php"?>
        <?php 

error_reporting(E_ALL ^ E_DEPRECATED);

$host = "mysql.hostinger.co.uk";
$password = "website";
$username = "u758334742_root";
$dbname = "u758334742_epq";


$tblname = "profile";

$myusername = $_SESSION["myusername"];

mysql_connect($host, $username, $password) or die("Connection failed");
mysql_select_db($dbname);

$sql = "SELECT * FROM $tblname WHERE Username='$myusername'";
$result = mysql_query($sql) or trigger_error(mysql_error().$sql);
$rows=  mysql_fetch_array($result);
?>
<div id="ContentArea">        
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form id="form1" name="form1" method="post" action="EditProfile.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td colspan="3"><strong>Edit the fields you would like to change</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Name</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="name" type="text" id="name" size="50" value="<?php echo $rows['Name'] ?>" /></td>
</tr>
<tr>
<td width="14%"><strong>Password</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="mypassword" type="text" id="mypassword" size="50" value="<?php echo $rows['Password'] ?>" /></td>
</tr>
<tr>
<td width="14%"><strong>Retype Password</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="mypassword2" type="text" id="mypassword2" size="50" value="<?php echo $rows['Password'] ?>"/></td>
</tr>
<tr>
<td width="14%"><strong>Email</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="email" type="text" id="email" size="50" value="<?php echo $rows['Email'] ?>"/></td>
</tr>
<tr>
<td width="14%"><strong>Interests</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="interests" type="text" id="interests" size="50" value="<?php echo $rows['Interests'] ?>" /></td>
</tr>
<tr>
<td width="14%"><strong>Age</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="age" type="text" id="age" size="50" value="<?php echo $rows['Age'] ?>"/></td>
</tr>
<tr>
    <td><input type="submit"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
            </div>
        
             <?php include "../Pages/SideBar.php" ?>
                
        </div>
<?php include "../Pages/Footer.php" ?>
    </body>
</html>
