<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Neil Ross is a London based web developer, this site is home to his CV">
    <meta name="author" content="Neil Ross">
    <!-- Note there is no responsive meta tag here -->
    <title>Neil Ross - Frontend Developer</title>
  
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Archivo+Narrow:400,700,700i" rel="stylesheet">

  <script src="javascripts/modernizr.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37648196-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<?php
 /*Check cookie for intro */
if (isset($_COOKIE["noNeilsIntro"])|| isset($_GET['cv']) ) {
  $class ="brdr-black";
}
/*Check parameters played*/
if (isset($_GET['played']) && isset($_GET['contact']))  {
  $class ="brdr-black contact-go";
}
?>
<body class="<?php echo $class;?>">

<!-- Hi There, welcome to my CV page
I'm no longer available for Hire!
       _..._
      .'     '.      _
     /    .-""-\   _/ \
   .-|   /:.   |  |   |
   |  \  |:.   /.-'-./
   | .-'-;:__.'    =/
   .'=  *=|     _.='
  /   _.  |    ;
 ;-.-'|    \   |
/   | \    _\  _\
\__/'._;.  ==' ==\
         \    \   |
         /    /   /
         /-._/-._/
         \   `\  \
          `-._/._/

Thanks for checking out my source code, this page is pretty simple, a couple of things to note:
* I used a flexbox grid, just for fun. This is not the kind of code I would run on a commercial site, I'd likely import a float-based grid like bootstrap or foundation (at least until CSS Grid is supported in 2017)
* At launch I'm supporting IE Edge only, I've dropped support for IE10 back, I could have added all the polyfills for SVG and modernized out the VP unit but since I whipped this site up in my spare time I figured ¯\_(ツ)_/¯ I'll add better support going forward.

Check out my CV and if you're hiring Frontend developers Contact Me.

 -->

<header>
<div class="container-fluid">
    <div class="row">
<div class=" col-xs-12 col-sm-4 bottom">
    <div id="logo" class="marquee">
        <h1><a href="/">
        <!-- words span wrapped for control -->
            <span class="n">Neil</span>
            <span class="r">Ross</span>
            <span class="f">Frontend</span>
            <span class="d">Dev.</span>
            </a>
        </h1>
    </div>
</div>
<div class="col-xs-12 col-sm-6 col-sm-offset-2 co middle">
    <nav>
        <ul class="row between-xs">
        <li class="col-xs"><a href="portfolio.php">Portfolio</a></li>
           <!--  <li class="col-xs"><a href="cv.php">Curriculum Vitae</a></li> -->
            <li class="col-xs"><a id="contact-link" href="#contact">Contact</a></li>
        </ul>
    </nav>
</div>
    </div>
</div> <!-- /container -->
<div class="brdr-box"></div>
</header>

 
	 <main class="content">
    <section class="portfolio">
        <div class="wrap container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <h1>My work Portfolio:</h1>
            </div>
            <!-- /.col-sm-12 col-md-10 col-md-offset-1 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                 <article class="portfolio-entry">
                     <img src="images/portfolio/rumble/portfolio-teaser.jpg" />
                     <div class="entry-info">
                         <h3>Rumble Films</h3>
                         <p>
                             A custom wordpress site with ajax video gallery, and preloaded GIF rollovers.
                         </p>
                         <a class="button sml-arrow" href="rumble.php">View Case Study</a>
                     </div>
                     <!-- /.entry-info -->
                 </article>
                 <!-- /.portfolio-entry -->
            </div>
            <!-- /.col-sm-6 col-md-5 col-md-offset-1 -->
            <div class="col-xs-12 col-sm-6 col-md-5">
                 <article class="portfolio-entry">
                     <img src="images/portfolio/left-baggage/portfolio-teaser.jpg" />
                     <div class="entry-info">
                         <h3>Left Luggage</h3>
                         <p>
                             A booking site to take reservations for left luggage services at train stations &amp; airports nationwide.   
                         </p>
                         <a class="button sml-arrow" href="left-luggage.php">View Case Study</a>
                     </div>
                     <!-- /.entry-info -->
                 </article>
                 <!-- /.portfolio-entry -->
            </div>
            <!-- /.col-sm-6 col-md-5 -->
        </div> <!-- /row -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                 <article class="portfolio-entry">
                     <img src="images/portfolio/bag-wrap/bag-wrap-teaser.jpg" />
                     <div class="entry-info">
                         <h3>Bag Wrap</h3>
                         <p>
                            A Responsive Marketing site to promote Secure Luggage Bag Wrapping at Airports &amp; Rail stations.

                         </p>
                         <a class="button sml-arrow" href="https://www.bagwrap.com/">Visit Site</a>
                     </div>
                     <!-- /.entry-info -->
                 </article>
                 <!-- /.portfolio-entry -->
            </div>
            <!-- /.col-sm-6 col-md-5 col-md-offset-1 -->
            <div class="col-xs-12 col-sm-6 col-md-5">
                 <article class="portfolio-entry">
                     <img src="images/portfolio/asa-business/asa-teaser.jpg" />
                     <div class="entry-info">
                         <h3>Asa Business Consultancy</h3>
                         <p>
                             A responsive  marketing site to promote Asa Business Consultancy, and detail their extensive services.  
                         </p>
                         <a class="button sml-arrow" href="http://www.asabusiness.co.uk/">Visit Site</a>
                     </div>
                     <!-- /.entry-info -->
                 </article>
                 <!-- /.portfolio-entry -->
            </div>
            <!-- /.col-sm-6 col-md-5 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1 col-xs-12">
                <h3 class="text-center-heading">More Coming Soon...</h3>
            </div>
            <!-- /.col-sm-12 col-md-10 col-md-offset-1 -->
        </div>
        <!-- /.row -->
        </div> <!-- /wrap container-fluid -->
        </article>
    </main>




<footer>
    <div class="container-fluid wrap">
    <div class="row middle-xs">
        <div class="col-xs-4 left">
            <p>&copy; 2017&nbsp;-&nbsp;<?php echo date("Y"); ?> Neil Ross.</p>
        </div>
        <!-- /.col-sm-4 left -->
        <div class="col-xs-4 col-xs-offset-4 right">
            <div class="credits">
                Photo by <a href="http://www.kitsch-studio.com/">Kitsch</a>

            </div>
        </div>
        <!-- /.col-sm-4 col-offset-4 right -->
        </div>
    </div>
    <!-- /.container-fluid wrap -->
</footer>


  <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/j.js"></script>

</body>

</html>