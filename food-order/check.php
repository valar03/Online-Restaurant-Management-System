<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .button{
    color: #fff;
    height:50px;
    width:75px;
    background-color:indianred;
    border: none;
    padding: 2px 0;
    border-radius: 4px;
    cursor: pointer;
    font-size: medium;
}
.button:hover{
    opacity: 0.9;
}
    </style>
    <?php 
    //CHeck whether food id is set or not
    if(isset($_GET['table_id']))
    {
        //Get the Food id and details of the selected food
        $table_id = $_GET['table_id'];

        //Get the DEtails of the SElected Food
        $sql = "SELECT * FROM tbl_reserve WHERE id=$table_id";
        //Execute the Query
        $res = mysqli_query($conn, $sql);
        //Count the rows
        $count = mysqli_num_rows($res);
        //CHeck whether the data is available or not
        if($count==1)
        {
            //WE Have DAta
            //GEt the Data from Database
            $row = mysqli_fetch_assoc($res);

            $table_no = $row['table_no'];
            $seats_no = $row['seats_no'];
        }
        else
        {
            //Food not Availabe
            //REdirect to Home Page
            header('location:'.SITEURL.'reserve_aftlog.php');
        }
    }
    else
    {
        //Redirect to homepage
        header('location:'.SITEURL.'reserve_aftlog.php');
    }
    if(isset($_GET['cus_id']))
    {
        //Get the Food id and details of the selected food
        $_id = $_GET['cus_id'];

        //Get the DEtails of the SElected Food
        $sql = "SELECT * FROM tbl_customer WHERE id=$cus_id";
        //Execute the Query
        $res = mysqli_query($conn, $sql);
        //Count the rows
        $count = mysqli_num_rows($res);
        //CHeck whether the data is available or not
        if($count==1)
        {
            //WE Have DAta
            //GEt the Data from Database
            $row = mysqli_fetch_assoc($res);
            
            $username = $row['username'];
            $full_name = $row['full_name'];
            $ph_no = $row['ph_no'];
            $email_id = $row['email_id'];
        }
        else
        {
            //Food not Availabe
            //REdirect to Home Page
            header('location:'.SITEURL.'reserve_aftlog.php');
        }
    }
    else
    {
        //Redirect to homepage
        header('location:'.SITEURL.'reserve_aftlog.php');
    }
?>

</head>

<body>
    <!-- Navbar Section Starts Here -->
    <div class="bg_reserve">
    <section class="navbar">
        <div class="container">
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>reserve.php" style="color:aliceblue;">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
</div>
    <!-- Navbar Section Ends Here -->

         <!-- fOOD MEnu Section Starts Here -->
    <section class="res-menu">
        <div class="container">
            <h2 class="text-center">BOOK YOUR TABLE HERE</h2>
            <?php 
    if(isset($_SESSION['order']))
    {
        echo $_SESSION['order'];
        unset($_SESSION['order']);
    }
?>

            <form action="" method="POST">  
            

        <?php 
            //Display Foods that are Active
            $sql = "SELECT * FROM tbl_reserve WHERE status='Not booked'";

            //Execute the Query
            $res=mysqli_query($conn, $sql);

            //Count Rows
            $count = mysqli_num_rows($res);

            //CHeck whether the foods are availalable or not
            if($count>0)
            {
                //Foods Available
                while($row=mysqli_fetch_assoc($res))
                {
                    //Get the Values
                    $id = $row['id'];
                    $table_no = $row['table_no'];
                    $seats_no = $row['seats_no'];
                    $status = $row['status'];
                    ?>
                    
                    <div class="res-box">
                        <div class="res-desc">
                            <h4 class="res-detail text-center">Table no:<?php echo $table_no; ?></br></h4>
                            <p class="res-detail text-center"><br><br>Seats:<?php echo $seats_no; ?></p>
                            <input type="submit" value="BOOK A TABLE" class="button">
                            <br>

                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //Food not Available
                echo "<div class='error'>Table not found.</div>";
            }
        ?>


              
            </div>

            <div class="date-box">
            <div class="text-center">
                <div class="date"><label for="date" name="reserve_date">SELECT A DATE:</label>
                <input type="datetime-local" name="reserve_date"></div><br><br><br><br>
                
            </div>

            </div>
            
           
            </form>
            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

</body>
    </html>

    <?php 

            //CHeck whether submit button is clicked or not
            if(isset($_POST['submit']))
            {
                // Get all the details from the form

                $table_no = $_POST['table_no'];
                $seats_no = $_POST['seats_no'];
                $reserve_date = $_POST['reserve_date'];

                //Save the Order in Databaase
                //Create SQL to save the data
                $sql2 = "INSERT INTO tbl_table SET 
                    username = $username,
                    full_name = $full_name,
                    ph_no = $ph_no,
                    email_id = $email_id,
                    table_no = $table_no,
                    seats_no = $seats_no,
                    reserve_date = $reserve_date, 
                    status = '$status'
                    WHERE id=$id
                ";

                //echo $sql2; die();

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //Check whether query executed successfully or not
                if($res2==true)
                {
                    //Query Executed and Order Saved
                    $_SESSION['order'] = "<div class='success text-center'>Booked successfully..</div>";
                    header('location:'.SITEURL.'reserve_aftlog.php');
                }
                else
                {
                    //Failed to Save Order
                    $_SESSION['order'] = "<div class='error text-center'>Failed to book.</div>";
                    header('location:'.SITEURL.'reserve_aftlog.php');
                }

            }
        
        ?>


