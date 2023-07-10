<?php include('config.php') ?>
<html>
    <form action="" method="POST">
        <input type="submit" value="create table" name="table">
</form>
</html>
<?php
    if(isset($_POST['table'])){
        $db="food_order";
        $conn=mysqli_connect($server,$user,$pass,$db);

    
    $sql1="CREATE TABLE  tbl_admin(
        id int(10) AUTO_INCREMENT,
        full_name varchar(100),
        username varchar(100),
        password varchar(255),
        PRIMARY KEY(id)
        )";

$res1 = mysqli_query($conn,$sql1);
if($res1==TRUE){
    echo "created";
}
else{
    echo "not created";
}

$sql2="CREATE TABLE tbl_category(
    id int(10) AUTO_INCREMENT,
    title varchar(100),
    image_name varchar(255),
    featured varchar(10),
    active varchar(10),
    PRIMARY KEY(id)
    )";

$res2 = mysqli_query($conn,$sql2);
if($res2==TRUE){
    echo "created";
}
else{
    echo "not created";
}

$sql3 = "CREATE TABLE tbl_order(
    id int(10) AUTO_INCREMENT,
    food varchar(150),
    price decimal(10,2),
    qty int(11),
    total decimal(10,2),
    order_date datetime,
    status varchar(50),
    customer_name varchar(150),
    customer_contact varchar(20),
    customer_email varchar(150),
    customer_address varchar(255),
    PRIMARY KEY(id)
    )";

$res3 = mysqli_query($conn,$sql3);
if($res3==TRUE){
    echo "created";
}
else{
    echo "not created";
}



$sql4= " CREATE TABLE tbl_food(
    id int(10) AUTO_INCREMENT,
    title varchar(100),
    description text,
    price decimal(10,2),
    image_name varchar(255),
    category_id int(10),
    featured varchar(10),
    active varchar(10),
    PRIMARY KEY(id)
    )";

$res4 = mysqli_query($conn,$sql4);
if($res4==TRUE){
    echo "created";
}
else{
    echo "not created";
}

$sql5="CREATE TABLE tbl_customer(
    id int(10) AUTO_INCREMENT,
    full_name varchar(150),
    username varchar(150),
    email_id varchar(255),
    ph_no varchar(20),
    password varchar(255),
    PRIMARY KEY(id)
    )";

$res5 = mysqli_query($conn,$sql5);
if($res5==TRUE){
    echo "created";
}
else{
    echo "not created";
}

$sql6="CREATE TABLE tbl_reserve(
    id int(10) AUTO_INCREMENT,
    table_no int(255),
    seats_no int(255),
    price int(10),
    status varchar(10),
    PRIMARY KEY(id)
    )";

$res6 = mysqli_query($conn,$sql6);
if($res6==TRUE){
    echo "created";
}
else{
    echo "not created";
}

$sql7="CREATE TABLE tbl_table(
    id int(11) AUTO_INCREMENT,
    username varchar(150),
    full_name varchar(150),
    ph_no varchar(12),
    email_id varchar(255),
    table_no int(255),
    seats_no int(255),
    reserve_date date,
    reserve_time time(6),
    price int(10),
    status varchar(50),
    PRIMARY KEY(id)
    )";

$res7 = mysqli_query($conn,$sql7);
if($res7==TRUE){
    echo "created";
}
else{
    echo "not created";
}

$password=md5(12345);
$sql10="INSERT INTO tbl_admin SET
full_name='12345',
username='12345',
password='$password'
";
$res10=mysqli_query($conn,$sql10);
$sql11="INSERT INTO tbl_category VALUES(1,'Biryani','Food_Category_205.jpg','Yes','Yes')";
$sql12="INSERT INTO tbl_category VALUES(2,'Fried rice','Food_Category_315.jpg','Yes','Yes')";
$sql13="INSERT INTO tbl_category VALUES(3,'Burger','Food_Category_932.webp','Yes','Yes')";
$sql14="INSERT INTO tbl_food VALUES(1,'Fish biryani','Fish biryani is layered rice dish made with fish','20.00','Food-Name-3633.jpg',1,'Yes','Yes')";
$sql15="INSERT INTO tbl_food VALUES(2,'Crispy Chicken Burger','Double up the crispy chicken patty burger.','3.00','Food-Name-6981.jpg',3,'Yes','Yes')";
$sql16="INSERT INTO tbl_reserve VALUES(1,1,5,10,'Not booked')";
$sql17="INSERT INTO tbl_reserve VALUES(2,2,4,8,'Not booked')";
$sql18="INSERT INTO tbl_reserve VALUES(3,3,3,6,'Not booked')";
$sql19="INSERT INTO tbl_reserve VALUES(4,5,5,10,'Not booked')";
$res11=mysqli_query($conn,$sql11);
$res12=mysqli_query($conn,$sql12);
$res13=mysqli_query($conn,$sql13);
$res14=mysqli_query($conn,$sql14);
$res15=mysqli_query($conn,$sql15);
$res16=mysqli_query($conn,$sql16);
$res17=mysqli_query($conn,$sql17);
$res18=mysqli_query($conn,$sql18);
$res19=mysqli_query($conn,$sql19);


mysqli_close($conn);
    }
?>