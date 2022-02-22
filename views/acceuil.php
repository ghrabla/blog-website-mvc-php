<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assest/css/style.css" />
    <script src="https://kit.fontawesome.com/58fbe30f4a.js" crossorigin="anonymous"></script>
    <title>blog website</title>
  </head>
  <body>
    <header>
      
      <nav class="nav">
        <a href="/" class="logo">logo</a>

        <div class="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>

        <div class="nav__link hide">
          <a href="#">home</a>
          <a href="#about">about</a>
          <a href="#contact">contact</a>
          <a href="#">blog</a>
          <a href="<?php echo BASE_URL;?>login" class="login">login/register</a>
        </div>
      </nav>
    </header>
    <section>
      <div class="container">
        <div class="image">
          <img src="assest/pictures/Friends_watching_movie_in_open_air_cinema-removebg-preview.png" alt="">
        </div>
        <div class="container-content">
          <h1>Lorem ipsum dolor <br> sit amet</h1>
          <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam tempore esse doloremque fuga quisquam neque, expedita beatae nemo consequatur pariatur fugiat at minus, adipisci in possimus perspiciatis provident quod. Tenetur.</h4>
          <div class="container-links">
            <a href="">join now </a>
            <a href="">see more </a>
          </div>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="container">
        <div class="container-content">
          <h1>who we are ?</h1>
          <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam tempore esse doloremque fuga quisquam neque, expedita beatae nemo consequatur pariatur fugiat at minus, adipisci in possimus perspiciatis provident quod. Tenetur.</h4>
        </div>
        <div class="image">
          <img src="assest/pictures/about-removebg-preview.png" alt="">
        </div>
      </div>
    </section>

    <section class="about-us" id="">
      <h1>what we do ?</h1>
      <div class="box">
        <div class="box-card">
          <img src="assest/pictures/clapperboard.png" alt="">
          <h3>blog about series <br> and movies</h3>
        </div>
        <div class="box-card">
          <img src="assest/pictures/movie.png" alt="">
          <h3>blog about series <br> and movies</h3>
        </div>
        <div class="box-card">
          <img src="assest/pictures/popcorn.png" alt="">
          <h3>blog about series <br> and movies</h3>
        </div>
        
      </div>
    </section>

    <section class="contact-us" id="contact">
      <h1>Get in touch</h1>
      <h4>for more information or help pleas contact us to make it easy</h4>
      <form action="">
        <div class="input-contact">
        <input type="email" placeholder="email">
        <input type="text" placeholder="subjuct">
        <textarea name="" id="" cols="30" rows="10" placeholder="message..."></textarea>
        <a href="" class="submit">submit</a>
        </div>
      </form>
    </section>

    <footer>
     <div class="footer-content">
      <div>
        <h1>lorem:</h1>
        <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit.  <br> Adipisci adipisicing elit. </h4>
        <h1>folow us</h1>
        <div class="icons-links">
          <a href=""><i class="fab fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></i></a>
        </div>
      </div>
      <div>
        <h1>Menu</h1>
        <a href="">home</a>
        <a href="">about</a>
        <a href="">contact</a>
        <a href="">blog</a>
      </div>
      <div>
        <h1>Contact us</h1>
        <a href=""><i class="fa-solid fa-phone">       0897654347</i></a>
        <a href=""><i class="fa-solid fa-envelope">    example@gmail.com</i></a>
      </div>
     </div>
     <h4 class="copyright"> Copyright 1999-2022 by Refsnes Data. All Rights Reserved.</h4>
    </footer>
   
  </body>

  <script src="assest/js/main.js"></script>
</html>
