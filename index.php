<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Nick Warren</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/socicon.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body class="Site">
        <!--[if lte IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        [endif]-->

        <!-- Add your site or application content here -->
    <div class="header-container">
      <header class="wrapper clearfix">
        <h1 class="title">Nick Warren</h1></a>
        <div class="centerDiv">
          <nav class="topnav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="media.html">Media</a></li>
          </nav>
        </div>
  		</header>
    </div>


    <div class="main-container Site-content">
      <div class="main wrapper clearfix">
        <article class="leftpage">
          <header>
            <h2>Welcome to my site!</h2>
            </header>
            <section>
                This is my personal website - on it you can find information about projects which I have delved into, and .<br><br>
                I am a student at the <a href="http://www.reading.ac.uk/">University of Reading</a> studying Electronic Engineering (BEng).<br>
                In my spare time, I like tinkering with RC Multirotors, playing the French Horn and I'm also a fairly keen Archer!<br>
                <?php
                  $str   = @file_get_contents('/proc/uptime');
                  $num   = floatval($str);
                  $secs  = fmod($num, 60); $num = (int)($num / 60);
                  $mins  = $num % 60;      $num = (int)($num / 60);
                  $hours = $num % 24;      $num = (int)($num / 24);
                  $days  = $num;
                  echo "The server has been up for " . $days . " days, " . $hours . " hours, and " . $mins . " minutes.";// echo the results
                ?>
                <br>
            </section>

            <header>
              <h3>Links</h3>
            </header>
            <div class="imgWrap">
              <a href="http://octoprint.niwarren.co.uk">
                <img src="img/octoprint_thumb.png" alt="Octoprint Server"/>
                <h2 class="imgWrapDescription">Octoprint Server</h2>
              </a>
            </div>
          </article>
        <aside class="rightaside">
          <script src="https://www.reddit.com/hot/.embed?limit=5&t=all=true" type="text/javascript"></script>
        </aside>
        <br>
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
        <p>Copyright &copy N.Warren 2016-2017</p>
      </footer>
    </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
