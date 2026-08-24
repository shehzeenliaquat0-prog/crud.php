<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM teachers WHERE id='$id'";

$result = mysqli_query($conn, $query);

if($result)
{
    header("Location: display.php");
    exit();
}
else
{
    echo "Delete Failed!";
}
?>
