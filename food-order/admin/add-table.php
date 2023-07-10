<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Table</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
        
            <table class="tbl-30">

                <tr>
                    <td>Table no: </td>
                    <td>
                        <input type="text" name="table_no" placeholder="Table no">
                    </td>
                </tr>

                <tr>
                    <td>Number of seats: </td>
                    <td>
                        <input type="number" name="seats_no">
                    </td>
                </tr>

                <tr>
                    <td>Price: </td>
                    <td>
                        <input type="number" name="price">
                    </td>
                </tr>
 
                <tr>
                    <td>Status: </td>
                    <td>
                        <input type="radio" name="status" value="Booked"> Booked 
                        <input type="radio" name="status" value="Not booked"> Not booked
                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Table" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        
        <?php 

            //CHeck whether the button is clicked or not
            if(isset($_POST['submit']))
            {
                //Add the Food in Database
                //echo "Clicked";
                
                //1. Get the DAta from Form
                $table_no = $_POST['table_no'];
                $seats_no = $_POST['seats_no'];
                $price=$_POST['price'];

                //Check whether radion button for featured and active are checked or not
                if(isset($_POST['status']))
                {
                    $status = $_POST['status'];
                }
                else
                {
                    $status = "Not booked"; //SEtting the Default Value
                }
   
                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = "INSERT INTO tbl_reserve SET 
                    table_no = '$table_no',
                    seats_no = $seats_no,
                    price = $price,
                    status = '$status'
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether data inserted or not
                //4. Redirect with MEssage to Manage Food page
                if($res2 == true)
                {
                    //Data inserted Successfullly
                    $_SESSION['add'] = "<div class='success'>Table Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage_table.php');
                }
                else
                {
                    //FAiled to Insert Data
                    $_SESSION['add'] = "<div class='error'>Failed to Add Table.</div>";
                    header('location:'.SITEURL.'admin/manage_table.php');
                }

                
            }

        ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>