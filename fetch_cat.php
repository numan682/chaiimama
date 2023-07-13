
<?php
include 'config.php';
$cat = $_GET['view'];
$result = $mysqli->query("SELECT * FROM products where categories='$cat'");

// Display products
while ($row = $result->fetch_assoc()) {
   ?>
 <li id="tea">
            <div class="menu-card hover:card">

              <figure class="card-banner img-holder" style="width: 100px; height: 100px;">
                <img clas src="./admin/images/<?php echo  $row["image"] ?>" width="100px" height="100px" loading="lazy" alt="Greek Salad"
                  class="img-cover">
              </figure>

              <div>

                <div class="title-wrapper">
                  <h3 class="title-3">
                    <a href="#" class="card-title"><?php echo  $row["name"] ?></a>
                  </h3>

                  <span class="badge label-1"><?php echo  $row["categories"] ?></span>

                  <span class="span title-2">$<?php echo  $row["price"] ?></span>
                </div>

                <p class="card-text label-1">
                <?php echo  $row["details"] ?>
                </p>

              </div>

            </div>
          </li>


<?php
  }


?>