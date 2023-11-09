<?php

@include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $phone = $_POST['phone'];
    $phone = filter_var($phone, FILTER_SANITIZE_STRING);
    $messages  = $_POST['messages'];
    $messages = filter_var($messages, FILTER_SANITIZE_STRING);


    // $insert = $conn->prepare("INSERT INTO `messages` (name, email, phone, messages) VALUES (?,?,?,?)");
    // $insert->execute([$name, $email, $phone, $messages]);
    // header('location: index.php');
    // $message[] = 'messages sent successfully';

    // if($insert){
    //     $message[] = 'messages sent successfully';
    // }else{
    //     $message[] = 'failed to send message due to server error';
    // }

    $select = $conn->prepare("SELECT * FROM `messages` WHERE name  = ?");
    $select->execute([$name]);

    if($select){
        $message[] = 'messages sent successfully';
    }else{
        $insert = $conn->prepare("INSERT INTO `messages` (name, email, phone, messages) VALUES(?,?,?,?)");
        $insert->execute([$name, $email, $phone, $messages]);
        header('location:index.php');
        $message[] = 'messages sent successfully';
       
    }
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>complete innovation website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css"> -->

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <a href="#" class="logo"><img src="images/logo.png" alt=""></a>

      <nav class="navbar">
         <ul>
             <li><a href="#home">home</a></li>
             <li><a href="">about us <i class="fa fa-caret-down" aria-hidden="true"></i>   </a>
                 <ul>
                     <li><a href="../innovation/teams.html">our teams</a></li>
                     <li><a href="../innovation/services.html">our services</a></li>
                 </ul>
             </li>
             <!-- <li><a href="#">vision</a></li> -->
             <!-- <li><a href="#">mission</a></li> -->
             <!-- <li><a href="#">values</a></li> -->
             <li><a href="#patners">partners</a></li>
             <li><a href="#portfolio">our portfolio</a></li>
             <li><a href="#testimonials">testimonials</a></li>
             <li><a href="#">contact us</a></li>
         </ul>
     </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

   </section>

</header>

<!-- header section ends -->


<!-- home section starts  -->
<div class="home-bg">

   <section class="home" id="home">

      <div class="slide-container">

         <div class="slide active">
            <div class="image">
               <img src="images/business-startup-brainstormingdevelopment-project-by-people-standing-near-electric-lamp_253334-415-removebg-preview.png" alt="">
            </div>
            <div class="content">
               <h3>leads innovation</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

         <div class="slide">
            <div class="image">
               <img src="images/people-using-online-apps-set_74855-4457-removebg-preview.png" alt="">
            </div>
            <div class="content">
               <h3>creating big ideas</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

         <div class="slide">
            <div class="image">
               <img src="images/happy-freelancer-with-computer-home-young-man-sitting-armchair-using-laptop-chatting-online-smiling-vector-illustration-distance-work-online-learning-freelance_74855-8401-removebg-preview.png" alt="">
            </div>
            <div class="content">
                <h3>innocative mind</h3>
               <div class="fas fa-angle-left" onclick="prev()"></div>
               <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
         </div>

      </div>
   </section>

</div>

<!-- home section ends  -->

<!-- few icons section  -->
<section class="icons-container">

   <div class="icons">
       <i class="fa-solid fa-biohazard"></i>
       <div class="content">
           <h3>100k</h3>
           <p>skilled talents</p>
       </div>
   </div>

   <div class="icons">
       <i class="fa-solid fa-plug"></i>
       <div class="content">
           <h3>50+</h3>
           <p>startup communities</p>
       </div>
   </div>

   <div class="icons">
       <i class="fa-sharp fa-solid fa-person-chalkboard"></i>
       <div class="content">
           <h3>20+</h3>
           <p>courses</p>
       </div>
   </div>

   <div class="icons">
       <i class="fas fa-search"></i>
       <div class="content">
           <h3>200+</h3>
           <p>researchers</p>
       </div>
   </div>

   <div class="icons">
      <i class="fa-solid fa-people-arrows"></i>
      <div class="content">
          <h3>200+</h3>
          <p>investors</p>
      </div>
  </div>

  <div class="icons">
   <i class="fas fa-users"></i>
   <div class="content">
       <h3>200+</h3>
       <p>students</p>
   </div>
</div>


</section>

<!-- few section ends  -->

