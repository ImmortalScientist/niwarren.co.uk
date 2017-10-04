<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nick Warren | Projects | Tricopter v4</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=1.0">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=1.0">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=1.0">
        <link rel="manifest" href="/manifest.json?v=1.0">
        <link rel="mask-icon" href="/safari-pinned-tab.svg?v=1.0" color="#5bbad5">
        <link rel="shortcut icon" href="/favicon.ico?v=1.0">


        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="../../css/socicon.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body class="Site">
        <!--[if lte IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        [endif]-->

        <!-- Add your site or application content here -->
    <div class="header-container">
      <header class="wrapper clearfix">
        <img src="/img/full_logo2_white.svg" alt="Nick Warren" width="325" height="45">
        <div class="centerDiv">
          <nav class="topnav">
            <li><a href="../../index.php">Home</a></li>
            <li class="active"><a href="../../projects.php">Projects</a></li>
            <li><a href="../../media.php">Media</a></li>
          </nav>
        </div>
  		</header>
    </div>

    <div class="main-container Site-content">
      <div class="main wrapper clearfix">
        <article>
          <header>
            <h2>RCExplorer Tricopter V4 - August 2016</h2>
          </header>
          <section>
            <span>
              Thanks to the brilliant design from David Windestål of <a href="http://rcexplorer.se">Rcexplorer.se</a>, I built a folding tricopter based on the custom FCF3 tricopter Flight Controller.
            </span>
              <br>
              <img src="img/folded_v4.jpg" alt="Error: Image Missing - Tricopter V4 landed" width="400" height="300"/>
              <img src="tricopter_flight.jpg" alt="Error: Image Missing - Tricopter V4 In Flight" width="400" height="300"/>
              <br>
            <span>
              The tricopter consists of three carbon-fibre booms with 2217 size brushless DC motors mounted on each.
              The rear boom uses David's tail-rotor tilt mechanism to control its thrust direction.
              The folding booms are held in place by friction between the upper plate (FCF3 PCB) and the lower carbon-fibre plate.
              This friction is adjustable based on the tightness of four M3 screws.
              <br><br>
              Powered from a 4S (14.8V) Li-Polymer Battery, the tricopter theoretically should be able to fly for 10-20 minutes, but I have not flown enough to verify this.
              On a 4S pack, the model has plenty of power, and manoeuvres quite well.
              The model also has a custom 3d-printed canopy (printed on my <a href="../3dprinting/prusai3mk2.php">Prusa i3 MK2</a>) to protect the reciever and FCF3 header pins.
              <br><br>
            </span>
          </section>
        </article>
        <footer>
          <h3 class="returnlink"><a href="../../projects.php">Back to Projects Index</a></h3>
        </footer>
      </div>
    </div>

    <div class="footer-container">
      <footer class="wrapper">
        <div class="footerbuttons">
          <ul class="soc">
              <li><a class="soc-facebook" href="https://www.facebook.com/immortalscientist"></a></li>
              <li><a class="soc-linkedin" href="https://uk.linkedin.com/in/nicholas-warren-358244a7"></a></li>
              <li><a class="soc-github soc-icon-last" href="https://github.com/ImmortalScientist"></a></li>
          </ul>
        </div>
        <p>Copyright N.Warren &copy 2016-<?php echo date("Y")?></p>
      </footer>
    </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
