<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pets</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>our pets</h3>
   <p><a href="home.php">home</a> <span> / Pets</span></p>
</div>

<!-- menu section starts  -->

<section class="products">

   <h1 class="title">latest Pets</h1>
   <section class="hero">

<div class="swiper hero-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="content">
            <span>order online</span>
            <h3>Dogs</h3>
            <a href="Dog.php" class="btn">see Dog</a>
         </div>
         <div class="image">
            <img src="images/japanese-spitz.jpg" alt="">
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="content">
            <span>order online</span>
            <h3>Cats</h3>
            <a href="Cat.php" class="btn">see Cat</a>
         </div>
         <div class="image">
            <img src="images/persian-cat.jpg" alt="">
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="content">
            <span>order online</span>
            <h3>Birds</h3>
            <a href="Bird.php" class="btn">see Bird</a>
         </div>
         <div class="image">
            <img src="images/peacock.jpg" alt="">
         </div>
      </div>

   </div>

   <div class="swiper-pagination"></div>

</div>

</section>



<!-- menu section ends -->
























<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->








<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>