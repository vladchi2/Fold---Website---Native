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
                #myVideo2 {
                    position:relative;
                    right: 0;
                    bottom: 0;
                    min-width: 100%; 
                    min-height: 100%;
                    z-index: -1;
                    box-shadow: 3px 3px 3px 3px black;
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
                    box-shadow: 5px,5px, black;
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

/*.side {
  -ms-flex: 30%; 
  flex: 30%;
  background-color:transparent;
  padding: 5px;
  color: aliceblue;
  text-shadow: 2px 2px 5px red;
} */

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
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
        /* table*/ 
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  border: 1px solid #ddd;
  color: aliceblue;
  background-color: #71717156;
  margin: 85px  auto 15px;
  box-shadow: 3px 3px 3px 3px black;
  

}

th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #8624247e
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


.iframe {
  min-width: 100%;
  min-height: 24vw;
  box-shadow:  0 20px 30px 0 rgba(0, 0, 0, 0.514), 0 30px 20px 0 rgba(0, 0, 0, 0.5);
}

/*Button with image*/

.containerButton {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.containerButton img {
  width: 100%;
  height: auto;
}

.containerButton .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: black;
  color: white;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.containerButton .btn:hover {
  background-color: red;
  color: white;
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
                      <source src="img/otherBackgroundVideo.mp4" type="video/mp4">
                  </video>
                
                </div>


                <!--Tom Clancy-->
              <div id="tomClancyBookmark" class="gameBlock">

                  <h1 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Tom Clancy - The Division</h1>
  
  
                  <div class="row">
                      <div class="side">
                        <div class="imageWithText">
                          <iframe class="iframe" src="https://www.youtube.com/embed/frZzZqk5-vY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
  
                      </div>
                      
                      </div>
                      <div class="main">                   
                          
                        
                        <div class="containerButton">
                          <img src="img/buttonSteam.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                          <a href="https://store.steampowered.com/app/365590/Tom_Clancys_The_Division/">
                            <button  class="btn">
                            Steam
                            </button>
                          </a>
                        </div>
                       
                        <div class="containerButton">
                          <img src="img/buttonG2a.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                          <a href="https://www.g2a.com/en/tom-clancys-the-division-uplay-key-global-i10000011922007">
                            <button  class="btn">
                            G2A
                            </button>
                          </a>
                        </div>
                          
                      </div>
                      <div class="main">
                        <h2>Read more about on: </h2>
                        <div class="containerButton">
                          <img src="img/buttonIgn.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                          <a href="https://www.ign.com/games/tom-clancys-the-division">
                            <button  class="btn">
                            IGN
                            </button>
                          </a>
                        </div>
                      </div>
                     </div>
  
                     <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Trailer</h2>
  
                  <video autoplay muted loop id="myVideo2">
                    <source src="img/theDivisionBackVideo.mp4" type="video/mp4">
                  </video>
  
                  <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">System Requirements</h2>

                  <table>
                    <tr>
                      <th style="width:50%">System Requirements</th>
                      <th>Minimum</th>
                      <th>Recommended</th>
                    </tr>
                    <tr>
                      <td>CPU:</td>
                      <td>Intel Core i3 6300 or Equivalent / AMD FX 4350 or Equivalent</td>
                      <td>Intel Core i5 3570K or Equivalent / Ryzen 5 CPU or Equivalent</td>
                    </tr>
                    <tr>
                      <td>RAM:</td>
                      <td>6GB - DDR3 @1333 RAM</td>
                      <td>8GB - DDR3 @1333 RAM</td>
                    </tr>
                    <tr>
                      <td>GPU:</td>
                      <td>NVIDIA GeForce® GT 640 / AMD Radeon™ HD 7730	</td>
                      <td>NVIDIA GeForce® GTX 970 / AMD Radeon™ R9 290  </td>
                    </tr>
                    <tr>
                      <td>DX:</td>
                      <td>DirectX 11</td>
                      <td>DirectX 11</td>
                    </tr>
                    <tr>
                      <td>OS:</td>
                      <td>64-bit Windows 7</td>
                      <td>64-bit Windows 7
                      </td>
                    </tr>
                    <tr>
                      <td>Store:</td>
                      <td>22 GB available space	</td>
                      <td>22 GB available space</td>
                    </tr>
                    <tr>
                      <td>Network:</td>
                      <td>512 KBPS or faster Internet connection	</td>
                      <td>Broadband Connection</td>
                    </tr>
                  </table>
                </div>


                <!--APEEX-->
              <div class="gameBlock">

                  <h1 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Apex Legends</h1>

                  <div class="row">
                    <div class="side">
                      <div class="imageWithText">
                        <iframe class="iframe" src="https://www.youtube.com/embed/grJ1rKkLiZA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>

                    </div>
                    
                    </div>
                    <div class="main">                   
                        
                      
                      <div class="containerButton">
                        <img src="img/buttonSteam.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                        <a href="https://www.g2a.com/en/tom-clancys-the-division-uplay-key-global-i10000011922007">
                          <button  class="btn">
                          STEAM
                          </button>
                        </a>
                      </div>
                     
                      <div class="containerButton">
                        <img src="img/buttonG2a.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                        <a href="https://www.g2a.com/en/tom-clancys-the-division-uplay-key-global-i10000011922007">
                          <button  class="btn">
                          G2A
                          </button>
                        </a>
                      </div>
                        
                    </div>
                    <div class="main">
                      <h2>Read more about on: </h2>
                      <div class="containerButton">
                        <img src="img/buttonIgn.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                        <a href="https://www.g2a.com/en/tom-clancys-the-division-uplay-key-global-i10000011922007">
                          <button  class="btn">
                          IGN
                          </button>
                        </a>
                      </div>
                    </div>
                   </div>

                   <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Trailer</h2>

                <video autoplay muted loop id="myVideo2">
                  <source src="img/apexTrailer.mp4" type="video/mp4">
              </video>

              <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">System Requirements</h2>

                <table>
                  <tr>
                    <th style="width:50%">System Requirements</th>
                    <th>Minimum</th>
                    <th>Recommended</th>
                  </tr>
                  <tr>
                    <td>CPU:</td>
                    <td>Intel Core i3 6300 or Equivalent / AMD FX 4350 or Equivalent</td>
                    <td>Intel Core i5 3570K or Equivalent / Ryzen 5 CPU or Equivalent</td>
                  </tr>
                  <tr>
                    <td>RAM:</td>
                    <td>6GB - DDR3 @1333 RAM</td>
                    <td>8GB - DDR3 @1333 RAM</td>
                  </tr>
                  <tr>
                    <td>GPU:</td>
                    <td>NVIDIA GeForce® GT 640 / AMD Radeon™ HD 7730	</td>
                    <td>NVIDIA GeForce® GTX 970 / AMD Radeon™ R9 290  </td>
                  </tr>
                  <tr>
                    <td>DX:</td>
                    <td>DirectX 11</td>
                    <td>DirectX 11</td>
                  </tr>
                  <tr>
                    <td>OS:</td>
                    <td>64-bit Windows 7</td>
                    <td>64-bit Windows 7
                    </td>
                  </tr>
                  <tr>
                    <td>Store:</td>
                    <td>22 GB available space	</td>
                    <td>22 GB available space</td>
                  </tr>
                  <tr>
                    <td>Network:</td>
                    <td>512 KBPS or faster Internet connection	</td>
                    <td>Broadband Connection</td>
                  </tr>
                </table>
              </div>
              
<!--              PUBG      -->

              <div id="pubgBookmark" class="gameBlock">

                <h1 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">PUBG</h1>


                <div class="row">
                  <div class="side">
                    <div class="imageWithText">
                      <iframe class="iframe" src="https://www.youtube.com/embed/rualuCtP5jk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>

                  </div>
                  
                  </div>
                  <div class="main">                   
                      
                    
                    <div class="containerButton">
                      <img src="img/buttonSteam.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;" >
                      <a href="https://store.steampowered.com/app/578080/PLAYERUNKNOWNS_BATTLEGROUNDS/">
                        <button  class="btn">
                        Steam
                        </button>
                      </a>
                    </div>
                   
                    <div class="containerButton">
                      <img src="img/buttonG2a.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                      <a href="https://www.g2a.com/en/playerunknowns-battlegrounds-pubg-steam-key-global-i10000035511002">
                        <button  class="btn">
                        G2A
                        </button>
                      </a>
                    </div>
                      
                  </div>
                  <div class="main">
                    <h2>Read more about on: </h2>
                    <div class="containerButton">
                      <img src="img/buttonIgn.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                      <a href="https://www.ign.com/articles/2018/01/05/playerunknowns-battlegrounds-review">
                        <button  class="btn">
                        IGN
                        </button>
                      </a>
                    </div>
                  </div>
                </div>

                <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Trailer</h2>

              <video autoplay muted loop id="myVideo2">
                <source src="img/pubgBackgroundVideo.mp4" type="video/mp4">
            </video>

            <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">System Requirements</h2>

              <table>
                <tr>
                  <th style="width:50%">System Requirements</th>
                  <th>Minimum</th>
                  <th>Recommended</th>
                </tr>
                <tr>
                  <td>CPU:</td>
                  <td>Intel Core i3 6300 or Equivalent / AMD FX 4350 or Equivalent</td>
                  <td>Intel Core i5 3570K or Equivalent / Ryzen 5 CPU or Equivalent</td>
                </tr>
                <tr>
                  <td>RAM:</td>
                  <td>6GB - DDR3 @1333 RAM</td>
                  <td>8GB - DDR3 @1333 RAM</td>
                </tr>
                <tr>
                  <td>GPU:</td>
                  <td>NVIDIA GeForce® GT 640 / AMD Radeon™ HD 7730	</td>
                  <td>NVIDIA GeForce® GTX 970 / AMD Radeon™ R9 290  </td>
                </tr>
                <tr>
                  <td>DX:</td>
                  <td>DirectX 11</td>
                  <td>DirectX 11</td>
                </tr>
                <tr>
                  <td>OS:</td>
                  <td>64-bit Windows 7</td>
                  <td>64-bit Windows 7
                  </td>
                </tr>
                <tr>
                  <td>Store:</td>
                  <td>22 GB available space	</td>
                  <td>22 GB available space</td>
                </tr>
                <tr>
                  <td>Network:</td>
                  <td>512 KBPS or faster Internet connection	</td>
                  <td>Broadband Connection</td>
                </tr>
              </table>
            </div>

              <!-- ASSSS ORIGIGNS-->



            <div id="asOriginsBlock" class="gameBlock">

              <h1 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Assassin's Creed - Origins</h1>


              <div class="row">
                <div class="side">
                  <div class="imageWithText">
                    <iframe class="iframe" src="https://www.youtube.com/embed/aZG_PFZh-HQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>

                </div>
                
                </div>
                <div class="main">                   
                    
                  
                  <div class="containerButton">
                    <img src="img/buttonSteam.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;" >
                    <a href="https://store.steampowered.com/app/582160/Assassins_Creed_Origins/">
                      <button  class="btn">
                        Steam
                      </button>
                    </a>
                  </div>
                 
                  <div class="containerButton">
                    <img src="img/buttonG2a.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                    <a href="https://www.g2a.com/en/assassins-creed-origins-uplay-key-europe-i10000068314004">
                      <button  class="btn">
                      G2A
                      </button>
                    </a>
                  </div>
                    
                </div>
                <div class="main">
                  <h2>Read more about on: </h2>
                  <div class="containerButton">
                    <img src="img/buttonIgn.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                    <a href="https://www.ign.com/games/assassins-creed-origins">
                      <button  class="btn">
                      IGN
                      </button>
                    </a>
                  </div>
                </div>
              </div>

              <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Trailer</h2>

            <video autoplay muted loop id="myVideo2">
              <source src="img/assassinsCreedOriginsBackgroundVideo.mp4" type="video/mp4">
          </video>

          <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">System Requirements</h2>

            <table>
              <tr>
                <th style="width:50%">System Requirements</th>
                <th>Minimum</th>
                <th>Recommended</th>
              </tr>
              <tr>
                <td>CPU:</td>
                <td>Intel Core i3 6300 or Equivalent / AMD FX 4350 or Equivalent</td>
                <td>Intel Core i5 3570K or Equivalent / Ryzen 5 CPU or Equivalent</td>
              </tr>
              <tr>
                <td>RAM:</td>
                <td>6GB - DDR3 @1333 RAM</td>
                <td>8GB - DDR3 @1333 RAM</td>
              </tr>
              <tr>
                <td>GPU:</td>
                <td>NVIDIA GeForce® GT 640 / AMD Radeon™ HD 7730	</td>
                <td>NVIDIA GeForce® GTX 970 / AMD Radeon™ R9 290  </td>
              </tr>
              <tr>
                <td>DX:</td>
                <td>DirectX 11</td>
                <td>DirectX 11</td>
              </tr>
              <tr>
                <td>OS:</td>
                <td>64-bit Windows 7</td>
                <td>64-bit Windows 7
                </td>
              </tr>
              <tr>
                <td>Store:</td>
                <td>22 GB available space	</td>
                <td>22 GB available space</td>
              </tr>
              <tr>
                <td>Network:</td>
                <td>512 KBPS or faster Internet connection	</td>
                <td>Broadband Connection</td>
              </tr>
            </table>
          </div>

            <!--AS  ODYSSEY-->


          <div id="asOdysseyBlock" class="gameBlock">

            <h1 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Assassin's Creed Odyssey</h1>


            <div class="row">
              <div class="side">
                <div class="imageWithText">
                  <iframe class="iframe" src="https://www.youtube.com/embed/sF99utFEfk4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>

              </div>
              
              </div>
              <div class="main">                   
                  
                
                <div class="containerButton">
                  <img src="img/buttonSteam.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;" >
                  <a href="https://store.steampowered.com/app/812140/Assassins_Creed_Odyssey/">
                    <button  class="btn">
                      Steam
                    </button>
                  </a>
                </div>
               
                <div class="containerButton">
                  <img src="img/buttonG2a.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                  <a href="https://www.g2a.com/en/assassins-creed-odyssey-uplay-key-europe-i10000156558001">
                    <button  class="btn">
                    G2A
                    </button>
                  </a>
                </div>
                  
              </div>
              <div class="main">
                <h2>Read more about on: </h2>
                <div class="containerButton">
                  <img src="img/buttonIgn.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                  <a href="https://www.ign.com/articles/2018/10/01/assassins-creed-odyssey-review">
                    <button  class="btn">
                    IGN
                    </button>
                  </a>
                </div>
              </div>
            </div>

            <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Trailer</h2>

          <video autoplay muted loop id="myVideo2">
            <source src="img/assassinsCreedOdysseyBackgroundVideo.mp4" type="video/mp4">
        </video>

        <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">System Requirements</h2>

          <table>
            <tr>
              <th style="width:50%">System Requirements</th>
              <th>Minimum</th>
              <th>Recommended</th>
            </tr>
            <tr>
              <td>CPU:</td>
              <td>Intel Core i3 6300 or Equivalent / AMD FX 4350 or Equivalent</td>
              <td>Intel Core i5 3570K or Equivalent / Ryzen 5 CPU or Equivalent</td>
            </tr>
            <tr>
              <td>RAM:</td>
              <td>6GB - DDR3 @1333 RAM</td>
              <td>8GB - DDR3 @1333 RAM</td>
            </tr>
            <tr>
              <td>GPU:</td>
              <td>NVIDIA GeForce® GT 640 / AMD Radeon™ HD 7730	</td>
              <td>NVIDIA GeForce® GTX 970 / AMD Radeon™ R9 290  </td>
            </tr>
            <tr>
              <td>DX:</td>
              <td>DirectX 11</td>
              <td>DirectX 11</td>
            </tr>
            <tr>
              <td>OS:</td>
              <td>64-bit Windows 7</td>
              <td>64-bit Windows 7
              </td>
            </tr>
            <tr>
              <td>Store:</td>
              <td>22 GB available space	</td>
              <td>22 GB available space</td>
            </tr>
            <tr>
              <td>Network:</td>
              <td>512 KBPS or faster Internet connection	</td>
              <td>Broadband Connection</td>
            </tr>
          </table>
        </div>
        

        <!--        FORZAAAAAAAAAA-->


        
        <div id="forzaBlock" class="gameBlock">

          <h1 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Forza Horizon 4</h1>


          <div class="row">
            <div class="side">
              <div class="imageWithText">
                <iframe class="iframe" src="https://www.youtube.com/embed/2lKq3rFhark" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>

            </div>
            
            </div>
            <div class="main">                   
                
              
              <div class="containerButton">
                <img src="img/buttonSteam.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;" >
                <a href="https://www.microsoft.com/en-us/p/forza-horizon-4/9pnqkhfld2wq?activetab=pivot:overviewtab">
                  <button  class="btn">
                    Microsoft
                  </button>
                </a>
              </div>
             
              <div class="containerButton">
                <img src="img/buttonG2a.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                <a href="https://www.g2a.com/en/forza-horizon-4-standard-edition-xbox-live-key-global-i10000156553001">
                  <button  class="btn">
                  G2A
                  </button>
                </a>
              </div>
                
            </div>
            <div class="main">
              <h2>Read more about on: </h2>
              <div class="containerButton">
                <img src="img/buttonIgn.jpg" alt="Snow" style="width:100%;box-shadow: 3px 3px 3px 3px black;">
                <a href="https://www.ign.com/articles/2018/09/25/forza-horizon-4-review">
                  <button  class="btn">
                  IGN
                  </button>
                </a>
              </div>
            </div>
          </div>

          <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Trailer</h2>

          <video autoplay muted loop id="myVideo2">
            <source src="img/forzaBackgroundVideo.mp4" type="video/mp4">
          </video>

          <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">System Requirements</h2>

          <table>
            <tr>
              <th style="width:50%">System Requirements</th>
              <th>Minimum</th>
              <th>Recommended</th>
            </tr>
            <tr>
              <td>CPU:</td>
              <td>Intel Core i3 6300 or Equivalent / AMD FX 4350 or Equivalent</td>
              <td>Intel Core i5 3570K or Equivalent / Ryzen 5 CPU or Equivalent</td>
            </tr>
            <tr>
              <td>RAM:</td>
              <td>6GB - DDR3 @1333 RAM</td>
              <td>8GB - DDR3 @1333 RAM</td>
            </tr>
            <tr>
              <td>GPU:</td>
              <td>NVIDIA GeForce® GT 640 / AMD Radeon™ HD 7730	</td>
              <td>NVIDIA GeForce® GTX 970 / AMD Radeon™ R9 290  </td>
            </tr>
            <tr>
              <td>DX:</td>
              <td>DirectX 11</td>
              <td>DirectX 11</td>
            </tr>
            <tr>
              <td>OS:</td>
              <td>64-bit Windows 7</td>
              <td>64-bit Windows 7
              </td>
            </tr>
            <tr>
              <td>Store:</td>
              <td>22 GB available space	</td>
              <td>22 GB available space</td>
            </tr>
            <tr>
              <td>Network:</td>
              <td>512 KBPS or faster Internet connection	</td>
              <td>Broadband Connection</td>
            </tr>
          </table>
        </div>


        
                <!--FORTNITEEEEEEEE-->



      <div id="fortniteBlock" class="gameBlock">

        <h1 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Fortnite</h1>


        <div class="row">
          <div class="side">
            <div class="imageWithText">
              <iframe class="iframe" src="https://www.youtube.com/embed/vlL_U07Qol4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>

          </div>
          
          </div>
          <div class="main">                   
              
            
            <div class="containerButton">
              <img src="img/buttonSteam.jpg" alt="Snow" style="width:100%; box-shadow: 3px 3px 3px 3px black;" >
              <a href="https://www.g2a.com/en/tom-clancys-the-division-uplay-key-global-i10000011922007">
                <button  class="btn">
                Steam
                </button>
              </a>
            </div>
           
            <div class="containerButton">
              <img src="img/buttonG2a.jpg" alt="Snow" style="width:100%; box-shadow: 3px 3px 3px 3px black;" >
              <a href="https://www.g2a.com/en/tom-clancys-the-division-uplay-key-global-i10000011922007">
                <button  class="btn">
                G2A
                </button>
              </a>
            </div>
              
          </div>
          <div class="main">
            <h2>Read more about on: </h2>
            <div class="containerButton">
              <img src="img/buttonIgn.jpg" alt="Snow" style="width:100%; box-shadow: 3px 3px 3px 3px black;">
              <a href="https://www.g2a.com/en/tom-clancys-the-division-uplay-key-global-i10000011922007">
                <button  class="btn">
                IGN
                </button>
              </a>
            </div>
          </div>
        </div>

        <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">Trailer</h2>

        <video autoplay muted loop id="myVideo2">
          <source src="img/fortniteBackgroundVideo.mp4" type="video/mp4">
        </video>

        <h2 style="display: flex;color: rgba(240, 248, 255, 0.781); justify-content: center; text-shadow: 2px 2px 5px red; box-shadow:2px 2px 5px black;   background:#000000bd;">System Requirements</h2>

        <table>
          <tr>
            <th style="width:50%">System Requirements</th>
            <th>Minimum</th>
            <th>Recommended</th>
          </tr>
          <tr>
            <td>CPU:</td>
            <td>Intel Core i3 6300 or Equivalent / AMD FX 4350 or Equivalent</td>
            <td>Intel Core i5 3570K or Equivalent / Ryzen 5 CPU or Equivalent</td>
          </tr>
          <tr>
            <td>RAM:</td>
            <td>6GB - DDR3 @1333 RAM</td>
            <td>8GB - DDR3 @1333 RAM</td>
          </tr>
          <tr>
            <td>GPU:</td>
            <td>NVIDIA GeForce® GT 640 / AMD Radeon™ HD 7730	</td>
            <td>NVIDIA GeForce® GTX 970 / AMD Radeon™ R9 290  </td>
          </tr>
          <tr>
            <td>DX:</td>
            <td>DirectX 11</td>
            <td>DirectX 11</td>
          </tr>
          <tr>
            <td>OS:</td>
            <td>64-bit Windows 7</td>
            <td>64-bit Windows 7
            </td>
          </tr>
          <tr>
            <td>Store:</td>
            <td>22 GB available space	</td>
            <td>22 GB available space</td>
          </tr>
          <tr>
            <td>Network:</td>
            <td>512 KBPS or faster Internet connection	</td>
            <td>Broadband Connection</td>
          </tr>
        </table>
      </div>
      

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