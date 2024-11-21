<?php 
require_once "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Image Slider</title>

    <link rel="stylesheet" href="style.css">
    <script src="bootstrap-5.3.1-dist/js/bootstrap.bundle.js/"></script>
   
</head>
<body>
    
    <header>

    </header>


    <div class="carousel container">

        <div class="list">

            <div class="item img-fluid" style="background-image: url(images/out.jpeg);">
                
                <div class="content">
                <div class="title">GRANDEUR HOTEL</div>
                <div class="name">OUTSKIRTCH</div>
                </div>

            </div>

            <div class="item img-fluid" style="background-image: url(images/rfc.jpg);">
                <div class="content">
                <div class="title">GRANDEUR</div>
                <div class="name">RECEPTION</div>
                </div>

            </div>

            <div class="item img-fluid" style="background-image: url(images/sd.jpg);">
                
                <div class="content">
                    <div class="title">GRANDEUR HOTEl</div>
                    <div class="name">ENVIRONS</div>
                </div>

            </div>

            <div class="item img-fluid" style="background-image: url(images/logo3.png);">
                
                <div class="content">
                    <div class="title">GRANDEUR HOTEL</div>
                </div>

            </div>

            <div class="item img-fluid" style="background-image: url(images/uo.jpg);">
                
                <div class="content">
                    <div class="title">GRANDEUR HOTEL</div>
                    <div class="name">RESTAURANT</div>
                </div>

            </div>

            <div class="item img-fluid" style="background-image: url(images/ch.jpg);">
                
                <div class="content">
                    <div class="title">GRANDEUR HOTEL</div>
                    <div class="name">CONFERENCE HALL</div>
                </div>

            </div>

            <div class="item img-fluid" style="background-image: url(images/sw.webp);">
                
                <div class="content">
                    <div class="title">GRANDEUR HOTEL</div>
                    <div class="name">SWIMMING POOL</div>
                </div>

            </div>

            <div class="item img-fluid" style="background-image: url(images/cu.jpeg);">
                
                <div class="content">
                    <div class="title">GRANDEUR HOTEL</div>
                    <div class="name">CINEMA HALL</div>
                </div>

            </div>

            <div class="item img-fluid" style="background-image: url(images/cr.jpg);">
                
                <div class="content">
                    <div class="title">GRANDEUR HOTEL</div>
                    <div class="name">BAR</div>
                </div>

            </div>

            <div class="item img-fluid" style="background-image: url(images/gy2.jpeg);">
                
                <div class="content">
                    <div class="title">GRANDEUR HOTEL</div>
                    <div class="name">GYM</div>
                </div>

            </div>

        </div>

        <div class="arrows">
            <button class="prev"><</button>
            <button class="next">></button>
        </div>


        <div class="timeRunning"></div>

    </div>

    <script src="app.js"></script>
<?php 
include "home page2.php";
?>
</div>
</body>
</html>