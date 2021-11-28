<html>

    <head>
        <title>HOTEL PACIFIC INTERNATIONAL</title>
   <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" />        
      
        <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        
<link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='css/style.css'> 
        <link rel='stylesheet' href='css/style1.css'> 
        
        
    </head>

    <body>
<section class="tall">
    <nav class="jmenu">
    <label for="menu-btn" class="jm-menu-btn jm-icon-menu"></label>
      <input type="checkbox" id="menu-btn" class="jm-menu-btn">
      <ul class="jm-collapse">
<div id='navbar' class='home-body-nav top'>
<li> <a id="first" href="home1.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
<li><a href="aboutus.php">About</a></li>
<li> <a href="gallery.php">Gallery</a></li>
<li>  <a href="service.html">Service</a></li>
<li> <a href="room.php">Rooms</a></li>
<li> <a href="event.php">Events</a></li>
<li> <a href="service.html">Service</a></li>
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
