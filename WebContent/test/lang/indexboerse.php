<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Club home</title>
        <link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
        <link href="../lightbox/css/lightbox.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>
        
        <script src="../js/vendor/modernizr.min.js"></script>
        <script src="../js/vendor/respond.min.js"></script>
        
        <!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js\/vendor\/1.7.2.jquery.min.js"><\/script>')</script>
        
        <script src="../lightbox/js/lightbox.js"></script>
        <script src="../js/vendor/prefixfree.min.js"></script>
        <script src="../js/vendor/jquery.slides.min.js"></script>
        <script src="../js/script.js"></script>
        
        <!--[if lt IE 9]>
            <style>
                header
                {
                    margin: 0 auto 20px auto;
                }
                #four_columns .img-item figure span.thumb-screen
                {
                    display:none;
                }  
            .auto-style1 {
				font-size: 100%;
				color: #ABABAB;
			}
            </style>
        <![endif]-->
        
        
        <script>
        $(function() {
          $('#slides').slidesjs({	
            height: 235,
            navigation: false,
            pagination: false,
            effect: {
              fade: {
                speed: 400
              }
            },
            callback: {
                start: function(number)
                {			
                    $("#slider_content1,#slider_content2,#slider_content3").fadeOut(500);
                },
                complete: function(number)
                {			
                    $("#slider_content" + number).delay(500).fadeIn(1000);
                }		
            },
            play: {
                active: false,
                auto: true,
                interval: 6000,
                pauseOnHover: false,
                effect: "fade"
            }
          });
        });
        </script>
	</head>

	<body>
        <header>
            <div class="toggleMobile">
                <span class="menu1"></span>
                <span class="menu2"></span>
                <span class="menu3"></span>
                
            </div>
            <div id="mobileMenu">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../indexTraining.html">Training</a></li>
                    <li><a href="../indexInterclub.html">Interclub</a></li>
                    <li><a href="../indexVorstand.html">Vorstand</a></li>
                    <li><a href="../indexAgenda.html">Agenda</a></li>
                    <li><a href="../indexFotos.html">Bilder</a></li>
                    <li><a href="../IndexVerweis.html">Links</a></li>
                </ul>
            </div>           
            <h1>Tennisclub Brütten</h1>
            <p>1977</p>           
            
            <nav>
            	<h2 class="hidden">Our navigation</h2>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../indexTraining.html">Training</a></li>
                    <li><a href="../indexInterclub.html">Interclub</a></li>
                    <li><a href="../indexVorstand.html">Vorstand</a></li>
                    <li><a href="../indexAgenda.html">Agenda</a></li>
					<li><a href="../indexFotos.html">Bilder</a></li>
                    <li><a href="../IndexVerweis.html">links</a></li>
                </ul>
            </nav>
        </header>
        <section class="container">
        	<h2 class="hidden">Drei Plätze</h2>
            <article id="slider_content1">
                <h3>Drei Plätze</h3>
                <p>Drei neue Allwetterplätze "Tennis FORCE II" mit Flutlichtanlage stehen bald bis um 22 Uhr zur Verfügung. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
                <a class="button" href="javascript:void(0)">Mehr lesen</a>
            </article>
            <article id="slider_content2">
                <h3>Das Clubhaus</h3>
                <p>Ab 2017 steht das Clubhaus in neuem Glanz da, die Küche wird vollständig erneuert und das Dach saniert. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
                <a class="button" href="javascript:void(0)">Mehr lesen</a>
            </article>
            <article id="slider_content3">
                <h3>Aktuell</h3>
                <p>Die Bauarbeiten an den Plätzen wurden innerhalb von drei Wochen erledigt. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
                <a class="button" href="javascript:void(0)">Mehr lesen</a>
            </article>
            <div id="slides">
                <img src="../images/slider/slide3.jpg" alt="Some alt text">
                <img src="../images/slider/slide2.jpg" alt="Some alt text">    	
                <img src="../images/slider/slide1.jpg" alt="Some alt text">
            </div>
        </section>
        <section id="spacer">  
        	<h2 class="hidden">Börse</h2>          
            <p>TCB Tennisclub Brütten - SpielerInnen Börse</p>
            <div class="search">
                <form action="#">
                    <input type="text" name="sitesearch" value="Wort eingeben ..."/>
                    <input type="submit" name="start_search" class="button" value="Suchen"/>
                </form>
            </div>            
        </section>
	<div id="boxcontent">																																																																																																																																																																																																																																
		<h2 class="hidden">Spielerinnen/Spieler - Börse</h2>
			
			<p>
			<?php include('D:\www\www212\lang\gbinclude.php'); ?>	
			</p>
			
		
		
	</div>
	<section id="text_columns">
        	<h2 class="hidden">Blindtext</h2>
            <article class="column1">    
                <h3></h3>
               
            </article>
            <section class="column2">
            	<h3 class="hidden"></h3>
                   
            </section>
        </section>
        <footer>
        	<h2 class="hidden">Our footer</h2>
            <section id="copyright">
            	<h3 class="hidden">Copyright notice</h3>
                <div class="wrapper">
                    <div class="social">
                        <a href="javascript:void(0)"><img src="../img/Tennis3.png" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="../img/Tennis3.png" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="../img/Tennis3.png" alt="Some alt text" width="25"/></a>
                       
                        
                    </div>
                    &copy; Copyright 2016 by
					<a href="http://www.example.com"><span class="auto-style1">
					R. Berner</span></a>. All Rights Reserved.
                </div>
            </section>
            <section class="wrapper">
            	<h3 class="hidden">Footer content</h3>
                <article class="column">
                    <h4>Kontakt</h4>
                    Präsident: Christian Fuchs<br>Aktuar: Mike Vogt<br>
					Spielleiter: Adi Vogt</article>
                <article class="column midlist">
                    <h4>Adresse</h4>
                    <ul>
                        <li><a href="javascript:void(0)">Im Chapf</a></li>
                        <li><a href="javascript:void(0)">8311 Brütten</a></li>
                        <li><a href="javascript:void(0)">no phone</a></li>
                        <li><a href="javascript:void(0)">tcbruetten.ch</a></li>
                    </ul>
                </article>
                <article class="column rightlist">
                    <h4>Anfahrt</h4>
                    <ul>
                        <li><a href="javascript:void(0)"><img src="../img/Tennis3.png" width="80" alt="Some alt text"/><span> </span></a></li>
                        <li><a href="javascript:void(0)"><img src="../img/Tennis3.png" width="80" alt="Some alt text"/><span> </span></a></li>
                        <li><a href="javascript:void(0)"><img src="../img/Tennis3.png" width="80" alt="Some alt text"/><span> </span></a></li>
                    </ul>
                    <br class="clear"/>
                </article>
            </section>
        </footer>
	</body>
</html>
