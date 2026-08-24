<!DOCTYPE html>
<html>
<head>
    <title>Teacher Registration Form</title>
</head>
<body>

<h2>Teacher Registration Form</h2>

<form action="data.php" method="POST">

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    <label>City:</label><br>
    <select name="city" required>
        <option value="">Select City</option>
        <option value="Karachi">Karachi</option>
        <option value="Lahore">Lahore</option>
        <option value="Islamabad">Islamabad</option>
        <option value="Hyderabad">Hyderabad</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Save">

</form>

<br>
<a href="display.php">View All Records</a>

</body>
</html>
