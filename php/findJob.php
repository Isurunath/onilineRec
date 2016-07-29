<?php

    require '../database/connection.php';
    require 'include/header.php';
?>

</br>
<html>
    <head><link rel="stylesheet" type="text/css" href="../css/findJob.css"></head>
    <body>
        <div class="catagory">
            
            <input type="button" value="Transportation" class="cat" onclick="location.href='findJob.php?cat=Transportation'">
            <input type="button" value="Medicine" class="cat" onclick="location.href='findJob.php?cat=Medicine'">
            <input type="button" value="Teaching" class="cat" onclick="location.href='findJob.php?cat=Teaching'">
            <input type="button" value="Security" class="cat" onclick="location.href='findJob.php?cat=Security'">
            <input type="button" value="IT/Telecom" class="cat" onclick="location.href='findJob.php?cat=IT/Telecom'">
            <input type="button" value="Accounting" class="cat" onclick="location.href='findJob.php?cat=Accounting'">

        </div>
        <div class="jobs">
           
                
                <?php
                     
                    $cat = $_GET['cat'];
                
                    $sql="select * from job where catagory='$cat'";
                    $result = mysqli_query($con,$sql);        
                    while($row = mysqli_fetch_array($result)) {
                ?>

                    <table class="Rectable">
                    <tr class="jobDetails"><td><img src="<?php echo $row['picURL']?>" width=120px height=120px></td><td><?php echo $row['Title']?></td><td><a href="apply.php?code=<?php echo $row['jobID']?>" class="apply">ApplyNow</a></td></tr>
                    </table>
                    </br>
                    
                <?php } ?>
        
                
                
            
        </div>
    </body>
<?php require 'include/footer.php' ?>
</html>