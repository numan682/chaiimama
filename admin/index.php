<!DOCTYPE html>
<html>
<head>
  <title>Restaurant Admin Panel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Restaurant Admin Panel</h2>
   <a class="btn btn-primary" href="add_product.php">ADD PRODUCT</a> <br> <br>
    <div id="product-list">
      <?php include 'fetch_products.php'; ?>
    </div>
  </div>



  <script>
    function previewImage(event) {
      var imagePreview = document.getElementById('image   -preview');
      imagePreview.style.display = 'block';
      imagePreview.src = URL.createObjectURL(event.target.files[0]);
    }
  </script>
</body>
</html>
