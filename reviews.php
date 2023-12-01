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
  <title>Reviews | Skyline Financial Training</title>
  <meta name="title" content="Reviews | Skyline Financial Training">
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

body{ font-family: poppins;}
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


/* Icon set - http://ionicons.com/ */
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,800);
figure.snip1139 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 360px;
  width: 100%;
  color: #333;
  text-align: left;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  border-radius: 8px;
}
figure.snip1139 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
figure.snip1139 img {
  max-width: 100%;
  vertical-align: middle;
}
figure.snip1139 blockquote {
  position: relative;
  background-color: #ffffff;
  padding: 25px 50px 25px 50px;
  font-size: 0.8em;
  font-weight: 700;
  text-align: left;
  margin: 0;
  line-height: 2.2em;
  font-style: italic;
}
figure.snip1139 blockquote:before,
figure.snip1139 blockquote:after {
  font-family: 'FontAwesome';
  content: "\201C";
  position: absolute;
  font-size: 50px;
  opacity: 0.3;
  font-style: normal;
}
figure.snip1139 blockquote:before {
  top: 25px;
  left: 20px;
}
figure.snip1139 blockquote:after {
  content: "\201D";
  right: 20px;
  bottom: 0;
}
figure.snip1139 .arrow {
  top: 100%;
  width: 0;
  height: 0;
  border-left: 0 solid transparent;
  border-right: 25px solid transparent;
  border-top: 25px solid #ffffff;
  margin: 0;
  position: absolute;
}
figure.snip1139 .author {
  position: absolute;
  bottom: 0;
  width: 100%;
  padding: 5px 25px;
  color: #000000;
  background-color: #ffffff;
  margin: 0;
  text-transform: uppercase;
}
figure.snip1139 .author h5 {
  opacity: 0.8;
  margin: 0;
  font-weight: 800;
}
figure.snip1139 .author h5{
    font-size: 17px;
  font-weight: 700;
  text-align: center;
  text-transform: none;
  padding: 10px 0px;
}
/* Demo purposes only */



.apple {

  display: flex;
  justify-content: center;
  align-items: center;
  flex-flow: wrap;
  height: 100%;
  padding-top: 150px
}


.applee {

display: flex;
justify-content: center;
align-items: center;
flex-flow: wrap;
height: 100%;
padding-top: 30px
}
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
          





           
            Our Student   <span style="color:darkred;font-weight:bold">Reviews  </span>
            </h1>

            <p class="title-md has-before">
            Giving you the Inside Story with Reviews
            </p>

           
          </div>

            <img src="./assets/images/review.jpg" width="700" height="920" alt="hero banner" class="w-100" style="border-radius: 98px 0px;">

        </div>
        


<section class="apple">

<figure class="snip1139">
  <blockquote><br>During Covid -19, Skyline provide great opportunity to students to study online classes and it
helps to intract with tutor online to clear the concept without visiting institute.<br>
    <div class="arrow"></div><br>
  </blockquote>
  <img src="./assets/images/review (3).jpg"/>
  <div class="author">
    <h5>Christina Errol</h5>
  </div>
</figure>


<figure class="snip1139 hover">
  <blockquote><br>Skyline Financial Training provided my best opportunity to achieve ACCA qualification while
attending online classes. Styding with Skyline Financial Training has supported me to achieve ACCA qualification.
    <div class="arrow"></div>
  </blockquote>
  <img src="./assets/images/review (1).jpg"/>
  <div class="author">
    <h5>Abdullah Faisal</h5>
  </div>
</figure>


<figure class="snip1139">
  <blockquote><br>I'd never experienced such an immersive platform online. It was more effective at building and solidifying knowledge than some in-person courses I've taken.
    <div class="arrow"></div><br><br><br>
  </blockquote>
  <img src="./assets/images/review (2).jpg"/>
  <div class="author">
    <h5>Ahmed Ahsan Faint</h5>
  </div>
</figure>
</section>


<section class="applee">

<figure class="snip1139">
  <blockquote><br>Trainers at Skyline Financial Training are very professional, kind and dependable. They have been a constant support for me during my entire course.
     They have shown me empathy and understanding as I couldn’t complete the course within promised time due to personal reasons. 
    <div class="arrow"></div>
  </blockquote>
  <img src="./assets/images/review (6).jpg"/>
  <div class="author">
    <h5>John David</h5>
  </div>
</figure>


<figure class="snip1139 hover">
  <blockquote><br>The guidance videos are clear , it is like you are listening to a live or classroom lecture. The trainers are competent and polite.
    <div class="arrow"></div><br>
  </blockquote>
  <img src="./assets/images/review (8).jpg"/>
  <div class="author">
    <h5>Lakshmi Rajesh</h5>
  </div>
</figure>


<figure class="snip1139">
  <blockquote><br>Skyline Financial Training is useful for Accounting job seekers, who are waiting to get job in accounting and bookkeeping field.
  Trainers are very well mannered and explains each and every doubt obediently. Learning isn't just about being better at your job: it's so much more than that.
  Highly recommend!
    <div class="arrow"></div><br><br>
  </blockquote>
  <img src="./assets/images/review (5).jpg"/>
  <div class="author">
    <h5>Steve Robert</h5>
  </div>
</figure>
</section>
   
   
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