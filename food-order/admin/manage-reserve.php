<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Booking</h1>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
                <br><br>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Username</th>
                        <th>Customer Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Table no.</th>
                        <th>Number of seats</th>
                        <th>Price</th>
                        <th>Reserve date</th>
                        <th>Reserve time</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM tbl_table ORDER BY id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        $sn = 1; //Create a Serial Number and set its initail value as 1

                        if($count>0)
                        {
                            //Order Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $id = $row['id'];
                                $username = $row['username'];
                                $full_name = $row['full_name'];
                                $ph_no = $row['ph_no'];
                                $email_id = $row['email_id'];
                                $table_no = $row['table_no'];
                                $seats_no = $row['seats_no'];
                                $price = $row['price'];
                                $reserve_date = $row['reserve_date'];
                                $reserve_time = $row['reserve_time'];
                                $status = $row['status'];
                                
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $ph_no; ?></td>
                                        <td><?php echo $email_id; ?></td>
                                        <td><?php echo $table_no; ?></td>
                                        <td><?php echo $seats_no; ?></td>
                                        <td><?php echo $price; ?></td>
                                        <td><?php echo $reserve_date; ?></td>
                                        <td><?php echo $reserve_time; ?></td>

                                        <td>
                                            <?php 


                                                if($status=="Booked")
                                                {
                                                    echo "<label>$status</label>";
                                                }
                                                elseif($status=="Pending")
                                                {
                                                    echo "<label style='color: orange;'>$status</label>";
                                                }
                                                elseif($status=="Cancelled")
                                                {
                                                    echo "<label style='color: green;'>$status</label>";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-reserve.php?id=<?php echo $id; ?>" class="btn-secondary">Update details</a>
                                        </td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'>Reservations not Available</td></tr>";
                        }
                    ?>

 
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>