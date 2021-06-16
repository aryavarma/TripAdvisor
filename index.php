<?php

session_start();

if(isset($_SESSION['name']))
{
	$p = $_SESSION['name'];
}

if(isset($_GET['logout'])) 
{
unset($_SESSION['Email']);
unset($_SESSION['name']);
}


?>

<! DOCTYPE HTML>
<html>
<head>
<title>Your Travel guide and Trip advisor</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body>
<section class="header">
<table border="0.2" width="100%" bgcolor="transparent" height="5%">
    <tr>
        <th width="16.6%"><a href="index.php"><font color="white" size=3 ><i><center>Home</center></i></font></a></th>
        <th width="16.6%"><a href="FAQ.html"><font color="white" size=3><i><center>FAQ</center></i></font></a></th>   
        <th width="16.6%"><a href="pagepolicy.html"><font color="white" size=3><i><center>Privacy Policy</center></i></font></a></th>   
        <th width="16.6%"><a href="insurancepolicy.html"><font color="white" size=3><i><center>Insurance Policy</center></i></font></a></th>   
        <th width="16.6%"><a href="followus.html"><font color="white" size=3><i><center>Follow Us</center></i></font></a></th>   
        <th width="16.6%"><a href="contactus.html"><font color="white" size=3><i><center>Contact Us</center></i></font></a></th>  
        
        <th><a href="login.php"><button type="button" class="login-btn">Login</button></a></th>
    </tr>
    </table>    

<h1>YOUR TRAVEL GUIDE</h1>
<p>Find best travel information here</p>
<div class="input-group" >
    <div class="input-group-append">
        <a href="search.html"><button type="submit" class="input-group-text btn">Search</button></a>
    </div>
</div>
</section>
<section class="features">
<h1>Featured Destinations</h1>
<div class="container">
<div class="row">
<div class="col-md-4">
    <div class="feature-box">
    <div class="feature-img">
    <img src="images/Greece.jpg">
    <div class="price">
        <p>100$</p>
    </div>
    <div class="rating">
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
    </div>
    </div>
    <div class="features-details">
        <h4>Greece</h4>
        <p>As beautiful as it Greece is truely a place to visit once in a lifetime. The climate,people,culture everything makes Greece a beautiful Country.It has beautiful green crops that fill our land with greenery. It also has many rivers flowing through fertile soil, a variety of flowers, plants and animals. The Himalayas decorates Greece like a majestic crown. Greece has always been one of the most technologically advanced countries in the world. </p>
        <div>
        <span><i class="fa fa-map-marker"></i>Greece</span>
        <span><i class="fa fa-sun-o"></i>5 Days</span>
        <span><i class="fa fa-moon-o"></i>4 Nights</span>
        </div>
    </div>
    </div>
</div>
<div class="col-md-4">
    <div class="feature-box">
    <div class="feature-img">
    <img src="images/france.jpg">
    <div class="price">
        <p>150$</p>
    </div>
    <div class="rating">
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
       <i class="fa fa-star-half-o" ></i>
        </div>
    </div>
    <div class="features-details">
        <h4>France</h4>
        <p>France is known for its fine food. French cooking is thought to be the best in the world. Chefs prepare dishes such as quiche, soufflés, mousse, pâté, croissants, crêpes, and French bread.While Paris is the most densely populated city in Europe, with 21,000 inhabitants per square meter, it is tiny when compared to London. London covers an area of 600 square miles, while Paris is squeezed into 40 square miles </p>
        <div>
        <span><i class="fa fa-map-marker"></i>France</span>
        <span><i class="fa fa-sun-o"></i>4 Days</span>
        <span><i class="fa fa-moon-o"></i>3 Nights</span>
        </div>
    </div>
    </div>
</div>      
<div class="col-md-4">
<div class="feature-box">
    <div class="feature-img">
    <img src="images/japn.jpg">
    <div class="price">
        <p>120$</p>
    </div>
    <div class="rating">
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
        <i class="fa fa-star" ></i>
    </div>
    </div>
    <div class="features-details">
        <h4>Japan</h4>
        <p>Japan is filled with perfect landscapes scattered across the country for people to soak in its beauty.The strong international representation at the Funeral Ceremonies was eloquent testimony to the world's great respect for both the Emperor himself and the Japanese Imperial family as well as evidence of Japan's position in the world, the international interest in things Japanese, and the importance that the world </p>
        <div>
        <span><i class="fa fa-map-marker"></i>Japan</span>
        <span><i class="fa fa-sun-o"></i>6 Days</span>
        <span><i class="fa fa-moon-o"></i>5 Nights</span>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</section>
<section class="gallery">
<h1>Travelling Gallery</h1>
<div class="container">
<div class="row">
<div class="col-md-3">
    <div class="gallery-box">
        <img src="Images/ireland.jpg">
        <h4><a href="ireland.html"><font color="darkgreen">Ireland</font></a></h4>
    </div>
</div>
<div class="col-md-3">
    <div class="gallery-box">
        <img src="Images/china.jpg">
        <h4><a href="china.html"><font color="darkgreen">China</font></a></h4>
    </div>
</div>
    <div class="col-md-3">
    <div class="gallery-box">
        <img src="Images/rajasthan.jpg">
        <h4><a href="india.html"><font color="darkgreen">India</font></a></h4>
    </div>
