<?php
session_start();
?>

         
    <?php 
      include("header.php");

      ?>
        <div class="loader">
	  <img src="picture/loading.gif" alt="Loading...." />
	</div>
	<script>
	   window.addEventListener("load",function(){
		   const loader = document.querySelector(".loader");
		   console.log(loader);
		   loader.className += " hidden";
	   });
	</script>
        
        
            
    <img  id='slide' src='picture/A.jpg' alt='Immage Error' width=100% height='500'><br>
       <h1 style= "font-family: Arial, Helvetica, sans-serif; color:#2d545e;">   &nbsp;&nbsp;&nbsp; <i class="fa fa-building" aria-hidden="true"></i>&nbsp;HOTEL PACIFIC INTERNATIONAL ,DHAKA.</h1><br>
         <div class='intro'> 
         <p>
             <B> Overview</B><br>This ornate, palatial -The pasific - overlooks verdant foliage in the heart of Chennai. This luxury hotel offers one of the largest banqueting facilities in India, 10 award winning F&B outlets, signature wellness experiences and more.<br>

 It embodies the highest standards in Indian hospitality balanced with elegant restraint in a prime property with distinct personality.<br><b>The passific has 522 rooms and 78 luxuriously appointed service apartments- collectively its 600 spacious guest rooms, suites and luxury service apartments,</b> are the epitome of Indian grace and style, expertly delegated with thoughtful amenities.The pasific meets the needs of both the business traveller on the move as well as the bespoke requirements of the destination connoisseur.</p>
             <p><B>Ideal Location</B><br>

The delights of this luxurious hotel are varied. As a fascinating throwback to a vibrant period in Indian history, The pasific stands for timeless beauty and luxury. Built in the midst of the business hub of Guindy and located on Mount Road,Pasific in Chennai is within close proximity to many key areas of Chennai and is just 8 km away from the domestic and international airport which serves as an ideal destination for both business and leisure sojourns. The well-connected roads and transportation system enable easy accessibility to commercial points and key areas in the city. </p>
<p><B>Refined Artistry</B><br>
Towering facades and flowing architecture are leaves taken from the aesthetics of the Cholas, an ancient dynasty that made a deep impact on many regions within and outside of this country. From the shores of the Bay of Bengal to that of South Asian borders of Malaysia, China and Sri Lanka among others, the Cholas have influenced art, architecture and culture from their time to now. Impeccably carved temples, bronze sculptures of unparalleled beauty and keen attention to detail are aesthetics that continue to influence us till now.
             </p>
             
     </div>
        
        <div class="black">
            
           <div class='home-book'> <label>City/Destination/Hotel<br>HOTEL PACIFIC INTERNATIONAL,DHAKA</label></div>
            <div class='home-book'> <label>Check in</label><p id='date'></p></div>
             <div class='home-book'><label>Check out </label><p id='tom'>Select checkout date</p></div>
            <div class='home-book'><label>No of rooms available</label><p>Quick link</p></div>
            <div class='home-book'><button class='home-button'  onclick='btnlink()'><span>Check Rates</span></button></div>
        </div>
        
        <div class='hotel-image'>
        <div class='three'>
            <div class='hotel-image-detail'><img class='img' src='picture/accomadation.jpg' alt='Image Error'  width='350px' height='200px'>
            <center><h2>ACCOMMODATION</h2></center>
            <p>With 506 rooms, 78 luxuriously appointed service apartments & 16 palatial suites which are the epitome of Indian grace and style.</p>
            </div>
              <div class='hotel-image-detail'><img class='img' src='picture/well.jpg' alt='Image Error'  width='350px' height='200px'> 
            <center><h2>DINING</h2></center>
            <p>Ten distinct dining destinations featuring Indian & international cuisine along with some of the world’s most well appreciated and prized beverages.</p>
            </div>
              <div class='hotel-image-detail'><img class='img' src='picture/dining.jpg' alt='Image Error' width='350px' height='200px'>
            
            <center><h2>WELLNESS</h2></center>
            <p>Embodying our commitment to holistic wellbeing, ITC Grand Chola offers facilities that provide healthier options for a better stay.</p>
            </div>
            </div>
            <div class='three'>
              <div class='hotel-image-detail'><img class='img' src='picture/summing.jpg' alt='Image Error' width='350px' height='200px'>
                <center><h2>CITY GETAWAY</h2></center>
            <p>Discover exquisite weekend getaways in the comfort of your own city. Enjoy breakfast, Wi-Fi, happy hours, savings on dining & spa, and more.</p>
                </div>
              <div class='hotel-image-detail'><img class='img' src='picture/suits.jpg' alt='Image Error' width='350px' height='200px'>
                <center><h2>SHORT BREAK</h2></center>
            <p>Capture a lifetime of great memories. Includes Wi-Fi, Breakfast and more</p>
                </div>
              <div class='hotel-image-detail'><img class='img' src='picture/away.jpg' alt='Image Error' width='350px' height='200px'>
                <center><h2>SUITE SOJOURNS</h2></center>
            <p>Exceptional value for a superlative suite experience with airport transfers, Wi-Fi, breakfast and more.</p>
                </div>
            </div>
        </div>
        
        
    <div class='split'>
     <div class='split-left'>
        <img class='home-image'src='picture/facility.jpg' alt='image not found'>
        </div>
        <div class='split-right'>
            <h1 style= font-style: bold;>More facilities....</h1> 
            <ul class='list'>
                  <li>Spa</li>
                  <li>Car parking.</li>
                  <li>Semi open & outdoor restaurant.</li>
                  <li>Public computer.</li>
                  <li>24 Hourse security</li>
                <li>Poolside bar.</li>   </ul>
            <p >The PACIFIC INTERNATIONAL Hotel is not merely the building but, above all, its people. We are a team of professionals, who can organise every event end-to-end.</p>
