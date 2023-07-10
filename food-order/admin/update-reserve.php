<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Reservation Details</h1>
        <br><br>


        <?php 
        
            //CHeck whether id is set or not
            if(isset($_GET['id']))
            {
                //GEt the Order Details
                $id=$_GET['id'];

                //Get all other details based on this id
                //SQL Query to get the order details
                $sql = "SELECT * FROM tbl_table WHERE id=$id";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Detail Availble
                    $row=mysqli_fetch_assoc($res);

                    $username = $row['username'];
                    $full_name = $row['full_name'];
                    $ph_no = $row['ph_no'];
                    $email_id = $row['email_id'];
                    $table_no = $row['table_no'];
                    $seats_no = $row['seats_no'];
                    $price = $row['price'];
                    $reserve_date = $row['reserve_date'];
                    $reserve_time=$row['reserve_time'];
                    $status = $row['status'];
                }
                else
                {
                    //DEtail not Available/
                    //Redirect to Manage Order
                    header('location:'.SITEURL.'admin/manage-reserve.php');
                }
            }
            else
            {
                //REdirect to Manage ORder PAge
                header('location:'.SITEURL.'admin/manage-reserve.php');
            }
        
        ?>

        <form action="" method="POST">
        
            <table class="tbl-30">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                </tr>

                <tr>
                    <td>Customer name:</td>
                        <td><input type="text" name="full_name" value="<?php echo $full_name; ?>"></td>
                    
                </tr>

                <tr>
                    <td>Contact no:</td>
                        <td><input type="tel" name="ph_no" value="<?php echo $ph_no; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Email ID:</td>
                        <td><input type="email" name="email_id" value="<?php echo $email_id; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Table no:</td>
                    <td>
                        <input type="number" name="table_no" value="<?php echo $table_no; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Seats no:</td>
                    <td>
                        <input type="number" name="seats_no" value="<?php echo $seats_no; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="number" name="price" value="<?php echo $price; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Reserve date:</td>
                    <td>
                        <input type="date" name="reserve_date" value="<?php echo $reserve_date; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Reserve time:</td>
                    <td>
                        <input type="time" name="reserve_time" value="<?php echo $reserve_time; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option <?php if($status=="Booked"){echo "selected";} ?> value="Booked">Booked</option>
                            <option <?php if($status=="Pending"){echo "selected";} ?> value="Pending">Pending</option>
                            <option <?php if($status=="Cancelled"){echo "selected";} ?> value="Cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td clospan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <input type="submit" name="submit" value="Update details" class="btn-secondary">
                    </td>
                </tr>
            </table>
        
        </form>


        <?php 
            //CHeck whether Update Button is Clicked or Not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //Get All the Values from Form
                $id = $_POST['id'];
                $username = $_POST['username'];
                $full_name = $_POST['full_name'];
                $ph_no = $_POST['ph_no'];
                $email_id = $_POST['email_id'];
                $table_no = $_POST['table_no'];
                $seats_no = $_POST['seats_no'];
                $price = $_POST['price'];
                $reserve_date = $_POST['reserve_date'];
                $reserve_time = $_POST['reserve_time'];
                $status = $_POST['status'];

                //Update the Values
                $sql2 = "UPDATE tbl_table SET 
                    username = '$username',
                    full_name = '$full_name',
                    ph_no = '$ph_no',
                    email_id = '$email_id',
                    table_no = '$table_no',
                    seats_no = '$seats_no',
                    price = '$price',
                    reserve_date = '$reserve_date', 
                    reserve_time = '$reserve_time',
                    status = '$status'
                    WHERE id=$id
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                if($res2 ==TRUE){
                    $_SESSION['update'] = "<div class='success text-center'>Details updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-reserve.php');
                }
                else
                {
                    //Failed to Save Order
                    $_SESSION['update'] = "<div class='error text-center'>Failed to update.</div>";
                    header('location:'.SITEURL.'admin/manage-reserve.php');
                
                }

            }
        ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>