<?php
    //Include constants.php file here
    include('../config/constants.php');
    //1. Get the ID of Admin to be deleted

    $id=$_GET['id'];
    //2.Create SQL Query to delete Admin
    $sql="DELETE FROM tbl_admin WHERE id=$id";

    //Execute the Query
    $res=mysqli_query($conn, $sql);

    //Check whether the Query executed successfully or not
    if($res==true)
    {
        //Query Executed and Admin deleted
        //echo "Admin Deleted";
        //Create session variable to display message
        $_SESSION['delete']="<div class='success'>Admin Deleted Successfully.</div>";
        //Redirect to manage admin page
        header('location:'.SITEURL.'admin/manage-admin.php');

    }
    else{

        //Failed to delete Admin
        //echo "Failed to delete Admin";
        $_SESSION['delete']="<div class='error'>Failed to delete admin. Try again later.</div>";
        //Redirect to manage admin page
        header('location:'.SITEURL.'admin/manage-admin.php');
    }

    //3.Redirect to Manage Admin page with message(success/error)
    
?>