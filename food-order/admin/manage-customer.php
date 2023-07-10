<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Customer Details</h1>

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
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email ID</th>
                        <th>Phone no.</th>
                    </tr>

                    <?php 
                        //Get all the details from database
                        $sql = "SELECT * FROM tbl_customer ORDER BY id DESC"; // DIsplay the Latest Order at First
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
                                $full_name = $row['full_name'];
                                $username = $row['username'];
                                $email_id = $row['email_id'];
                                $ph_no = $row['ph_no'];
                               
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $email_id; ?></td>
                                        <td><?php echo $ph_no; ?></td>

                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //details not Available
                            echo "<tr><td colspan='12' class='error'>customer not Available</td></tr>";
                        }
                    ?>

 
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>