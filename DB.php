<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'freelance', 3377);

if (!$connection) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

?>
