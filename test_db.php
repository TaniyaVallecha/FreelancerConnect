<?php
// Database connection
$connection = mysqli_connect('localhost', 'root',' ', 'freelance');

// Check connection
if (!$connection) {
    die("Connection Failed! " . mysqli_connect_error());
}
echo "Database connected successfully!";
?>
