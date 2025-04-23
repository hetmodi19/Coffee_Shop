<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Table</title>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- custom css file link -->
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <!-- header section starts -->

  <header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="index.html#home" class="logo"> coffee <i class="fas fa-mug-hot"></i> </a>

    <nav class="navbar">
      <a href="index.php#home">home</a>
      <a href="index.php#about">about</a>
      <a href="#menu">menu</a>
      <a href="index.html#review">review</a>
      <!-- <a href="#book">book</a> -->
    </nav>

  </header>

  <!-- header section ends -->

  <!-- book section starts -->

  <section class="book" id="book" style="padding-top: 10rem">

    <h1 class="heading">booking <span>reserve a table</span></h1>

    <form action="proccess_booking.php" method="POST">
        <input type="text" name="name" placeholder="your name" required class="box">
        <input type="email" name="email" placeholder="your email" required class="box">
        <input type="tel" name="phone" placeholder="9876543210" pattern="[0-9]{10}" required class="box">
        <textarea name="message" placeholder="your message" class="box" cols="30" rows="10" required></textarea>
        <input type="submit" value="Book a Table" class="btn">
    </form>


  </section>

  <!-- book section ends -->

  <!-- menu section starts -->

  <section class="menu" id="menu">

    <h1 class="heading">our menu <span>popular menu</span></h1>

    <div class="box-container">

      <a href="#" class="box">
        <img src="image/menu-1.png" alt="menu-1">
        <div class="content">
          <h3>our special coffee</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, dolores.</p>
          <span>₹99.99</span>
        </div>
      </a>

      <a href="#" class="box">
        <img src="image/menu-2.png" alt="menu-2">
        <div class="content">
          <h3>our special coffee</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, dolores.</p>
          <span>₹99.99</span>
        </div>
      </a>

      <a href="#" class="box">
        <img src="image/menu-3.png" alt="menu-3">
        <div class="content">
          <h3>our special coffee</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, dolores.</p>
          <span>₹99.99</span>
        </div>
      </a>

      <a href="#" class="box">
        <img src="image/menu-4.png" alt="menu-4">
        <div class="content">
          <h3>our special coffee</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, dolores.</p>
          <span>₹99.99</span>
        </div>
      </a>

      <a href="#" class="box">
        <img src="image/menu-5.png" alt="menu-5">
        <div class="content">
          <h3>our special coffee</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, dolores.</p>
          <span>₹99.99</span>
        </div>
      </a>

      <a href="#" class="box">
        <img src="image/menu-6.png" alt="menu-6">
        <div class="content">
          <h3>our special coffee</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, dolores.</p>
          <span>₹99.99</span>
        </div>
      </a>

    </div>

  </section>

  <!-- menu section ends -->

  <!-- footer section starts -->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>our branches</h3>
        <a href="#"><i class="fas fa-arrow-right"></i>bandra</a>
        <a href="#"><i class="fas fa-arrow-right"></i>kurla</a>
        <a href="#"><i class="fas fa-arrow-right"></i>andheri</a>
      </div>

      <div class="box">
        <h3>quick links</h3>
        <a href="index.php"><i class="fas fa-arrow-right"></i>home</a>
        <a href="index.php #about"><i class="fas fa-arrow-right"></i>about</a>
        <a href="#menu"><i class="fas fa-arrow-right"></i>menu</a>
        <a href="index.html#review"><i class="fas fa-arrow-right"></i>review</a>
        <a href="#book"><i class="fas fa-arrow-right"></i>book</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +91 1234567890 </a>
        <a href="#"> <i class="fas fa-phone"></i> +91 9876543210 </a>
        <a href="#" style="text-transform: none"> <i class="fas fa-envelope"></i> hotcoffee@gmail.com </a>
        <a href="#"> <i class="fa-solid fa-location-dot"></i> bandra, mumbai, 400050 </a>
      </div>

      <div class="box">
        <h3>social media</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

    </div>

    <div class="credit">Created by <span>HP</span> | all rights reserved</div>

  </section>

  <!-- footer section ends -->

  <!-- custom js file link -->
  <script src="script.js"></script>
</body>

</html>