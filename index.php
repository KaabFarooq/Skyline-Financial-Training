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
  <meta name="image" content="<img src='./assets/images/about.jpg'>">
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/svg+xml">

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
            <span class="span" style="color: darkred;"> Invest</span>
             in Your  <span class="span" style="color: darkred;">Future  </span> with Skyline Financial Training
            </h1>

            <p class="title-md has-before">
            Invest in your financial career with our comprehensive training.
            </p>

            <div class="btn-group">
              <a href="courses.php" class="btn btn-primary" style="background-color: darkred;">See Our Courses</a>

              <a href="contact.php" class="btn btn-secondary">Contact Us Now</a><br><br>
            </div>

          </div>

            <img src="./assets/images/about.jpg" width="590" height="620" alt="hero banner" class="w-100" style="border-radius: 198px 0px;">

        </div>
      </section>








      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/course.jpg" width="775" height="685" loading="lazy" alt="about banner"
              class="w-100" style="border-radius: 198px 0px;">
          </figure>

          <div class="about-content">

            <p class="title-sm section-subtitle" id="about-label">About Skyline Financial Training</p>

            <h2 class="headline-md section-title">
              We Provide The Best ACCA <span class="span has-after " style="color: darkred;">Education</span>
            </h2>

            <p class="title-sm section-text">
            We strongly recommend every business and finance  professional must have ACCA qualification as it equipped with the crucial technical skills for accounting and finance roles in business environments. With an ACCA qualification and membership, you become an important human asset for the company.
            <br><br>

            Skyline FT offers different study packages for ACCA fees:

            </p>

            <a href="fees.php" class="btn" style="background-color: darkred;">See Our Fees</a>


          </div>

        </div>
      </section>


         
      <!-- 
        - #COURSE
      -->

      <section class="section course has-bg-image" aria-labelledby="course-label"
        style="background-image: url('./assets/images/course-bg.png')">
        <div class="container">

          <p class="title-sm section-subtitle text-center">About ACCA</p>

          <h2 class="headline-md section-title text-center" id="course-label">
          See All Our <span class="span has-after" style="color: darkred;">Trainings</span>
          </h2>

       



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
          <a href="courses.php" class="btn btn-secondary" style="">View All Courses</a>


        </div>
      </section>

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

         

          <div class="about-content">

            <p class="title-sm section-subtitle" id="about-label">See ACCA Fees</p>

            <h2 class="headline-md section-title">
             Delivering Excellence in   <span class="span has-after " style="color: darkred;">ACCA</span>Education
            </h2>

            <p class="title-sm section-text">
            Explore comprehensive details regarding the Skyline Financial Training Course tuition fees and the various package options we offer to cater to your needs.            <br><br>

            Skyline FT offers different study packages for ACCA:

            </p>

            <a href="acca.php" class="btn" style="background-color: darkred;">Find More Information</a>


          </div>


          <figure class="about-banner">
            <img src="./assets/images/home (2).jpg" width="775" height="685" loading="lazy" alt="about banner"
              class="w-100" style="border-radius: 0px 198px ">
          </figure>
        </div>
      </section>




      
      <!-- 
        - #COURSE
      -->

      <section class="section course has-bg-image" aria-labelledby="course-label"
        style="background-image: url('./assets/images/course-bg.png')">
        <div class="container">

          <p class="title-sm section-subtitle text-center">About ACCA</p>

          <h2 class="headline-md section-title text-center" id="course-label">
          Association of Chartered Certified  <span class="span has-after" style="color: darkred;">Accountants</span>
          </h2>

          <ul class="grid-list">

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-1.png" width="370" height="248" loading="lazy"
                    alt="Basic Fundamentals of Interior & Graphics Design" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price" style="color: darkred;">Exam Dates</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>
                  <br>
                  <h3 class="title-lg card-title">
                  January, March, June, and September
                  </h3>

                

                <a href="#" class="layer-link"
                  aria-label="Course Details, Basic Fundamentals of Interior & Graphics Design"></a>

              </div>
            </li>

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-2.png" width="370" height="248" loading="lazy"
                    alt="Increasing Engagement with Instagram & Facebook" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price" style="color: darkred;">Duration</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>
                  <br>
                  <h3 class="title-lg card-title">
                  Varies as per Exam format
                  </h3>

                 

                <a href="#" class="layer-link"
                  aria-label="Course Details, Increasing Engagement with Instagram & Facebook"></a>

              </div>
            </li>


    


          </ul>
          <a href="acca.php" class="btn btn-secondary" style="">View All Information</a>


        </div>
      </section>



      <section class="section hero " 
      style="background-image: url('./assets/images/hero-bg.png')">



        <div class="container">

          <div class="hero-content">

            <h1 class="headline-lg" id="hero-label">
          





           
            Our Student   <span style="color:darkred;font-weight:bold">Reviews  </span>
            </h1>

            <p class="title-md has-before">
              Don't believe what we say <br>
            See what Our Students have to say about us
            </p>

            <a href="reviews.php" class="btn" style="background-color: darkred;">See Our Reviews</a><br><br>

          </div>

            <img src="./assets/images/review.jpg" width="700" height="920" alt="hero banner" class="w-100" style="border-radius: 98px 0px;">

        </div>
        
      </section>



                
