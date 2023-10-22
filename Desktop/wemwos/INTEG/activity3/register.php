<?php
// Replace these values with your database credentials
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "db";

// Connect to MySQL
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input from the registration form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; // Hash the password

// Insert user data into the database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($connection, $sql)) {
    echo "Registration successful! You can now log in.";
    echo '<br><a href="index.php">Go Back to Registration Form</a>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>