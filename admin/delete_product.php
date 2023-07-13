<?php
// Connect to the database
include 'config.php';
// Get the product ID
$id = $_GET['id'];

// Delete the product
$mysqli->query("DELETE FROM products WHERE id='$id'");

// Redirect back to index.php
header('Location: index.php');
exit;
?>
