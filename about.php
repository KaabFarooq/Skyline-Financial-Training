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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <!-- 
    - primary meta tags
  -->
  <title>About Us | Skyline Financial Training</title>
  <meta name="title" content="About Us | Skyline Financial Training">
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

body{ font-family: poppins; background-image: url('./assets/images/hero-bg.png')}
.contactc {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    padding: 70px 100px;
    text-align: center;
    
}   

.col-3{   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin: 10px 10px; padding: 50px 20px; background-color:  #e6e9ff;

        }

.col-3 h3{ font-size: 35px; color: black; padding: 15px 0px;}        
.col-3 p { font-size: 15px; font-weight: 550; color:  #4d4d4d; }        

.col-3  i{ font-size: 27px; color: black; padding: 10px 0px; color: white; background-color: darkred; padding: 30px; border-radius: 57%; margin-bottom: 20px 0px;}


@media(max-width:950px)
{
    .contactc{
             grid-template-columns: repeat(2, 1fr);
             padding: 130px 20px; 
            }
     
    .col-3{ margin: 30px 20px;}

}



@media(max-width:750px)
{
    .contactc{
             grid-template-columns: repeat(1, 1fr);
             padding: 130px 20px; 
            }
     
            .col-3{ margin: 30px 0px;}

        }


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

      <section class="section hero has-bg-image" aria-labelledby="hero-label"
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="headline-lg" id="hero-label">
          





           
            Your Trusted   <span style="color:darkred;font-weight:bold">Guide  </span>
            </h1>

            <p class="title-md has-before">
            You can get in touch with our professional trainers today for a free consultaion.
            </p>

           
          </div>

            <img src="./assets/images/about.jpg" width="700" height="920" alt="hero banner" class="w-100" style="border-radius: 98px 0px;">

        </div>
        



      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/course.jpg" width="775" height="685" loading="lazy" alt="about banner"
              class="w-100" style="border-radius: 0px 90px;">
          </figure>

          <div class="about-content">


            <h2 class="headline-md section-title">
              About <span class="span has-after " style="color: darkred;">Skyline</span> Financial Training
            </h2>

            <p class="title-sm section-text">

            Skyline Financial Training was founded in 2014 and we have served more than 2000 students online to achieve their success in accounting and finance qualification while studying online in Dubai, UAE, Oman, Qatar and Saudi Arabia.
            <br><br>
            Our teaching style is technique based where we teach the core concept of a topic through a qualified tutor, then we apply the concept in scenarios along with real industry  experience by giving real business case study to the student and working professional which make the topic easy to understand and remember to apply to the exam.
            <br><br>

            Skyline FT offers different study packages for ACCA fees:

            </p>

            <a href="fees.php" class="btn" style="background-color: darkred;">See Our Fees</a>


          </div>

        </div>
      </section>













      <section class="contactc"  style="background-image: url('./assets/images/hero-bg.png')">
					
					<div class="col-3">
					<div class="cardb">
							
							<h3>Mission</h3>
							<p>We train financial and investment learner to achieve their professional qualification by joining us to get value for money within your budget.</p>

					</div>
					</div>

					<div class="col-3">
					<div class="cardb">	
					
							<h3>Vision</h3>
							<p>We train students and working professionals to achieve top qualification.</p>
					</div>
					</div>

					<div class="col-3">
					<div class="cardb">

							<h3>Values</h3>
							<p> Applying creativity in thinking, learning and applying in practical life.</p>
					</div>
					</div>	
		</section>



</section>
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