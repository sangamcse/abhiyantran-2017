<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ABHIYANTRAN | 2017</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/demo.css">
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="css/pushy.css">
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
        <link rel="stylesheet" href="http://www.sangamcse.me/Project/abhiyantran1/css/style.css">
        <link rel="stylesheet" href="http://www.sangamcse.me/Project/abhiyantran1/css/styleLoader.css">
        <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <!--------Preloader Script---------->
        <script>
        $(window).load(function() {
            // Animate loader off screen
            $(".kibanaWelcomeView").delay(1000).fadeOut("slow", function(){
                $( "content box" ).show( "slow" );
            });
            
        });
        </script>
        <style type="text/css">
            h1 {
              font-weight: bolder;
              font-size: 40px;
              color: #fff;
              margin: 30px 0px 0px 0px;
            }
            .title{

              color: #fff;
              width: 70%;
              height: auto;
            }

            h2 {
              font-weight: bold;
              font-size: 18px;
              color: #000;
              margin: 10px 0px 0px 0px;
            }
            p {
              margin: 0 auto;
              z-index: 100;
              text-align: left;
            }
            .loader {
              height: 100%;
              position: relative;
              margin: auto;
              width: 400px;

            }
            .loader_overlay {
              width: 250px;
              height: 250px;
              background: transparent;
              border-radius: 100%;
              position: absolute;
              left: 0;
              right: 0;
              top: 10em;
              bottom: 0;
              margin: auto;
            }
            .loader_cogs {
              z-index: -2;
              width: 100px;
              height: 100px;
              top: -120px !important;
              position: absolute;
              left: 0;
              right: 0;
              top: 0;
              bottom: 0;
              margin: auto;
            }
            .loader_cogs__top {
              position: relative;
              width: 100px;
              height: 100px;
              top: -1em;
              -webkit-transform-origin: 50px 50px;
                      transform-origin: 50px 50px;
              -webkit-animation: rotate 10s infinite linear;
                      animation: rotate 10s infinite linear;
            }
            .loader_cogs__top div:nth-of-type(1) {
              -webkit-transform: rotate(30deg);
                      transform: rotate(30deg);
            }
            .loader_cogs__top div:nth-of-type(2) {
              -webkit-transform: rotate(60deg);
                      transform: rotate(60deg);
            }
            .loader_cogs__top div:nth-of-type(3) {
              -webkit-transform: rotate(90deg);
                      transform: rotate(90deg);
            }
            .top_part {
              width: 100px;
              border-radius: 10px;
              position: absolute;
              height: 100px;
              background-color: #434b4d;
              background-image: url("https://www.transparenttextures.com/patterns/brushed-alum.png");
              /* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */
            }
            .top_hole {
              width: 50px;
              height: 50px;
              border-radius: 100%;
              background-color: #000000;
              background-image: url("https://www.transparenttextures.com/patterns/brick-wall.png");
              position: absolute;
              position: absolute;
              left: 0;
              right: 0;
              top: 0;
              bottom: 0;
              margin: auto;
            }
            .loader_cogs__left {
              position: relative;
              width: 80px;
              -webkit-transform: rotate(16deg);
                      transform: rotate(16deg);
              top: 28px;
              -webkit-transform-origin: 40px 40px;
                      transform-origin: 40px 40px;
              -webkit-animation: rotate_left 10s .1s infinite reverse linear;
                      animation: rotate_left 10s .1s infinite reverse linear;
              left: -5em;
              height: 80px;
            }
            .loader_cogs__left div:nth-of-type(1) {
              -webkit-transform: rotate(30deg);
                      transform: rotate(30deg);
            }
            .loader_cogs__left div:nth-of-type(2) {
              -webkit-transform: rotate(60deg);
                      transform: rotate(60deg);
            }
            .loader_cogs__left div:nth-of-type(3) {
              -webkit-transform: rotate(90deg);
                      transform: rotate(90deg);
            }
            .left_part {
              width: 80px;
              border-radius: 6px;
              position: absolute;
              height: 80px;
              background-color: #434b4d;
              background-image: url("https://www.transparenttextures.com/patterns/brushed-alum.png");
            }
            .left_hole {
              width: 40px;
              height: 40px;
              border-radius: 100%;
              background-color: #000000;
              background-image: url("https://www.transparenttextures.com/patterns/brick-wall.png");
              position: absolute;
              position: absolute;
              left: 0;
              right: 0;
              top: 0;
              bottom: 0;
              margin: auto;
            }
            .loader_cogs__bottom {
              position: relative;
              width: 60px;
              top: -65px;
              -webkit-transform-origin: 30px 30px;
                      transform-origin: 30px 30px;
              -webkit-animation: rotate_left 10.2s .4s infinite linear;
                      animation: rotate_left 10.2s .4s infinite linear;
              -webkit-transform: rotate(4deg);
                      transform: rotate(4deg);
              left: 6.5em;
              height: 60px;
            }
            .loader_cogs__bottom div:nth-of-type(1) {
              -webkit-transform: rotate(30deg);
                      transform: rotate(30deg);
            }
            .loader_cogs__bottom div:nth-of-type(2) {
              -webkit-transform: rotate(60deg);
                      transform: rotate(60deg);
            }
            .loader_cogs__bottom div:nth-of-type(3) {
              -webkit-transform: rotate(90deg);
                      transform: rotate(90deg);
            }
            .bottom_part {
              width: 60px;
              border-radius: 5px;
              position: absolute;
              height: 60px;
              background-color: #434b4d;
              background-image: url("https://www.transparenttextures.com/patterns/brushed-alum.png");
            }
             .bottom_hole {
              width: 30px;
              height: 30px;
              border-radius: 100%;
              background-color: #000000;
              background-image: url("https://www.transparenttextures.com/patterns/brick-wall.png");
              position: absolute;
              position: absolute;
              left: 0;
              right: 0;
              top: 0;
              bottom: 0;
              margin: auto;
            }

            /* Animations */
            @-webkit-keyframes rotate {
              from {
                -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
              }
              to {
                -webkit-transform: rotate(360deg);
                        transform: rotate(360deg);
              }
            }
            @keyframes rotate {
              from {
                -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
              }
              to {
                -webkit-transform: rotate(360deg);
                        transform: rotate(360deg);
              }
            }
            @-webkit-keyframes rotate_left {
              from {
                -webkit-transform: rotate(16deg);
                        transform: rotate(16deg);
              }
              to {
                -webkit-transform: rotate(376deg);
                        transform: rotate(376deg);
              }
            }
            @keyframes rotate_left {
              from {
                -webkit-transform: rotate(16deg);
                        transform: rotate(16deg);
              }
              to {
                -webkit-transform: rotate(376deg);
                        transform: rotate(376deg);
              }
            }
            @-webkit-keyframes rotate_right {
              from {
                -webkit-transform: rotate(4deg);
                        transform: rotate(4deg);
              }
              to {
                -webkit-transform: rotate(364deg);
                        transform: rotate(364deg);
              }
            }
            @keyframes rotate_right {
              from {
                -webkit-transform: rotate(4deg);
                        transform: rotate(4deg);
              }
              to {
                -webkit-transform: rotate(364deg);
                        transform: rotate(364deg);
              }
            }
            .content{
                background-color: white;
                height:100%;
                margin:0;
                padding:0;
                }
        </style>
    </head>
    <body>
        <div class="kibanaWelcomeView">
        <img class="title" src="images/abhi.svg">
        <h2>A tribute to Indian Armed Forces</h2>
          <div class="kibanaLoader">
            <div class="kibanaLoader__logo">

                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 512 384" style="enable-background:new 0 0 512 384;" xml:space="preserve">
                        <g id="Base" class="linepath">
                            <path d="M297.2,322h-83.5c-0.4,0-0.7-0.3-0.7-0.7c0-5-0.2-10,0.2-14.9c0.1-1.2,1.5-2.7,2.6-3.4c5.3-2.8,10.5-5.7,16.1-7.8
                                c2.4-0.9,5.7-0.4,8.4,0.2c2.4,0.5,4.7,1.9,6.7,3.4c5.6,4.4,11.1,3.9,16.4-0.1c7.8-5.7,15.1-5.3,22.9,0c3.5,2.4,7.5,3.9,11.3,5.7
                                c0.2,0.2,0.4,0.4,0.4,0.6v16.3C297.9,321.7,297.6,322,297.2,322z"/>
                            <path d="M248.1,343c-1.7,0-3.2,1.2-3.6,2.8c-0.9,3.9-4.3,4.3-8.5,4.1c-5.4-0.2-10.5,0-16.6-0.1c-1.9-0.1-3.4-0.4-3.8-2.2
                                c-0.9-4.7-1.7-9.2-2.6-13.9c-0.4-2.2,1.2-4.2,3.4-4.2l0,0c25.4-0.3,50.7-0.6,76-0.9c5.4-0.1,5.8,0.4,4.6,5.7
                                c-1,4.1-1.9,8.3-3.2,12.3c-0.5,1.3-2.4,2.8-3.7,2.9c-5.5,0.3-11,0-16.5,0.2c-2.9,0.2-4.5-0.9-5-3.6c-0.5-2.7-2.1-3.3-4.7-3.3
                                C258.8,343,253.7,343,248.1,343z"/>
                            <path d="M221.2,364.5h21c0.3,0,0.6-0.2,0.7-0.5c1.3-4.5,2.7-8.9,3.9-13.4c0.6-2.4,1.8-3.2,4.3-3.3c14.4-0.4,14.6-0.5,19.2,12.9
                                c1.2,3.3,2.6,4.7,6.3,4.5c4.8-0.3,9.6-0.1,14.5-0.1c0.5,0,0.9,0.5,0.6,1c-5.6,10.8-19.8,16.7-40.9,16.3c-12.3-0.3-22-6.1-30.1-16.3
                                C220.2,365.2,220.6,364.5,221.2,364.5z"/>
                            <path d="M207.1,361.8v-8h34c-0.5,7.4-1.1,8-8.6,8C224.2,361.8,215.9,361.8,207.1,361.8z"/>
                            <path d="M270.3,353.1h34.7v8.6c-9.5,0-19,0.4-28.3-0.3C274.4,361.2,272.6,354.7,270.3,353.1z"/>
                        </g>
                        <g id="Outer" class="linepath">
                            <path d="M175,261.7c0.2-0.2,0.5-0.2,0.9-0.1c1.6,1,3.4,1.8,4.8,3c12.3,10.9,20.7,24,22.5,40.6c1.1,10,1.8,20.1,2.1,30.2
                                c0,0.9-1.2,1-1.4,0.2c-6-25.8-12.4-51.3-28.9-73C174.7,262.3,174.7,261.9,175,261.7L175,261.7z"/>
                            <path d="M308.1,333.3c-1.8-35.4,8.6-59.9,28.1-70.9c0.7-0.4,1.4,0.5,0.9,1.1c-8.3,9.8-13.2,21.5-17.1,33.4
                                c-4,11.9-7.1,24.1-10.5,36.5C309.3,334.1,308.2,334,308.1,333.3z"/>
                        </g>
                        <path id="Arc" class="linepathArc" d="M191.5,261.9c0.7,0.4,1.4-0.5,0.9-1c-2.6-3.2-5-6.3-7.8-9.2c-15.4-16.6-23.9-36.1-26.5-58.6
                            c-2.3-19.5,1.1-38.1,9.4-55.4c10.2-21.3,26.2-37.5,48.2-47.2c12.5-5.5,25.4-9.4,39.2-9c42.1,1.2,77.7,25.5,92.7,67.3
                            c5.7,15.8,6.7,32.3,4.4,48.4c-3.9,26.4-16.4,48.6-37.8,65.2c-0.7,0.5-1.2,1.1-1.9,1.7c-0.2,0.2-0.3,0.5-0.2,0.9l0,0
                            c0.2,0.3,0.6,0.5,0.9,0.3c1.7-0.9,3.5-1.8,5.2-2.7c32.5-17.7,54.4-44.4,65.9-79.2c3.6-11,5.3-23,6.3-34.7
                            c2.1-24.3-2.1-47.7-12.9-69.6c-13-26.7-32.2-47.8-58.7-62C306.2,10.3,293,4.8,279.1,3c-11.8-1.6-24-1-36-0.7
                            c-7.4,0.2-14.9,1.3-22,3.3c-22.3,6.2-41.8,17.1-58.4,33.6c-14.8,14.7-26.1,31.4-33.2,50.9c-4.8,13.3-7.8,25.6-8.2,41.3
                            c-0.4,11.5-0.2,22.4,1.4,33.4c2.2,14.8,7.3,28.9,14.6,42c10.4,18.7,23.9,34.7,41.5,46.9C182.8,256.7,187.2,259.3,191.5,261.9z"/>
                        <g>
                            <path id="Alphabet" class="linepath" d="M220.3,173.6c6.5,2.2,18.3,6.1,18.3,6.1s2.6,13.2,3.8,18.7h26.9l5.7-20c0,0,11.5-3.1,16.8-4.7
                                c-0.6,4.4-9.5,44.4-13.2,60.9c-3.7,16.7-7.4,33.3-10.9,50c-1.6,7.8-1.5,7.8-9.3,7.8c-12,0-11.9,0-14.6-11.9
                                c-6.6-29.5-13.3-59.2-19.8-88.7C222.9,186.3,221.8,180.7,220.3,173.6z M246.6,216.8c3.2,16.1,6.2,31.5,9.3,46.9
                                c3.1-15.6,6.2-31.1,9.4-46.9H246.6z"/>
                        </g>

                        <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="185.4" y1="182.95" x2="223.4" y2="182.95">
                            <stop  offset="0" style="stop-color:white"/>
                            <stop  offset="0.3" style="stop-color:#E27822"/>
                            <stop  offset="1" style="stop-color:#E2224C"/>
                        </linearGradient>
                        <path class="glowing1" d="M223.4,202.6l-38-39.3c3.3,0.9,21.5,6,27.4,7.8c3,0.9,4.6,2.4,5.2,5.7C219.7,185.5,221.7,194,223.4,202.6z"/>
                        <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="290.7" y1="181.15" x2="326.6" y2="181.15">
                            <stop  offset="0" style="stop-color:#E2224C"/>
                            <stop  offset="0.7" style="stop-color:#E27822"/>
                            <stop  offset="1" style="stop-color:white"/>
                        </linearGradient>
                        <path class="glowing2" d="M290.7,199.3c0,0,3.8-18.3,5.4-25.7c0.2-0.8,1-1.9,1.7-2.1c9.3-2.8,18.6-5.5,28.8-8.5
                            C315.1,174.8,290.7,199.3,290.7,199.3z"/>
                        
                        </svg>
                        </div>
                        <div class="loader_overlay">
                         <div class="loader_cogs">
                          <div class="loader_cogs__top">
                            <div class="top_part"></div>
                            <div class="top_part"></div>
                            <div class="top_part"></div>
                            <div class="top_hole"></div>
                          </div>


                          <div class="loader_cogs__left">
                            <div class="left_part"></div>
                            <div class="left_part"></div>
                            <div class="left_part"></div>
                            <div class="left_hole"></div>
                          </div>
                          <div class="loader_cogs__bottom">
                            <div class="bottom_part"></div>
                            <div class="bottom_part"></div>
                            <div class="bottom_part"></div>
                            <div class="bottom_hole"></div>
                          </div>
                          <p>Loading</p>
                            </div>
                        </div>
            <div class="kibanaLoader__content"></div>
          </div>
        </div>
        <div class="container">
            <header class="site-header ">
                <div class="col-md-1">
                     <!-- Menu Button -->
                <button class="menu-btn">&#9776; Menu</button>
                </div>
            </header>

            <!-- Pushy Menu -->
            <nav class="pushy pushy-left" data-focus="#first-link">
                <div class="pushy-content">
                    <ul>
                        <!--<li class="pushy-submenu">
                            <button id="first-link">Submenu 1</button>
                            <ul>
                                <li class="pushy-link"><a href="#">Item 1</a></li>
                                <li class="pushy-link"><a href="#">Item 2</a></li>
                                <li class="pushy-link"><a href="#">Item 3</a></li>
                            </ul>
                        </li>
                        <li class="pushy-submenu">
                            <button>Submenu 2</button>
                            <ul>
                                <li class="pushy-link"><a href="#">Item 1</a></li>
                                <li class="pushy-link"><a href="#">Item 2</a></li>
                                <li class="pushy-link"><a href="#">Item 3</a></li>
                            </ul>
                        </li>
                        <li class="pushy-submenu">
                            <button>Submenu 3</button>
                            <ul>
                                <li class="pushy-link"><a href="#">Item 1</a></li>
                                <li class="pushy-link"><a href="#">Item 2</a></li>
                                <li class="pushy-link"><a href="#">Item 3</a></li>
                            </ul>
                        </li>-->
                        <li class="pushy-link"><a href="#">Home</a></li>
                        <li class="pushy-link"><a href="#">Speakers</a></li>
                        <li class="pushy-link"><a href="#">Events</a></li>
                        <li class="pushy-link"><a href="#">Sponsors</a></li>
                        <li class="pushy-link"><a href="#">Downloads</a></li>

                    </ul>
                </div>
            </nav>

            <!-- Site Overlay -->
            <div class="site-overlay"></div>

            <!-- Your Content -->
            <div id="container">
                <br>
                <div class="row text-center" style="font-family: 'Merriweather', serif; font-size:16px;">

                    <p class="subject">
                    <span class="blinking-cursor">|</span>
                      
                    </p>
                </div>
            </div>

            <footer class="site-footer push">This is a footer</footer>
        </div>  

	    <script src="js/pushy.min.js"></script>
	    <script>
		    var id;
			var i = 0;
			var output = "";

			var msg = "A TRIBUTE TO INDIAN ARMED FORCES";
			var letters = msg.split("");

			function showLetter() {

			  console.log(i);
			  var id = setInterval(function() {
			    if (i < letters.length) {
			      output += letters[i];
			      $(".subject").fadeIn("fast", function() {
			        $(".subject").text(output);
			        // $(".blinking-cursor").fadeIn("fast").delay(100).queue(function() {
			        //   $(".blinking-cursor").fadeOut("fast").dequeue();
			        // }, 100);
			      });
			    } else {
			      clearInterval(id);
			    }
			    i++;
			  }, 200);
			  
			}

			$(document).ready(function() {
			  setTimeout(function() {
			    showLetter();
			  }, 1500);
			});
	    </script>
	</body>
</html>
