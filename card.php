


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>

.contactc {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    padding: 30px 100px;
    text-align: center;
    
}   

.col-3{   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin: 10px 10px; padding: 50px 20px; background-color: #e6e9ff ;

        }

.col-3 h3{ font-size: 25px; color: black; padding: 10px 0px;}        
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
    

<section class="contactc">
					
					<div class="col-3">
					<div class="cardb">
							
							<i class="fa-solid fa-location-dot"></i>
							<h3>Address</h3>
							<p>Al Quoz 4, Office No. 3,<br> Street 19 A, Dubai, UAE.</p>
					</div>
					</div>

					<div class="col-3">
					<div class="cardb">	
					
							<i class="fa-solid fa-phone"></i>
							<h3>Call</h3>
							<p>+92-314-1606676</p>
					</div>
					</div>

					<div class="col-3">
					<div class="cardb">

							<i class="fa-regular fa-envelope"></i>
							<h3>Email</h3>
							<p> info@skylineft.com       </p>
							<p> skylineftuae@yahoo.com   </p>
					</div>
					</div>	
		</section>
</body>
</html>