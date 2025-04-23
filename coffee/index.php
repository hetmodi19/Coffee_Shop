<?php
  // Coffee Shop Website    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee Shop Website</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7.0.0/swiper-bundle.min.css">

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- custom css file link -->
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <!-- header section starts -->

  <header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo"> coffee <i class="fas fa-mug-hot"></i> </a>

    <nav class="navbar">
      <a href="index.php">home</a>
      <a href="#about">about</a>
      <a href="#menu">menu</a>
      <a href="#review">review</a>
      <a href="#book">book</a>
      <a href="menu.php" target="_blank">Open full menu</a>
      <a href="orders.php">Order History</a>


    </nav>

    <a href="booking.php" class="btn">book a table</a>

  </header>
  <!-- header section ends -->

  <!-- home section starts -->

  <section class="home" id="home">

    <div class="row">

      <div class="content">
        <h3>fresh coffee in the morning</h3>
        <!-- <a href="proccess_booking.php" class="btn">buy one now</a> -->
      </div>

      <div class="image">
        <img src="image/home-img-1.png" class="main-home-image" alt="home-img-1">
      </div>

    </div>

    <div class="image-slider">
      <img src="image/home-img-1.png" alt="home-img-1">
      <img src="image/home-img-2.png" alt="home-img-2">
      <img src="image/home-img-3.png" alt="home-img-3">
    </div>

  </section>

  <!-- home section ends -->

  <!-- about section starts -->
  
  <section class="about" id="about">

    <h1 class="heading">about us <span>why choose us</span></h1>

    <div class="row">

      <div class="image">
        <img src="image/about-img.png" alt="about-img">
      </div>

      <div class="content">
        <h3 class="title">what makes our coffee special!</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit non delectus ipsum excepturi ratione, ut
          harum odit eius recusandae. Ducimus delectus officia, molestias voluptate fugit doloribus cum ab dolorem non.
        </p>
        <a href="#" class="btn">read more</a>

        <div class="icons-container">
          <div class="icons">
            <img src="image/about-icon-1.png" alt="about-icon-1">
            <h3>quality coffee</h3>
          </div>
          <div class="icons">
            <img src="image/about-icon-2.png" alt="about-icon-2">
            <h3>our branches</h3>
          </div>
          <div class="icons">
            <img src="image/about-icon-3.png" alt="about-icon-3">
            <h3>free delivery</h3>
          </div>
        </div>

      </div>

    </div>

  </section>

  <!-- about section ends -->

  <!-- menu section starts -->

  <section class="menu" id="menu">

    <h1 class="heading">our menu <span>popular menu</span></h1>
    
    <div class="box-container">

      <a href="#" class="box">
        <img src="image/menu-1.png" alt="menu-1">
        <div class="content">
          <h3>our Espresso</h3>
          <p> A strong, concentrated coffee made by forcing hot water through finely-ground coffee beans. The base for many other coffee drinks.</p>
          <span>₹99.99</span>
        </div>
      </a>

      <a href="#" class="box">
        <img src="image/menu-2.png" alt="menu-2">
        <div class="content">
          <h3>Americano</h3>
          <p>Espresso diluted with hot water, giving it a similar strength to drip coffee but with a different flavor.</p>
          <span>₹99.99</span>
        </div>
      </a>
      
      <a href="#" class="box">
        <img src="image/menu-3.png" alt="menu-3">
        <div class="content">
          <h3>Latte</h3>
          <p> Made with espresso and steamed milk, topped with a small amount of foam. Often flavored with syrups like vanilla or caramel.</p>
          <span>₹99.99</span>
        </div>
      </a>
      
      <a href="#" class="box">
        <img src="image/menu-4.png" alt="menu-4">
        <div class="content">
          <h3>Cappuccino</h3>
          <p>Similar to a latte but with equal parts espresso, steamed milk, and milk foam. It’s usually topped with a sprinkle of cocoa powder.</p>
          <span>₹99.99</span>
        </div>
      </a>
      
      <a href="#" class="box">
        <img src="image/menu-5.png" alt="menu-5">
        <div class="content">
          <h3>Macchiato</h3>
          <p>An espresso "stained" with a small amount of milk or foam. There’s also the caramel macchiato, a sweeter variation.</p>
          <span>₹99.99</span>
        </div>
      </a>
      
      <a href="#" class="box">
        <img src="image/menu-6.png" alt="menu-6">
        <div class="content">
          <h3>Mocha</h3>
          <p>A mix of espresso, steamed milk, and chocolate syrup, often topped with whipped cream. Perfect for those who love a bit of sweetness.</p>
          <span>₹99.99</span>
        </div>
      </a>

    </div>

  </section>

  <!-- menu section ends -->

  <!-- review section starts -->

  <section class="review" id="review">

    <h1 class="heading">reviews <span>what people says</span></h1>

    <div class="swiper review-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide box">
          <i class="fas fa-quote-left"></i>
          <i class="fas fa-quote-right"></i>
          <img src="image/pic-1.png" alt="pic-1">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti repellat, excepturi architecto illo autem.</p>
          <h3>john deo</h3>
          <span>satisfied client</span>
        </div>
        
        <div class="swiper-slide box">
          <i class="fas fa-quote-left"></i>
          <i class="fas fa-quote-right"></i>
          <img src="image/pic-2.png" alt="pic-2">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti repellat, excepturi architecto illo autem.</p>
          <h3>john deo</h3>
          <span>satisfied client</span>
        </div>
        
        <div class="swiper-slide box">
          <i class="fas fa-quote-left"></i>
          <i class="fas fa-quote-right"></i>
          <img src="image/pic-3.png" alt="pic-3">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti repellat, excepturi architecto illo autem.</p>
          <h3>john deo</h3>
          <span>satisfied client</span>
        </div>
        
        <div class="swiper-slide box">
          <i class="fas fa-quote-left"></i>
          <i class="fas fa-quote-right"></i>
          <img src="image/pic-4.png" alt="pic-4">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deleniti repellat, excepturi architecto illo autem.</p>
          <h3>john deo</h3>
          <span>satisfied client</span>
        </div>

      </div>

      <div class="swiper-pagination"></div>

    </div>

  </section>

  <!-- review section ends -->

  <!-- book section starts -->

  <section class="book" id="book">

    <h1 class="heading">booking <span>reserve a table</span></h1>
    
    <marquee behavior="scroll" direction="left" style="color: red; font-weight: bold; margin-top: 10px;">
    Note: Enter a proper message about reservation of table or placing the order — this is compulsory!
    </marquee>

    <form action="proccess_booking.php" method="POST">
        <input type="text" name="name" placeholder="your name" required class="box">
        <input type="email" name="email" placeholder="your email" required class="box">
        <input type="tel" name="phone" placeholder="9876543210" pattern="[0-9]{10}" required class="box">
        <textarea name="message" placeholder="your message" class="box" cols="30" rows="10" required></textarea>
        <input type="submit" value="Book a Table" class="btn">
    </form>
  </section>

  <!-- Payment Section -->

  <section class="payment">
    <h2>Make a Payment</h2>
    <button id="rzp-button1" class="btn">Pay with Razorpay</button>
