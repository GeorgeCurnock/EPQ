

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../Styles2.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="content">
                <?php include"../Pages/Header.php"?>
                <div id="contentarea">
                    
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form id="form1" name="form1" method="post" action="AddTopic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td colspan="3"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="55" /></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td width="84%"><textarea name="detail" cols="55" rows="6" id="detail"></textarea></td>
</tr>
<tr>
    <td><input type="submit"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>

                </div>
            <?php include "../Pages/LoginBox.php" ?>
            </div>
        </div>
        <?php include "../Pages/Footer.php" ?>
    </body>
</html>