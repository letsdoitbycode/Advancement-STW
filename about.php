<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Achievers, we are dedicated to providing a transformative educational experience. Our commitment
            to excellence, innovative teaching methods, and a supportive learning environment set us apart.
            Choose Achievers for a journey that goes beyond traditional education.</p>
         <a href="courses.html" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>1k+</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>25k+</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>5k+</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>Achievers has been a game-changer for me. The courses are well-structured, and the instructors are
            highly knowledgeable. I've gained practical skills that are immediately applicable in my
            career.</p>
            <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Divya Shinde</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>The personalized attention I received at Achievers made my learning experience exceptional. The
            teachers are approachable, and the interactive classes have enhanced my understanding of
            complex subjects.</p>         
            <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Satej Yadav</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Achievers provided me with not only theoretical knowledge but also practical insights. The diverse
            range of courses helped me discover my passion and excel in my chosen field.</p>
            <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Aditi Sharma</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>The career guidance and support at Achievers are outstanding. I not only gained knowledge but also
            secured a job in my dream company. Achievers truly lives up to its commitment to job
            placement.</p>
            <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Anand kumar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
      <p>Achievers stands out for its expert tutors who make learning engaging and enjoyable. The
         peer-to-peer learning environment fosters collaboration, and the extensive course catalog
         caters to diverse interests.</p>
            <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Kriti Sanon</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>My experience at Achievers has been phenomenal. The supportive community and interactive learning
            approach have helped me develop both academically and personally. I highly recommend Achievers to
            all aspiring learners.</p>    
            <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Viki Kaushal</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->




<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>