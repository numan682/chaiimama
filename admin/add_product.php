<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Add Product</h2>
    <form action="save_product.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="details">Product Details:</label>
        <textarea class="form-control" id="details" name="details"></textarea>
      </div>
      <div class="form-group">
        <label for="active">Active:</label>
        <input type="checkbox" id="active" name="active" value="1" checked>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" name="price" required>
      </div>
      <div class="form-group">
      <label for="cars">Choose a Category:</label>

<select  class="form-control" name="cat" id="cat">
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
        <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
        <img id="image-preview" src="#" alt="Image Preview" style="display: none; max-width: 200px; margin-top: 10px;">
      </div>
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
