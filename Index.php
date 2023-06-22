<?php
    include "php/fetchIndexContent.php";
    include "php/fetchIndexImg.php";
    $row = $result->fetch_assoc();
    $img = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Traveling</title>
        <link rel="stylesheet" type="text/css" href="css\style.css"> 
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css'> 
        <link rel="stylesheet" type="text/css" href="css\btnstyle.css"> 
        <link rel="stylesheet" type="text/css" href="css\GalleryStyle.css"> 
        <link rel="stylesheet" type="text/css" href="css\FooterStyle.css">
    </head>
    <body>

        <!-- Navbar --------------------------------------------------------------------------------------->
        <header>
            <div class="logo"><?php echo $row['navLogoText']; ?></div>
            <nav>
                <ul class="nav__links">
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#jump">Countries</a></li>
                    <li><a href="#stunning">Places</a></li>
                    <li><a href="../IW/contactus.php">Contact</a></li>
                </ul>
            </nav>
            <a class="cta" href="../IW/login.php">Log In</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                    <a href="#partners">Partners</a>
                    <a href="#jump">Countries</a>
                    <a href="#stunning">Places</a>
                    <a href="../IW/contactus.php">Contact</a>
                    <a href="../IW/login.php">Log In</a>
            </div>
        </div>
    
        <!-- Headeri - me paralax scrolling effect -------------------------------------------------------->
        <section class="headerSection">
            <img src=<?php echo $img['headerPhoto1']; ?> alt="header background" id="bg">
            <img src=<?php echo $img['headerPhoto2']; ?> alt="header moon" id="moon">
            <img src=<?php echo $img['headerPhoto3']; ?> alt="header mountain" id="mountain">
            <img src=<?php echo $img['headerPhoto4']; ?> alt="header road" id="road">
            <h2 id="text"><?php echo $row['headerTitle']; ?></h2>
        </section>

        <!-- Our partners logo slider --------------------------------------------------------------------->
        <div class="logo-slider">
            <div class="logo-slider2">
                <p id="partners"><?php echo $row['partnersSliderText']; ?></p>
                <div class="logo-slide-track">
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg1']; ?> alt="bose logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg2']; ?> alt="CN logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg3']; ?> alt="hm logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg4']; ?> alt="marvel logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg5']; ?> alt="mcdonalds logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg6']; ?> alt="redbull logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg7']; ?> alt="spotify logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg8']; ?> alt="steam logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg9']; ?> alt="ubisoft logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg10']; ?> alt="volkswagen logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg11']; ?> alt="google logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg12']; ?> alt="adobe logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg13']; ?> alt="bbc logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg14']; ?> alt="rayban logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg15']; ?> alt="disney logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg16']; ?> alt="youtube logo" />
                    </div>
                    <div class="slide">
                        <img src=<?php echo $img['partnersSliderImg17']; ?> alt="tedx logo" />
                    </div>
                </div>
            </div>
        </div>

        <!----------Shkrimet me background levizes---------------------------------------------->

        <div class="movingBackground">
            <section id="sections">
                <div class="movingBackgroundContent">
                    <h2 id="sectionH2"><?php echo $row['movingBGTitle1']; ?></h2>
                    <p id="sectionP"><?php echo $row['movingBGText1']; ?></p>
                    <div class="anchor-link"> <a href="#">Read More</a> </div>
                </div>
            </section>
            <section id="sections">
                <div class="movingBackgroundContent">
                    <h2 id="sectionH2"><?php echo $row['movingBGTitle2']; ?></h2>
                    <p id="sectionP"><?php echo $row['movingBGText2']; ?></p>
                    <div class="anchor-link"> <a href="#">Read More</a> </div>
                </div>
            </section>
            <section id="sections">
                <div class="movingBackgroundContent">
                    <h2 id="sectionH2"><?php echo $row['movingBGTitle3']; ?></h2>
                    <p id="sectionP"><?php echo $row['movingBGText3']; ?></p>
                    <div class="anchor-link"> <a href="#">Read More</a> </div>
                </div>
            </section>
            <section>
                <div class="movingBackgroundContent">
                    <h2 id="sectionH2"><?php echo $row['movingBGTitle4']; ?></h2>
                    <p id="sectionP"><?php echo $row['movingBGText4']; ?></p>
                    <div class="anchor-link"> <a href="#">Read More</a> </div>
                </div>
            </section>
        </div>

        <!--Ndares quote--------------------------------------------------------------------------->
        <div class="divider1">
            <p><?php echo $row['dividerText1']; ?></p>
        </div>

        <!--Swipers me shtetet perkatese----------------------------------------------------------->
        <div class="container" data-aos="fade-up" id="jump">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="sliderText" id="Kosovo">
                                <a href="Kosovo.php"></a>
                                <div id="textBG">
                                    <a href="Kosovo.php" style="text-decoration:none">
                                        <h3><?php echo $row['swiperTitle1']; ?></h3>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <p><?php echo $row['swiperText1']; ?></p>
                                <br>
                                <button class="button" onclick="location.href='Kosovo.php'" type="button">
                                        Read Me
                                        <div class="button__horizontal"></div>
                                        <div class="button__vertical"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="sliderText" id="Albania">
                                <a href="Albania.php"></a>
                                <div id="textBG">
                                    <a href="Albania.php" style="text-decoration:none">
                                        <h3><?php echo $row['swiperTitle2']; ?></h3>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <p><?php echo $row['swiperText2']; ?></p>
                                <br>
                                <button class="button" onclick="location.href='Albania.php'" type="button">
                                        Read Me
                                        <div class="button__horizontal"></div>
                                        <div class="button__vertical"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="sliderText" id="Montenegro">
                                <a href="Montenegro.php"></a>
                                <div id="textBG">
                                    <a href="Montenegro.php" style="text-decoration:none">
                                        <h3><?php echo $row['swiperTitle3']; ?></h3>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <p><?php echo $row['swiperText3']; ?></p>
                                <br>
                                <button class="button" onclick="location.href='Montenegro.php'" type="button">
                                        Read Me
                                        <div class="button__horizontal"></div>
                                        <div class="button__vertical"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="sliderText" id="NorthMacedonia">
                                <a href="NorthMacedonia.html"></a>
                                <div id="textBG">
                                    <a href="NorthMacedonia.html" style="text-decoration:none">
                                        <h3 style="font-size: 40px !important;"><?php echo $row['swiperTitle4']; ?></h3>
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <p><?php echo $row['swiperText4']; ?></p>
                                <br>
                                <button class="button" onclick="location.href='NorthMacedonia.html'" type="button">
                                        Read Me
                                        <div class="button__horizontal"></div>
                                        <div class="button__vertical"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!--Ndares quote--------------------------------------------------------------------------->
        <div class="divider2">
            <p><?php echo $row['dividerText2']; ?></p>
        </div>

        <!---------------Stunning html-------------------------------------------------------------->
        <div class="stunning-text">
            <h1 id="stunning">
                <span></span>
                <span>S</span>
                <span>t</span>
                <span>u</span>
                <span>n</span>
                <span>n</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
                <span style="padding-left: 5% !important;">P</span>
                <span style="padding-left: 5% !important;">l</span>
                <span style="padding-left: 5% !important;">a</span>
                <span style="padding-left: 5% !important;">c</span>
                <span style="padding-left: 5% !important;">e</span>
                <span style="padding-left: 5% !important;">s</span>
            </h1>
        </div>

        <!-------------Galerija me foto html--------------------------------------------------------->
        <div class="Gcontainer ">
            <div class="Gcard ">
                <div class="imgbox ">
                    <img src=<?php echo $img['placesCardImg1']; ?> onerror="this.onerror=null; this.src='img/tirana.jpg'">
                </div>
                <div class="details ">
                    <h2><?php echo $row['placesCardTitle1']; ?></h2>
                    <p><?php echo $row['placesCardText1']; ?></p>
                </div>
            </div>
            <div class="Gcard ">
                <div class="imgbox ">
                    <img src=<?php echo $img['placesCardImg2']; ?> onerror="this.onerror=null; this.src='img/shala.jpg'">
                </div>
                <div class="details ">
                    <h2><?php echo $row['placesCardTitle2']; ?></h2>
                    <p><?php echo $row['placesCardText2']; ?></p>
                </div>
            </div>
            <div class="Gcard ">
                <div class="imgbox ">
                    <img src=<?php echo $img['placesCardImg3']; ?> onerror="this.onerror=null; this.src='img/kruja.jpg'">
                </div>
                <div class="details ">
                    <h2><?php echo $row['placesCardTitle3']; ?></h2>
                    <p><?php echo $row['placesCardText3']; ?></p>
                </div>
            </div>
            <div class="Gcard ">
                <div class="imgbox ">
                    <img src=<?php echo $img['placesCardImg4']; ?> onerror="this.onerror=null; this.src='img/rugova.jpg'">
                </div>
                <div class="details ">
                    <h2><?php echo $row['placesCardTitle4']; ?></h2>
                    <p><?php echo $row['placesCardText4']; ?></p>
                </div>
            </div>
            <div class="Gcard ">
                <div class="imgbox ">
                    <img src=<?php echo $img['placesCardImg5']; ?> onerror="this.onerror=null; this.src='img/prizren.jpg'">
                </div>
                <div class="details ">
                    <h2><?php echo $row['placesCardTitle5']; ?></h2>
                    <p><?php echo $row['placesCardText5']; ?></p>
                </div>
            </div>
            <div class="Gcard ">
                <div class="imgbox ">
                    <img src=<?php echo $img['placesCardImg6']; ?> onerror="this.onerror=null; this.src='img/prishtina.jpg'">
                </div>
                <div class="details ">
                    <h2><?php echo $row['placesCardTitle6']; ?></h2>
                    <p><?php echo $row['placesCardText6']; ?></p>
                </div>
            </div>
        </div>

        <!-------------Footer------------------------------------------------------------------------>
        <footer>    
            <svg viewBox="0 0 120 28">
                <defs> 
                    <mask id="xxx">
                        <circle cx="7" cy="12" r="40" fill="#fff" />
                    </mask>
                
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="
                            1 0 0 0 0  
                            0 1 0 0 0  
                            0 0 1 0 0  
                            0 0 0 13 -9" result="goo" />
                        <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                    <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
                </defs> 

                <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2" ></use> 
                <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0" ></use>
                
                <g class="topball"><a onclick="window.scrollTo(0,0)">
                    <circle class="ball" cx="110" cy="8" r="3.5" stroke="none" stroke-width="0" fill="white" /></a>

                    <g class="arrow"><a onclick="window.scrollTo(0,0)">
                    <polyline class="" points="108,8 110,6 112,8" fill="none"  /></a>
                    <a onclick="window.scrollTo(0,0)">
                    <polyline class="" points="110,6 110,10.5" fill="none"  /></a>
                    </g>
                    
                </g>
                <g class="gooeff">
                <circle class="drop drop1" cx="20" cy="2" r="1.8"  />
                <circle class="drop drop2" cx="25" cy="2.5" r="1.5"  />
                <circle class="drop drop3" cx="16" cy="2.8" r="1.2"  />
                <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
     
            </svg>

            <div class="footer">© Made with ❤️ by Elza Krasniqi & Argjenta Çaka</div>
            
            

        </footer>
        
        <script src='https://unpkg.com/aos@next/dist/aos.js'></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="js/header.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/AOS.js"></script>
        <script type="text/javascript" src="js/mobile.js"></script>
    </body>
</html>