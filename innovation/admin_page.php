<?php
    @include 'config.php';

    session_start();

    $admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location: admin_login.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leads innovation admin panel</title>
    <link rel="stylesheet" href="css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>
<body>
    
    <header class="header">

        <section class="flex">
     
           <a href="admin.php" class="logo"><img src="images/logo.png" alt=""></a>
     
           <nav class="navbar">
              <ul>
                  <!-- <li><a href="#home">home</a></li>
                  <li><a href="">about us <i class="fa fa-caret-down" aria-hidden="true"></i>   </a>
                      <ul>
                          <li><a href="../teams.html">our teams</a></li>
                          <li><a href="../services.html">our services</a></li>
                      </ul> -->
                  </li>
                  <!-- <li><a href="#">messages</a></li> -->
              </ul>
          </nav>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p style="font-size: 1.5rem; text-transform: capitalize; color: var(--black); text-align: center; font-weight: bolder;"><?php echo $fetch_profile['name']; ?></p>
         <a href="logout.php" class="btn" onclick="return confirm('Are you sure you want to logout admin?')">logout</a>
        </section>
     </header>
     <!-- header section ends -->


     <!-- messages section starts  -->
     <section class="messag">


     <?php
           $select = $conn->prepare("SELECT * FROM `messages`");
           $select->execute();
           if($select->rowCount() > 0){
              while($fetch_messages = $select->fetch(PDO::FETCH_ASSOC)){
     ?>
            <div class="box-container">
                <div class="box">
                   <h3>Name: <span><?php echo $fetch_messages['name']; ?> <span></h3>
                   <h3>Email: <span style="text-transform: none;"><?php echo $fetch_messages['email']; ?></span></h3>
                   <h3>Phone: <span><?php echo $fetch_messages['phone']; ?></span></h3>
                   <h3>Message: <span style="text-transform: none;"><?php echo $fetch_messages['messages']; ?></span></h3>
                   <h3>Date:     <span><?php echo $fetch_messages['date'] ?></span></h3>
                   </div>
                   <?php
         }
      }else{
        //  echo '<p class="empty">you have no messages!</p>';
      }
   ?>
                </div>
     </section>
     <!-- messages section ends  -->



















    <script src="js/script.js"></script>
</body>
</html>