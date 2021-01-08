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
                <div id="forumlog"> <?php include "../Pages/LoginBox.php" ?></div>
                <?php

error_reporting(E_ALL ^ E_DEPRECATED);

    $_SESSION['previous_location'] = 'MainForum.php';
 
$host = "mysql.hostinger.co.uk";
$password = "website";
$username = "u758334742_root";
$db_name = "u758334742_epq";
$tbl_name="forumquestion"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


if(isset($_GET['page'])){
}
else{
    $_GET['page'] = 1;
}
 
    $page = $_GET["page"];

if($page=="" or $page==1){
    $page1=0;
}
else{
    $page1=($page*10)-10;
}

$sql="SELECT * FROM $tbl_name ORDER BY QuestionID DESC limit $page1,10";
$result=mysql_query($sql);
?>
                

                <div id="maincontent">
                    
      <?php              
                    if(!isset($_SESSION["myusername"])){
    echo "Session not loaded.<br>"
    . " You are not logged in.";
    echo "<meta http-equiv='refresh' content=2;url='../Pages/TemplateHomePage.php'>";
    exit();
} ?>
<table width="90%" font-size="18px" border="1px solid green" align="center" cellpadding="2" cellspacing="1" style="word-wrap: break-word;">
<tr>
<td  width="6%" align="center"><strong>#</strong></td>
<td width="53%" align="center"><strong>Topic</strong></td>
<td width="15%" align="center"><strong>Views</strong></td>
<td width="13%" align="center"><strong>Replies</strong></td>
<td width="13%" align="center"><strong>Date/Time</strong></td>
</tr>
<?php

// Start looping table row
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td><?php echo $rows['QuestionID']; ?></td>
<td><a href="ViewTopic.php?id=<?php echo $rows['QuestionID']; ?>"><?php echo $rows['Topic']; ?></a><BR></td>
<td align="center"><?php echo $rows['Views']; ?></td>
<td align="center"><?php echo $rows['Replies']; ?></td>
<td align="center"><?php echo $rows['DateTime']; ?></td>
</tr>

<?php

$res1 = mysql_query("SELECT * FROM $tbl_name");
$count = mysql_num_rows($res1);
$a = ceil($count/10);
echo "<br>";

}
mysql_close();
?>

<tr>
    <td><button><a href="../Pages/TemplateHomePage.php">Home</a></button></td>
    
    <td colspan="5" align="right"><a href="AddTopicHTML.php"><strong>Create New Topic</strong> </a></td>
</tr>
<tr>
    <td colspan="5"><div id="Pagination">
                  <?php for($b=1;$b<=$a;$b++) { ?>
                        <a href="../Forum/MainForum.php?page=<?php echo $b; ?>" style="text-decoration: none; text-align: center;"><?php echo $b; ?></a>
        <?php } ?>
                </div></td>
</tr>
</table>
                    
                    
                </div>
                
            </div>
        </div>
        <?php include "../Pages/Footer.php" ?>
    </body>
</html>
