<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="aslider.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container header">
            <div class="logo">
                <img class="logoImage" src="img/Logo.png">
            </div>
            <div class="nav">
                <ul class="navbar">
                    <li><a href="">Kontakt</a></li>
                    <li><a href="">Personal</a></li>
                    <li><a class="active"href="">Galleri</a></li>
                    <li><a href="">Referenser</a></li>
                    <li><a href="">Om oss</a></li>
                    <li><a href="">Hem</a></li>
                </ul>
            </div>
        </div>
        <img class="backgroundImage" src="img/background-stuga-skog.png">
        <div class="container">
            <h1>Gotland</h1>
            <h2>1,5 PLANSHUS|125 M²</h2>
        </div>
        <!--Code from W3schools, adjusted and remade -->
        <div class="container">
            <!-- Container for the image gallery -->
            <div class="slideContainer">

                <!-- Full-width images with number text -->
                <div class="slides">
                    <img src="img/gotland-125kvm.png" alt="Gotland, 125 kvm" style="width:100%">
                </div>
                <div class="slides">
                    <img src="img/gotland-125kvm-allrum.png" alt="Gotland, allrum" style="width:100%">
                </div>
                <div class="slides">
                    <img src="img/empty-image.png" alt="tom bild" style="width:100%">
                </div>
                <div class="slides">
                    <img src="img/empty-image.png" alt="tom bild" style="width:100%">
                </div>
                <div class="slides">
                    <img src="img/empty-image.png" alt="tom bild" style="width:100%">
                </div>

                <!-- Thumbnail images -->
                <div class="sliderRow">
                    <div class="sliderColumn">
                        <img class="demo cursor" src="img/gotland-125kvm-thumb.png" onclick="showSlides(1)" alt="Gotland, 125 kvm">
                    </div>
                    <div class="sliderColumn"> 
                        <img class="demo cursor" src="img/gotland-125kvm-allrum-thumb.png" onclick="showSlides(2)" alt="Gotland, allrum">
                    </div>
                    <div class="sliderColumn">
                        <img class="demo cursor" src="img/empty-image.png" onclick="showSlides(3)" alt="tom bild">
                    </div>
                    <div class="sliderColumn">
                        <img class="demo cursor" src="img/empty-image.png" onclick="showSlides(4)" alt="tom bild">
                    </div>
                    <div class="sliderColumn">
                        <img class="demo cursor" src="img/empty-image.png" onclick="showSlides(5)" alt="tom bild">
                    </div> 
                </div>
            </div>
            <!--Divide sections-->
            <div class="line">
            </div>

            <div class="infoText">
                <h3>
                    Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries...
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="column">
                <div class="left-half">
                    <p class="infoHead">FAKTA</p>
                    <div class="infoRow">
                        <p class="rowPartOne">HUSTYP</p>
                        <p class="rowPartTwo">1,5 planshus</p>
                    </div>  
                    <div class="infoRow">
                        <p class="rowPartOne">BOYTA</p>
                        <p class="rowPartTwo">125 m²</p>
                    </div>
                    <div class="infoRow">
                        <p class="rowPartOne">ANTAL SOVRUM</p>
                        <p class="rowPartTwo">4 sovrum</p>
                    </div>
                </div>
                <div class="right-half">
                    <p class="infoHead">PLANRITNING</p>
                    <div class="infoRow">
                        <div class="rowPartOne">
                            <img src="img/reader.png">
                            <a href="">Planskiss 1.pdf</a>
                        </div>
                        <p class="rowPartTwo">
                            <a href="">
                                <img src="img/preview.png" onMouseOver="this.src = 'img/preview-hover.png'" onmouseout="this.src = 'img/preview.png'">
                            </a>
                            <a href="">
                                <img src="img/download.png" onMouseOver="this.src = 'img/download-hover.png'" onmouseout="this.src = 'img/download.png'">
                            </a>
                        </p>
                    </div>
                    <div class="infoRow">
                        <div class="rowPartOne">
                            <img src="img/reader.png">
                            <a href="">Planskiss 1.pdf</a>
                        </div>
                        <p class="rowPartTwo">
                            <a href="">
                                <img src="img/preview.png" onMouseOver="this.src = 'img/preview-hover.png'" onmouseout="this.src = 'img/preview.png'">
                            </a>
                            <a href="">
                                <img src="img/download.png" onMouseOver="this.src = 'img/download-hover.png'" onmouseout="this.src = 'img/download.png'">
                            </a>
                        </p>
                    </div>
                    <div class="infoRow">
                        <div class="rowPartOne">
                            <img src="img/reader.png">
                            <a href="">Planskiss 1.pdf</a>
                        </div>
                        <p class="rowPartTwo">
                            <a href="">
                                <img src="img/preview.png" onMouseOver="this.src = 'img/preview-hover.png'" onmouseout="this.src = 'img/preview.png'">
                            </a>
                            <a href="">
                                <img src="img/download.png" onMouseOver="this.src = 'img/download-hover.png'" onmouseout="this.src = 'img/download.png'">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="lineTwo">
            </div>
        </div>


        <div class="container">

            <div class="infoText">
                <h3>
                    Intresseanmälan
                </h3>
                <p>
                    Fyll i formuläret nedan för att lämna en intresseanmälan så kontaktar vi dig.
                </p>
            </div>

            <div class="column">
                <div class="left-half">
                    <label>Förnamn: *</label><br>
                    <input class="inputField" type="text" />
                </div>
                <div class="right-half">
                    <label>Efternamn: *</label><br>
                    <input class="inputField" type="text" />
                </div>
            </div>
            <div class="column">
                <div class="left-half">
                    <label>Telefon dagtid: *</label><br>
                    <input class="inputField" type="text" />
                </div>
                <div class="right-half">
                    <label>Mobil: *</label><br>
                    <input class="inputField" type="text" />
                </div>
            </div>
            <div class="column">
                <div class="left-half">
                    <label>E-post: *</label><br>
                    <input class="inputField" type="text" />
                </div>
                <div class="right-half">
                    <label>Byggkommun: *</label><br>
                    <input class="inputField" type="text" />
                </div>
            </div>
            <div class="column">
                <div class="left-half">
                    <label>Hustyp jag är intresserad av: *</label><br>
                    <input class="inputField" type="text" />
                </div>
                <div class="right-half">
                    <label>Jag blir helst kontaktad via:</label><br>
                    <label class="formRadio"><input class="radioInput" type="radio" />Telefon</label>
                    <label class="formRadio"><input class="radioInput" type="radio" />E-post</label><br><br>
                </div>
            </div>

            <label>Meddelande: *</label><br>
            <textarea class="inputField formComment"></textarea><br>
            <button class="formButton">SKICKA</button>
        </div>
        <div class="footerContainer">
            <h1>
                Låt FlexiblaHus bli ditt självklara val när du ska bygga ditt hus
            </h1>
            <img class="backgroundImage" src="img/background-blue.png">
        </div>
        <div class="container">
            <div class="column">
                <div class="half">
                    <div class="column">
                        <div class="half">
                            <h2>
                                Kontakt
                            </h2>
                            <p>
                                <b>TELE: </b>044-781 87 18<br>
                                <b>E-POST: </b>info@flexiblahus.se<br>
                                <br>
                                <b>ADRESS: </b><br>
                                FlexiblaHus & Renovering i<br>
                                Kristinstad AB<br>
                                Sridsvagnsvägen 9<br>
                                29139 Kristinstad<br>
                                <br>
                                <a href="">>>KONTAKTA OSS</a><br>
                            </p>
                        </div>
                        <div class="half">
                            <h2>
                                Länkar
                            </h2>
                            <p>
                                <a href="">>>Lorem ipsum</a><br>
                                <a href="">>>Aenean imperdiet</a><br>
                                <a href="">>>Lorem ipsum</a><br>
                                <a href="">>>Aliquam mattis lorem</a><br>
                                <a href="">>>Lorem ipsum</a><br>
                                <a href="">>>Lorem ipsum</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="half">
                    <div class="column">
                        <div class="half">
                            <h2>
                                Öppettider
                            </h2>
                            <p>
                                <b>MÅN-TORS: </b>08:00-17:00<br>
                                <b>FRE: </b>08:00-13:00<br>
                                <b>HELG: </b>Stängt
                            </p>
                        </div>
                        <div class="half">
                            <img class="footerLogo" src="img/Logo-bw.png">
                            <p class="copyright">
                                ©Implemented by Carl M Skanshed
                                as part of application
                            </p>
                            <div class="facebook">
                                <div class="fb-page" data-href="https://www.facebook.com/flexiblahus-2039778892914778" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/flexiblahus-2039778892914778" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/flexiblahus-2039778892914778">Flexiblahus</a></blockquote></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--facebook script-->
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.12';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--Slider script. Code from W3schools, adjusted and remade-->
        <script>
            //initialize slider
            var slideIndex = 1;
            showSlides(slideIndex);

            function showSlides(slideIndex = n) {
                var i;
                //collect all slides to array
                var slides = document.getElementsByClassName("slides");

                //prevent from viewing large empty image.
                if (slideIndex > 2) {
                    slideIndex = 1;
                }
                //hide previously shown image.
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                //set chosen image to be visable.
                slides[slideIndex - 1].style.display = "block";
            }
        </script>
    </body>
</html>