</div>
<div class="col-md-3">
    <div class="gallery-box">
        <img src="Images/mexico.jpg">
        <h4><a href="mexico.html"><font color="darkgreen">Mexico</font></a></h4>
    </div>
</div>

<div class="col-md-3">
    <div class="gallery-box">
        <img src="Images/japan.jpg">
        <h4><a href="japan.html"><font color="darkgreen">Japan</font></a></h4>
    </div>
</div>
<div class="col-md-3">
    <div class="gallery-box">
        <img src="Images/venice.jpg">
        <h4><a href="italy.html"><font color="darkgreen">Italy</font></a></h4>
    </div>
</div>

<div class="col-md-3">
    <div class="gallery-box">
        <img src="Images/usa2.jpg">
        <h4><a href="usa.html"><font color="darkgreen">USA</font></a></h4>
    </div>
</div>

<div class="col-md-3">
    <div class="gallery-box">
        <img src="Images/Greece.jpg">
        <h4><a href="athens.html"><font color="darkgreen">Athens</font></a></h4>
    </div>
</div>
</div>
</div>
</section>
<section class="banner">
    <div class="banner-highlights">
        <div class="container">
            <div class="row">
            <div class="col-md-8">
                <h2>Get 20%off on your latest flight destination </h2>
                <p>Don't miss the chance.
                    Use code FIRST20 to get 20% Discount.</p>
                </div>
                <div class="col-md-4">
                    <button type="button" class="booking-btn"><a href="booknow.php"><font color="white">Book Now</font> </a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="users-feedback">
<h1>Users Review</h1>
<div class="container">
 <div class="row">
 <div class="col-md-4">
            <div class="user-review">
                <p>Thankyou for sharing the information . I loved the trip .Thankyou.Have a good day!
                </p>
                <h5>Nina Dobrev</h5>
                <small>Japan</small>
            </div>
     <img src="Images/nina.jpg">
     </div>
     <div class="col-md-4">
     <div class="user-review">
                <p>Had a lovely experience.Weather was good.Stayed 5 nights 4 days here. </p>
                <h5>Neel Hussain</h5>
                <small>Greece</small>
            </div>
     <img src="Images/neel.jpg">
     </div>
     <div class="col-md-4">
         <div class="user-review">
                <p>Italy is beautiful.Must visit! This page is cool.Helped me a lot.Will give a 5 star rating</p>
                <h5>Ross Butler</h5>
                <small>Italy</small>
            </div>
     <img src="Images/ross.jpg"></div>
     <div class="col-md-4">
         <div class="user-review">
                <p>I am a traveller and this is great. I loved the trip. </p>
                <h5>Lois Griffin</h5>
                <small>NY</small>
            </div>
     <img src="Images/lois.jpg"></div>
     <div class="col-md-4">
         <div class="user-review">
                <p>Solo travel is needed to get away from the stress</p>
                <h5>Ryan Reynolds</h5>
                <small>Venice</small>
            </div>
     <img src="Images/Renold.jpg"></div>
     <div class="col-md-4">
         <div class="user-review">
                <p>The best trip ever . Thanks for the information.Kudos</p>
                <h5>Frank</h5>
                <small>Rajasthan</small>
            </div>
     <img src="Images/frank.jpg">
     </div>
</div>    
</div>
</section>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
                <img src="Images/download.png" class="footer-logo">
                <p><font size="2.3px" ><b><i>Disclaimer</b>: This is a project showing a basic travelling website that gives information about different places created using HTML,CSS,bootstrap.</i></font></p>
            </div>
            
            <div class="col-md-3">
            <h4>Features</h4>
                <p><a href="FAQ.html"><font color="white" ><i class="fa fa-quora"></i> FAQ</font></a></p>
                <p><a href="deals.html"><font color="white" ><i class="fa fa-percent" ></i> Deals and Offers</font></a></p>
                <p><a href="pagepolicy.html"><font color="white" ><i class="fa fa-paperclip"></i> Privacy policy</font></a></p>
                <p><a href="insurancepolicy.html"><font color="white" ><i class="fa fa-plus-circle" ></i> Insurance Policy</font></a></p>
                <p><a href="cancellationpolicy.html"><font color="white" ><i class="fa fa-ban" ></i> Cancellation Policy</font></a></p>
            </div>
            
            <div class="col-md-3">
            <h4>Quick Contact</h4>
                <p><a href="https://accounts.google.com/"><font color="white"><i class="fa fa-envelope"></i> yourtripadvisor@gmail.com</font></a></p>
                <p><a href="https://web.whatsapp.com/"><font color="white"><i class="fa fa-phone" ></i> +91 9876543210</font></a></p>
                <p><a href="https://goo.gl/maps/C1iBHLWo3qCogSg46"><font color="white"><i class="fa fa-location-arrow" ></i> xyz,block3,Andheri,Mumbai</font></a></p>
            </div>
        
        
            <div class="col-md-3">
            <h4>Follow Us on</h4>
            <p><a href="https://www.facebook.com/"><font color="white"><i class="fa fa-facebook-official" ></i> YourTripAdvisorpage</font></a></p>
            <p><a href="https://www.instagram.com/"><font color="white"><i class="fa fa-instagram" ></i> @yourtripadvisor</font></a></p>
            </div>
            <div class="col-md-3"></div>
           
</div><hr>
        <p class="copyright" ><i class="fa fa-copyright" ></i>Copyright</p>
        
        
</div>
</section>
</body>
</html>

