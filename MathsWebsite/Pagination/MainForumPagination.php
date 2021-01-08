<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../Style.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                <?php include"../Pages/Header.php"?>
                <div id="forumlog"> <?php include "../Pages/LoginBox.php" ?></div>
                <?php 
if(!isset($_SESSION["myusername"])){
    echo "Session not loaded.<br>"
    . " You are not logged in.";
    echo "<meta http-equiv='refresh' content=2;url='../Pages/TemplateHomePage.php'>";
    exit();
}
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="epq"; // Database name 
$tbl_name="forumquestion"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name ORDER BY QuestionID DESC";
$result=mysql_query($sql);



$sql2 = "SELECT COUNT(*) as num FROM $tbl_name";
$result2 = mysql_fetch_array(mysql_query($sql2));
$count = $result2['num'];

if(!$result2) {die('Query failed'. mysql_error());}

$limit = 20;

if(isset($_GET{'page'})){
    $page = $_GET{'page'} + 1;
    $offset = $limit * $page;}
    else {
            $page = 0;
            $offset = 0;
         }
?>

                <div id="maincontent">
                  
<table width="90%" border="3" align="center" cellpadding="3" cellspacing="1">
<tr>
<td width="6%" align="center"><strong>#</strong></td>
<td width="53%" align="center"><strong>Topic</strong></td>
<td width="15%" align="center"><strong>Views</strong></td>
<td width="13%" align="center"><strong>Replies</strong></td>
<td width="13%" align="center"><strong>Date/Time</strong></td>
</tr>
<?php

$left_rec = $count - ($page * $limit);
         $sql2 = "SELECT * ". 
            "FROM forumquestion ".
            "LIMIT $offset, $limit";
         
         $result2 = mysql_query($sql2);
         if(!$result2){die("QueryFailed" . mysql_error);}
    
         while($rows = mysql_fetch_array($result2)) { ?>
<tr>
<td><?php echo $rows['QuestionID']; ?></td>
<td><a href="ViewTopic.php?id=<?php echo $rows['QuestionID']; ?>"><?php echo $rows['Topic']; ?></a><BR></td>
<td align="center"><?php echo $rows['Views']; ?></td>
<td align="center"><?php echo $rows['Replies']; ?></td>
<td align="center"><?php echo $rows['DateTime']; ?></td>
</tr>
         <?php } ?>
<tr>
    <td><button><a href="../Pages/TemplateHomePage.php">Home</a></button></td>
    <td colspan="5" align="right"><a href="AddTopicHTML.php"><strong>Create New Topic</strong> </a></td>
    
    <?php
          
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
         }
         mysql_close();
         ?>
</tr>
</table>
                </div>
                
            </div>
        </div>
        <?php include "../Pages/Footer.php" ?>
    </body>
</html>



