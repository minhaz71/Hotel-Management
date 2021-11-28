<?php
session_start();
?>
<html>

    <head>
        <title>Event Page</title>
        <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" />
    <link rel="stylesheet" type="text/css" href="style1.css" />
     <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>    
        <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
                <link rel='stylesheet' href='css/style.css'> 
                <link rel='stylesheet' href='css/style1.css'> 
    </head>
    <style>
        
        
                .intro
{
    background: lightgray;
    font-size: 20px;
    padding :10px 30px 10px 30px;
    box-shadow: 0 0 10px #999999;
    margin:0px  10px;
    
}
                .hotel-image{
                padding:20p;
                margin:1px;
               

                }
                .hotel-image-detail{
                width:380px;
                height:480px;
                margin:30px;
                padding:10px 15px; 
                border:1px solid black;
                box-shadow: 0 0 20px #999999;
                    border-radius: 18px;
                }
                .three
                {
                display: flex;
                }

                .hotel-image-detail img{
                border:1px solid black;
                }
        
        .readmore{
            display:black;
            border:1px solid black;
           text-align: center;
            color: floralwhite;
            background-color: black;
            padding :10px 20px;
            text-decoration: none;
            margin-left:120px;
            margin-top:6px;  
            
        }
  
/*            black*/
        .black-container{
             background-color:black;
            display: flex;
           
            padding:10px 10px;
            
        }
        
        .in{
             padding:40px 70px;
            
        }
        .black-container a{
            text-decoration: none;
             color:gainsboro;
        }
        
    </style>

    <body> 

    <section class="tall">
    <nav class="jmenu">
    <label for="menu-btn" class="jm-menu-btn jm-icon-menu"></label>
      <input type="checkbox" id="menu-btn" class="jm-menu-btn">
      <ul class="jm-collapse">
<div id='navbar' class='home-body-nav top'>
<li> <a id="first" href="home1.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
<li><a href="aboutus.php">About</a></li>
<li> <a href="gallery.html">Gallery</a></li>
<li>  <a href="service.html">Service</a></li>
<li> <a href="room.php">Rooms</a></li>
<li> <a href="event.php">Events</a></li>
<li> <a href="service.html">Service</a></li>
<li> <a href="contact.html">Contact</a></li>
<li><a href="appointment.php#room">Booking History</a></li>
<li> <a href="event.php">Meetings & Events</a></li>
<li> <a href="contact.html">Contact</a></li>
<?php 

if(isset($_SESSION["username"])){
  $name = $_SESSION["username"];
}
else{
  $name="Not Logged in";
}   
if(isset($_SESSION["username"])){
          echo "<li><a style='float:right' id=\"logout\" href=\"logout.php\"><i class=\"fa fa-sign-out\"
          aria-hidden=\"true\"></i>&nbsp;logout</a></li>";
          
        }
        else{
          echo "<li><a href=\"login.php\">Login</a></li>";
          echo"<li><a href=\"sign-up.html\">Sign up</a></li>";
        }  
?>
    
    <li>  <p style=' float:right;
     color: #f2f2f2;
     text-align: center;
     margin-right: 20px;
     font-size:18px;'><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $name;?></p> <li>

</div>

