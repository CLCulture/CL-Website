<?php

require("php/include.php");
$page = new Page();
$page->showHeader('Home');
?>

  <style>
    @font-face {
      font-family: BebasNeue;
      src: url(./fonts/bebasneue/BebasNeue.woff);
    }

    h1.wh1{
      font-family: BebasNeue;
      text-shadow: 4px 2px 4px #fff;
    }

    h4.wh2{
      font-family: BebasNeue;
      text-shadow: 2px 2px 2px #fff;
    }

    h5.wh3{
      text-shadow: 2px 2px 2px #000;
    }
    </style>
</head>
<body class=black>
<?php
$page->showNav();
?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center black-text wh1">International Video Game and Anime Syndicate</h1>
        <div class="row center">
          <h4 class="header black-text wh2">Bridging the Anime and Video Gaming communities together since 2017.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="./img/Background1.jpg" alt="Shiny Image 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons">group</i></h2>
            <h5 class="center white-text">Coummunity Focused</h5>

            <p class="light white-text">We focus primarily on Anime and Video Games but its not all we do! Our goal is to create an environment open and accepting of anyone from any background as long as they follow the rules and guidelines.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons">videogame_asset</i></h2>
            <h5 class="center white-text">Melting Pot Of Different Skill Levels</h5>

            <p class="light white-text">Our members are from all over the globe and all have different and unique skillsets in games. Not sure where to start? Ask away in the <a href='https://discord.gg/HHskkZp'>Discord</a> in the #video-games channel</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons">video_library</i></h2>
            <h5 class="center white-text">Anime 101</h5>

            <p class="light white-text">Does "Senpai" not notice you? Do you want "Senpai" to notice you? Well then! We have a vast collection of channels for Anime and Anime-related content! Go post and maybe "Senpai" will notice your hard work and effort.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header white-text">Cool guys don't look at explosions... They make them.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="./img/Background2.jpg" alt="Shiny Image 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3 class="center white-text">Contact</h3>
          <a class="waves-effect waves-light btn white black-text" href="https://discord.gg/HHskkZp" target="_blank"><i class="material-icons left black-text">chat</i>Contact us</a>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="wh3 header white-text">Having issues is one thing; Having a full blown weakness to cute things is a whole different story. ~100chilly</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="./img/Background3.jpg" alt="Shiny Image 2"></div>
  </div>

<?php
$page->showFooter();
?>


  <!--  Scripts-->
  <script type="text/javascript" src='js/jquery/jquery-2.2.4.min.js'></script>
  <script type="text/javascript" src='js/jquery/jquery-ui.min.js'></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
