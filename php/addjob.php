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
        if(isset($_POST['submit'])){
            
            $catagory = $_POST['catagory'];
            $pictures = $_POST['pictures'];
            $title = $_POST['title'];
            $industry = $_POST['industry'];
            $jobtype = $_POST['jobtype'];
            $location = $_POST['location'];
            $description = $_POST['description'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            
            $sql= "insert into job(catagory,picURL,Title,Industry,JobType,Location,Description,Address,Contact) values('$catagory','$pictures','$title','$industry','$jobtype','$location','$description','$address','$contact')";
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
        
   
    
                <tr><td>Catagory</td><td><input class="in" type=text name=catagory></td></tr>
                <tr><td>Picture</td><td><input class="in" type=text name=pictures></td></tr>
                <tr><td>Title</td><td><input class="in" type=text name=title></td></tr>
                <tr><td>Industry</td><td><input class="in" type=text name=industry></td></tr>
                <tr><td>Job Type</td><td><input class="in" type=text name=jobtype></td></tr>
                <tr><td>Location</td><td><input class="in" type=text name=location></td></tr>
                <tr><td>Description</td><td><input class="in" type=text name=description></td></tr>
                <tr><td>Address</td><td><input class="in" type=text name=address></td></tr>
                <tr><td>Contact</td><td><input class="in" type=text name=contact></td></tr>     
                <tr><td colspan="2"><input class=update type=submit name=submit value=submit></td></tr>
                
            
            </table>
            </form>
            </div>
    </div>
       
    </body>
</html>
