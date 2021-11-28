<html>
<head>
    <title>Admin Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="picture/hotel.png" />
     <link  rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href='css/style1.css'>
    
    
    </head>
<body>
    
    <div class='login'>
         <div id='navbar' class='home-body-nav'  >
     <a id="logout" href="home1.php" ><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Back</a>
        
     </div>
    <div class='box'>
        
       <h1 >Admin-Login</h1>
        
         <div class='social-icons'>
        
            <img src='picture/facebook.png'>
            <img src='picture/google-plus.png'>
            <img src='picture/instagram.png'>
                
        </div>
        <form id ='login' class="sign-form" action='adminvalidation.php' method='POST'>
            <input type='text' id='username' name='username' class='input-field' placeholder="User Name" required>
            <input type='password' name="password" id='pwd' class='input-field' placeholder="Password" required><i id='eye' class="fa fa-eye-slash" aria-hidden="true" onclick='toggle()'></i><br>
            <input type='checkbox' class='check-box'  checked='checked'>
            <span>Remember password</span>
            <button type='submit' class='class-btn'>Login</button>
        </form>
         
        </div>
       
    </div>
    
    <!-- <script lang="javascript">
        form.addEventListener('submit', validate);

                var state= false;
                function toggle()
                {

                    if(state){

                        document.getElementById("pwd").setAttribute("type","password");
                        document.getElementById("eye").setAttribute("class","fa fa-eye-slash");
                        state=false;
                    }
                    else{
                         document.getElementById("pwd").setAttribute("type","text");
                         document.getElementById("eye").setAttribute("class","fa fa-eye");

                        state=true;
                    }
                }
        
                var attempt = 3; 
                function validate(){
                var username = document.getElementById("username").value;
                var password = document.getElementById("pwd").value;
                if ( username == "venky" && password == "123"){ // here is password and username
                sweetAlert ("Login successfully");
                window.location = "success.html"; 
                return false;
                }
                else{
                attempt --;// Decrementing by one.
                sweetAlert("You have  "+attempt+" attempt(s) left.");
                // Disabling fields after 3 attempts.
                if( attempt == 0){
                sweetAlert("Oops...", "You have failed  to login 3 times, Fields have been turned off. Please try again later", "error");
                document.getElementById("username").disabled = true;
                document.getElementById("password").disabled = true;
                document.getElementById("submit").disabled = true;
                return false;
                }
                }
                }

    </script>
     -->
    
    </body>
</html>