<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../Styles2.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                 <?php include"../Pages/Header.php"?>
                
<?php 

error_reporting(E_ALL ^ E_DEPRECATED);

   $_SESSION["prevpage"] = 'ViewProfile.php';

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
                    
                    <table width="200" cellpadding="5" cellspacing="1">
                        <tr>
                            <td><strong>Name: <?php echo $rows['Name'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Username: <?php echo $rows['Username'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Password: <?php echo $rows['Password'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Email: <?php echo $rows['Email'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Interests: <?php echo $rows['Interests'] ?></strong></td>
                        </tr>
                        <tr>
                            <td><strong>Age: <?php echo $rows['Age'] ?></strong></td>
                        </tr>
                        <tr>
                            <td id="Button"><a href="EditProfileHTML.php">Edit</a></td>
                        </tr>
                    </table>
                </div>
                <?php include "../Pages/SideBar.php" ?>
            </div>
        </div>
</div> 
<?php include "../Pages/Footer.php" ?> 
    </body>
</html>