<!-- vission mission and values section  -->
<section class="vission">
   <h1 class="sub-heading">who are we? </h1>
   <p>Leads Innovation Limited is an innovation management firm that provides globalized enterprise support services for innovators and entrepreneurs that are building solutions for sustainable future. We are committed to providing innovators and entrepreneurs with the support they need to develop and implement successful sustainable business models and practices.</p>
   <h1 class="sub-heading">our vission</h1>
   <p>Our vision is to be the leading provider of globalized enterprise support services for innovators and entrepreneurs to build sustainable businesses.</p>
   <h1 class="sub-heading">mission</h1>
   <p>Our mission is to empower innovators and entrepreneurs to build solutions for a sustainable future.</p>
   <h1 class="sub-heading">our core beliefs</h1>
   <ul>
      <li><p>innovation</p></li>
      <li><p>Design thinking</p> </li>  
      <li><p>Sustainability</p></li>
      <li><p>Glocalization</p></li>
   </ul>
  
</section>
<!-- section ends here -->

<!-- partners section starts -->
<section class="patners" id="patners">

   <h1 class="heading"> part<span>ners</span> </h1>

   <div class="swiper patners-slider">

       <div class="swiper-wrapper">
           <div class="swiper-slide box">
            <img src="images/NITDA-Logo-new-03_.png" alt="">
            <div class="content">
                <h3>National Information Technology Development Agency</h3>
            </div>
        </div>

     <div class="swiper-slide box">
      <img src="images/lsetfnglogoinv.png" alt="">
      <div class="content">
          <h3>Lagos State Employment Trust Fund</h3>
      </div>
  </div>

  <div class="swiper-slide box">
   <img src="images/Opolo-png.png" alt="">
   <div class="content">
       <h3>Opolo Global Innovation</h3>
   </div>
</div>
       </div>
       <div class="swiper-pagination"></div>
   </div>
</section>
<!-- partners section ends  -->

<!-- portfolio section starts  -->
<section class="portfolio" id="portfolio">
   <h1 class="heading">our <span>portfolio</span> companies</h1>
   <div class="box-container">
      <div class="box">
            <img src="images/LEADS QA LOGO.png" alt="">
            <h3>LeadsQA</h3>
            <p>LeadsQA is an educational quality assurance (EQA) and technology-driven service organization that specializes in analyzing, developing, designing, implementing and evaluating educational standards and practices for all levels of Nigerian educational systems. LeadsQA has a team of well-educated and experienced EQA professionals who are certified in the latest practices, tools and technologies, which allows them to provide their clients with the highest quality EQA services possible.</p>
            <a href="#" class="link"><i class="fas fa-link"></i></a>
      </div>

      <div class="box">
         <img src="images/Edv8.png" alt="">
         <h3>edv8</h3>
         <p>edv8 is an Edu tech, research, and data management solution focused on providing safe platform for entities to access an ecosystem of values in achieving research goals. It vision is to provide innovation-driven and inclusive opportunities for entities to conduct safe and valuable research aimed at enhancing researchers experience in achieving successful research goals.</p>
         <a href="#" class="link"><i class="fas fa-link"></i></a>
   </div>

   <div class="box">
      <img src="images/VARTICA.png" alt="">
      <h3>VARTICA</h3>
      <p>VARTICA is an indigenous metaverse and augmented reality platform focusing on providing immersive and contextual virtual tourism experience to people in exploring opportunities including historical sites, museums, businesses, and tourist attractions for and from Africa. It vision is to provide tech-driven and inclusive access to the world to learn about Africa and her culture, by enhancing human experience about Africa’s culture and promoting human peaceful co-existence as visioned by humanity.</p>
      <a href="#" class="link"><i class="fas fa-link"></i></a>
</div>

<div class="box">
   <img src="images/IMG-20231018-WA0011.jpg" alt="">
   <h3>IlorinTechTalk</h3>
   <p>Ilorintechtalk is a podcast and vodcast platform that provides a platform for tech professionals and enthusiasts to connect, learn, and collaborate. It is owned by Leads Innovation Limited, a Nigerian innovation management firm. The Ilorintechtalk podcast and vodcast features interviews with tech leaders, entrepreneurs, and investors, as well as discussions on the latest trends and developments in the tech industry. The Ilorintechtalk podcast and vodcast is a valuable resource for tech professionals and enthusiasts who are looking to learn new skills, stay up-to-date on the latest trends, and connect with other tech professionals. The platform is also a great way for businesses to reach their target audience and promote their products and services.</p>
   <a href="#" class="link"><i class="fas fa-link"></i></a>
</div>

<div class="box">
   <img src="images/IMG-20231018-WA0012.jpg" alt="">
   <h3>EDUKT</h3>
   <p>EDUKT (pronounced as educate) is a pre-incubation program for educational technology enthusiasts who want to build innovative, profitable, and scalable digital and Edu tech enterprises, either as products or services aimed at achieving sustainable education for all. The program provides participants with access to mentorship and support from experienced entrepreneurs and investors; access to resources and facilities to help develop and launch new educational technology products and services; opportunities to network with other educational technology enthusiasts and entrepreneurs; and opportunity to pitch ideas to potential investors and partners.</p>
   <a href="#" class="link"><i class="fas fa-link"></i></a>
