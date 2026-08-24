<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Records</title>
    <style>
        table{
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th{
            background-color: lightgray;
        }
    </style>
</head>
<body>

<h2 align="center">Teachers Record</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
        <th>City</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

<?php

$query = "SELECT * FROM teachers";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['city']; ?></td>

    <td>
        <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
    </td>

    <td>
        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>

<?php
}
?>

</table>

<br>

<center>
    <a href="form.php">Add New Record</a>
</center>

</body>
</html>
