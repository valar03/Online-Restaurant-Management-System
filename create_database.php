<?php 
    include 'config.php'; 
    $conn = mysqli_connect($server,$user,$pass);
    if($conn){
        echo "connected";
    }
    else{
        echo "not connected";
    }
    $sql = "CREATE DATABASE food_order";
    $res = mysqli_query($conn,$sql);
    if($res==TRUE){
        echo "created";
    }
    else{
        echo "not created";
    }
    mysqli_close($conn);

?>