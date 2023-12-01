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
  <title>Courses | Skyline Financial Training</title>
  <meta name="title" content="Courses | Skyline Financial Training">
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
    grid-template-columns: repeat(2, 1fr);
    padding: 55px 100px;
    text-align: center;
    
}   

.col-3{   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin: 10px 10px; padding: 100px 20px; background-color:  #e6e9ff;        }

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
          





           
            WHICH TRAINING IS   <span style="color:darkred;font-weight:bold">FOR YOU?  </span>
            </h1>

            <p class="title-md has-before">
            Accounting Excellence Starts Here: Join Our Comprehensive Training Program Today!            </p>

           
          </div>

            <img src="./assets/images/course-1.jpg" width="700" height="920" alt="hero banner" class="w-100" style="border-radius: 98px 0px;">

        </div>
        


      <section class="contactc"  style="background-image: url('./assets/images/hero-bg.png')">
					
					<div class="col-3">
					<div class="cardb">
                    <img src="./assets/images/acca.png" width="590" height="520" class="w-100" style="padding:0px 50px;">
							<h3>ACCA</h3>
							<p>We train financial and investment learner to achieve their professional qualification by joining us to get value for money within your budget.</p>

					</div>
					</div>

					<div class="col-3">
					<div class="cardb">	
                    <img src="./assets/images/cma.png" width="590" height="520" class="w-100" style="padding:0px 50px;">
							<h3>CMA</h3>
							<p>The qualification is all about to improve management accounting and financial management.</p>
					</div>
					</div>

					
		</section>




        <section class="contactc"  style="background-image: url('./assets/images/hero-bg.png')">
					
					<div class="col-3">
					<div class="cardb">

                    <img src="./assets/images/cfa.png" width="590" height="520" class="w-100" style="padding:0px 50px;"><br><br>
							<h3>CFA</h3>
							<p>Chartered Financial Analyst is top qualification for the Investment industry professionals</p>

					</div>
					</div>

					<div class="col-3">
					<div class="cardb">	
                        
                    <img src="./assets/images/camb.png" width="590" height="620" class="w-100">
							<h3>O Levels /  A Levels</h3>
							<p>We offer Cambridge International O Level and AS & A Level students online teaching.</p>

                        </div>

					</div>

					
		</section>



        
<section
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="headline-lg" id="hero-label">
           
            <span style="color:darkred;font-weight:bold">ACCA </span>
            </h1>

            <p class="title-md has-before">
            The Association of Chartered Certified Accountants (ACCA) study course is one of the
            well known Professional study known all over the world’s in the field of accountancy, 
            with recognition in over 175 countries.        
        
            <br><br>

            ACCA commands statutory auditing powers across many international jurisdictions including the UK.

            <br><br>
            ACCA qualification is equal to the status of other Professional qualifications well known in the world and Professionals are paying top level salaries in Gulf, UK and rest of the world..


            </p>
            <a href="acca.php" class="btn btn-secondary" style="background-color: darkred;">See More Information</a><br><br>

           
           </p>

           
          </div>

            <img src="./assets/images/acca.png" width="700" height="920" alt="hero banner" class="w-100" >

        </div>
        

<br><br>

</section>


        
      <!-- 
        - #HERO
      -->

      <section  style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="headline-lg" id="hero-label">
           
            <span style="color:darkred;font-weight:bold">CMA  </span>
            </h1>

            <p class="title-md has-before">
            The qualification is all about to improve management accounting and financial management
            which includes various topic like internal audit, cost accounting, financial ratios, inventory
            managment,budgeting, business case study and manay other topics which are important for
            professional qualification. By comppleting CMA, students has potential to earn high salay and
            there is huge need for certified management accountants in UAE, Saudi, Qatar and Oman.        
        
            <br><br>
            
            We offer one to one online professional training on Each part.

            <br><br>

            We charge AED 2000 fee for 10 study sesions of 3 hours each for ONE Part.

           </p>
           <a href="cma.php" class="btn btn-secondary" style="background-color: darkred;">See More Information</a><br><br>

           
          </div>

            <img src="./assets/images/cma.png" width="700" height="920" alt="hero banner" class="w-100" style="border-radius: 98px 0px;">

        </div>
        



</section>


<section 
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="headline-lg" id="hero-label">
           
            <span style="color:darkred;font-weight:bold">CFA  </span>
            </h1>

            <p class="title-md has-before">
            Chartered Financial Analyst is top qualification for the Investment industry professionals.
            Completing CFA charter-qualification provides remarkable rewards in investment and finance
            sector.
        
        
            <br><br>
            
            We offer one to one online professional training on Each part.

            <br><br>

            We charge AED 2000 fee for 10 study sesions of 3 hours each for ONE Part.

           </p>
           <a href="cfa.php" class="btn btn-secondary" style="background-color: darkred;">See More Information</a><br><br>

           
          </div>

            <img src="./assets/images/cfa.png" width="700" height="920" alt="hero banner" class="w-100" style="border-radius: 98px 0px;">

        </div>
        



</section>

<section
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="headline-lg" id="hero-label">

            <span style="color:darkred;font-weight:bold">O Level / A Level  </span>
            </h1>

            <div  class="title-md">
            <p  class="title-md  has-before">
            We offer Cambridge International O Level and AS & A Level students online teaching on the following subjects only.
          </p>

            <ul >
            <li>1. ACCAOUNTING</li><br>
            <li>2. FINANCE</li><br>
            <li>3. BUSINESS STUDIES</li><br>
            <li>4. COMMERCE</li><br>
            <li>5. BUSINESS MANAGEMENT</li><br>
            <li>6. ECONOMICS</li><br>

          </ul>  
          
</div>
<a href="olevel-alevel.php" class="btn btn-secondary" style="background-color: darkred;">See More Information</a><br><br>

           
          </div>

            <img src="./assets/images/camb.png" width="700" height="920" alt="hero banner" class="w-100" style="border-radius: 98px 0px;">

        </div>
    



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