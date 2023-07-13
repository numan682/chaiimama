<?php
// Connect to the database
include 'config.php';
// Prepare the data
$name = $_POST['name'];
$details = $_POST['details'];
$active = isset($_POST['active']) ? 1 : 0;
$price = $_POST['price'];
$cat = $_POST['cat'];

// Handle image upload
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp, 'images/' . $image);

// Check if we're adding a new product or editing an existing one
if ($_POST['id']) {
  // Update existing product
  $id = $_POST['id'];
  $mysqli->query("UPDATE products SET name='$name', details='$details', active='$active',categories='$cat', price='$price' WHERE id='$id'");
} else {
  // Insert new product
  $mysqli->query("INSERT INTO products (name, details, active, categories, price, image) VALUES ('$name', '$details', '$active', '$cat', '$price', '$image')");
}

// Redirect back to index.php
header('Location: index.php');
exit;
?>
