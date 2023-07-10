<?php 
    //Include COnstants Page
    include('../config/constants.php');

    //echo "Delete table Page";

    if(isset($_GET['id'])) //Either use '&&' or 'AND'
    {
        //Process to Delete
        //echo "Process to Delete";

        //1.  Get ID 
        $id = $_GET['id'];

        //3. Delete Table from Database
        $sql = "DELETE FROM tbl_reserve WHERE id=$id";
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //CHeck whether the query executed or not and set the session message respectively
        //4. Redirect to Manage Food with Session Message
        if($res==true)
        {
            //Food Deleted
            $_SESSION['delete'] = "<div class='success'>Table Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage_table.php');
        }
        else
        {
            //Failed to Delete Food
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Table.</div>";
            header('location:'.SITEURL.'admin/manage_table.php');
        }

        

    }
    else
    {
        //Redirect to Manage Food Page
        //echo "REdirect";
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage_table.php');
    }

?>