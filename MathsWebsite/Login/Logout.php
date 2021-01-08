<?php
session_start();
session_destroy();
?>

<body>
    Session Destroyed.
    <?php header("location:../Pages/TemplateHomePage.php"); ?> 
</body>

