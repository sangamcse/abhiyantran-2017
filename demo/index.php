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
        <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    </head>
    <body>
           
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
                    <li class="pushy-link"><img src="images/abhilogo.svg" class="center-block" height=150px width=150px></li>
                    <li class="pushy-link"><a href="#">Home</a></li>
                    <li class="pushy-link"><a href="#">Speakers</a></li>
                    <li class="pushy-link"><a href="#">Events</a></li>
                    <li class="pushy-link"><a href="#">RIS</a></li>
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
            <!--    Blinking Text    -->
			<div class="row text-center" style="font-family: 'Merriweather', serif; font-size:16px;">
				<p class="subject">
				<span class="blinking-cursor">|</span>
				</p>
			</div>
			            <!--    Blinking Text Ends    -->
			            <br>
		<div class="row">
				<div class="">
		
		<img src="images/abhilogo.svg" class="center-block" height=470px width=300px>
		
		        </div>
		</div>
		<div>
		    <div class="">

		    </div>
		    <div class="pull-right">
		        <ul>
		             <li><a href="http://nitsikkim.ac.in/" target="_blank"><img class="icon" src="https://upload.wikimedia.org/wikipedia/en/c/c7/National_Institute_of_Technology_Sikkim_logo.png" alt="NIT Sikkim" height=40px width=40px></a></li>
		            <li><img class="icon" src="images/icons/facebook.png" height=40px width=40px></li>
		            <li><img class="icon" src="images/icons/Instagram.png" height=40px width=40px></li>
		            <li><img class="icon" src="images/icons/linkedin.png" height=40px width=40px></li>
		            <li><img class="icon" src="images/icons/play.png" height=40px width=40px></li>
		            <li><img class="icon" src="images/icons/youtube.png" height=40px width=40px></li>
		        </ul>
		    </div>
		</div>
        </div>

       <!-- <footer class="site-footer push">This is a footer</footer> -->
	</body>
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

</html>
