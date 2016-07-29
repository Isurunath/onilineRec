<?php
    require '../database/connection.php';
    require 'include/adminheader.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
        <title>Online Recruitment</title>
    </head>
    <body>
        </br>
    
    
    
    <div class="about">
        <div class="centre">
        <h3>Job Applications</h3>
        <table class="joblist">
        <tr class="title"><td>Application ID</td><td>Job ID</td><td>User ID</td><td>name</td><td>Description</td></tr>
        <?php 
            $sql = "select * from applications";
            $result = mysqli_query($con,$sql);        
            while($row = mysqli_fetch_array($result)) {
    
    ?>
    
            
                
                <tr class="data">
                    <td><?php echo $row['applicationID'] ?></td>
                    <td><?php echo $row['jobID'] ?></td>
                    <td><?php echo $row['userID'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                </tr>
                
                <?php } ?>
            
            </table>
            </div>
    </div>
       
    </body>
</html>
