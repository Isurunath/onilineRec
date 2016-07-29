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
    
    <?php
        if(isset($_GET['jobID'])){
            
            
            $id = $_GET['jobID'];
            $sql= "delete from job where jobID = '$id'";
            mysqli_query($con,$sql);
            
            echo'<script language ="javascript">';
            echo'alert("Job deleted succesfully")';
            echo'</script>'; 
            
        }
    
    ?>
    
    
    
    <div class="about">
        <div class="centre">
        <h2>Job List         
            <input type="button" class="addjob" value="Add Job" onclick="location.href='addjob.php'"></h2>
        <table class="joblist">
        <tr class="title"><td>JobID</td><td>Catagory</td><td>Picture</td><td>Title</td><td>Industry</td></tr>
        <?php 
            $sql = "select * from job";
            $result = mysqli_query($con,$sql);        
            while($row = mysqli_fetch_array($result)) {
    
    ?>
    
            
                
                <tr class="data">
                    <td><?php echo $row['jobID'] ?></td>
                    <td><?php echo $row['catagory'] ?></td>
                    <td><?php echo $row['picURL'] ?></td>
                    <td><?php echo $row['Title'] ?></td>
                    <td><?php echo $row['Industry'] ?></td>
                    <td class="bt"><input type="button" value=Delete onclick="location.href='joblist.php?jobID=<?php echo $row['jobID'] ?>'"></td>
                    <td class="bt"><input type="button" value=update onclick="location.href='updatejob.php?ID=<?php echo $row['jobID'] ?>'" ></td>
                </tr>
                
                <?php } ?>
            
            </table>
            </div>
    </div>
       
    </body>
</html>
