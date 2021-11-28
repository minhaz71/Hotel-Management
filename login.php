<html>
<head>
    <title>User Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" />
     <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
     <link rel='stylesheet' href='style.css'> 
        <link rel='stylesheet' href='style1.css'> 
    <style>
        .body{
            padding: 0;
            font-family: sans-serif;
            margin:0px;
            background-size:cover; 
            background-image:linear-gradient(skyblue,#2d545e); 
            
        }
        .login {
            margin:0px;
            width:100%;
            height:880px;
            background-image:linear-gradient(skyblue,#2d545e);
            position:absolute;
            background-size:cover;
            background-position:centre;
         
        }
        .box{
            width:380px;
            height:580px;
            position:relative;
            margin:6% auto;
            background: white;
            box-shadow: 0 0 10px #2d545e;
            padding: 5px;
            border-radius:20px;
            overflow: hidden;
        }

        .box-button{
            width:220px;
            margin:35px auto;
            position:relative;
             box-shadow: 0 0 10px #2d545e;
            border-radius:30px;
        }
        .btn{
            position:relative;
            background:transparent;
            border:0;
            padding:10px 30px;
            cursor:pointer;
            outline: none;
            color: black;

        }
        #btns{
            position: absolute;
            width:110px;
            height: 100%;
            top:0;
            left:0;
            border-radius: 30px;
            background:linear-gradient(to right,#2d545e,skyblue);
            transition: .5s;
        }
        .social-icons
        {
            margin:20px auto;
            text-align: center;
        }
         .social-icons img
        {
            margin:10px 10px;
            width:30px;
            border-radius: 60%;
            cursor:pointer;
            box-shadow: 0 0 20px 0 skyblue;
           
        }
        .sign-form{
            width:280px;
            top:180px;
            position: absolute;
            transition :.5s;  
       
        }
        .input-field{

           
            padding:10px 0;
            margin:5px 0;
            width 100%;
            border-bottom: 1px solid #999;
            border-top:0;
             border-right:0;
             border-left:0;
            background: transparent;
            outline:none;
            
        }
        .class-btn{
            
            padding:10px 30px;
            width:80%;
            margin:auto;
            display:block;
             outline:none;
            border:0;
            background:linear-gradient(to right,#2d545e,skyblue);
            border-radius: 30px;
            cursor: pointer;
            
            
        }
        .check-box{
            margin: 30px 10px 30px 0px;
            
        }
        span{
            color:#777;
            font-size: 12px;
            bottom: 62px;
            position: absolute;

        }
        .span2{
            color:#777;
            font-size: 12px;
            bottom: 49%;
            position: absolute;

        }
        #login{
            left:50px;
        }
        #registration{
            left:450px;
        }
        .box a{
            color: red;
             font-size: 13px;
        }
        .fa {
            
            cursor: pointer;
            left=-30px;
            top=50px;

        }
        #eye.active {
            color:blue;
        }
    </style>
    
    </head>
<body>
  
<?php
      include("header.php");
      ?>
    <div class='box' id='len'>
    <?php 
       
        if(isset($_GET['r'])){

            echo"<p style=\"text-align: center;font-size: 23px;font-weight: 1000;\"\> You Have to login First</p>";
        }
        else{
            echo"";
        }
        ?>
        
        <div class="box-button">
            <div id='btns'></div>
        <button class="btn" onclick="login()">login</button>
        <button class="btn" onclick="register()">sign up</button>
        </div>
        
         <div class='social-icons'>
        
            <img src='picture/facebook.png'>
            <img src='picture/google-plus.png'>
            <img src='picture/instagram.png'>
                
        </div>
      
        <form id ='login' class="sign-form"  method='post' action='validation.php<?php if(isset($_GET['r'])){echo"?r=1"; } else{
            echo"";}?>'>
            <input type='text' name='username' class='input-field' placeholder="User Name" required>
             <input type='password' name="password" id='pwd' class='input-field' placeholder="Password" required><i id='eye' class="fa fa-eye-slash" aria-hidden="true"  onclick='toggle()'></i><br>
            <input type='checkbox' class='check-box'  checked='checked'><span class="span2">Remember password</span> </br>
            
            <button type='submit' class='class-btn'>Login</button> </br>

    
        </form>
         <form id='registration' name='form1'  class="sign-form"  method='post' action='registration.php' onsubmit="return fill()">
            <input type='text' name='username' class='input-field' placeholder="User Name" required>
             <input type='password'name="password"  id='pwds' class='input-field' placeholder="Password" required><i id='eyes' class="fa fa-eye-slash" aria-hidden="true" onclick='toggle()'></i>
             <input type='password'name="cpassword"  id='cpwds' class='input-field' placeholder="Confirm Password" required>
              <input type='email' name='email' class='input-field' placeholder="Email id" required>
             <input type='number' name="number" class='input-field' placeholder="Mobile Number" required><br><br/>
              <a href='javascript:login()'>Already have an account?</a><br/>
             <input type='checkbox' class='check-box' checked='checked'>
             <span>I am agree to the terms and conditions</span>
            <button type='submit' class='class-btn'>Register</button>
            
        </form> <br>
        

        
    
        </div>
      
       
       
    </div>
    <div>

            <button type=''style="margin-top:5%" class='class-btn'> <a href="adminlogin.php" style="text-decoration: none;color: black;width: 64%;" >Admin Login</a></button>
    </div> 
    <script>
        
        
    
        var x=document.getElementById("login");
         var y=document.getElementById("registration");
         var z=document.getElementById("btns");
         var len=document.getElementById("len");
        function register()
        {
            x.style.left= "-400px";
            y.style.left="50px";
            z.style.left="110px";
            len.style.height='580px';
            
        } 
        
         function login()
        {
            x.style.left= "50px";
            y.style.left="450px";
            z.style.left="0px";
             len.style.height='450px';
            
        } 
         function fill(){
             var password=document.form1.password;
       var cpassword=document.form1.cpassword;
           if(password.value!=cpassword.value){
            alert("password is mismatching.... please re-enter your password ");
            return false;
        }
            return true;
        }
        //eye icon
        var state= false;
        function toggle()
        {
            
            if(state){

                document.getElementById("pwd").setAttribute("type","password");
                document.getElementById("pwds").setAttribute("type","password");
                document.getElementById("eye").setAttribute("class","fa fa-eye-slash");
                document.getElementById("eyes").setAttribute("class","fa fa-eye-slash");
                state=false;
            }
            else{
                 document.getElementById("pwd").setAttribute("type","text");
                 document.getElementById("pwds").setAttribute("type","text");
                 document.getElementById("eye").setAttribute("class","fa fa-eye");
                 document.getElementById("eyes").setAttribute("class","fa fa-eye");
                
                state=true;
            }
        }
        
        
    </script>
    
    
    </body>
</html>