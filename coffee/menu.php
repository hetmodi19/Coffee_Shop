<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo"> coffee <i class="fas fa-mug-hot"></i> </a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#book">book</a>
        </nav>
        <a href="booking.php" class="btn">book a table</a>
    </header>

    <section class="menu">
        <h1>Our Full Menu</h1>
        <div class="menu-container">
            <img src="image/coffeemenu.png" alt="Coffee Menu" class="menu-image">
        </div>

        <center><h1>Order Now</h1></center>
        <marquee behavior="scroll" direction="left" style="color: red; font-weight: bold; margin-top: 10px;">
         Note: Enter a proper message about reservation of table or placing the order — this is compulsory!
        </marquee>

        <form action="proccess_booking.php" method="POST" class="order-form">
            <input type="text" name="name" placeholder="Your Name" required class="box">
            <input type="email" name="email" placeholder="Your Email" required class="box">
            <input type="tel" name="phone" placeholder="9876543210" pattern="[0-9]{10}" required class="box">
            <textarea name="message" placeholder="Write down your orders" class="box" cols="30" rows="10" required></textarea>
            <input type="submit" value="Place Order" class="btn">
        </form>
    </section>
</body>
</html>
