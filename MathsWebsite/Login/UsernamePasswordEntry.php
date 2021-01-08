if(!isset($_SESSION["myusername"])){
            echo "<table align='center' cellspacing='1'>
                <form method='post' action='../Login/CheckLogin.php'>
                <tr>
                        <td>Username</td>
                       <td> <input name='myuser' type='text' id='myusername'></td>
                       </tr>
                       <tr>
                       <td> Password </td>
                       <td> <input name='mypass' type='password' id='mypassword'></td>
                       </tr>
                       <tr>
                        <td><input type='submit'></td>
                        <td style='float:right;'><a href='../Register/RegisterPage.php'>Register</a></td>
                        </tr>
                        </form>
                        </table>";
            }
            else{
                echo "<li>Welcome ". $_SESSION['myusername']."</li>";
                echo "<li><a href='../Profile/ViewProfile.php'>Profile</a></li>";
                echo "<li><a href='../Login/Logout.php'>Logout</a></li>";
            }
            
            
            
            #Login{
    display: inline-block;
    float: right;
    font-size: 16px;
    position: relative;
}
#Login li{
    float: right;
    display: block;
}