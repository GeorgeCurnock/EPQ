<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            
            <div id="ContentArea">
<table id="table" align="center" cellspacing="6" cellpadding="3">
            <form method="post" action="RegisterCode.php">
                <tr>
                    <td id="Label">
                        Name
                    </td>
                </tr>
                <tr>
                    <td id="form"> 
                        <input name="name" type="text" id="name">
                    </td>
                </tr>
                <tr>
                    <td id="Label">
                        Username
                    </td>
                </tr>
                <tr>
                    <td>
                         
                        <input name="username" type="text" id="username">
                    </td>
                </tr>           
                <tr>
                    <td id="Label">
                        Password
                    </td
                </tr>
                <tr>
                    <td>
                         
                        <input name="password" type="password" id="password">
                    </td>
                </tr>
                <tr>
                    <td id="Label">
                        Retype Password
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="password2" type="password" id="password2">
                    </td>
                </tr>
                <tr>
                    <td>
                        Modules Taken
                    </td>
                </tr>
                <tr>
                    <td> 
                        <input name="Interests" type="text" id="Interests">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                </tr>
                <tr>
                    <td> 
                        <input name="email" type="text" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        Age
                    </td>
                </tr>
                <tr>
                    <td> 
                        <input name="age" type="text" id="Age">
                    </td>
                </tr>
                <td>
                    <input type="submit">  
                </td>
            </form>
        </table>
            </div>
            <?php include "../Pages/LoginBox.php" ?>
            <?php include "../Pages/SideBar.php" ?>
            
        </div>
        <?php include "../Pages/Footer.php" ?>
    </body>
</html> 
