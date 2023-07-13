<?php
// Connect to the database
include 'config.php';
// Get the product ID
$id = $_GET['id'];

// Fetch the product
$result = $mysqli->query("SELECT * FROM products WHERE id='$id'");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Product</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Edit Product</h2>
    <form action="save_product.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" class="form-control" id="name" name="name" required value="<?php echo $row['name']; ?>">
      </div>
      <div class="form-group">
        <label for="details">Product Details:</label>
        <textarea class="form-control" id="details" name="details"><?php echo $row['details']; ?></textarea>
      </div>
      <div class="form-group">
        <label for="active">Active:</label>
        <input type="checkbox" id="active" name="active" value="1"<?php echo $row['active'] ? ' checked' : ''; ?>>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" name="price" required value="<?php echo $row['price']; ?>">
      </div>
      <div class="form-group">
      <label for="cars">Choose a Category:</label>

<select  class="form-control" name="cat" id="cat">
<option  value="<?php echo $row['categories']; ?>"><?php echo $row['categories']; ?></option>
  <option  value="all-day-breakfast">All Day Breakfast</option>
  <option value="street-food">Street Food</option>
  <option value="patty">Patty</option>
  <option value="lunch-box">Lunch Box</option>
  <option value="tea">Tea & Bubble Tea</option>
  <option value="dessert">Dessert</option>
  <option value="milkshake">Milkshake</option>
  <option value="smothies">Smothies</option>
  <option value="cake">Cake</option>
  <option value="ice-cream">Ice Cream</option>
</select>
      </div> 

      <div class="form-group">
        <label for="image">Product Image:</label>
        <?php
        if ($row['image']) {
          echo '<img src="images/' . $row['image'] . '" alt="Product Image" style="max-width: 200px; margin-bottom: 10px;"><br>';
         
        }
        ?>
        
        
      </div>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="submit" class="btn btn-primary" value="Save">
      <a href="index.php" class="btn btn-default">Cancel</a>
    </form>
  </div>

  <script>
    function previewImage(event) {
      var imagePreview = document.getElementById('image-preview');
      imagePreview.style.display = 'block';
      imagePreview.src = URL.createObjectURL(event.target.files[0]);
    }
  </script>
</body>
</html>
