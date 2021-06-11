<?php
session_start();
?>


<!DOCTYPE html>
<html>
<!--<head>
  <meta name="description" content="FoldToDay">
  <meta name="author" content="Vlad Cojocariu/Olivier van Eldonk">
  <title>FoldToDay - Gaming living habitat</title>
</head>
<div class="flexBody">
<body background="Images/ba.jpg">  
  <div class="mainNavigation">
    <div class="topLogos">
      <input type="image" src="Images/titleImage.png" href="index.php" />
      <img src="Images/paperPlaneLOGO.png" alt="W3Schools.com">
    </div>
    
     <div class="videosPageBody">
       
       
       
     </div>   
  </div>
</div> 
</body>

-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
                

  * {
    border-radius: 5px;
  }
  /* Full screen menu*/
  .overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
  }
  
  .overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
    
  }
  
  .overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
  }
  
  .overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
  }
  
  @media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
    }
  }


  .flexBody {
    display: flex;
    flex: auto;
    flex-direction: column;
    font-family: 'Lato', sans-serif;
    background: #cc8888;
    text-shadow: 2px 2px 5px red;    
  }


  /*video*/
  #myVideo {
      position: absolute;
      right: 0;
      bottom: 0;
      min-width: 100%; 
      min-height: 100%;
      z-index: -1;
      
  }
  #myVideo2 {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%; 
      min-height: 100%;
      z-index: -1;
  }
  #myBtn {
      width: 200px;
      font-size: 18px;
      padding: 10px;
      border: aliceblue ;
      border-style: ridge;
      background: rgb(182, 14, 14);
      color: #fff;
      cursor: pointer;
  }
  #myBtn2 {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: aliceblue ;
    border-style: ridge;
    background: rgb(182, 14, 14);
    color: #fff;
    cursor: pointer;
                }
  .topLineButtons {
      display: flex;
      flex: auto;
      flex-direction: row;
      justify-content: space-between;
      background: rgba(255, 0, 0, 0.164);
  }
  #logoImage {
      
      width: 250px;
      height: 100px;
      
      
  }
  #logoImage:hover {
      
      -webkit-transform: scaleX(-1);
      transform: scaleX(-1);
      
  }             
  
  


  /*  slideshow*/


  /* Slideshow container */
.slideshow-container {
max-width: 600px;
position: relative;
margin: auto;
text-shadow: 2px 2px 5px red;
box-shadow: 0 10px 20px 0 rgba(197, 15, 15, 0.315), 0 20px 10px 0 rgba(0, 0, 0, 0.377);
}

/* Next & previous buttons */
.prev, .next {
cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding: 16px;
margin-top: -22px;
color: white;
font-weight: bold;
font-size: 18px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;
}

/* Position the "next button" to the right */
.next {
right: 0;
border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
color: #f2f2f2;
font-size: 15px;
padding: 8px 12px;
position: absolute;
bottom: 8px;
width: 100%;
text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

/* The dots/bullets/indicators */
.dot {
cursor: pointer;
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}

.active, .dot:hover {
background-color: #717171;
}

/* Fading animation */
.fade {
-webkit-animation-name: fade;
-webkit-animation-duration: 1.5s;
animation-name: fade;
animation-duration: 1.5s;
}

@-webkit-keyframes fade {
from {opacity: .4} 
to {opacity: 1}
}

@keyframes fade {
from {opacity: .4} 
to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
.prev, .next,.text {font-size: 11px}
}



  /* Column container */
.row {  
display: -ms-flexbox; /* IE10 */
display: flex;
/*-ms-flex-wrap: wrap;  IE10 */
/*flex-wrap: wrap;*/
flex-direction: row;
justify-content:space-around;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
-ms-flex: 30%; /* IE10 */
flex: 30%;
background-color:transparent;
padding: 20px;
color: aliceblue;
text-shadow: 2px 2px 5px red;
margin-left:1%;
}

/* Main column */
.main {   
-ms-flex: 30%; /* IE10 */
flex: 30%;
background-color: transparent;
padding: 20px;
color: aliceblue;
text-shadow: 2px 2px 5px red;
margin-left:3%;
}

/* Fake image, just for this example */
.fakeimg {
background-color: #aaa;
width: 300px;
padding: 20px;
}
.lastTextBlock {
display: flex;
flex-direction: row;
flex-wrap: wrap;
justify-content: space-evenly;
text-shadow: 2px 2px 5px red;
border-color: black;
box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.315), 0 20px 10px 0 rgba(0, 0, 0, 0.377);
}

/*Image with text*/

.imageWithText {
position: relative;
max-width: 800px;
min-height: 400px;
margin: 20px;
box-shadow: 5px 5px 5px 5px rgba(197, 15, 15, 0.596), 5px 5px 5px 5px rgba(197, 15, 15, 0.596);

}
.imageWithTextVideos {
position: relative;
max-width: 800px;
min-height: 400px;
margin: 20px;

padding: 20px;
}

.imageWithText img {vertical-align: middle;}

.imageWithText .content {
position: absolute;
bottom: 0;
background: rgb(0, 0, 0); /* Fallback color */
background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
color: #f1f1f1;
width: 95%;
height: 20%;
padding: 20px;

}
.thumbnails{
display: flex;
flex-direction: column;
}
.thumbnails img {
border: 1px solid #ddd;
border-radius: 4px;
padding: 5px;
width: 150px;
}

