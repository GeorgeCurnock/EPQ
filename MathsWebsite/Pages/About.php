<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../Styles2.css">
        <meta charset="UTF-8">
        <title>
            George's Website
        </title>
        <style>
            #ResponseForm{
                float: left;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php include"Header.php"?>

            <div id="ContentArea">
                <h2>Hello and welcome to The Maths Portal</h2>
                <p> Welcome to the Maths Portal, a website providing useful revision websites and material to help with Edexcel maths courses.
                    The main features of the website consist of revision material, past papers and a forum for users to communicate.<br>
                    This website has been created as part of an Extended Project Qualification.The question or statement
                    that accompanies this website is 'The development and maintenance of a fully functioning website
                    assessing its useability based on user response'. The website will contain features similar to that of websites
                    of relevant content e.g. a login system, revision sites that can be accessed as well as its main featuring
                    of acting as a forum for students to discuss problems. All content used belongs to their respected owners and I in no way claim ownership over the information involved in this website.
                    <br><br>
                    
                    User are asked to give as much feedback about the website as possible giving their opinion on the site and its features.
                    examples of things to comment on:<br>
                    - Design and style<br>
                    - Layout of content<br>
                    - Errors that have occurred whilst using the website<br>
                    - Confusion about items on the website<br>
                    - Feel free to comment on design features that you feel could be changed<br>
                    - Any further questions that you may need answered<br></p>
                <div id="ResponseForm">
                <table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
                    <tr>
                    <form name="form1" method="post" action="../Feedback/AddFeedback.php">
                    <td>
                    <table width="80%" border="0" cellpadding="2" cellspacing="1">
                    <tr>
                    <td valign="top"><strong>Response (300 characters max):</strong></td>
                    <td><textarea name="answer" cols="50" rows="6" id="answer"></textarea></td>
                    </tr>
                    
                    <tr>
                     <td> <strong>Rating/10: </strong></td>
                     <td><input type="text" name="rating" id="rating" </td>
                    </tr>
<tr>
                    <td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
                    </tr>
                    </table>
                    </tr>
                    </td>
                    </form>
                    </tr>
                    <tr>
                    <td><p> Alternatively you can answer this questionaire for specific questions on parts of the website. </p></td>
                    </tr>
                    <tr>
                    <td><a href="https://docs.google.com/forms/d/e/1FAIpQLSdG_k1pAYsJne333NuerwucQsc8GjeTX50IP28hZ9ohZKJ1Wg/viewform"> Google Questionnaire </a></td>
                    </tr>
                </table>

<?php
                     
                    if($_SESSION["prevpage"] === "AddFeedback.php"){
                        echo '<strong>Thank you for your response<strong>';
                    } 
                    $_SESSION["prevpage"] = 'About.php';
                    
                    ?>
                </div>
            </div>
            <?php include "../Pages/LoginBox.php" ?>
            <?php include "SideBar.php" ?> 
        </div>
        <?php include "Footer.php" ?>
    </body>
</html>
		