<?php

if (!isset($_GET['view'])) {
  // Code to execute when $var is not set
 include 'fetch_data.php';
}else{
  include 'fetch_cat.php';
}
?>