<?php include('config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="../logo_olive.jpg">
 
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 750px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 800px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
.button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}


    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="" method="POST">
        <h3>Register Here</h3>
        
        <?php 
                    if(isset($_SESSION['register']))
                    {
                        echo $_SESSION['register'];
                        unset($_SESSION['register']);
                    }
                ?>
        <label for="full_name">Fullname</label>
        <input type="text" placeholder="Enter fullname" name="full_name" required>

        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="email">Email ID</label>
        <input type="email" placeholder="Enter Email ID" name="email_id" required>

        <label for="ph_no">Phone number</label>
        <input type="tel" placeholder="Enter phone number"  name="ph_no" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" required>

        <input type="submit" name="submit" value="Register" class="button">
    </form>

   
</body>
<?php 

//CHeck whether submit button is clicked or not
if(isset($_POST['submit']))
{
    // Get all the details from the form

    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email_id = $_POST['email_id'];
    $ph_no = $_POST['ph_no'];
    $password = md5($_POST['password']);

    //Save the details in Databaase
    //Create SQL to save the data
    $sql2 = "INSERT INTO tbl_customer SET 
        full_name = '$full_name',
        username = '$username',
        email_id = '$email_id',
        ph_no = '$ph_no',
        password = '$password'
    ";

    //echo $sql2; die();

    //Execute the Query
    $res2 = mysqli_query($conn, $sql2);

    //Check whether query executed successfully or not
    if($res2==true)
    {
        //Query Executed and Order Saved
        $_SESSION['register'] = "<div class='success text-center'>Registered successfully.</div>";
        header('location:'.SITEURL.'reserve.php');
    }
    else
    {
        //Failed to Save Order
        $_SESSION['register'] = "<div class='error text-center'>Failed to register.Try again later.</div>";
        header('location:'.SITEURL.'regis_res.php');
    }

}

?>

</html>
