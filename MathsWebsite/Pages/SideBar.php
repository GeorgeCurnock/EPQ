<div id="SideBar">
<table>
<?php 

error_reporting(E_ALL ^ E_DEPRECATED);

$host="mysql.hostinger.co.uk"; // Host name 
$username="u758334742_root"; // Mysql username 
$password="website"; // Mysql password 
$db_name="u758334742_epq"; // Database name 
$tbl_name="forumquestion"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name ORDER BY QuestionID DESC LIMIT 5";
$result=mysql_query($sql) or die(mysql_error());

while($rows=mysql_fetch_array($result)){
    if(strlen($rows['Topic'])>70){
        $topic = $rows['Topic'];
        $topiccut = substr($topic, 0, 68);
        
     ?>
    <table>
        <tr>
        <br>
        </tr>
        <tr>
            <td><a href="../Forum/ViewTopic.php?id=<?php echo $rows['QuestionID']; ?>"><?php echo $topiccut . "...."?></a></td>
        </tr>
                <tr>
            <td><?php echo $rows['DateTime']; ?></td>
        </tr>
    </table>
    <?php }
    else{ ?>
        <table>
        <tr>
        <br>
        </tr>
        <tr>
            <td><a href="../Forum/ViewTopic.php?id=<?php echo $rows['QuestionID']; ?>"><?php echo $rows['Topic']; ?></a></td>
        </tr>
                <tr>
            <td><?php echo $rows['DateTime']; ?></td>
        </tr>
    </table>
<?php }} ?>
</div>