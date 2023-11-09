<?php

include 'config.php';

session_start();

if(isset($_POST['login'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE name = ? AND password = ?");
   $select_admin->execute([$name, $pass]);
   $row = $select_admin->fetch(PDO::FETCH_ASSOC);

   if($select_admin->rowCount() > 0){
      $_SESSION['admin_id'] = $row['id'];
      header('location:admin_page.php');
   }else{
      $message[] = 'Incorrect username or password!';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leads innovation admin login</title>
    <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>

        
    <header class="header">

        <section class="flex">
     
           <a href="admin.html" class="logo"><img src="images/logo.png" alt=""></a>
     
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
        </section>
     </header>



     <section class="form-container">

        <form action="" method="post">
        <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
           <h3>login now</h3>
           <p>default username = <span>admin001</span> & password = <span>admin123</span></p>
           <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
           <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
           <input type="submit" value="login now" class="btn" name="login">
        </form>
     
     </section>
    
</body>
</html>