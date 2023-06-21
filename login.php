<?php
session_start();
include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //if somethig is posted
   $user_name = $_POST['user_name'];
   $password = $_POST['password'];
   

   if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
   {
    // if all correct read
    
    $query = "select * from users where user_name = '$user_name' limit 1";
    $result = mysqli_query($con, $query);

    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
            
        }
    }
    echo "<script>alert('wrong credentals');</script>";
        // echo "Wrong Credentials!";
   }else
   {
    echo "<script>alert('wrong credentials');</script>";
    // echo "Wrong Credentials!";
   }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="icon" href="webpages\homeAssets\photos\Logo1.jpg" type="image/icon type">
    <link rel="stylesheet" href="webpages/Account/signin/signin.css">
</head>
<body>
    <div id="mainframe">
        <a href="index.php"><img src="webpages\homeAssets\photos\Logo1.jpg" alt="main logo" id="mainlogo"></a> 
        <h1 class="display:inline-block;">Sign In</h1>
        <p style="font-size: medium;">Finally, join us and become one of the Family of the HMS</p>
    </div>

    <div id="navbar">
        <nav>
            <a href="index.php"><h3>Home</h3></a> 
            <a href="signup.php"><h3>Signup</h3></a>
            <a href="Search.html"><h3>Exlusive offers</h3></a>
            <a href="webpages/Account/signup/TermsAndConditions.html" target="_blank"><h3>Terms and Conditions</h3></a>
        </nav>
    </div>
    <br><br>
    <div id="mainback">
        <div id="signin">
            <div id="signinheader">
                <img src="webpages\homeAssets\photos\Logo1.jpg" alt="home logo" id="signinlogo">
                <h4 style="font-family:cursive; display: inline-block;">Easy Sign in :)</h4>
            </div>
            
            <form method="post">
                <br><br><br>
            <label for="user_name">Username:</label>
            <input type="text" name="user_name" id="user_name" class="inputs" required>
                <br><br><br><br>
            <label for="password" style="margin-top: 100px;">Password:</label>
            <input type="password" name="password" id="password" class="inputs" required>
            <br><br><br>
            <a href="forgot_password.php" style="font-size:10px;">Forgot password?</a> 
            <br>
            <input type="checkbox" name="check" required style="margin-top: 20px;">
            <label for="check" style="font-size: smaller;">By checking this box you agree on the <a href="webpages\Account\signup\TermsAndConditions.html" target="_blank">terms and conditions</a>.</label>
            <input type="submit" value="Login" id="button" style="margin-top: 40px; width:60px; height:20px; font-family: monospace;">
            </form>
            
        </div>
    </div>

    <br>
    <footer style="font-family: monospace;">
        <hr>
        <div>
            <div>
                <h1 class="title" style="font-size: medium; text-align: left; margin-bottom: 0px; display: inline-block; padding-bottom: 0px;">All Rights are reserved for Hotel Managment System™</h1>
                <p class="title" style="font-size:medium; float: right; margin-top: 7px; margin-right: 10px; padding-top: 0px;">Where to find us?</p>
            </div>
        
            <a href="#"><p class="title" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">Go Back Up |</p></a>
            <a href="/Search/Search.html"><p class="title" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">Book Now! |</p></a>
            <a href="/index.html"><p class="title" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">See our great offers! |</p></a>
            <a href="/Account/signup/signup.html"><p class="title" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">Join us now!</p></a>

            <a href="/aboutus/about us.html"><p class="title" style="font-size:small; float: right; margin-top: 20px; margin-right: 10px; position: relative; left:125px;">About us</p></a>
            
            
        </div>
    </footer>
</body>
</html>