</ul>
    </nav>
  </section>
        
            <h1 style=" font-family:Arial, Helvetica, sans-serif; color:#2d545e;">   &nbsp;&nbsp;&nbsp; <i class="fa fa-building" aria-hidden="true"></i>&nbsp;The Pasific Hotel,luxury collections ,Dhaka</h1><br>
            <center><h2 STYLE=' color:#2d545e;'> MEETINGS & EVENTS </h2></center> <br> 
                    <div class='intro'> 
                    <p>
                    The Pasific Hotel offers the most sophisticated spaces for hosting meetings, conferences, conventions, symposiums, banquets and performances with state of the art facilities and amenities. In fact, the facilities available at pasific, which include meeting rooms, banquet halls and conference rooms, are one of the largest and most comprehensive in India. Rajendra, with its enormous pillarless area, can be divided into 8 separate spaces with its own private pre-function area. On the other hand, the banquet area has its own exclusive entrance.
                    </p>
                     </div>
            <div class='hotel-image'>
            <div class='three'>
            <div class='hotel-image-detail'><img class='img' src='picture/meeting.jpeg' alt='Image Error'  width='350px' height='200px'>
            <center><h2> MEETINGS </h2></center>
            <p>The Killi, Kaveri and Tanjore meeting rooms are the perfect combination of space and ideal ambiance with state of the art amenities and audio visual equipments</p>
          <center>     <span >Venues - 8</span><br></center>
              <center>      <span >Avg Area - 60 m2</span><br></center>
              <center>      <span >Capacity - 12 to 24 pax</span><br></center> <p><a class='readmore' href="booking.html" >BOOK NOW</a></p>
            </div>
            <div class='hotel-image-detail'><img class='img' src='picture/events.jpeg' alt='Image Error'  width='350px' height='200px'> 
            <center><h2>CONFERENCE</h2></center>
                <p>Ten distinct dining destinations featuring Indian & international cuisine along with some of the world's most well appreciated and prized beverages.Designed to meet different majestic venues, Asia's largest Hall - the 'Rajendra' houses three distinct pre-function areas.</p>  <center>  <span style='text-align: center'>Venues - 8</span><br></center>
                <center>   <span style='text-align: center'>Avg Area - 2465 m2</span><br></center>
                 <center>   <span style='text-align: center'>Capacity - 250 to 2400 pax</span><br></center> <p><a class='readmore' href="booking.html" >BOOK NOW</a></p>
            </div>
                <div class='hotel-image-detail'><img class='img' src='picture/wedding.jpeg' alt='Image Error' width='350px' height='200px'>

                <center><h2>WEDDING</h2></center>
                    <p>Dream up a traditional Indian wedding and turn it into an event extraordinaire. Encapsulate the most memorable moments and weave dreams into reality.</p>  <center>  <span style='text-align: center'>Venues - 8</span><br></center>
                    <center>   <span style='text-align: center'>Avg Area - 2465 m2</span><br></center>
                     <center>   <span style='text-align: center'>Capacity - 250 to 2500 pax</span><br> </center><p><a class='readmore' href="booking.html" >BOOK NOW</a></p>
            </div>
            </div>

            </div>
         <div class='black-container'>
        <div class='in'>
            <div class='in-in'><a href="aboutus.html"><p>About Us</p></a>
            </div><div class='in-in'><a href=""><p>Terms & Conditions</p></a>
            </div><div class='in-in'><a href=""><p>Privacy and Policy</p></a>
            </div><div class='in-in'><a href="login.html"><p>Rooms</p></a>
            </div>
            </div> <div class='in'>
            <div class='in-in'><a href="login.html"><p>The Rooms and Suites</p></a>
            </div><div class='in-in'><a href="aboutus.html"><p>About US</p></a>
            </div><div class='in-in'><a href="contact.html"><p>Contact Us</p></a>
            </div><div class='in-in'><a href=""><p>Restaurant</p></a>
            </div>
            </div> <div class='in'>
            <div class='in-in'><a href=""><p>Address:No. 105/1 DHanmondi,<br>
                    Dhaka-120<br>
                    Bangladesh<br><br>
                    </p></a>
                    </div><div class='in-in'><a href=""><p>Telephone Number: +880 1850887496</p></a>
                    </div><div class='in-in'><a href=""><p>Email Id: pasific@gmail.com</p></a>
                   
            </div>
            </div>
            </div>
            </div>
            <div class='in'>
            <div class='in-in'><a href=""><p>Quick links </p></a>
            </div><div class='in-in-in'><a href="service.html"><p>Services</p></a>
            </div><div class='in-in-in'><a href="login.html"><p>Login</p></a>
            </div><div class='in-in-in'><a href="sign-up.html"><p>SignUp</p></a>
            </div><div class='in-in-in'><a href="gallery.html"><p>Gallery</p></a>
            </div>
            </div>
            
         
           
        </div>


           
    </body>
</html>