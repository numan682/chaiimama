<?php
// Connect to the database
include 'config.php';
// Fetch all products
$result = $mysqli->query('SELECT * FROM products');

// Display products
while ($row = $result->fetch_assoc()) {
  echo '<div class="panel panel-default">';
  echo '<div class="panel-heading">' . $row['name'] . '</div>';
  echo '<div class="panel-body">';
  echo '<p>' . $row['details'] . '</p>';
  echo '<p><strong>Price:</strong> $' . $row['price'] . '</p>';
  if ($row['image']) {
    echo '<img src="images/' . $row['image'] . '" alt="Product Image" style="max-width: 200px; margin-bottom: 10px;">';
  }
  echo '</div>';
  echo '<div class="panel-footer">';
  echo '<a href="edit_product.php?id=' . $row['id'] . '" class="btn btn-primary">Edit</a>';
  echo '<a href="delete_product.php?id=' . $row['id'] . '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete this product?\')">Delete</a>';
  echo '</div>';
  echo '</div>';
}
?>