.thumbnails img:hover {
box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

.videoRow {
  display: flex;
  flex-direction: row;
  justify-content: center;
}
.iframe {
min-width: 100%;
min-height: 24vw;
/*box-shadow:  0 20px 30px 0 rgba(0, 0, 0, 0.514), 0 30px 20px 0 rgba(0, 0, 0, 0.5);*/
}
.parallax {
/* The image used */

margin-top: 20px;
/* Full height */
height: 30vw; 

/* Create the parallax scrolling effect */
background-attachment: absolute;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
box-shadow: 5px 3px 3px 5px #420d0db4;


}

#MyProfile{visibility:hidden;}

</style>
</head>



<body class="flexBody">      <!--     MAIN BODY      -->
        
  <div class="topLineButtons">

      <div id="myNav" class="overlay">
      <?php include 'navigation.php'; ?>
      </div>
  

       
            
      <span style="font-size:30px;cursor:pointer;color: red" onclick="openNav()">&#9776; MENU</span>
        
      <img id="logoImage" src="img/titleImage.png" alt="FOLD LOGO" >

      <div class="content" style="display:flex; flex-direction:column;  " >
          <!-- Use a button to pause/play the video with JavaScript -->
          <button id="myBtn" onclick="myFunction()">Pause</button>
         <a id="LoginButton" href="login.php"> <button id="myBtn2" >Log in</button></a>
      </div>
  
      <video autoplay muted loop id="myVideo2">
          <source src="img/otherBackgroundVideo.mp4" type="video/mp4">
      </video>

      
  </div>
<div class="videoRow">
  <div class="imageWithTextVideos" >
    <img id="logoGames"src="img/videosImg.png" alt="Notebook" style="width:100%;">
  </div>
</div>

<div class="videoRow">
    <h1 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red;  background:#833e3e7a;" >VIDEOS</h1>
  </div>
  
              
<div class="parallax" style="background-image: url('img/apexParalax.png')"></div>
<div class="row">
  <div class="side">
    <div class="imageWithText">
        <iframe class="iframe" src="https://www.youtube.com/embed/oQtHENM_GZU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
    </div>
  </div>
  <div class="main">
    <div class="imageWithText">
      <iframe class="iframe" src="https://www.youtube.com/embed/Kw2SpMIxtyU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
    </div>
  </div>
</div>


  <div class="parallax" style="background-image: url('img/lolParalax.jpg')"></div>

    <div class="row">
        <div class="side">
          <div class="imageWithText">
              <iframe class="iframe" src="https://www.youtube.com/embed/bhPTBy2ekN8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="main">
          <div class="imageWithText">
            <iframe class="iframe" src="https://www.youtube.com/embed/fJVQNAEfaNM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
          </div>
        </div>
      </div>

  

  <div class="parallax" style="background-image: url('img/fortniteParalax.jpg')"></div>
  <div class="row">
      <div class="side">
        <div class="imageWithText">
            <iframe class="iframe" src="https://www.youtube.com/embed/2gUtfBmw86Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="main">
        <div class="imageWithText">
          <iframe class="iframe" src="https://www.youtube.com/embed/xZhP1mdLCuU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
        </div>
      </div>
    </div>


  <div class="parallax" style="background-image: url('img/forzaParalax.jpg')"></div>

  <div class="row">
      <div class="side">
        <div class="imageWithText">
            <iframe class="iframe" src="https://www.youtube.com/embed/VmQNo8xtcAg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="main">
        <div class="imageWithText">
          <iframe class="iframe" src="https://www.youtube.com/embed/rtYkboNKThQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
        </div>
      </div>
    </div>

  <div class="parallax" style="background-image: url('img/roeParalax.jpg')"></div>

  <div class="row">
      <div class="side">
        <div class="imageWithText">
            <iframe class="iframe" src="https://www.youtube.com/embed/uTnZ5CW3zXU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="main">
        <div class="imageWithText">
          <iframe class="iframe" src="https://www.youtube.com/embed/BzeI37DruaA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
        </div>
      </div>
    </div>

  <script>
  function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

  function showMyProfile() {
                              var myProfile = document.getElementById("MyProfile");
                              myProfile.style.visibility = 'visible';
                             
                            }
                            function switchToLogOut() {
                              var navLogin = document.getElementById("navLogin");
                              navLogin.setAttribute("href", "LogoutHandler.php");
                              navLogin.text = "Logout";
                              var butLogin = document.getElementById("LoginButton");
                              butLogin.setAttribute("href", "LogoutHandler.php");
                              var butLoginText = document.getElementById("myBtn2").innerHTML = "Logout";                                                                                      
                            }
  </script>
   <?php 
                    if($_SESSION['loggedin'] === (bool)true)
                    {
                      echo '<script type="text/javascript"> showMyProfile(); </script>';
                      echo '<script type="text/javascript"> switchToLogOut(); </script>';
                    }                    
                    ?>
  
  
  </body>




<!-- JavaScript-->
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");
  
function myFunction() 
{
  if (video.paused) 
  {
      video.play();
      btn.innerHTML = "Pause";
  } 
  else 
  {
          video.pause();
          btn.innerHTML = "Play";
  }
}
</script>
</body>





</html>