<!-- component -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="./assets/styles/styles.css" /> -->
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
  </head>
  <body class="h-screen bg-blue-50 ">
    <main class="p-5 bg-light-blue bg-blue-50">

    <br><br>
    <br><br>
    <br><br>


    <h2 class="headline-md text-center section-title">
            FAQs for <span class="span has-after" style="color: darkred;">ACCA</span> Study
          </h2>

      <div class="flex justify-center items-start my-5">
        <div class="w-full sm:w-10/12 md:w-10/2 my-20">
          <ul class="flex flex-col">
            <li class="bg-white my-5 shadow-lg py-5 px-5 " x-data="accordion(1)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>Can I study ACCA Online or Physical in Dubai?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                x-ref="tab"
                :style="handleToggle()"
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
              >
                <p class="p-3 text-gray-900">
                ACCA all papers classes will be conducted online and all teachers are professional and Qualified. The study session/ revision kit practise will provide you practical learning to shape you into a strong and confident accounting professional.
                </p>
              </div>
            </li>


            <li class="bg-white my-5 shadow-lg py-5 px-5" x-data="accordion(2)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>Can I study ACCA after A level or O level?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                You can study ACCA qualification after A level or O Level. You may need to meet certain eligibility criteria before joining an ACCA. The best way to send email to ACCA admission office and obtain direct information for enrollment.
                </p>
              </div>
            </li>


            <li class="bg-white my-5 shadow-lg py-5 px-5" x-data="accordion(3)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>Which is better CA or ACCA?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                There are various similarities qualification are being available like CIA, CMA and other certification but the value of ACCA will take you to the CFO level as it prepare you for this position.
                </p>
              </div>
            </li>


            <li class="bg-white my-5 shadow-lg py-5 px-5" x-data="accordion(4)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>Is ACCA valuable in Dubai?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                ACCA qualification is highly in demand in Dubai, and all over the Gulf, UK and rest of the world.
                </p>
              </div>
            </li>
            
            
            <li class="bg-white my-5 shadow-lg py-5 px-5" x-data="accordion(5)">
              <h2
                @click="handleClick()"
                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
              >
                <span>How long does it take to complete ACCA?</span>
                <svg
                  :class="handleRotate()"
                  class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                  viewBox="0 0 20 20"
                >
                  <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                </svg>
              </h2>
              <div
                class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                x-ref="tab"
                :style="handleToggle()"
              >
                <p class="p-3 text-gray-900">
                Full time student may complete ACCA in 3 years time while working professional may finish course in 2 to 4 years according to his/her working life.
                </p>
              </div>
            </li>
           


          </ul>
        </div>
      </div>
    </main>
  </body>
  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.store('accordion', {
        tab: 0
      });
      
      Alpine.data('accordion', (idx) => ({
        init() {
          this.idx = idx;
        },
        idx: -1,
        handleClick() {
          this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
        },
        handleRotate() {
          return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
        },
        handleToggle() {
          return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
        }
      }));
    })
  </script>
</html>
            
        
        </div>	
	</div>
</div>
        </section>

    <br><br>    <br><br>


      <!-- 
        - #CTA
      -->

      <section class="cta" aria-labelledby="cta-label" style="background-color: darkred;">
        <div class="container">

          <h2 class="headline-md section-title" id="cta-label">
            Education Is About Creating Leaders For Tomorrow
          </h2>

          <a href="contact.php" class="btn btn-tertiary">Contact Us Today</a>

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