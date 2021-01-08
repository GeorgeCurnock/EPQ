<?php
session_start();
if(!isset($_SESSION["myusername"])){
    echo "Session not loaded";
    echo "<meta http-equiv='refresh' content=2;url='../Pages/TemplateHomePage.php'>";
    exit();
}
?>


<html>
    <head>
        
    </head>
    <body>
        Login successful
        <?php header("location:../Pages/TemplateHomePage.php"); ?>
    </body>
</html>