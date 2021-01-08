<div id="LoginBox">
    <?php
        if(!isset($_SESSION["myusername"])){
            echo "<table align='center' cellspacing='1'>
                <form method='post' action='../Login/CheckLogin.php'>
                <tr>
                        <td>Username</td>
                        </tr>
                        <tr>
                       <td> <input name='myuser' type='text' id='myusername'></td>
                       </tr>
                       <tr>
                       <td> Password </td>
                       </tr>
                       <tr>
                       <td> <input name='mypass' type='password' id='mypassword'></td>
                       </tr>
                       <tr>
                        <td><input type='submit' style='cursor:pointer;'></td>
                        <td><a href='../Register/RegisterPage.php'>Register</a></td>
                        </tr>
                        </form>
                        </table>";
            }
            else{ echo "<tr><td>Welcome ". $_SESSION['myusername']."</td></tr><br><br>
                        <tr>
                        <td><a href='../Profile/ViewProfile.php'>Profile</a></td>
                        <td><a href='../Login/Logout.php'>Logout</a></td>
                        </tr>";
                        if($_SESSION['myusername'] == 'admin'){
                            echo '<tr>
                                <td>
                                    <a href="../Feedback/ViewFeedback.php">Feedback</a>
                                </td>
                            </tr>' ; 
                        }
                        
                      echo "
                        </table>";
                
            } ?>
</div>