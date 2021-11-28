<html>

    <head>
        <title>Gallery Page</title>
        <link type="text/css" rel="stylesheet" href="css/style1.css">
        <style> 
        body{margin: 0}
.container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
  background: black;
  padding: 12px;
}
.container img {
/*  width: 100%;*/
    width:300px;
    height:200px;
  display: block;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transition: all 0.2s ease-out;
     
}
.container img:hover {
  transform: scale(1.06);
  -webkit-filter: grayscale(0);
  filter: grayscale(0);
    border : 1px solid white;
    box-shadow: 0 0 50px #999999;
}



/* Footer */

.footer{
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}
.footer p {
    margin: 10px 0;
    font-family: 'Raleway', 'Lucida Sans Regular', 'Lucida  Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.footer .fa-heart{
    color: red;
}
.footer .fa-codepen{
  color:#fff
}
.footer a {
   color: #3c97bf;
   text-decoration: none;
  margin-right:5px;
}



        </style></head>
    <body>
</body>
</html>
   
      <div id='navbar' class='home-body-nav'  >
         <a id="logout" href="javascript:goBack()" ><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Back</a>
<script>
function goBack() {
  window.history.back();
}
</script>
     </div>
<div class="container">
  <img src="picture/meeting.jpeg">
  <img src="picture/1.jpg">
  <img src="picture/2.jpg">
  <img src="picture/3.jpg">
  <img src="picture/4.jpg">
  <img src="picture/5.jpg">
  <img src="picture/6.jpg">
  <img src="picture/A.jpg">
  <img src="picture/B.jpg">
  <img src="picture/C.jpg">
  <img src="picture/D.jpg">
  <img src="picture/accomadation.jpg">
  <img src="picture/bachelor.jpg">
  <img src="picture/F.jpg">
  <img src="picture/G.jpg">
  <img src="picture/H.jpg">
  <img src="picture/classic.jpg">
  <img src="picture/club.jpg">
  <img src="picture/dining.jpg">
  <img src="picture/dulex.jpg">
  <img src="picture/events.jpeg">
  <img src="picture/family.jpg">
  <img src="picture/luxury.jpg">
  <img src="picture/meeting.jpeg">
  <img src="picture/suits.jpg">
  <img src="picture/super.jpg">
  <img src="picture/summing.jpg">
  <img src="picture/superior.jpg">
  <img src="picture/wedding.jpeg">
  <img src="picture/well.jpg">
  <img src="picture/I.jpg">
     <img src="picture/bg.jpg">
  
</div>
  
<!-- Footer -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</div>