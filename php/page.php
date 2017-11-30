<?php
class Page {
  public function __construct() {
  
  }

  public function showHeader($_title) {
    $html = '
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
            <title>International Video Game and Anime Syndicate - ';
    $html .= $_title;
    $html .= '</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  ';
  print($html);
  }

  public function showNav() {
    $html = <<<'EOT'
    <nav class="black" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="./" class="brand-logo white-text">IVGAS</a>
      <ul class="right hide-on-med-and-down">
          <li><a class="white-text" href="./">Home</a>
          <!-- <li><a class="white-text" href="./staff">Staff</a> -->
          <li><a class="white-text" href="http://discord.ivgas.online/" target="_blank" rel="noopener">Discord</a>
          <li><a class="white-text" href="./watch">Streams</a>
          <li><a class="white-text" href="./rules">Rules</a>
          <li><a class="white-text" href="./tos">Terms & Privacy Policies</a>
      </ul>

      <ul id="nav-mobile" class="sidenav">
          <li><a class="white-text" href="./">Home</a>
          <!-- <li><a class="white-text" href="./staff">Staff</a> -->
          <li><a class="white-text" href="http://discord.ivgas.online/" target="_blank" rel="noopener">Discord</a>
          <li><a class="white-text" href="./watch">Streams</a>
          <li><a class="white-text" href="http://rules.ivgas.online/" target="_blank" rel="noopener">Rules</a>
          <li><a class="white-text" href="./tos">Terms & Privacy Policies</a>
      </ul>
      <a href="#" data-activates="nav-mobile" class="sidenav-trigger button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
EOT;
    print($html);
  }

  public function showFooter() {
    $html = <<<'EOT'
    <footer class="page-footer black">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">About us</h5>
                <p class="white-text"><b>International Video Game and Anime Syndicate (IVGAS)</b> is a new community that doesn't just focus on mainstream gaming or even gaming as a whole. We are a very diverse group of people who come from all walks of life and enjoy gaming or anime or even both! We don't have one set focus on one topic. If you decide to become a full fledged member of IVGAS, you will be able to join others on being a "VGA VIP" and enjoy alot of fun with like minded people. If you curious, drop by the Discord! We hope to see you there!</p>
  
  
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="https://github.com/IVGASCommunity" target="_blank" rel="noopener">Github</a></li>
                    <li><a class="white-text" href="https://mixer.com/team/IVGAS" target="_blank" rel="noopener">Mixer Team</a></li>
                    <li><a class="white-text" href="https://www.twitch.tv/communities/ivgas" target="_blank" rel="noopener">Twitch Community</a></li>
                    <li><a class="white-text" href="https://player.me/ivgas" target="_blank" rel="noopener">Player.me</a></li>
                    <li><a class="white-text" href="https://twitter.com/IVGASCommunity" target="_blank" rel="noopener">Twitter</a></li>
                    <li><a class="white-text" href="https://discord.gg/HHskkZp" target="_blank" rel="noopener">Discord</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright white">
        <div class="container black-text">
          Made with &hearts; by <a class="blue-text" href="https://github.com/IVGASCommunity/" target="_blank">International Video Game and Anime Syndicate (IVGAS)</a>
        </div>
    </div>
  </footer>
EOT;
    print($html);
  }

}
?>
