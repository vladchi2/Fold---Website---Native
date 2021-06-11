<?php
session_start();
?>

<!DOCTYPE html>
<html>
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
  background: rgba(0, 0, 0, 0.329); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  /*width: 97%;*/
  padding: 5px;
  
}
.thumbnails{
    display: flex;
    flex-direction: column;
}
.thumbnails img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 2px;*/
  width: 150px;
}

.thumbnails img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
         



/*       GAMES TIMELINE                 */



/* The actual timeline (the vertical ruler) */
.timeline {
  
  position: relative;
  max-width: auto;
  margin: 0 auto;
  
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
  z-index: -1;
}

/* Container around content */
.container {
  
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  
  background-color: rgb(255, 255, 255);
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  
}

/* Place the container to the left */
.left {
  left: 0%;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}
/* pause button*/
.contentPausebtn {
  display: flex;
  flex-direction: column;
  padding: 20px 30px;
  
  background-color: rgba(199, 115, 46, 0.452);
  box-shadow: 5px 5px 5px 5px rgba(197, 15, 15, 0.233), 5px 5px 5px 5px rgba(197, 15, 15, 0.308);
  position: relative;
  border-radius: 6px;
}


/* The actual content in containers*/
.contentContainer {
  display: flex;
  flex-direction: column;
  margin-right: 30px;
  margin-left: 30px;
  /*min-height:auto;*/
  /*min-width: 100px;*/
  
  background-color: rgba(199, 115, 46, 0.452);
  box-shadow: 5px 5px 5px 5px rgba(197, 15, 15, 0.233), 5px 5px 5px 5px rgba(197, 15, 15, 0.308);
  position: relative;
  border-radius: 6px;
}


/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 5px;
  padding-right: 5px;

  
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
.zoom {
  position: relative;
  min-width: 25px;
  min-height: 10px;
  margin-left: auto;
  margin-right: auto; 
}
#zoomLogo {
  
  /*min-width: 700px;*/
  /*min-height: 400px;*/
  box-shadow: 0 0 5px 4px rgba(0, 0, 0, 0.5);
  transition: transform .2s; /* Animation */
  
}


#zoomLogo:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  box-shadow: 0 0 5px 4px rgba(0, 0, 0, 0.5);
  z-index: 1;
}
#zoomLogo #logoGames:hover{
  filter: blur(0px);
  -webkit-filter: blur(0px);
}
#logoGames {
  filter: blur(3px);
  -webkit-filter: blur(3px);
}

.text-block {
  position: absolute;
  top: 15%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.37);
  color: rgba(255, 255, 255, 0.61);
  padding-left: 20px;
  padding-right: 20px;
}

/*colapsContent*/
.colapsContent {
  padding: 5px;
}

.collapsible {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  align-self:center;
}


.collapsible span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.collapsible span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.collapsible:hover span {
  padding-right: 25px;
}

