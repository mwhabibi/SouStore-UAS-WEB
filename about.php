<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/23.png" alt="">
         </div>

         <div class="content">
            <h3>Developer's Message:</h3>
            <p>Hey There ! We are Team SouStore. Student of the DIII Information Technology Study Program from Madiun State Polytechnic [Class: TI 2C].</p>

            <p>We would like to thank our bevoled lecturer <a href="https://www.instagram.com/anggerbinuko" target="_blank">Mr. Angger Binuko</a> who has guided us in the Web Design & Programming Practice course, so that we are able to develop a project like this. </p>
            <a href="contact.php" class="btn">Contact Us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="heading">Instagram</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/pic-1.jpg" alt="">
               <p>"Kami, tim developer Sou Store, bersemangat untuk menghadirkan platform e-commerce elektronik terlengkap dan terpercaya bagi para pelanggan. Website ini dirancang dengan cermat untuk memberikan pengalaman berbelanja yang mudah, nyaman, dan aman. Kami berkomitmen untuk terus berinovasi dan meningkatkan layanan kami agar dapat memenuhi kebutuhan elektronik Anda dengan sebaik-baiknya."</p>
               <br><br>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3> <a href="https://www.instagram.com/mwhabibi_" target="_blank">Habibi</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/imgFavian.jpg" alt="">
               <p>"Sou Store bukan hanya toko online biasa, tapi juga tempat di mana Anda dapat menemukan berbagai macam produk elektronik dengan harga terbaik. Kami bekerja sama dengan berbagai distributor resmi untuk memastikan keaslian dan kualitas produk yang kami jual. Kami juga menawarkan berbagai layanan pendukung, seperti garansi, layanan purna jual, dan panduan penggunaan, untuk memastikan kepuasan Anda."</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="https://www.instagram.com/_faviian_" target="_blank">Favian</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/imgArung.jpg" alt="">
               <p>"Kami percaya bahwa berbelanja elektronik seharusnya menjadi pengalaman yang menyenangkan dan mudah. Oleh karena itu, kami terus berusaha untuk menyederhanakan proses belanja di Sou Store. Anda dapat menemukan produk yang Anda inginkan dengan mudah, membelinya dengan aman, dan menerimanya dengan cepat. Kami juga menyediakan berbagai pilihan pembayaran dan pengiriman yang memudahkan Anda."</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a href="https://www.instagram.com/maarunn_" target="_blank">Arung</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/imgRosyad.jpg" alt="">
               <p>"Kami ingin mengucapkan terima kasih kepada semua pelanggan yang telah mempercayakan Sou Store sebagai tempat berbelanja elektronik mereka. Kami akan terus berusaha untuk memberikan layanan terbaik dan produk berkualitas tinggi dengan harga yang terjangkau. Kami harap Anda menikmati pengalaman berbelanja di Sou Store!"</p>
               <br><br><br>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <br><br>
               <h3><a href="https://www.instagram.com/Rosyad_al_hasimi" target="_blank">Rosyad</a></h3>
            </div>
         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>