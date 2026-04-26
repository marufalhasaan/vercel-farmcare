<?php
$conn = mysqli_connect("localhost", "root", "", "farmcare");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>