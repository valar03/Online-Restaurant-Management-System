<?php include('config/constants.php'); ?>
<?php 
$utable_no='--';
$useats_no='--';
$uprice='--';
    //CHeck whether food id is set or not
    if(isset($_SESSION['cus_id']))
    {
        //Get the Food id and details of the selected food
        $cus_id = $_SESSION['cus_id'];

        //Get the DEtails of the SElected Food
        $sql1 = "SELECT * FROM tbl_customer WHERE id=$cus_id";
        //Execute the Query
        $res1 = mysqli_query($conn, $sql1);
        //Count the rows
        $count = mysqli_num_rows($res1);
        //CHeck whether the data is available or not
        if($count==1)
        {
            //WE Have DAta
            //GEt the Data from Database
            $rows = mysqli_fetch_assoc($res1);

            $username = $rows['username'];
            $full_name = $rows['full_name'];
            $ph_no = $rows['ph_no'];
            $email_id = $rows['email_id'];
        }
    }
    ?>
    <?php
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

            $utable_no=$row['table_no'];
            $useats_no=$row['seats_no'];
            $uprice=$row['price'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="icon"  href="http://localhost:8080/olive-kitchen/logo_olive.jpg">
    <!-- Link our CSS file -->
    <link rel="stylesheet" href="http://localhost:8080/olive-kitchen/food-order/css/style.css">
    <link rel="stylesheet" href="http://localhost:8080/olive-kitchen/food-order/css/home_style.css">
    <link rel="stylesheet" href="http://localhost:8080/olive-kitchen/food-order/css/bootstrap.min.css">

    <style>
        .button{
    color: #fff;
    height:100px;
    width:300px;
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
     <script>
        function reveall() {
    var reveals = document.querySelectorAll(".reveall");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveall);
    </script>

</head>

<body>
    <!-- Navbar Section Starts Here -->
    <!-- ======= Top Bar ======= -->
    <div class="bg_reservee">
    <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="d-flex align-items-center"><span>044-22-74-1916</span></i>
      </div>

    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="#">Olive Kitchen</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="<?php echo SITEURL; ?>reserve.php">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->
      

    </div>
  </header><!-- End Header -->
</div>

</div>

         <!-- fOOD MEnu Section Starts Here -->
    <section class="res-menu reveall">
        <div class="container">
            
        <div class="section-title">
          <h2>Table Reservation</h2>
          <p>BOOK YOUR TABLE HERE</p>
        </div>
        <div class="row">
        <?php 
   
?>
<tr><?php
            if(isset($_SESSION['reserve']))
    {
        echo $_SESSION['reserve'];
        unset($_SESSION['reserve']);
    }?>
            </tr>
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
                    $price = $row['price'];
                    $status = $row['status'];
                    ?>
                    

       
<div class="res-box reveall">
<div class="col-lg-4 mt-4 mt-lg-0 res-desc">
  <div class="box">
    <span>0<?php echo $table_no; ?></span>
    <h6>Seats:<?php echo $seats_no; ?></h6>
    <h8 class="text-white">Price:$<?php echo $price; ?></h8>
    <p><a href="<?php echo SITEURL; ?>reserve_aftlog.php?table_id=<?php echo $id; ?>" class="btn-book animated fadeInUp scrollto">Book</a></p>
  </div>
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

            
           
            </form>


</div>
<div class="clearfix"></div>
           
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->
<hr>
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table reveall">
      <div class="container reveall" data-aos="fade-up">

        <div class="section-title reveall">
          <h2>Reservation</h2>
          <p>Fill this form to book the table</p>
        </div>
        

        <form action="" method="post" >
        <table>
            <tr>
                <th><label for="username">Username:</label></th>
                <td><span class="input"><?php echo $username; ?></span></td>
                <td><input type="hidden" name="username" value="<?php echo $username; ?>"></td>
            </tr>
            <tr>
                <th><label for="fullname">Fullname:</label></th>
                <td><span class="input"><?php echo $full_name; ?></span></td>
                <td><input type="hidden" name="fullname" value="<?php echo $full_name; ?>"></td>
            </tr>
            <tr>
                <th><label for="Contact no">Contact no:</label></th>
                <td><span class="input"><?php echo $ph_no; ?></span></td>
                <td><input type="hidden" name="ph_no" value="<?php echo $ph_no; ?>"></td>
            </tr>
            <tr>
                <th><label for="email_id">Email:</label></th>
                <td><span class="input"><?php echo $email_id; ?></span></td>
                <td><input type="hidden" name="email_id" value="<?php echo $email_id; ?>"></td>
            </tr>
            <tr>
                <th><label for="table_no">Table no.</label></th>
                <td><span class="input"><?php echo $utable_no; ?></span></td>
                <td><input type="hidden" name="table_no" value="<?php echo $utable_no; ?>"></td>
            </tr>
            <tr>
                <th><label for="seats_no">Number of Seats:</label></th>
                <td><span class="input"><?php echo $useats_no; ?></span></td>
                <td><input type="hidden" name="seats_no"  value="<?php echo $useats_no; ?>"></td>
            </tr>
            <tr>
                <th><label for="price">Price:</label></th>
                <td><span class="input">$<?php echo $uprice; ?></span></td>
                <td><input type="hidden" name="price"  value="<?php echo $uprice; ?>"></td>
            </tr>
            <tr>
                <th><label for="reserve_date">Reserve date:</label></th>
                <td><input type="date" name="reserve_date" required></td>
            </tr>
            <tr>
                <th><label for="reserve_time">Reserve time:</label></th>
                <td><input type="time" name="reserve_time" required></td>
            </tr>
            <tr>
                <td colspan="2"><div class="text-center"><input type="submit" name="book" class="btn-book animated fadeInUp scrollto" value="Book a Table"/></div></td>
      
            </tr>
            
        </table>
        </form>

        <?php 

            //CHeck whether submit button is clicked or not
            if(isset($_POST['book']))
            {
                // Get all the details from the form
                $username=$_POST['username'];
                $full_name=$_POST['fullname'];
                $ph_no=$_POST['ph_no'];
                $email_id=$_POST['email_id'];
                $table_no = $_POST['table_no'];
                $seats_no = $_POST['seats_no'];
                $price=$_POST['price'];
                $status = "Booked";  // Booked,Cancelled,Pending
                $reserve_date=$_POST['reserve_date'];
                $reserve_time=$_POST['reserve_time'];


                //Save the Order in Databaase
                //Create SQL to save the data
                $sql2 = "INSERT INTO tbl_table SET 
                    username = '$username',
                    full_name = '$full_name',
                    ph_no = '$ph_no',
                    email_id = '$email_id',
                    table_no = '$table_no',
                    price='$price',
                    status = '$status',
                    reserve_date='$reserve_date',
                    reserve_time='$reserve_time',
                    seats_no = '$seats_no'
                ";
                

                //echo $sql2; die();

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                $statuss="Booked";

                $sql7="UPDATE tbl_reserve SET
                    status='$statuss'
                    WHERE id='$table_id'
                
                ";

                $res7 = mysqli_query($conn,$sql7);

                if($res2 == TRUE){
                  //Query Executed and Order Saved
                  $_SESSION['reserve'] = "<div class=' text-white text-center'>Booked successfully.</div>";
                 }
                else
                 {
                      //Failed to Save Order
                    $_SESSION['reserve'] = "<div class='error text-white text-center'>Failed to book.Try again later.</div>";
                   }
                }
      

                
            
        
        ?>

      </div>
    </section><!-- End Book A Table Section -->

</body>
    </html>

  