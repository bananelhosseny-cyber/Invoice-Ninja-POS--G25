<?php 
include 'db.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM customers WHERE id=$id");

header("Location: Customers.php");
exit();
?>