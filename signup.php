<?php
session_start();
    include("connection.php");
    include("functions.php");

    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //if somethig is posted
       $user_name = $_POST['user_name'];
       $password = $_POST['password'];
       $F_name = $_POST['F_name'];
       $L_name = $_POST['L_name'];
       $email = $_POST['email'];
       $phone_number = $_POST['phone_number'];
       $gender = $_POST['gender'];

       $hashed_password = password_hash($password, PASSWORD_DEFAULT);               //For Hashing the password
       if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
       {
        // if all correct send
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password,F_name,L_name,email,phone_number,gender) values('$user_id','$user_name','$password','$F_name','$L_name','$email','$phone_number','$gender')";

        mysqli_query($con,$query); //to save

        header("Location: login.php");
         die;
       }else
       {
        echo "Please enter some valid information!";
       }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>

        <link rel="icon" href="webpages/homeAssets/photos/LOGO1.jpg" type="image/icon type">
        <link rel="stylesheet" href="webpages/Account/signup/signup.css">
    </head>

    

    <body>
        <div id="top">
            <div style="text-align: center;">
                <a href="../../index.html"><img src="webpages\homeAssets\photos\LOGO1.jpg" alt="LOGO" id="logo" style="float: left;"></a>
                <h1 id="header" style="display: inline-block; text-align: center;">Hotel Mangment System</h1>

                
            </div>

            <div style="float: right;">
                <a href="../../aboutus/about us.html" > <h6 class="navicons">About us</h6></a>
                <a href="login.php"> <h6 class="navicons">Sign In</h6></a>
            </div>
                
                
            

            <div style="text-align: center;">
                <p class="underheader">HMS..</p>
                <p class="underheader">as the world Not seen it before</p>
                
                

            </div>
            
        </div>

    <div id="back">
        <div class="title" style="transform: translate(170%,0%); background-color: rgba(0, 0, 0, 0.616);">
            <h4>Hotel Manegment System</h4>
            <p style="margin-top: 0px; font-size: smaller;">New member? Sign up here with us!</p>
        </div>
    
        <div class="title" style="width:500px;  height: 720px; background-color: rgba(0, 0, 0, 0.616); transform: translate(87%,0%);">
        <form method="post"style="text-align: center;">
                    <div class="labels" style="margin-bottom:30px;">Signup</div>
                <label for="username" class="labels">Username:</label>
                <input type="text" name="user_name" id="user_name" class="inputs" required>
                    <br><br>
                <label for="password" style="margin-top: 100px;" class="labels">Password:</label>
                <input type="password" name="password" id="password" class="inputs" required>
                <br><br>

                <div id="message">
                    <!-- <h4>Password must contain the following:</h4> -->
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>

                <label for="F_name" class="labels">First Name:</label>
                    <input type="text" name="F_name" id="F_name" class="inputs" style="margin-right:23px;"required>
                    <br><br>
                    <label for="L_name" class="labels">Last Name:</label>
                    <input type="text" name="L_name" id="L_name" class="inputs" style="margin-right:15px;" required>
                    <br><br>
                    <label for="email" class="labels" style="margin-left:28px;">Email:</label>
                    <input type="email" name="email" id="email" class="inputs" required>
                    <br><br>
                    <label for="phone_number" class="labels" style="margin-left:24px;">Phone:</label>
                    <input type="tel" name="phone_number" id="phone_number" class="inputs">
                    <br><br><br>
                    <label for="gender" class="labels">Gender:</label>
                    <input type="radio" name="gender"  class="radio" id="male" value="male">Male
                    <input type="radio" name="gender" class="radio" id="female" value="female">Female
                    <br><br><br>
                    <input type="checkbox" class="radio" id="terms" required> <p style="display: inline-block;">By checking this box you agree on the <a href="webpages\Account\signup\TermsAndConditions.html" target="_blank">terms and conditions</a>.</p>
                    <br><br>
                <input type="submit" value="signup" id="button" style="width:fit-content;">
                <br><br>
                
                
                </form>
        </div>
            
    </div>
        
        <script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    
    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
    //   document.getElementById("message").style.marginright = "300px";
    }
    
    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
    }
    
    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
      // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
      if(myInput.value.match(lowerCaseLetters)) {  
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }
      
      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if(myInput.value.match(upperCaseLetters)) {  
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }
    
      // Validate numbers
      var numbers = /[0-9]/g;
      if(myInput.value.match(numbers)) {  
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }
      
      // Validate length
      if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
    </script>


</body>
<footer>
    <hr>
    <div>
        <div>
            <h1 class="titledown" style="font-size: medium; text-align: left; margin-bottom: 0px; display: inline-block; padding-bottom: 0px;">All Rights are reserved for Hotel Managment System™</h1>
            <p class="titledown" style="font-size:medium; float: right; margin-top: 7px; margin-right: 10px; padding-top: 0px;">Where to find us?</p>
        </div>
    
        <a href="#"><p class="titledown" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">Go Back Up |</p></a>
        <a href="/Account/signin/signin.html"><p class="titledown" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">Book Now! |</p></a>
        <a href="/Search/Search.html"><p class="titledown" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">See our great offers! |</p></a>
        <a href="/Account/signup/signup.html"><p class="titledown" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">Join us now!</p></a>

        <a href="/aboutus/about us.html"><p class="titledown" style="font-size:small; float: right; margin-top: 20px; margin-right: 10px; position: relative; left:125px;">About us</p></a>
        
        
    </div>
</footer>
</html>
    </body>
</html>