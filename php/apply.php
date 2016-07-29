<?php

    require '../database/connection.php';
    require 'include/header.php';
    

    $code = $_GET['code'];
    $user = $_SESSION['userID'];
                
    $sql="select * from job where jobID='$code'";
    $result = mysqli_query($con,$sql);        
    while($row = mysqli_fetch_array($result)) {
?>

</br>
<html>
    <head><link rel="stylesheet" type="text/css" href="../css/apply.css"></head>
    <body>
        <div class="catagory">
            <table class="details">
                <tr>
                    <td class="icon"><img src="<?php echo $row["picURL"] ?>" height="150px" width="150px"></td>
                    <td>
                        <h2><?php echo $row["Title"] ?></h2>
                        Indusrty: <?php echo $row["Industry"] ?> </br>
                        Job Type: <?php echo $row["JobType"] ?> </br>
                        Location: <?php echo $row["Location"] ?> </br>
                    </td>
                </tr>
                <tr>
                    <td class="des" colspan="2">Description</td>
                </tr>
                <tr>
                    <td class="des1" colspan="2"><?php echo $row["Description"] ?></td>
                </tr>
                <tr>
                    <td class="qua" colspan="2">Contact Details</td>
                </tr>
                <tr>
                    <td class="qua1" colspan="2"><?php echo $row["Contact"] ?> </br> <?php echo $row["Address"] ?></td>
                </tr>
            </table>

<?php } ?>
<?php            
        if(isset($_POST['submit'])){
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $no = $_POST['no'];
            $description = $_POST['description'];
            
            $sql = "insert into applications(jobID,userID,name,email,contact,description) values('$code','$user','$name','$email','$no','$description')";
            if(mysqli_query($con,$sql)){
                echo'<script language ="javascript">';
								echo'alert("Your Job application was sent succesfully")';
								echo'</script>';
            }else{
                echo'<script language ="javascript">';
								echo'alert("error")';
								echo'</script>';
            }

        }
     
?>

        </div>
        <div class="jobs">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <table>
                    <h2>Apply For this job Now</h2>
                    <tr class="gap"><td><input type=text name=name placeholder="Your Name" class=input></td></tr>
                    <tr class="gap"><td><input type=text name=email placeholder="Your Email" class=input></td></tr>
                    <tr class="gap"><td><input type=text name=no placeholder="Your Phone No" class=input></td></tr>
                    <tr class="gap"><td><textarea name=description placeholder="Describe Yourself and Your Background" class=inputarea></textarea></td></tr>
                    <tr><td><input type=submit name=submit value="Apply Now" class=logbt></td></tr>
                </table>
            </form>
        </div>
    </body>
    <?php require 'include/footer.php'; ?>
</html>