</section>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "YOUR_RAZORPAY_KEY", // Enter your Razorpay key here
        "amount": "50000", // 50000 paise = ₹500
        "currency": "INR",
        "name": "Coffee Shop",
        "description": "Order Payment",
        "image": "images/logo.png",
        "handler": function (response){
            alert("Payment successful! Payment ID: " + response.razorpay_payment_id);
        },
        "prefill": {
            "name": "John Doe",
            "email": "john@example.com",
            "contact": "9876543210"
        },
        "theme": {
            "color": "#F37254"
        }
    };
    var rzp1 = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function(e){
        rzp1.open();
        e.preventDefault();
    }
</script>

<style>
    .payment {
        text-align: center;
        padding: 2rem;
    }
    .btn {
        padding: 1rem 2rem;
        font-size: 1.2rem;
        background-color: #F37254;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }
</style>


  <!-- book section ends -->

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
        <a href="#home"><i class="fas fa-arrow-right"></i>home</a>
        <a href="#about"><i class="fas fa-arrow-right"></i>about</a>
        <a href="#menu"><i class="fas fa-arrow-right"></i>menu</a>
        <a href="#review"><i class="fas fa-arrow-right"></i>review</a>
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

    <div class="credit">created by <span>HP</span> | all rights reserved</div>
    
  </section>

  <!-- footer section ends -->

  <script src="https://unpkg.com/swiper@7.0.0/swiper-bundle.min.js"></script>

  <!-- custom js file link -->
  <script src="script.js"></script>
</body>

</html>