</div>

<!-- <div class="box">
   <img src="" alt="">
   <h3>name here</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deserunt harum exercitationem omnis illo libero, a quos esse recusandae eligendi. Doloribus sit consequatur maiores ut nobis nulla nam sed non?</p>
   <a href="#" class="link"><i class="fas fa-link"></i></a>
</div> -->
   </div>
</section>
<!-- portfoli ends here  -->


<!-- testimonials section starts  -->
<section class="testimonials" id="testimonials">
   <h1 class="heading">testi<span>monials</span></h1>

   <div class=" swipper box-container">
      <div class="box">
          <img src="images/Screenshot_20231020-105449.jpg" alt="">
          <h3>Dr Ahmad</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste vitae veritatis excepturi magnam facilis.</p>
      </div>

      <div class="box">
          <img src="images/Screenshot_20231020-105449.jpg" alt="">
          <h3>Dr Ahmad</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste vitae veritatis excepturi magnam facilis.</p>
      </div>

      <div class="box">
          <img src="images/Screenshot_20231020-105449.jpg" alt="">
          <h3>Dr Ahmad</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste vitae veritatis excepturi magnam facilis.</p>
      </div>

      <div class="box">
          <img src="images/Screenshot_20231020-105449.jpg" alt="">
          <h3>Dr Ahmad</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste vitae veritatis excepturi magnam facilis.</p>
      </div>

      <div class="box">
          <img src="images/Screenshot_20231020-105449.jpg" alt="">
          <h3>Dr Ahmad</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste vitae veritatis excepturi magnam facilis.</p>
      </div>

      <div class="box">
          <img src="images/Screenshot_20231020-105449.jpg" alt="">
          <h3>Dr Ahmad</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste vitae veritatis excepturi magnam facilis.</p>
      </div>
  </div>
  <div class="swiper-pagination"></div>
</section>
<!-- testimonials section ends  -->

<!-- contact fom section  -->
<section class="contact" id="contact">
    <div class="image">
        <img src="images/woman-with-phone-concept-vector-illustration-flat_186332-965-removebg-preview.png" alt="">
    </div>

    <form action="" method="post">
 

        <h1 class="heading">contact <span>us</span></h1>
        <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>


      
        <div class="inputBox">
            <label>name</label>
            <input type="text" placeholder="enter your name" autocomplete="of" class="box" name="name">
        </div>

        <div class="inputBox">
            <label>email</label>
            <input type="email" placeholder="enter your email here" autocomplete="of" class="box" name="email">
            
        </div>

        <div class="inputBox">
            <label>phone</label>
            <input type="text" placeholder="enter your phone number here" autocomplete="of" class="box" name="phone">
        </div>

        <div class="inputBox">
            <label>message</label>
            <!-- <textarea required name="" id="" cols="30" rows="10" placeholder="message" class="box" name="messages"></textarea> -->
            <textarea <input type="text" name="messages" placeholder="write your message here" class="box"></textarea>
        </div>

        <input type="submit" class="btn" value="send message" name="submit">

    </form>

</section>
<!-- section ends  -->


<!-- footer section starts  -->
<div class="footer">

    <div class="box-container">

        <div class="box">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam culpa sit enim nesciunt rerum laborum illum quam error ut alias!</p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>
        </div>
        
        <div class="box">
            <h3>our location</h3>
            <div class="links">
                <a href="#">smaple</a>
                <a href="#">smaple</a>
                <a href="#">smaple</a>
                <a href="#">smaple</a>
                <a href="#">smaple</a>
            </div>
        </div>

        <div class="box">
            <h3>smaples</h3>
            <div class="links">
                <a href="#">smaple</a>
                <a href="#">smaple</a>
                <a href="#">smaple</a>
                <a href="#">smaple</a>
                <a href="#">smaple</a>
            </div>
        </div>

        <div class="box">
            <h3>sample</h3>
            <div class="links">
                <a href="#">smaple</a>
                <a href="#">smaple</a>
                <a href="#">smaple</a>
                <a href="#">smaple</a>
                <a href="#">smaple</a>
            </div>
        </div>

    </div>

    <h1 class="credit">  &copy; copyright<span> Genius code </span> | all rights reserved! </h1>
<!-- fotter section ends  -->

















<!-- custom js file link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>



<!-- rough codes here  -->
