<?php
   require 'database/connection.php';
?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        
        <?php
        
        $error= "xx" ;
        
        if(isset($_POST['submit'])){
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            if($username != '' and $password != ''){
                
                
                if($username=='admin' && $password=='admin'){
                    header('location:php/adminpanel.php');
                    
                }
            
                $query = mysqli_query($con,"select * from user where email='".$username."' and password='".$password."' ") or die(mysqli_error());
                $row = mysqli_fetch_array($query);
                
                if(!empty($row['email']) && !empty($row['password'])){
                    session_start();
                    $_SESSION['username']=$row['firstname'];
                    $_SESSION['userID']=$row['userID'];
                    header('location:php/home.php');
                }else{
                    $error = "Invaild username or password";
                }
                
            }else{
                $error = "Please Enter username and password ";
            }
            
        }
        
        
        ?>
        
        <div class="login">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <table>
                <tr><td><img src="images/logo.png" class=logo></td></tr>
                <tr><td><span class="error"><?php echo $error ?></span></td></tr>
                <tr class="gap"><td><input type=text name=username placeholder=USERNAME class=input></td></tr>
                <tr class="gap"><td><input type=password name=password placeholder=PASSWORD class=input></td></tr>
                <tr><td><input type=submit name=submit value=Login class=logbt></td></tr>
                <tr class="Reglink"><td>Not a Memeber?<a href="php/register.php"> Register Now      </href></td></tr>
            </table>
        </form>
        </div>
        
        <?php 
							if(isset($_GET['action'])=="new"){
							echo'<script language ="javascript">';
								echo'alert("congratulation !! you have successfully Registered")';
								echo'</script>'; }
			
				
        ?>
        
    </body>
</html>
