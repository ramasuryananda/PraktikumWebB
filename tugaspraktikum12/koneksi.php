<?php
    $connection = mysqli_connect("localhost","root","","tugas12");
    if(!$connection){
        die("Error".mysqli_connect_error());
    }
?>