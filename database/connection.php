<?php
    
    $con = mysqli_connect("localhost","root","","onlinerec");
    if(mysqli_connect_errno()){
        echo "Connection Faild: ".mysqli_connect_error();
    }

?>