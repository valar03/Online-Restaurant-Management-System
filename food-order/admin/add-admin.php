<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br><br>

        <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];//displaying session message
                    unset($_SESSION['add']);//removing session message
                }
        ?>
        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Your Username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Your Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php 
    //Process the value from form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        //Button clicked
        //echo "Button Clicked";

        //1.Get data from form
        $full_name=$_POST['full_name'];
        $username=$_POST['username'];
        $password=md5($_POST['password']); //Password encryption with MD5

        //2.SQL Query to save data into database

        $sql="INSERT INTO tbl_admin SET
                full_name='$full_name',
                username='$username',
                password='$password'
        ";

        //3.Execute Query and Save Data in Database
    
       $res=mysqli_query($conn, $sql) or die(mysqli_error());

       //4.Check whether the (Query is Executed ) date is inserted or not and display appropriate message

        if($res==TRUE)
        {
            //DATA inserted
            //echo "data inserted";
            //Create a session variable to dispaly message
            $_SESSION['add']="<div class='success'>Admin Added Successfully.</div>";

            //Redirect Page to manage admin
            header("location:".SITEURL.'admin/manage-admin.php');

        }
        else
        {
            //DATA not inserted
            //echo "data not inserted";
            //Create a session variable to dispaly message
            $_SESSION['add']="<div class='error'>Failed to Add Admin.</div>";

            //Redirect Page to manage admin
            header("location:".SITEURL.'admin/add-admin.php');
        }


        
    }
?>