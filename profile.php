<?php
session_start();
?>

<!DOCTYPE html>
<html>
        <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                * {
                  box-sizing: border-box;
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
                    background: rgba(56, 64, 64, 0.78);
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
  justify-content:  space-around;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color:transparent;
  padding: 5px;
  color: aliceblue;
  text-shadow: 2px 2px 5px red;
}

/* Main column */
.main {   
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: transparent;
  padding: 20px;
  color: aliceblue;
  text-shadow: 2px 2px 5px red;
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
  margin: 20px;
  box-shadow: 5px 5px 5px 5px rgba(197, 15, 15, 0.596), 5px 5px 5px 5px rgba(197, 15, 15, 0.596)
}

.imageWithText img {vertical-align: middle;}

.imageWithText .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 95%;
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
  box-shadow: 0 0 2px 1px rgba(0, 139, 186, 0.61);
}
         
        /*    Multi Formmmmm    */




        #regForm {
  background-color: #2b2020c7;
  margin: 100px auto 15px;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  color: aliceblue;
  text-shadow: 2px 2px 5px red;
}

/* Hide all steps by default: */
.tab {
  display: none;
}
button {
  background-color: rgba(109, 17, 101, 0.616);
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

/*    Login Button */

/* Full-width input fields */


/* Set a style for all buttons */
#loginbutton {
  background-color: rgba(138, 59, 13, 0.774);
  margin: 8px 250px;
  border: none;
  cursor: pointer;
  width: 100%;

  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  outline: none;
  color: aliceblue;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#loginbutton:hover {
  background-color: rgba(138, 59, 13, 0.904);
  opacity: 1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: rgba(138, 59, 13, 0.795);
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 2px solid rgba(90, 5, 5, 0.767);
  width: 65%; /* Could be more or less, depending on screen size */
  box-shadow: 0 0 6px 4px rgba(90, 5, 5, 0.767);
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.modal-content .container label input[type="checkbox"]{
  display: flex;
  align-self: flex-start;
}


/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: rgb(149, 30, 30);
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #000000;
}

/* Style the container/contact section */
.contactContainer {
  border-radius: 5px;
  background-color: rgba(56, 64, 64, 0.78);
  padding: 10px;
  margin-top: 10px;
  margin-bottom: 10px;
  color: aliceblue;
  max-width: 60vw;
}

/* Create two columns that float next to eachother */
.contactColumn {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.contactRow:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .contactColumn, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.profileBigDiv {
  display:flex;
  justify-content:center;
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
                
                    <video autoplay muted loop id="myVideo">
                        <source src="img/profileBackgroundVideo.mp4" type="video/mp4">
                    </video>
                    
                    
                </div>
                  


                  <!--         Multi Form            -->


                  <div class="profileBigDiv">
                    <div class="contactContainer">
                      <div style="text-align:center">
                        <h1>Hello, Folded soldier!</h1>
                      </div>
                      <div class="contactRow">
                        <div class="contactColumn">
                          <img src="img/profilePhoto.png" style="width:100%">
                        </div>
                        <div class="contactColumn">
                          <form action="/action_page.php">
                            
                            <h2 id="fname" name="firstname" placeholder="Your name..">Welcome <?php echo $_SESSION['email']?></h2>

                            <label for="fname">Enter your name:</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            <input type="submit" value="Submit">
                            
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!--      login button form spawner     -->
                  

                  <script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              

                  </script>

<?php 
                    if($_SESSION['loggedin'] === (bool)true)
                    {
                      echo '<script type="text/javascript"> showMyProfile(); </script>';
                      echo '<script type="text/javascript"> switchToLogOut(); </script>';
                    }                    
                    ?>






                  <div class="lastTextBlock">    
                        
                        <div class="imageWithText">
                                <img src="img/theDivisionPhotoWithText.jpg" alt="Notebook" style="width:100%;">
                                <div class="content">
                                  <h1>Tom Clancy's The Division 2 </h1>
                                  <p>Set in Washington D.C., the game takes place 7 months after a deadly virus was released in New York City 		and the nation has become a shell of its former self.</p>
                                  <p>Release Date: 01/04/2019</p>
                                </div>
                        </div>
                        <div class="imageWithText">
                                <img src="img/dyingLightPhotoWithText.png" alt="Notebook" style="width:100%;">
                                <div class="content">
                                  <h1>Dying Light 2</h1>
                                  <p>Liberate a water tower, for example, and you can hand it over to authoritarian rulers so everyone can drink from it</p>
                                  <p>Release Date: 15/03/2019</p>
                                </div>
                        </div>
                        <div class="imageWithText">
                                <img src="img/sekiroPhotoWithText.jpg" alt="Notebook" style="width:100%;">
                                <div class="content">
                                  <h1>Sekiro - Shadow die twice</h1>
                                  <p>Set in Washington D.C., the game takes place 7 months after a deadly virus was released in New York City 		and the nation has become a shell of its former self.</p>
                                  <p>Release Date: 22/03/2019</p>
                                </div>
                        </div>
                        <div class="imageWithText">
                                <img src="img/mortalKombatPhotoWithText.jpg" alt="Notebook" style="width:100%;">
                                <div class="content">
                                  <h1>Mortal Kombat 11</h1>
                                  <p>Veteran characters like Baraka, Raiden, Scorpion, Sonya Blade and Sub-Zero, as well as Skarlet, have returned with the 11th version.</p>
                                  <p>Release Date: 24/04/2019</p>
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
                </script>
                     
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