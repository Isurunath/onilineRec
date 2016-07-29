<?php
   require '../database/connection.php';
?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/register.css">
    </head>
    <body>
        
        <?php
        
        $error = FALSE;
        $fnameErr = $lnameErr = $dobErr = $genderErr = $addressErr = $noErr = $emailErr = $pwdErr = $rpwdErr = "";
        
         
        
        if (isset($_POST['submit'])) {
            
            
            if(empty($_POST['fname'])){ 
                $fnameErr = "First Name is required";
                $error = TRUE;
            }else{
                $firstname = $_POST['fname'];
            }
            
            if(empty($_POST['lname'])){ 
                $lnameErr = "Last Name is required";
                $error = TRUE;
            }else{
                $lastname = $_POST['lname'];
            }
            
            if(empty($_POST['bday'])){ 
                $dobErr = "Birthday is required";
                $error = TRUE;
            }else{
                $dob = $_POST['bday'];
            }
            
            if(empty($_POST['gender'])){ 
                $genderErr = "Gender is required";
                $error = TRUE;
            }else{
                $gender = $_POST['gender'];
            }
            
            if(empty($_POST['add'])){ 
                $addressErr = "Address is required";
                $error = TRUE;
            }else{
                $address = $_POST['add'];
            }
            
            if(empty($_POST['mobile'])){ 
                $noErr = "Mobile number is required";
                $error = TRUE;
            }else{
                $mobile = $_POST['mobile'];
                if( !preg_match("/^[0-9]*$/",$mobile)){
                    $noErr = "Invalid Mobile number";
                    $error = TRUE;
                }
            }
            
            if(empty($_POST['email'])){ 
                $emailErr = "Email is required";
                $error = TRUE;
            }else{
                $email = $_POST['email'];
                if (strpos($email, '@') == FALSE) {
                    $emailErr =  "Invalid Email";
                    $error = TRUE;
                }
            }
            
            if(empty($_POST['pwd'])){ 
                $pwdErr = "Passowrd is required";
                $error = TRUE;
            }else{
                $pwd = $_POST['pwd'];
                $rpwd = $_POST['rpwd'];
                if (strcmp($pwd, $rpwd) !== 0) {
                    $rpwdErr = "Passwords don't match ";
                    $error = TRUE;
                }
            }
            
            
            

            
            
            if ($error == FALSE) {
                $sql = "INSERT INTO user (firstname,lastname,dob,gender,address,mobile,email,password) VALUES ('$firstname', '$lastname', '$dob', '$gender', '$address', '$mobile', '$email', '$pwd')";
                if (mysqli_query($con,$sql)) {
					  header('location:../index.php?action=new');
				} else {
                    echo "Error ";
                }
            }
        }



        ?>
        
        <div class="register">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <table>
        <form action="index.php" method="post">
            <tr class="gap">
                <td>
                    <label>First Name</label><span class="error"><?php echo $fnameErr;?></span></br>
                    <input type="text" name="fname" id=fname class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Last Name</label><span class="error"><?php echo $lnameErr;?></span></br>
                    <input type="text" name="lname" id=lname  class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Date Of Birth</label><span class="error"><?php echo $dobErr;?></span></br>  
                    <input type="date" name="bday" id=bday class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Gender</label></br>
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Address</label><span class="error"><?php echo $addressErr;?></span></br>
                    <input type="text" name="add" id=add class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Mobile Number</label><span class="error"><?php echo $noErr;?></span></br>
                    <input type="string" name="mobile" id=mobile  class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Email</label><span class="error"><?php echo $emailErr;?></span></br>
                    <input type="text" name="email" id=email  class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Password</label><span class="error"><?php echo $pwdErr;?></span></br>
                    <input type="password" name="pwd" id=pwd  class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                    <label>Reconfirm Password</label><span class="error"><?php echo $rpwdErr;?></span></br>
                    <input type="password" name="rpwd" id=rpwd  class=input>
                </td>
            </tr>
            <tr class="gap">
                <td>
                     <input type="submit" name="submit" value="Register" class=regbt onclick="checkFilled()">
                </td>
            </tr>
            </form>
        </table>
        </form>
        </div>
    </body>

    <script type="text/jscript">
    
            function checkFilled() {
                    var inputVal1 =document.getElementById("fname");
                    var inputVal2 =document.getElementById("lname");
                    var inputVal3 =document.getElementById("bday");
                    var inputVal4 =document.getElementById("add");                
                    var inputVal5 =document.getElementById("mobile");
                    var inputVal6 =document.getElementById("email");
                    var inputVal7 =document.getElementById("pwd");
                    var inputVal8 =document.getElementById("rpwd");


                    if (inputVal1.value == "") {
                        inputVal1.style.backgroundColor = "red";
                        }

                    if (inputVal2.value == "") {
                        inputVal2.style.backgroundColor = "red";
                        }
                    if (inputVal3.value == "") {
                        inputVal3.style.backgroundColor = "red";
                        }
                    if (inputVal4.value == "") {
                        inputVal4.style.backgroundColor = "red";
                        }
                    if (inputVal5.value == "") {
                        inputVal5.style.backgroundColor = "red";
                        }
                    if (inputVal6.value == "") {
                        inputVal6.style.backgroundColor = "red";
                        }
                    if (inputVal7.value == "") {
                        inputVal7.style.backgroundColor = "red";
                        }
                    if (inputVal8.value == "") {
                        inputVal8.style.backgroundColor = "red";
                        }

                }
        </script>


    <?php
    sleep(1);//seconds to wait
    ?>


</html>