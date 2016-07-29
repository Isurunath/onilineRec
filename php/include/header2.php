<?php
    session_start();    
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/home.css">
        <title>Online Recruitment</title>
    </head>
    <body>
        <div class="topBar">
            <img src="../images/logo.png" class="logo">
            <div class="signout">
                <img src="../images/user.png" class="user">
                <table>
                    <tr><td><span class="username"><?php echo $_SESSION['username'] ?></span></td></tr>
                    <tr><td><a href="../index.php" class="signoutLink">SignOut</a></td></tr>
                </table>
            </div>
        </div>
    </body>
</html>
        