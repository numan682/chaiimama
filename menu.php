<?php
include 'header.php';


?>


<main>
  <article>
    <section class="hero text-center" aria-label="home" id="home">

      <ul class="hero-slider" data-hero-slider>

        <li class="slider-item active" data-hero-slider-item>

          <div class="slider-bg">
            <img src="./assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
          </div>

          <p class="label-2 section-subtitle slider-reveal">Tradational & Hygine</p>

          <h1 class="display-1 hero-title slider-reveal">
            For the love of <br>
            delicious food
          </h1>

          <p class="body-2 hero-text slider-reveal">
            Come with family & feel the joy of mouthwatering food
          </p>

          <a href="#menu" class="btn btn-primary slider-reveal">
            <span class="text text-1">View Our Menu</span>

            <span class="text text-2" aria-hidden="true">View Our Menu</span>
          </a>

        </li>

       

      </ul>

     

    </section>


    <section class="section menu" aria-label="menu-label" id="menu">
      <div class="container">

        <p class="section-subtitle text-center label-2">Special Selection</p>

        <h2 class="headline-1 section-title text-center">Delicious Menu</h2>
        <div class="cat_icon">


         <a id="a_cat" href="?view=all-day-breakfast#menu" data-target="all-day-breakfast">
          <div class="logo-item">
            <img src="./assets/images/breakfast_menu.svg" alt="Logo 1">
            <div id="all-day-breakfast" class="description">All Day Breakfast</div>
          </div>
         </a> 

       <a  id="a_cat" href="?view=street-food#menu" data-target="street-food">
         <div class="logo-item">
            <img src="./assets/images/streetfood_menu.svg" alt="Logo 2">
            <div id="street-food" class="description">Street Food</div>
          </div>
       </a>  

        <a  id="a_cat" class="" href="?view=patty#menu" data-target="patty">
          <div class="logo-item uncommon-class-1">
            <img src="./assets/images/patty_menu.jpg" alt="Logo 3">
            <div id="patty" class="description ">Patty's</div>
          </div>
        </a>  

        <a id="a_cat" href="?view=lunch-box#menu" data-target="lunch-box">
           <div class="logo-item uncommon-class-2">
            <img src="./assets/images/lunchbox_menu.svg" alt="Logo 4">
            <div id="lunch-box" class="description">Lunch Box</div>
          </div>
        </a> 

        <a id="a_cat" href="?view=tea#menu" data-target="tea">
           <div class="logo-item uncommon-class-2">
            <img src="./assets/images/tea_menu.svg" alt="Logo 4">
            <div id="tea" class="description">Tea & Bubble Tea</div>
          </div>
        </a> 

        <a id="a_cat" href="?view=dessert#menu" data-target="dessert">
           <div class="logo-item uncommon-class-2">
            <img src="./assets/images/dessert_menu.svg" alt="Logo 4">
            <div id="dessert" class="description">Dessert</div>
          </div>
        </a> 

        
        <a id="a_cat" href="?view=milkshake#menu" data-target="milkshake">
           <div class="logo-item uncommon-class-2">
            <img src="./assets/images/milkshake_menu.svg" alt="Logo 4">
            <div id="milkshake" class="description">Milkshake</div>
          </div>
        </a> 

        <a id="a_cat" id="a_cat" href="?view=smothies#menu" data-target="smothies">
           <div class="logo-item uncommon-class-2">
            <img src="./assets/images/smoothies_menu.svg" alt="Logo 4">
            <div id="smothies" class="description">Smothies</div>
          </div>
        </a> 


        <a id="a_cat cake" href="?view=cake#menu" data-target="cake">
           <div class="logo-item uncommon-class-2">
            <img src="./assets/images/cake_menu.svg" alt="Logo 4">
            <div id="cake" class="description">Cake</div>
          </div>
        </a> 

        
        <a id="a_cat" href="?view=ice-cream#menu" data-target="ice-cream">
           <div class="logo-item uncommon-class-2">
            <img src="./assets/images/icecream_menu.svg" alt="Logo 4">
            <div id="ice-cream" class="description">Ice Cream</div>
          </div>
        </a> 

        </div>


        <ul class="grid-list" id="menu">
<?php
include 'menu_demo.php';
$cats= $_GET['view'];
echo '  <script>
  var element = document.getElementById("'.$cats.'");
  console.log(element)
  element.classList.add("active_description");
</script>';
?>

         

        </ul>






      </div>
    </section>







  </article>
</main>





<?php
include 'footer.php';

?>