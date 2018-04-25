<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nick Warren | Projects | Prusa i3 MK2 Enclosure</title>
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
            <h2>Enclosure & OctoPrint Instance</h2>
          </header>
            <p>To remedy the draft and allow for better printing in ABS, I planned an enclosure
            for the printer. An Ikea STUVA storage shelf was used as this was cost effective,
            and was large enough to accomodate the printer, and filament spool storage.</p>

            <p> The Ikea unit was assembled, and holes cut in the back panel to allow
            power and data cables to pass into the enclosure. A Raspberry Pi Model 3
            was attached to the exterior back panel with an optoisolated relay board.
            <a href="//<?php print $_SERVER{'SERVER_NAME'}; ?>:8888">Octoprint</a> was installed and custom scripts written to allow control of the
            printer's mains power, and LED lighting. A camera was mounted to the wall
            of the printer, pointing at the printbed, to monitor progress remotely
            and record time-lapse videos of interesting prints.</p>

            <p>Inside the enclosure, a wall-mounted spool holder holds the filament
            spool and two guide loops keep the filament in order to the extruder.
            This keeps un-necessary mass off the printer's frame, and keeps the filament
            clear of the camera's view.</p>
        </article>
        <footer>
          <h3 class="returnlink"><a href="../../projects.php">Back to Projects Index</a></h3>
        </footer>
      </div>
    </div>

<!--=========================================================================-->
<div class="footer-container">
  <footer class="wrapper">
    <div class="footerbuttons">
      <ul class="soc">
        <li><a class="soc-mail" href="mailto:&#109;&#097;&#105;&#108;&#064;&#110;&#105;&#119;&#097;&#114;&#114;&#101;&#110;&#046;&#099;&#111;&#046;&#117;&#107;"></a></li>
        <li><a class="soc-facebook" href="https://www.facebook.com/immortalscientist"></a></li>
        <li><a class="soc-linkedin" href="https://uk.linkedin.com/in/nicholas-warren-358244a7"></a></li>
        <li><a class="soc-github soc-icon-last" href="https://github.com/ImmortalScientist"></a></li>
      </ul>
    </div>
    <p>Copyright N.Warren &copy; 2016-<?php echo date("Y")?></p>
  </footer>
</div>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