<p>We have many years of experience, extensive conference facilities, as well as technical and catering equipment, and we will be more than happy to organise your meeting – both in our building, in a tent at the hotel's patio, as well as in any other place of your choosing.</p>       
        </div>
        </div>
                
        
<div class='last'>
        <div class='contact'>
        
    <h2><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;Contact</h2>
        <p style='font-size:20px'>The Pasific,<br>

105/1 dhanmondi,<br>

DHaka 1200<br>

Bangladesh<br><br>

 

Telephone Number: 880 1850 887486<br>

Fax Number: +880 2220 0300<br>

            Email Id: pasific@gmail.com</p>
            
            </div>
     <div class = "vertical"></div> 
        
        
            </div>
        <div class='contact-box'>
        <form id='mail'   class="mail-form"  method='post' action='contact.php'>
            <center><h1>Contact us</h1></center>
            <p style='text-align: center; padding: 10px 30px;'>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
            <input type='text'  name='name' class='input-field' placeholder="Name" required><br>
              <input type='email' name='email' class='input-field' placeholder="Email" required><br>
              <input type='sub' name='sub' class='input-field' placeholder="Subject" required><br>
              <textarea name="message" class='input-field' placeholder='Message'></textarea><br><br>
             
              <button type='submit' class='class-btn'>Send</button>
        </form>
        
        </div>
        
        <hr style="height:1px;margin-left:0;background: black">
        <p>Terms|Privacy|SiteMap|FAQs|cookie statement<center></center></p>
        
          <script>

              
            var x=['picture/A.jpg','picture/B.jpg','picture/C.jpg','picture/D.jpg','picture/E.jpg','picture/F.jpg','picture/G.jpg','picture/H.jpg','picture/I.jpg'];
              slide=document.getElementById('slide');
              count=0;
                function slideshow()
              {
                   count=count+1;
                          if(count<=x.length)
                              {
                                  if(count==x.length)
                                      {
                                           count=0;
                                      }
                                 
                               slide.src=x[count];

                              }
              }
                  setInterval(slideshow,2000);
              var d = new Date();
              var tommorow;
              document.getElementById("date").innerHTML =d.toDateString();
               tommorom.setDate(d.getDate()+1);
              document.getElementById("tom").innerHTML =d.toDateString();
              
              function btnlink()
              {
                  location.replace("room.php"); 

              }
             
              
</script>
        
        
        
    </body>


</html>