<?php

require("php/include.php");
$page = new Page();
$page->showHeader('Watch');
?>
        <link href="css/watch.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body class="black">

<?php
$page->showNav();
?>

        <div class="streaming container" id="index-banner" >
            <div class="section no-pad-bot">
                <div class="row" id="content" role="main">
                    <h1 class="page-title white-text"><span class="stitle"></span></h1>
                    <!-- Player -->
                    <div id="player">
                        <div class="col-left">
                            <iframe width="70%" height="450" src="" frameborder="0" scrolling="no" class="live_embed_player" id="twitch_player" allowfullscreen></iframe>
                        </div>
                        <div class="col-right">
                            <iframe frameborder="0" scrolling="no" id="chat_embed" src="" height="450" width="29%"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row container">
            <ul class="collection">
                <li class="collection-item black white-text">When someone is live, the
                    video should load automatically.
                </li>
                <li class="collection-item black white-text">You can also see the live
                    status of our streamers below on their own channels. If you want to
                    switch to a different channel, simply click on the corresponding
                    box!
                </li>
            </ul>
            <h6 id="members"></h6>
        </div>

<?php
$page->showFooter();
?>
        
        <!--  Scripts-->
        <script type="text/javascript" src='js/jquery/jquery-2.2.4.min.js'></script>
        <script type="text/javascript" src='js/jquery/jquery-ui.min.js'></script>
        <script type="text/javascript" src="js/twitchstreamv2.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
    </body>
</html>
