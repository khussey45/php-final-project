<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://kit.fontawesome.com/77dd9f4fc2.js" crossorigin="anonymous"></script>
     <!-- add my js file-->
     <script type="text/javascript" src="./js/main.js"></script>

</head>
<body>
<my-header></my-header>
<main class="container2">

   <div class="profile2">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `ai_users` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         
      ?>
     
      <div><?php echo '<img src="uploaded_img/'.$fetch['image'].'">';?></div>
      <h3>Name:   <?php  echo $fetch['name']; ?></h3>
      <h3>Email: <?php echo $fetch['email']; ?></h3>
      <h3>Bio: <?php echo $fetch['bio']; ?></h3>
     
      
   </div>
   <section>
   <h1 class="members">Members Area</h1>
 
   <p class="members-p">Most people are not very familiar with the concept of artificial intelligence (AI). As an illustration, when 1,500 senior business leaders in the United States in 2017 were asked about AI, only 17 percent said they were familiar with it.[1] A number of them were not sure what it was or how it would affect their particular companies. They understood there was considerable potential for altering business processes, but were not clear how AI could be deployed within their own organizations.</p>
   <img  class="neuralink" src="./img/neuralink.jpeg" alt="elon musk neuralink image" width="75%">
   <section>
      </main>
      <my-footer></my-footer>
</body>
</html>