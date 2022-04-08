<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <style>
      body{
         background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
      }
   </style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Albin Bicaj | Portfolio</title>

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> -->

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>



<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/bini.bicaj.3" target="_blank" class="fab fa-facebook-f"></a>
      <a href="https://twitter.com/albinbicaj3" target="_blank" class="fab fa-twitter"></a>
      <a href="https://www.instagram.com/albin.bicaj/"  target="_blank"class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/albin-bicaj-415a36202/" target="_blank" class="fab fa-linkedin"></a>
      <a href="https://github.com/albinbicaj" target="_blank" class="fab fa-github"></a>
   </div>

</header>



<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/foto1.jpg" alt="foto">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Albin Bicaj</h3>
      <span data-aos="fade-up">Web Developer & <br>Mobile App Developer</span>
      <p data-aos="fade-up">Studies for Electrical and computer Engineering</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>



<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">hi, I am Albin Bicaj I study for electrical and computer Engineering,I know different programming languages and I use them the almost of the time,I like listening music all day and write code at the same time.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Albin Bicaj </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> albin.bicaj@student.uni-pr.edu </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Prishtine,Kosove </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +38349532242 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2018 - 2022 )</span>
               <h3>University of electrical end computer Engineering</h3>
               <p>There I have been learned different programming languages and I have been done a lot of projects.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2019 - 2020 )</span>
               <h3>front-end developer</h3>
               <p>I have done different projects using html,css,javascript and some of projects in front end contain bootstrap</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2021 )</span>
               <h3>back-end developer</h3>
               <p>I have done different projects using Php and mySql</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>Mobile app developer</h3>
               <p>I have made an application using Java and SqLite on android studio</p>
            </div>

         </div>

      </div>

   </div>

</section>



<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p></p>
      </div>
      
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p></p>
      </div>
      
      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p></p>
      </div>
      
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p></p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p></p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p></p>
      </div>

   </div>

</section>



<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+38349532242</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>albinbicaj3@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Prishtine, Kosove</p>
      </div>

   </div>

</section>



<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Albin Bicaj</span> </div>













<script src="js/script.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>