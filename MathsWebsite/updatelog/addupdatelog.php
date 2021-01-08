<?php

error_reporting(E_ALL ^ E_DEPRECATED);

               $host = "mysql.hostinger.co.uk";
$username = "u758334742_root";
$password = "website";
$dbname = "u758334742_epq"; 
                $tbl_name="updatelog"; // Table name 

                mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
                mysql_select_db("$dbname")or die("cannot select DB");
                
                $updatename = $_POST['upname'];
                $updatedes = $_POST['updescription'];
                $datetime = $datetime = date("d/m/y h:i:s");
                
                
                $sql = "INSERT INTO $tbl_name(updatename, description, datetime)VALUES('$updatename', '$updatedes', '$datetime')";
                $result = mysql_query($sql);
                
                if ($result){
                    echo "Update applied";
                    echo "<meta http-equiv='refresh' content=1;url='../Pages/TemplateHomePage.php'>";
                }
                else {
                    echo "Error occured";
                }
?>