.collapsiblex :hover span:after {
  opacity: 1;
  right: 0;
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

                    <div class="contentPausebtn">
                        <!-- Use a button to pause/play the video with JavaScript -->
                        <button id="myBtn" onclick="myFunction()">Pause</button>
                        <a id="LoginButton" href="login.php"> <button id="myBtn2" >Log in</button></a>
                    </div>
                
                    <video autoplay muted loop id="myVideo">
                        <source src="img/gamesBackgroundVideo.mp4" type="video/mp4">
                    </video>
                    
                    
                </div>
                  <h2 style="display: flex; justify-content: center; text-shadow: 2px 2px 5px red;  background:#cc8888;">ALL GAMES PAGE</h2>
                  <!--Games Timeline-->
                                      
                  <div class="timeline">
                      <div class="container left">
                          <div class="contentContainer">
                              <div class="zoom">
                                <a target="_self" href="systemRequirements.php#pubgBookmark">
                                    <div id="zoomLogo" class="imageWithText">
                                        <img id="logoGames"src="img/pubgSlideshow.jpg" alt="Notebook" style="width:100%;">
                                        <div class="content">
                                          <h1>PlayerUnknown's Battlegrounds </h1>
                                          <p>PLAYERUNKNOWN'S BATTLEGROUNDS is a battle royale shooter that pits 100 players against each other in a struggle for survival. Gather supplies and outwit your opponents to become the last person standing.</p>
                                          <p>Release Date: 21/12/2017</p>
                                        </div>
                                </div>
                                </a>
                              </div>
                              <button class="collapsible"><span>Colaps</span> </button>
                              <div class="colapsContent">
                                <p>PLAYERUNKNOWN, aka Brendan Greene, is a pioneer of the battle royale genre and the creator of the battle royale game modes in the ARMA series and H1Z1: King of the Kill.</p>
                              </div>
                          

                        </div>
                      </div>
                      <div class="container right">
                          <div class="contentContainer">
                              <div class="zoom">
                                <a target="_self" href="systemRequirements.php#tomClancyBookmark">
                                    <div id="zoomLogo" class="imageWithText">
                                        <img id="logoGames"src="img/bluredBackgroundGames.jpg" alt="Notebook" style="width:100%;">
                                        <div class="content">
                                          <h1>Tom Clancy's The Division 2 </h1>
                                          <p>Set in Washington D.C., the game takes place 7 months after a deadly virus was released in New York City 		and the nation has become a shell of its former self.</p>
                                          <p>Release Date: 01/04/2019</p>
                                        </div>
                                </div>
                                </a>
                              </div>
                              <button class="collapsible"><span>Colaps</span> </button>
                              <div class="colapsContent">
                                <p>After a deadly pandemic sweeps through New York, it's up to Agents to save what remains. Complete missions, explore the Dark Zone, and fight back enemy factions alone or with 3 friends. </p>
                              </div>
                          
                          

                            </div>
                          </div>
                      <div class="container left">
                          <div class="contentContainer">
                              <div class="zoom">
                                <a target="_self" href="systemRequirements.php#asOriginsBlock">
                                    <div id="zoomLogo" class="imageWithText">
                                        <img id="logoGames"src="img/asOriginsGames.jpg" alt="Notebook" style="width:100%;">
                                        <div class="content">
                                          <h1>Assassin's Creed - Origins</h1>
                                          <p> Ancient Egypt is available now as a free update!* Ancient Egypt, a land of majesty and intrigue, is disappearing in a ruthless fight for power.</p>
                                          <p>Release Date: 27/10/2017</p>
                                        </div>
                                </div>
                                </a>
                              </div>
                              <button class="collapsible"><span>Colaps</span> </button>
                              <div class="colapsContent">
                                <p>Sail down the Nile, uncover the mysteries of the pyramids or fight your way against dangerous ancient factions and wild beasts as you explore this gigantic and unpredictable land.</p>
                              </div>
                           
                          

                            </div>
                          </div>
                      <div class="container right">
                          <div class="contentContainer">
                              <div class="zoom">
                                <a target="_self" href="systemRequirements.php#asOdysseyBlock">
                                    <div id="zoomLogo" class="imageWithText">
                                        <img id="logoGames"src="img/asoGames.jpg" alt="Notebook" style="width:100%;">
                                        <div class="content">
                                          <h1>Assassin's Creed - Odyssey </h1>
                                          <p>From outcast to living legend, embark on an odyssey to uncover the secrets of your past and change the fate of Ancient Greece.</p>
                                          <p>Release Date: 01/04/2019</p>
                                        </div>
                                </div>
                                </a>
                              </div>
                              <button class="collapsible"><span>Colaps</span> </button>
                              <div class="colapsContent">
                                <p>From lush vibrant forests to volcanic islands and bustling cities, start a journey of exploration and encounters in a war torn world shaped by gods and men.</p>
                              </div>
                              <!--Java Script-->
                          

                            </div>
                          </div>
                          <div class="container left">
                              <div class="contentContainer">
                                  <div class="zoom">
                                    <a target="_self" href="systemRequirements.php#forzaBlock">
                                        <div id="zoomLogo" class="imageWithText">
                                            <img id="logoGames"src="img/forzaSlideshow.jpg" alt="Notebook" style="width:100%;">
                                            <div class="content">
                                              <h1>Forza Horizon 4</h1>
                                              <p>Dynamic seasons change everything at the world’s greatest automotive festival. Go it alone or team up with others to explore beautiful and historic Britain in a shared open world. Collect, modify and drive over 450 cars. Race, stunt, create and explore – choose your own path to become a Horizon Superstar.</p>
                                              <p>Release Date: 02/10/2018</p>
                                            </div>
                                    </div>
                                    </a>
                                  </div>
                                  <button class="collapsible"><span>Colaps</span> </button>
                                  <div class="colapsContent">
                                    <p>Forza Horizon 4 is an open world racing video game developed by Playground Games and published by Microsoft Studios. The game is set in a fictionalised representation of areas of Great Britain.</p>
                                  </div>
                              

                            </div>
                          </div>
                           
                      <div class="container right">
                          <div class="contentContainer">
                              <div class="zoom">
                                <a target="_self" href="systemRequirements.php#fortniteBlock">
                                    <div id="zoomLogo" class="imageWithText">
                                        <img id="logoGames"src="img/fortniteGames.jpg" alt="Notebook" style="width:100%;">
                                        <div class="content">
                                          <h1>Fortnite </h1>
                                          <p>On the island are several large and totally unique cities, each with their own style of structures — a quaint suburb of houses, a giant office district filled with skyscrapers, or a retail area with an outdoor mall.</p>
                                          <p>Release Date: 01/04/2019</p>
                                        </div>
                                </div>
                                </a>
                              </div>
                              <button class="collapsible"><span>Colaps</span> </button>
                              <div class="colapsContent">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                              <!--Java Script-->
                          

                          </div>
                      </div>
                      
                  </div>              
                   
                    
                  <script>
                    var coll = document.getElementsByClassName("collapsible");
                    var i;
                    
                    for (i = 0; i < coll.length; i++) {
                      coll[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var content = this.nextElementSibling;
                        if (content.style.display === "block") {
                          content.style.display = "none";
                        } else {
                          content.style.display = "block";
                        }
                      });
                    }
                    </script>

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