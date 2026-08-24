<?php
include("connection.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $query = "INSERT INTO teachers(name, email, password, gender, city)
              VALUES('$name', '$email', '$password', '$gender', '$city')";

    $result = mysqli_query($conn, $query);

    if($result)
    {
        echo "Record Inserted Successfully!";
        echo "<br><br>";
        echo "<a href='display.php'>View Records</a>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>








