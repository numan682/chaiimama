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

          <p class="label-2 section-subtitle slider-reveal">Our Contacts</p>

          <h1 class="display-1 hero-title slider-reveal">
           Contact Us
          </h1>

          <p class="body-2 hero-text slider-reveal">
            Get in Touch With Us
          </p>

          <a href="#contact" class="btn btn-primary slider-reveal">
            <span class="text text-1">Contact Us</span>

            <span class="text text-2" aria-hidden="true">Contact Us</span>
          </a>

        </li>

       

      </ul>

     

    </section>
<center>

<div class="contact-container">
  <form class="contact-form">
    <h2 class="form-title">Contact Us</h2>

    <div class="form-group">
      <label for="name" class="form-label">Your Name</label>
      <input type="text" id="name" name="name" class="form-input" placeholder="Enter your name" required>
    </div>

    <div class="form-group">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email address" required>
    </div>

    <div class="form-group">
      <label for="message" class="form-label">Message</label>
      <textarea id="message" name="message" class="form-input" placeholder="Enter your message" required></textarea>
    </div>

    <button type="submit" class="form-button">Submit</button>
  </form>
</div>

</center>








    <?php
include 'footer.php';

?>