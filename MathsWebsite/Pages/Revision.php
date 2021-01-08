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
            
            <?php include"Header.php"?>
            
            <div id="ContentArea">
                <?php
if(!isset($_SESSION["myusername"])){
    echo "Session not loaded.<br>"
    . " You are not logged in.";
    echo "<meta http-equiv='refresh' content=2;url='../Pages/TemplateHomePage.php'>";
    exit();
}
$_SESSION["prevpage"] = 'Revision.php';

?>
                
                <table id='Modules'>
                    <tr>
                        <td><a href="../RevisionPages/C1Websites.php">C1 Websites</a></td>
                        <td><a href="../PastPapersPages/C1PastPapers.php">C1 Past Papers</a></td>
                    </tr>
                    <tr>
                        <td><a href="../RevisionPages/C2Websites.php">C2 Websites</a></td>
                        <td><a href="../PastPapersPages/C2PastPapers.php">C2 Past Papers</a></td>
                    </tr>
                    <tr>
                        <td><a href="../RevisionPages/C3Websites.php">C3 Websites</a></td>
                        <td><a href="../PastPapersPages/C3PastPapers.php">C3 Past Papers</a></td>
                    </tr>
                    <tr>
                        <td><a href="../RevisionPages/C4Websites.php">C4 Websites</a></td>
                        <td><a href="../PastPapersPages/C4PastPapers.php">C4 Past Papers</a></td>
                    </tr>
                    <tr>
                        <td><a href="../RevisionPages/M1Websites.php">M1 Websites</a></td>
                        <td><a href="../PastPapersPages/M1PastPapers.php">M1 Past Papers</a></td>
                    </tr>
                    <tr>
                        <td><a href="../RevisionPages/M2Websites.php">M2 Websites</a></td>
                        <td><a href="../PastPapersPages/M2PastPapers.php">M2 Past Papers</a></td>
                    </tr>
                    <tr>
                        <td><a href="../RevisionPages/S1Websites.php">S1 Websites</a></td>
                        <td><a href="../PastPapersPages/S1PastPapers.php">S1 Past Papers</a></td>
                    </tr>
                    <tr>
                        <td><a href="../RevisionPages/S2Websites.php">S2 Websites</a></td>
                        <td><a href="../PastPapersPages/S2PastPapers.php">S2 Past Papers</a></td>
                    </tr>
                    <div id="link">
                    <p>A link to the pink formulae booklet with all of the formulae you are given <br>
                    In each section there is a picture with all the formulae on it aswell.</p>
                    <a href="https://qualifications.pearson.com/content/dam/pdf/A%20Level/Mathematics/2013/Specification%20and%20sample%20assessments/N38210A-GCE-Mathematical-Formulae-Statistical-Tables.pdf"
                       >Pink Formulae Booklet</a>
                    </div>
                       
                </table>
                    
                </div>
                        <?php include "../Pages/LoginBox.php" ?>
            <?php include "SideBar.php" ?>
            </div>          
        </div>
        <?php include "Footer.php" ?>
    </body>
</html>
