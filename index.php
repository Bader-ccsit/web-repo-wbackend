<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link rel="stylesheet" href="webpages/homeAssets/Main.css">
    <link rel="stylesheet" href="webpages/homeAssets/Main2.css">
    <link rel="stylesheet" href="webpages/homeAssets/scroll/scroll.css">
    <link rel="icon" href="webpages/homeAssets/photos/LOGO1.jpg" type="image/icon type">

    

</head>

    <br>
    
<body>
<div id="header">
            <a href="index.php" alt="Main Icon"><img id="Mainicon" src="webpages/homeAssets/photos/LOGO1.jpg"></a>  
            <select name="userinfo" id="user_info" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" style="float:right; height:30px; width:fit-content;">
                <option value="" selected data-default style="display:none;"><i>Hello, <?php echo $user_data['user_name']; ?></i></option>
                <option value="logout.php"><i>Logout</i></option>
            </select>  
            <!-- <div style="display: inline-block; float:right;">Hello, <?php echo $user_data['user_name']; ?></div>  -->
        <div id="wellcome">
            <h1 class="title" style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px;">Hotel Managment System</h1>
           
        </div>
        
        <br>
        
        <table class="center" >
            <tr>
                <td>
                    <div class="dropdown">
                        <img class="dropbtn" src="webpages/homeAssets/photos/search.png">
                        <div class="dropdown-content">
                            <a href="Search.html">Search</a>

                        </div>

                        
                    </div>
                    <!--<img class="icons"  src="/homeAssets/search.png"   alt="search logo">-->
                </td>

                <td>
                    <div class="dropdown">
                        <img class="dropbtn" src="webpages/homeAssets/photos/review.png">
                        <div class="dropdown-content">
                            <a href="rateus.php">Rate us</a>

                        </div>

                        
                    </div>
                    <!--<img class="icons" src="/homeAssets/review.png" alt="review">-->
                </td>

                <td>
                    <div class="dropdown">
                        <img class="dropbtn" src="webpages/homeAssets/photos/restaurant.png">
                        <div class="dropdown-content">
                            <a style="font-size: smaller;" href="kitchen.html">our Kitchen</a>
                        </div>
                    </div>
                    
                    <!--<img class="icons" src="/homeAssets/restaurant.png" alt="resturant.logo">-->
                </td>
                <td>
                    <div class="dropdown">
                        <img class="dropbtn" src="webpages/homeAssets/photos/coin.png">
                        <div class="dropdown-content">
                            
                            <a href="exchange.html" style="font-size: smaller;" target="_blank">$ exhanger</a>
                        </div>
                    </div>
                    <!--<img class="icons" src="/homeAssets/coin.png" alt="dollar logo">-->
                </td>
                <!-- <td>
                    <img class="icons" src="/homeAssets/user.png" alt="user logo">-->
                    <!-- <div class="dropdown">
                        <img class="dropbtn" src="webpages/homeAssets/photos/user.png">
                        <div class="dropdown-content">
                          <a href="login.php">Sign In</a>
                          <a href="signup.php">Sign Up</a>
                          
                        </div>
                      </div> -->
                <!-- </td> --> 

                <td style="padding-right: 0px;">
                    <div class="dropdown">
                        <img class="dropbtn" src="webpages/homeAssets/photos/info.png">
                        <div class="dropdown-content">
                          <a href="about us.html">About us</a>
                    </div>
                    <!-- <a href="/aboutus/about us.html"><img class="icons" src="/homeAssets/info.png" alt="info logo"></a> -->
                </td>
            </tr>
        </table>

        <br>
        </div>
        
        <hr>
        
        <div id="wall">
            <br>
            <h1 class="title">Tiered from looking for a stay?</h1>
            <div id="wframe">
                <p>We have a variety of amenities to make your stay comfortable and enjoyable.<br>
                    From our luxurious rooms to our delicious dining options, we are
                    committed to providing you with the best possible experience.</p>

                    <br><br><br><br>

                <h3 class="title" style="font-size: large; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px;">Don't missout on our exclusive offers:</h3>
                <div class="swipe">
                    <section class="container">
                        <div class="cards">
                            <div class="images">
                                <img src="webpages/homeAssets/scroll/dubai1.jpg" alt="dubai hotel">
                            </div>
                            <h2>Dubai</h2>
                            <p>190$ per night!</p>
                        </div>
                        
                        <div class="cards">
                            <div class="images">
                                <img src="webpages/homeAssets/scroll/dubai2.jpg" alt="AbuDhabi hotel">
                            </div>
                            <h2>Maldives</h2>
                            <p>150$ per night!</p>
                        </div>
                
                        <div class="cards">
                            <div class="images">
                                <img src="webpages/homeAssets/scroll/london1.jpg" alt="London hotel">
                            </div>
                            <h2>London</h2>
                            <p>199$ per night!</p>
                        </div>
                
                        <div class="cards">
                            <div class="images">
                                <img src="webpages/homeAssets/scroll/usa1.jpeg" alt="usa hotel">
                            </div>
                            <h2>Hawaii</h2>
                            <p>210$ per night!</p>
                        </div>
                    </section>
                </div>
                    


            </div>
            <br><br><br><br>
            
        </div>
        <br><br><br>

        <h1 class="title">Where Are You Planning to go?</h1>
        <br><br>
        <div style="text-align: center;">

            <div class="locborder">
                <a href="london.html"><img src="webpages/homeAssets/photos//london.jpg" class="locations"></a>
                <div style="display:inline-block; border:black solid 1px;  margin:0px;">
                    <p style="padding: 0px; margin:0px; float:right;">london</p>
                </div>
            </div>

            <div class="locborder">
                <a href="Hawaii.html"><img src="webpages/homeAssets/photos/usa.jpg" class="locations"></a>
                <div style="display:inline-block; border:black solid 1px;  margin:0px;">
                    <p style="padding: 0px; margin:0px; float:right;">USA</p>
                </div>
            </div>

            <div class="locborder">
                <a href="Search.html"><img src="webpages/homeAssets/photos/france.jpg" class="locations"></a>
                <div style="display:inline-block; border:black solid 1px;  margin:0px;">
                    <p style="padding: 0px; margin:0px; float:right;">france</p>
                </div>
            </div>

            <div class="locborder">
                <a href="Search.html"><img src="webpages/homeAssets/photos/switzerland.jpg" class="locations"></a>
                <div style="display:inline-block; border:black solid 1px;  margin:0px;">
                    <p style="padding: 0px; margin:0px; float:right;">switserland</p>
                </div>
            </div>

            <br><br><br>

            <div class="locborder">
                <a href="Search.html"><img src="webpages/homeAssets/photos/japan.jpg" class="locations"></a>
                <div style="display:inline-block; border:black solid 1px;  margin:0px;">
                    <p style="padding: 0px; margin:0px; float:right;">japan</p>
                </div>
            </div>

            <div class="locborder">
                <a href="Search.html"><img src="webpages/homeAssets/photos/india.jpg" class="locations"></a>
                <div style="display:inline-block; border:black solid 1px;  margin:0px;">
                    <p style="padding: 0px; margin:0px; float:right;">india</p>
                </div>
            </div>

            <div class="locborder">
                <a href="Search.html"><img src="webpages/homeAssets/photos/saudi.jpg" class="locations"></a>
                <div style="display:inline-block; border:black solid 1px;  margin:0px;">
                    <p style="padding: 0px; margin:0px; float:right;">saudi arabia</p>
                </div>
            </div>

            <div class="locborder">
                <a href="atlentis/atlentis.html"><img src="webpages/homeAssets/photos/dubai.jpg" class="locations"></a>
                <div style="display:inline-block; border:black solid 1px;  margin:0px;">
                    <p style="padding: 0px; margin:0px; float:right;">dubai</p>
                </div>
            </div>
        </div>
        <br><br><br><br><hr>
        <br><br><br>
        <div id="learn">
            
            <h1>First Time Passing By?</h1>
            <p>Check out our About us page to learn more and get a better understanding of what we really are!</p>
            <a href="/aboutus/about us.html"><button class="learnbutton">Learn More</button></a> 
        </div>
        <br><br><br><br><br><br>
        <div id="trailer">
            
            <iframe width="700" height="400" src="https://www.youtube.com/embed/4K6Sh1tsAW4" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen></iframe>
        </div>

        <br><br><br>



    </body>
    
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