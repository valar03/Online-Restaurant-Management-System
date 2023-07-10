
<?php include('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br><br>
        <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
        ?>
        <br><br>

        <div class="col-4 text-center">

            <?php 
                //Sql Query 
                $sql = "SELECT * FROM tbl_category";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
            ?>

            <h1><?php echo $count; ?></h1>
            <br />
            Categories
        </div>

        <div class="col-4 text-center">

            <?php 
                //Sql Query 
                $sql2 = "SELECT * FROM tbl_food";
                //Execute Query
                $res2 = mysqli_query($conn, $sql2);
                //Count Rows
                $count2 = mysqli_num_rows($res2);
            ?>

            <h1><?php echo $count2; ?></h1>
            <br />
            Foods
        </div>

        <div class="col-4 text-center">
            
            <?php 
                //Sql Query 
                $sql3 = "SELECT * FROM tbl_order";
                //Execute Query
                $res3 = mysqli_query($conn, $sql3);
                //Count Rows
                $count3 = mysqli_num_rows($res3);
            ?>

            <h1><?php echo $count3; ?></h1>
            <br />
            Total Orders
        </div>

        <div class="col-4 text-center">
            
            <?php 
                //Sql Query 
                $sql5 = "SELECT * FROM tbl_reserve";
                //Execute Query
                $res5 = mysqli_query($conn, $sql5);
                //Count Rows
                $count5 = mysqli_num_rows($res5);
            ?>

            <h1><?php echo $count5; ?></h1>
            <br />
            Tables
        </div>

        <div class="col-4 text-center">
            
            <?php 
                //Sql Query 
                $sql4 = "SELECT * FROM tbl_reserve WHERE status='Booked'";
                //Execute Query
                $res4 = mysqli_query($conn, $sql4);
                //Count Rows
                $count4 = mysqli_num_rows($res4);
            ?>

            <h1><?php echo $count4; ?></h1>
            <br />
            Total Tables reserved
        </div>



        <div class="clearfix"></div>

    </div>
</div>
<!-- Main Content Setion Ends -->

<?php include('partials/footer.php') ?>