<?php
include("connection.php");

$is  = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$city = $_POST['city'];


$query = "UPDATE" teachers SET name='$name', email='$email', password='$password', gender='gender', city=$'city'  where id='id'";


$result = mysql_query($conn, $query);

if(result) {
header("location: display.php");
exit();
} else {
    echo "Update failed!";
}
    ?>
