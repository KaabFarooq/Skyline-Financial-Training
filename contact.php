<?php

if(isset($_POST['submit']))
{
    header("location:contact.php");
  
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Skyline Financial Training</title>
  <meta name="title" content="Skyline Financial Training">
  <meta name="description" content="Skyline Financial Training was founded in 2014 and we have served more than 2000 students online to achieve their success in accounting and finance qualification">
  
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="assets/images/logo.png" >

  <!-- 
    - custom font link
  -->
  <link rel="stylesheet" href="./assets/font/font.css">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/logo.png">
  <link rel="preload" as="image" href="./assets/images/logo.png">

</head>
<style>


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}




label{ font-size: 22px; }
</style>
<body>

  <!-- 
    - PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle" data-circle></div>
  </div>


<?php include("header.php")?>






  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class=" hero has-bg-image" aria-labelledby="hero-label"
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="headline-lg" id="hero-label">
          






            Interested to  <span style="color:darkred;font-weight:bold">work together? </span>Let's talk!</span>
            </h1>

            <p class="title-md has-before">
            You can get in touch with our professional trainers today for a free consultaion.
            </p>

           
          </div>

            <img src="./assets/images/contact.jpg" width="700" height="920" alt="hero banner" class="w-100" style="border-radius: 98px 0px;">

        </div>
      </section>



<?php include("card.php")?>







<section style="background-image: url('./assets/images/hero-bg.png')">
<div class="container"   >
  <form action="contact.php" method="POST">
    
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <br><br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
    
    <br><br>
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    
    <br><br>
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <br><br>

    <input type="submit" value="Submit" name="submit" class="btn btn-secondary" style="background-color: darkred;">
  </form>

      <br><br>
    <br><br>
    <br><br>

</div>


</section>



    </article>
  </main>



<?php include("footer.php")?>



  <!-- 
   - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>