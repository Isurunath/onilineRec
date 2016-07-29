<?php
    require '../database/connection.php';
    require 'include/adminheader.php';

    $jobID = $_GET['ID']
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
        <title>Online Recruitment</title>
    </head>
    <body>
        </br>
    
    <?php
        if(isset($_POST['update'])){
            
            $catagory = $_POST['catagory'];
            $pictures = $_POST['pictures'];
            $title = $_POST['title'];
            $industry = $_POST['industry'];
            $jobtype = $_POST['jobtype'];
            $location = $_POST['location'];
            $description = $_POST['description'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            
            $sql= "UPDATE job SET catagory = '$catagory',picURL = '$pictures',Title='$title',Industry='$industry',JobType='$jobtype',Location='$location',Description='$description',Address='$address',Contact='$contact' WHERE jobID = $jobID";
            if(!mysqli_query($con,$sql)){
                echo'<script language ="javascript">';
                echo'alert("Error")';
                echo'</script>'; 
            }
            else{
                echo'<script language ="javascript">';
                echo'alert("Job Updated succesfully")';
                echo'</script>';
            }
            
        }
    
    ?>
    
    
    
    <div class="about">
        <div class="centre">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <table class="joblist">
        <?php 
            $sql = "select * from job where jobID='$jobID'";
            $result = mysqli_query($con,$sql);        
            while($row = mysqli_fetch_array($result)) {
    
    ?>
    
                <tr><td>Catagory</td><td><input class="in" type=text name=catagory value="<?php echo $row['catagory'] ?>"></td></tr>
                <tr><td>Picture</td><td><input class="in" type=text name=pictures value="<?php echo $row['picURL'] ?>"></td></tr>
                <tr><td>Title</td><td><input class="in" type=text name=title value="<?php echo $row['Title'] ?>"></td></tr>
                <tr><td>Industry</td><td><input class="in" type=text name=industry value="<?php echo $row['Industry'] ?>"></td></tr>
                <tr><td>Job Type</td><td><input class="in" type=text name=jobtype value="<?php echo $row['JobType'] ?>"></td></tr>
                <tr><td>Location</td><td><input class="in" type=text name=location value="<?php echo $row['Location'] ?>"></td></tr>
                <tr><td>Description</td><td><input class="in" type=text name=description value="<?php echo $row['Description'] ?>"></td></tr>
                <tr><td>Address</td><td><input class="in" type=text name=address value="<?php echo $row['Address'] ?>"></td></tr>
                <tr><td>Contact</td><td><input class="in" type=text name=contact value="<?php echo $row['Contact'] ?>"></td></tr>     
                <tr><td colspan="2"><input class=update type=submit name=update value=Update></td></tr>
                <?php } ?>
            
            </table>
            </form>
            </div>
    </div>
       
    </body>
</html>
