<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAYERS</title>
    <link rel="stylesheet" href="../style.css">
    <?php require_once("../data.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
    <header>
        <div id="top-logo">
            <a href="../index.php">
                <img src="../images/logo.jfif" alt="MvLのロゴ">
            </a>
        </div>

        <div>
            <ul id="top-menu">
                <li><a href="../about/index.php">ABOUT</a></li>
                <li><a href="index.php">PLAYERS</a></li>
                <li><a href="../news/index.php">NEWS</a> </li>
                
            </ul>
        </div>

        <div id="menu-bar">

        </div>

    </header>

    <main>
        <div class="players-wrapper">
            <h1>PLAYERS</h1>
            <div class = "player-list">
            <?php foreach ($players as $player): ?>

                <a class="player-block" href="#"?>
                    <img src="<?php echo "../{$player->getImage()}" ?>" alt="">
                    <p><?php echo $player->getName() ?></p>
                </a>
                
                <div class="player-detail">
                    
                        <img src="<?php echo "../{$player->getImage()}" ?>" alt="">
                        <button class="close-player-detail"><i class="far fa-window-close close-button"></i></button>
                        <h2><?php echo $player->getName() ?></h2>
                        <p>Introduction</p>
                    
                </div>                           

            <?php endforeach ?>
            </div>
        </div>
    </main>

    <footer>
        <div class="bottom-menu">
            <h2>CONTACT</h2>
            <a href="https://twitter.com/Mv59688079" target="_blank">
            <i class="fab fa-twitter-square twitter-icon"></i>
            https://twitter.com/Mv59688079
            </a>
        </div>

        <small>&copy;Mí Vida Łoca</small>
    </footer>

    <script src="script.js"></script>
</body>
</html>