<?php

error_reporting(E_ALL ^ E_DEPRECATED);
   

$host = "mysql.hostinger.co.uk";
$password = "website";
$username = "u758334742_root";
$db_name = "u758334742_epq";
$tbl_name="forumquestion"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE QuestionID=$id";
$result = mysql_query($sql) or trigger_error(mysql_error().$sql);
$rows=mysql_fetch_array($result);

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../Styles2.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                <?php include '../Pages/Header.php' ?>
                <?php include "../Pages/LoginBox.php" ?>
                
                <div id="ContentArea">
                    
                 <?php
if(!isset($_SESSION["myusername"])){
    echo "Session not loaded <br>";
    echo "you are not logged in.";
    echo "<meta http-equiv='refresh' content=2;url='../Pages/TemplateHomePage.php'>";
    exit();
} 
 $_SESSION['previous_location'] = 'ViewTopic.php';
?>
                  <table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td><strong><?php echo $rows['Topic']; ?></strong></td>
</tr>

<tr>
<td id="detail"><?php echo $rows['Detail']; ?></td>
</tr>

<tr>
<td><strong>By :</strong> <?php echo $rows['Username']; ?></td>
</tr>

<tr>
<td><strong>Date/time : </strong><?php echo $rows['DateTime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>



<?php

$tbl_name2="forumanswer"; // Switch to table "forum_answer"
$sql2="SELECT * FROM $tbl_name2 WHERE QuestionID='$id'";
$result2=mysql_query($sql2);
while($rows=mysql_fetch_array($result2)){
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" >
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1">
<tr>
<td width="18%"><strong>Name</strong></td>
<td width="5%">:</td>
<td width="77%"><?php echo $rows['Username']; ?></td>
</tr>
<tr>
<td><strong>Answer</strong></td>
<td>:</td>
<td><?php echo $rows['Answer']; ?></td>
</tr>
<tr>
<td><strong>Date/Time</strong></td>
<td>:</td>
<td><?php echo $rows['DateTime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>
 
<?php 
}


$sql3="SELECT Views FROM $tbl_name WHERE QuestionID='$id'";
$result3=mysql_query($sql3);
if($result3){
$rows=mysql_fetch_array($result3);
$view=$rows['Views'];

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(Views) VALUES('$view') WHERE QuestionID='$id'";
$result4=mysql_query($sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update $tbl_name set Views='$addview' WHERE QuestionID='$id'";
$result5=mysql_query($sql5);
mysql_close();
}
?>


<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="AddAnswer.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td valign="top"><strong>Response</strong></td>
<td valign="top">:</td>
<td><textarea name="Answer" cols="45" rows="3" id="Answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
<td><button><a href="MainForum.php" style="text-decoration:none;">Back</a></button>
</tr>
</table>
</td>
</form>
</tr>
</table>
                </div>
            
            </div>
        </div>
        <?php include "../Pages/Footer.php" ?>
    </body>
</html>