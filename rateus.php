<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);



if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $rate = $_POST['rate'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO rating VALUES('','$username','$rate','$comment')";
    mysqli_query($con,$query);

    
    echo
    "
    <script> alert('Thanks, we got your opinion -_-'); </script>
    ";
    
    header('Location: index.php');
}
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="webpages/homeAssets/Main2.css">
    <link rel="stylesheet" href="webpages/rateus/rateus.css">
    <link rel="icon" href="webpages/homeAssets/photos/LOGO1.jpg" type="image/icon type">
    <title>Rate us</title>
    
</head>
<body>

    <div style="text-align:center; margin-right:120px;">
   
     <h2>We will love to hear from you :)</h2>
    </div>


    <div>
        <div id="form">
            <form action="" method="post">
            <label for="username">Name:</label>
            <input type="text" name="username" required value="<?php echo $user_data['user_name']; ?>">

            <br><br>

            <label for="rate">To what extned did you liked this serves?</label>
            <input type="range" min="0" max="5" step="0.5" value="" class="slider" id="myRange" name="rate" required>
            <p style="display:inline-block; margin-left:20px;"><img src="rating/star.png" alt="" height="17px;" width="17px;" style="margin-right:7px;"/>Stars: <span id="demo"></span></p>

            <br><br>
            <label for="comment">Leave us a comment if you wish:</label>
            <br><br>
            <textarea name="comment" id="comment" cols="30" rows="10" maxlength="250" placeholder="share your wonderful opinion with us privetly :)"></textarea>
            <br><br>
            <input type="checkbox" name="checkme" required>
            <label for="checkbox">My comment does not include any type of disrespect and hate to the members of this service</label>
            <br><br>
            <div style="display:block; text-align:center;" >
            <input type="submit" name="submit" style="color:black;">
            </div>
            
            </form>
        </div>
    </div>
    
    
    
    <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
    output.innerHTML = this.value;
    }
    </script>
    
</body>
<br><br>
<footer>
    <hr>
    <div>
        <div>
            <h1 class="title" style="font-size: medium; text-align: left; margin-bottom: 0px; display: inline-block; padding-bottom: 0px;">All Rights are reserved for Hotel Managment System™</h1>
            <p class="title" style="font-size:medium; float: right; margin-top: 7px; margin-right: 10px; padding-top: 0px;">Where to find us?</p>
        </div>
    
        <a href="#"><p class="title" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">Go Back Up |</p></a>
        <a href="Search.html"><p class="title" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">Book Now! |</p></a>
        <a href="index.php"><p class="title" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">See our great offers! |</p></a>
        <a href="kitchen.html"><p class="title" style="font-size:small; float: left; margin-top: 20px; margin-right: 10px;">Check out our delicius Kitchen</p></a>

        <a href="about us.html"><p class="title" style="font-size:small; float: right; margin-top: 20px; margin-right: 10px; position: relative; left:125px;">About us</p></a>
        
        
    </div>
</footer>

</html>