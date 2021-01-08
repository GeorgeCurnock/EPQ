<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../Styles2.css">
    </head>
    <body>
        <div id="wrapper">
            <?php include"../Pages/Header.php"?>
            <div id="maincontent">
           <?php 
error_reporting(E_ALL ^ E_DEPRECATED);

$host = "mysql.hostinger.co.uk";
$password = "website";
$username = "u758334742_root";
$dbname = "u758334742_epq";

$tbl_name="feedback"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$dbname")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name ORDER BY Datetime DESC";
$result=mysql_query($sql);
?>
               <div id="Feedback"> 
                <table width="90%" font-size="16px" border="2" align="center" cellpadding="3" cellspacing="2">
                    <tr>
                        <td>Username</td>
                        <td>Feedback</td>
                        <td>DateTime</td>
                        <td>Rating</td>
                    </tr>
                    <?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td width="15%" align="center"><?php echo $rows['Username']; ?></td>
<td width="60%" align="center"><?php echo $rows['Feedback']; ?></td>
<td width="10%" align="center"><?php echo $rows['DateTime']; ?></td>
<td width="6%" align="center"><?php echo $rows['Rating']; ?></td>
</tr>

<?php 
} ?>

                </table>
</div>
            </div>
            </div>
        <?php include "../Pages/Footer.php" ?>
        </body>
</html>
