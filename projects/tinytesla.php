<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nick Warren</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=1.0">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=1.0">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=1.0">
        <link rel="manifest" href="/manifest.json?v=1.0">
        <link rel="mask-icon" href="/safari-pinned-tab.svg?v=1.0" color="#5bbad5">
        <link rel="shortcut icon" href="/favicon.ico?v=1.0">

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/socicon.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body class="Site">
        <!--[if lte IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        [endif]-->

        <!-- Add your site or application content here -->
    <div class="header-container">
      <header class="wrapper clearfix">
        <img src="../img/full_logo2_white.svg" alt="Nick Warren" width="325" height="45">
        <div class="centerDiv">
          <nav class="topnav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../projects.php">Projects</a></li>
            <li><a href="../media.php">Media</a></li>
          </nav>
        </div>
  		</header>
    </div>

<!--=========================================================================-->

    <div class="main-container Site-content">
      <div class="main wrapper clearfix">

        <section>
          <article class="leftpage">
            <header>
              <h2>OneTesla TinyTesla DRSSTC - October 2017</h2>
            </header>
              <p>I have for some time wanted to experiment with high-voltage;
              specifically a Tesla Coil. Recently, a Massachusetts company called
              <a href="onetesla.com">OneTesla</a> has started offering relatively
              inexpensive kits to build a type of coil called a DRSSTC, or Dual
              Resonant Solid-State Tesla Coil. This design of coil can produce a
              visually impressive display of streamer arcs from a comparatively
              low input power.</p>

              <p>The nature of DRSSTCs allows the interruption of their streamer
              arcs within audio-frequency ranges. This allows DRSSTCs to act as
              speakers, using the rapid heating and cooling of the air surrounding
              the arcs to generate sound waves in the air. Even a low-power small
              coil such as this can be extremely loud.</p>

              <p>In order to control the audio of the Tesla Coil, a specially
              designed USB Midi device which outputs signals over a Fibre-optic
              connection is used. This in my opinion is not a great solution, as
              the device requires a laptop to control it. I plan to design a
              standalone controller using an SD card to store files for playback
              and control dials for volume and frequency. An additional feature
              of this controller will be a MIDI input port, to enable live playback
              on a MIDI keyboard for example to the coil.</p>
          </article>

          <aside class="rightaside">
            <img src="../img/placeholderTinyTesla.png" alt="Image Missing: TinyTesla in Operation" width="300" height="450">
          </aside>
        </section>



      </div>
    </div>

<!--=========================================================================-->

    <div class="footer-container">
      <footer class="wrapper">
        <div class="footerbuttons">
          <ul class="soc">
              <li><a class="soc-mail" href="mailto:mail@niwarren.co.uk"></a></li>
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
