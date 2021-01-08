<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../Styles2.css">
        <meta charset="UTF-8">
        <title>
            George's Website
        </title>
    </head>
    <body>
        <div id="wrapper">
            <?php include"../Pages/Header.php"?>
                <?php include"../SlideShow/MySlideShow.php" ?>
            <div id="ContentArea">
                <h3 class="content"><a href="../Pages/About.php">About</a></h3>
                <p class="para ">A section describing what this website is and how you can help make it better.</p><br>
                
                <h3 class="content"><a href="../Pages/Revision.php">Revision</a></h3>
                <p class="para "> A mix of formulas, links to useful websites and past papers from previous years.</p><br>
                
                <h3 class="content"><a href="../Forum/MainForum.php">Forum</a></h3>
                <p class="para">A location allowing you to post questions and discussions to have with other users.</p><br>
                
                <BR>
               

<h2>Update Log</h2>
                <?php

error_reporting(E_ALL ^ E_DEPRECATED);

 $_SESSION['previous_location'] = 'TemplateHomePage.php';
                $host = "mysql.hostinger.co.uk";
$username = "u758334742_root";
$password = "website";
$dbname = "u758334742_epq";
                $tbl_name="updatelog"; // Table name 

                mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
                mysql_select_db("$dbname")or die("cannot select DB");
                
                $sql = "SELECT * FROM $tbl_name";
                $result = mysql_query($sql) or die("error");
                
                while($rows = mysql_fetch_array($result)){
                ?>
                <div id="updatelog">
                <ul>
                    <li><h3> <?php echo $rows['updatename']; ?> </h3></li>
                    <li> <?php echo $rows['description']; ?> </li>
                    <li> <?php echo $rows['datetime'];  ?> </li>
                </ul>
                    </div>
                <?php } 
                
                if(isset($_SESSION["myusername"])){
                    if($_SESSION['myusername'] == "admin"){ ?>
                   <table width='400' border='0' align='center' cellpadding='0' cellspacing='1'>
                       <form name='addresponse' method='post' action='../updatelog/addupdatelog.php'>
                    <tr>
                        <td>Update Name:</td>
                        <td><input name="upname" id="upname" type="text"></td>
                    </tr>
                    <tr>
                        <td>Update Description:</td>
                        <td><textarea name='updescription' id='updescription' type='text' cols='45' rows='5'></textarea></td>
                    </tr>
                    <tr>
                        <td><input type='submit'></td>
                    </tr>

                </form>
                </table>
                            
                <?php } } 
$_SESSION["prevpage"] = "TemplateHomePage.php";?> 
                
            </div>
            <?php include "../Pages/LoginBox.php" ?>
            <?php include "../Pages/SideBar.php" ?>
            </div>
        <?php include "../Pages/Footer.php" ?>
        </body>
</html>
