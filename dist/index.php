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

<div id="container" class="vp-height">
   <div id="shape-container">
      <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 960 560" style="enable-background:new 0 0 960 560;">
        <style>
          .st0{clip-path:url(#XMLID_27_);stroke:#FFFFFF;stroke-miterlimit:10;} .st1{clip-path:url(#XMLID_27_);} .st2{fill:#FFFFFF;} .st3{fill:none;} .st4{enable-background:new ;}
        </style>
        <g id="XMLID_19_">
          <defs>
            <polygon id="triangle" points="480,560 720,0 480,0 240,0"/>
          </defs>
          <clipPath id="XMLID_27_">
            <use xlink:href="#triangle" style="overflow:visible;"/>
          </clipPath>
          <rect id="bg" x="0" y="0" class="st0" width="960" height="560"/>
         <!--  <polygon id="line" x="475" y="0" points="475,560 485,560 485,0 475,0" /> -->
          <g id="bmb" class="st1">
            <g id="XMLID_4_">
              <g id="XMLID_6_">
                <path id="XMLID_34_" class="st2" d="M481.3 188.8c-8.7-.7-15.7-8.5-19.7-15.9-4.4-8.3-6.4-17.8-7.2-27.3-.8-9.7-.3-19.6.5-29.3.9-11.3 2.5-22.4 4.8-33.5 2.3-11.2 5.3-22.2 8.6-33.1 1.6-5.3 3.6-10.6 5.7-15.7 1.1-2.7 2.2-5.5 3.3-8.2.5-1.3 1-2.5 1.5-3.8s1.2-2.6 1.3-4c0-.5-.5-.8-.9-.5-.2.1-.2.2-.3.4-1.3 1.6-2 4.2-2.8 6l-3.5 8.1c-2.2 5.1-4.2 10.4-5.9 15.7-3.5 10.6-6.5 21.4-8.8 32.3-2.4 10.8-4.2 21.7-5.3 32.8-1 9.8-1.6 19.7-1.2 29.6.5 10.8 2.5 21.7 7.4 31.3 4.4 8.6 12.5 17.3 22.4 18.1 1.9.1 2-2.9.1-3z"/>
                <path id="XMLID_21_" class="st2" d="M481.3 188.8c8.7-.7 15.7-8.5 19.7-15.9 4.4-8.3 6.4-17.8 7.2-27.3.8-9.7.3-19.6-.5-29.3-.9-11.3-2.5-22.4-4.8-33.5-2.3-11.2-5.3-22.2-8.6-33.1-1.6-5.3-3.6-10.6-5.7-15.7-1.1-2.7-2.2-5.5-3.3-8.2-.5-1.3-1-2.5-1.5-3.8s-1.2-2.6-1.3-4c0-.5.5-.8.9-.5.2.1.2.2.3.4 1.3 1.6 2 4.2 2.8 6L490 32c2.2 5.1 4.2 10.4 5.9 15.7 3.5 10.6 6.5 21.4 8.8 32.3 2.4 10.8 4.2 21.7 5.3 32.8 1 9.8 1.6 19.7 1.2 29.6-.5 10.8-2.5 21.7-7.4 31.3-4.4 8.6-12.5 17.3-22.4 18.1-1.8.1-2-2.9-.1-3z"/>
                <path id="XMLID_20_" class="st2" d="M483.5 17.2c-1-.1-2 0-2.9-.4-1-.5-1.8 1-.9 1.5 1.2.6 2.5.8 3.8.7 1.2-.2 1.2-1.8 0-1.8z"/>
                <g id="XMLID_15_">
                  <path id="XMLID_18_" class="st2" d="M467.8 46.6c-.8-1.1-1.7-1.7-2.9-2.2-1.8-.8-3.2-1.8-4.7-3-1.3-1-2.6-1.8-4-2.5-1.5-.9-3.1-1.9-4.8-2.2-1.2-.2-2.1 1.5-.9 2.1 2.9 1.4 5.9 2.7 8.5 4.7 1 .8 2.1 1.6 3.2 2.3 1.4.8 2.8 1 3.7 2.3.8.9 2.6-.5 1.9-1.5z"/>
                  <path id="XMLID_17_" class="st2" d="M450.5 19.5c0-5.9.1-11.8-.1-17.6 0-1.3-1.9-1.3-2 0-.2 5.9-.1 11.8-.1 17.6s0 11.8.2 17.6c0 1.2 1.8 1.2 1.8 0 .2-5.9.2-11.8.2-17.6z"/>
                  <path id="XMLID_16_" class="st2" d="M482.1.3c-2.4-.5-5-.3-7.4-.3H466c-5.7 0-11.4 0-17.1.1-1.4 0-1.4 2.2 0 2.2 5.7 0 11.4.1 17.1.1h8.1c2.7 0 5.5.3 8.1-.3.8-.2.8-1.5-.1-1.8z"/>
                </g>
                <g id="XMLID_11_">
                  <path id="XMLID_14_" class="st2" d="M494.2 46.6c.8-1.1 1.7-1.7 2.9-2.2 1.8-.8 3.2-1.8 4.7-3 1.3-1 2.6-1.8 4-2.5 1.5-.9 3.1-1.9 4.8-2.2 1.2-.2 2.1 1.5.9 2.1-2.9 1.4-5.9 2.7-8.5 4.7-1 .8-2.1 1.6-3.2 2.3-1.4.8-2.8 1-3.7 2.3-.9.9-2.7-.5-1.9-1.5z"/>
                  <path id="XMLID_13_" class="st2" d="M511.5 19.5c0-5.9-.1-11.8.1-17.6 0-1.3 1.9-1.3 2 0 .2 5.9.1 11.8.1 17.6s0 11.8-.2 17.6c0 1.2-1.8 1.2-1.8 0-.3-5.9-.2-11.8-.2-17.6z"/>
                  <path id="XMLID_12_" class="st2" d="M479.8.3c2.4-.5 5-.3 7.4-.3h8.8c5.7 0 11.4 0 17.1.1 1.4 0 1.4 2.2 0 2.2-5.7 0-11.4.1-17.1.1h-8.1c-2.7 0-5.5.3-8.1-.3-.9-.2-.9-1.5 0-1.8z"/>
                </g>
                <path id="XMLID_10_" class="st2" d="M480.5 9.2c-.1-1.1-1.6-1.1-1.6 0-.3 2.9 0 6 .1 9 0 .9 1.4.9 1.4 0 .1-3 .4-6.1.1-9z"/>
                <path id="XMLID_9_" class="st2" d="M484.5 8c-.9-.5-2.3-.3-3.2-.2-.8 0-1.8.2-2.2 1.1-.1.2.1.3.3.4.8 0 1.6 0 2.4.1.9.1 1.9.5 2.7 0 .6-.3.5-1.1 0-1.4z"/>
                <path id="XMLID_8_" class="st2" d="M485.1 9.4c0-1-1.5-1-1.5 0-.1 3.3-.3 6.7-.1 9.9.1 1.1 1.7 1.1 1.7 0 .2-3.2 0-6.6-.1-9.9z"/>
                <path id="XMLID_7_" class="st2" d="M502.6 83c-14.3-.2-28.8-.1-43.1.6-.6 0-.6.9 0 .9 14.3.7 28.8.9 43.1.6 1.4 0 1.4-2.1 0-2.1z"/>
              </g>
              <path id="XMLID_5_" class="st2" d="M456.3.7c.3-.4-.4-.8-.7-.4"/>
            </g>
            <path id="XMLID_2_" class="st3" d="M464 129.1h36v32.2h-36v-32.2z"/>
            <g id="XMLID_22_" class="st4">
              <path id="XMLID_23_" class="st2" d="M476.5 136.8c.2.3.4.5.5.8.1.2.1.6.1 1.2v3.1c0 .3 0 .5.1.6s.3.2.6.2.5.1.7.3.3.4.3.7-.1.5-.3.7-.4.3-.7.3c-.4 0-.8-.1-1.2-.3s-.7-.6-1-1.1c-.2-.3-.3-.7-.3-1.2v-3.5c0-.3 0-.5-.1-.6s-.3-.2-.6-.2-.5-.1-.7-.3-.2-.4-.2-.7.1-.5.2-.7.4-.3.7-.3.5-.1.5-.2c.1-.1.2-.3.2-.6v-3.3c0-.7.3-1.3.8-1.8s1.1-.8 1.8-.8c.3 0 .6.1.8.3s.3.4.3.7-.1.5-.3.7-.4.3-.7.3c-.3 0-.4.1-.5.2-.1.1-.2.3-.2.6v3.1c0 .4 0 .8-.1 1-.3.3-.5.5-.7.8zm11 0c-.2-.3-.4-.5-.5-.8s-.1-.6-.1-1v-3.1c0-.3 0-.5-.1-.6s-.3-.2-.6-.2-.5-.1-.7-.3-.3-.4-.3-.7.1-.5.3-.7c.2-.2.4-.3.7-.3.4 0 .8.1 1.2.3s.7.6 1 1.1c.2.3.3.7.3 1.2v3.3c0 .3 0 .5.1.6s.3.2.6.2.5.1.7.3.2.4.2.7-.1.5-.2.7-.4.3-.7.3-.5.1-.5.2c-.1.1-.2.3-.2.6v3.5c0 .7-.3 1.3-.8 1.8s-1.1.8-1.8.8c-.3 0-.6-.1-.8-.3-.2-.2-.3-.4-.3-.7s.1-.5.3-.7c.2-.2.4-.3.7-.3.3 0 .4-.1.5-.2.1-.1.2-.3.2-.6v-3.1c0-.6 0-1 .1-1.2.3-.3.4-.6.7-.8z"/>
            </g>
          </g>
        </g>
      </svg>
  </div> <!-- /shape-container -->

  <div id="hero" class="marquee">
        <h1>
        <!-- words span wrapped for control -->
            <span class="n">Neil</span>
            <span class="r">Ross</span>
            <span class="f">Frontend</span>
            <span class="d">Dev.</span>
        </h1>
  </div>
  
  <div class="preload-bg"></div>
</div><!--  /#container -->

<section id="cookies">
 <div class="container-fluid wrap">
     <div class="row">
         <div class="col-sm-6 col-xs-12">
             <h3>Intro?</h3>
     <p> If you want, I'll give you a cookie, and then you won't have to see my animated intro again.</p>
         </div>
         <div class="col-xs-6 col-sm-2 col-sm-offset-1">
         <a href="#" id="yes-cookie" class="button"><span class="top-line">Yes</span> never again</a>
         </div>
         <div class="col-xs-6 col-sm-2 col-sm-offset-1">
           <a href="" class="button" id="no-cookie"><span class="top-line">No</span> I LIKE that intro</a>
         </div>
     </div>
 </div>   
 </section>
  <!-- /.cookies -->   

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

 
	<section class="masthead">

<picture>

  <source media="(min-width: 48em)"
          srcset="images/portrait.jpg">

  <img src="images/portrait-mobile.jpg"
      alt="">

</picture>

<div class="holder">
     <a id="who" href="#about" class="button who">Who?</a>     
</div>

<div class="socials">
  <ul class="row between-xs">
    <li class="col-xs"><a class="twit" href="https://twitter.com/MendTheFrontend">Twitter</a></li>
    <li class="col-xs"><a class="ghub" href="https://github.com/NeilWkz">Github</a></li>
    <li class="col-xs"><a class="codepen" href="http://codepen.io/NeilWkz/">Codepen</a></li>
    <li class="col-xs"><a class="stack-overflow" href="http://stackoverflow.com/users/2970095/neilwkz">Stack Overflow</a></li>
  </ul>
</div>  
        

</section>

<main class="with-mast content">
    <div class="wrap container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-6">
            <h2 id="about" class="like-h3 anim-me">About <span class="trail">Me</span></h2>
            <p><em>Hi, I'm Neil Ross</em>
            I'm a London Based Frontend Developer with 11 years industry experience, I'm obsessed with CSS, and using it to create beautiful web experiences on any screen you can imagine.</p>
            <p>I love challenging designs, and working to create unique performant interfaces that serve my client's user needs.</p>
            <p><em>Want to know more?</em><br /> Get in touch via the contact form.</p>



            </div>
            <!-- /.col-xs-8 -->
            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1">
                <form id="contact-form" action="https://formspree.io/neilross.wkzdesign@gmail.com"
      method="POST" novalidate>
      <h3 id="contact" class="contact-head anim-me">Contact <span class="trail">Me</span></h3>
                    <div class="row ">
                        <div class="col-xs-12 col-sm-6">
                        <div class="form-wrap">
                            <input class="floatlabel input_label" minlength="2"  name="name" type="text" required>
                            <label class="contact_label" for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                        <div class="form-wrap">
                            <input class="floatlabel input_label" type="email" name="email" required>
                            <label class="contact_label" for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xs-12">
                        <div class="form-wrap textarea-wrap">
                            <textarea class="floatlabel input_label" name="message" id="" minlength="2" required></textarea>
                            <label class="contact_label" for="message">Message</label>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xs-12">
                        <div class="form-wrap submit-wrap">
                        <button class="button form-submit" type="submit">Send</button>
                       
                        </div>
                    </div>
                    </div>
                    <input type="text" name="_gotcha" style="display:none" />
                    </form>
            </div>
            <!-- /.col-xs-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.wrap container-fluid -->
</main>
 <section id="cookies">
 <div class="container-fluid wrap">
     <div class="row">
         <div class="col-sm-6 col-xs-12">
             <h3>Cookies?</h3>
         <p> If you want, I'll give you a cookie, and then you won't have to see my animated intro again.</p>
         </div>
         <div class="col-xs-6 col-sm-2 col-sm-offset-1">
         <a href="#" id="yes-cookie" class="button"><span class="top-line">Yes</span> never again</a>
         </div>
         <div class="col-xs-6 col-sm-2 col-sm-offset-1">
           <a href="" class="button" id="no-cookie"><span class="top-line">No</span> I LIKE that intro</a>
         </div>
     </div>
 </div>
     
     
     
 </section>




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