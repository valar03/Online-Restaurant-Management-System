<?php include('partials/menu.php'); ?>

<?php 
    //CHeck whether id is set or not 
    if(isset($_GET['id']))
    {
        //Get all the details
        $id = $_GET['id'];

        //SQL Query to Get the Selected table
        $sql2 = "SELECT * FROM tbl_reserve WHERE id=$id";
        //execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //Get the value based on query executed
        $row2 = mysqli_fetch_assoc($res2);

        //Get the Individual Values of Selected table
        $table_no = $row2['table_no'];
        $seats_no = $row2['seats_no'];
        $price = $row2['price'];
        $status = $row2['status'];

    }
    else
    {
        //Redirect to Manage table
        header('location:'.SITEURL.'admin/manage_table.php');
    }
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update Table</h1>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">
        
        <table class="tbl-30">

            <tr>
                <td>Table no: </td>
                <td>
                    <input type="text" name="table_no" value="<?php echo $table_no; ?>">
                </td>
            </tr>

            <tr>
                <td>Number of Seats: </td>
                <td>
                    <input type="number" name="seats_no" value="<?php echo $seats_no; ?>">
                </td>
            </tr>

            <tr>
                <td>Price: </td>
                <td>
                    <input type="number" name="price" value="<?php echo $price; ?>">
                </td>
            </tr>

            <tr>
                <td>Status: </td>
                <td>
                    <input <?php if($status=="Booked") {echo "checked";} ?> type="radio" name="status" value="Booked"> Booked 
                    <input <?php if($status=="Not booked") {echo "checked";} ?> type="radio" name="status" value="Not booked"> Not booked
                </td>
            </tr>

            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <input type="submit" name="submit" value="Update Table" class="btn-secondary">
                </td>
            </tr>
        
        </table>
        
        </form>

        <?php 
        
            if(isset($_POST['submit']))
            {
                //echo "Button Clicked";

                //1. Get all the details from the form
                $id = $_POST['id'];
                $table_no = $_POST['table_no'];
                $seats_no = $_POST['seats_no'];
                $price = $_POST['price'];
                $status = $_POST['status'];
 

                //4. Update the table in Database
                $sql3 = "UPDATE tbl_reserve SET 
                    table_no = '$table_no',
                    seats_no = '$seats_no',
                    price = '$price',
                    status = '$status'
                    WHERE id=$id
                ";

                //Execute the SQL Query
                $res3 = mysqli_query($conn, $sql3);

                //CHeck whether the query is executed or not 
                if($res3==true)
                {
                    //Query Exectued and Food Updated
                    $_SESSION['update'] = "<div class='success'>Table Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage_table.php');
                }
                else
                {
                    //Failed to Update Food
                    $_SESSION['update'] = "<div class='error'>Failed to Update Table.</div>";
                    header('location:'.SITEURL.'admin/manage_table.php');
                }

                
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>