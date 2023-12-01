
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

.dropbtn {
  background-color: transparent;
  color:  hsl(240, 6%, 51%);
  padding-top: 9px;
  font-weight: 500;
  font-size: 18px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: transparent;}

</style> 



  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.php" class="logo">
        <img src="./assets/images/logo (3).png" width="225" height="57">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="index.php" class="logo">
            <img src="./assets/images/logo (3).png" width="155" height="37" >
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link title-sm" data-nav-link>Home</a>
          </li>

                
                  
     
          <li class="navbar-item">

        
          <div class="dropdown">
            <button class="dropbtn">Courses  <i class="fa-solid fa-caret-down"></i></button>
            <div class="dropdown-content">
              <a href="acca.php">ACCA</a>
              <a href="cma.php">CMA</a>
              <a href="cfa.php">CFA</a>
              <a href="olevel-alevel.php">O / A LEVEL</a>

            </div>
          </div>
          </li>
          <li class="navbar-item">
            <a href="fees.php" class="navbar-link title-sm" data-nav-link>Fees</a>
          </li>

          <li class="navbar-item">
            <a href="reviews.php" class="navbar-link title-sm" data-nav-link>Reviews</a>
          </li>

          <li class="navbar-item">
            <a href="about.php" class="navbar-link title-sm" data-nav-link>About Us</a>
          </li>

          <li class="navbar-item" >
          <a href="contact.php" class="navbar-link title-sm" class=" btn-primary" 
            style="background-color: darkred; color:white ; width: 140px ;  text-align:left ;
             margin:15px 0px ;  padding-left:20px ;  border-radius:25px;" id="button" >Contact Us</a>
          </li>

        
        </ul>

      </nav>
      <a href="contact.php" class="btn btn-primary" style="background-color: darkred;">Contact Us</a>


      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-overlay data-nav-toggler></div>

    </div>
  </header>

  <style>

    
#button{ display: none;}
@media(max-width:950px)
{
  #button{ display: block;}

}


  </style>