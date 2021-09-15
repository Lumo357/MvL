<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mí Vida Łoca</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <?php require_once("data.php"); ?>
    <!--slick -->
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <header>
        <div id="top-logo">
            <a href="index.php">
                <img src="images/logo.jfif" alt="MvLのロゴ">
            </a>
        </div>

        <div>
            <ul id="top-menu">
                <li><a href="about/index.php">ABOUT</a></li>
                <li><a href="players/index.php">PLAYERS</a></li>
                <li><a href="news/index.php">NEWS</a> </li>
            </ul>
        </div>

        <div class="slide-menu">
            <i class="fas fa-bars menu-icon"></i>
            <ul id="menu-bar">
                <li><a href="about/index.php">ABOUT</a></li>
                <li><a href="players/index.php">PLAYERS</a></li>
                <li><a href="news/index.php">NEWS</a> </li>
            </ul>
        </div>

    </header>

    <main>
        <div id="main-logo">
            <img src="images/logo.jfif" alt="MvLのロゴ">
        </div>
            
        </div>
        <div class="news">
            <img src="images/test-background.jpg" alt="" class="news-background">

            <div class="news-content">
                <h1>WHAT'S NEW</h1>
            <ul>
                <li><a href="#"><section class="news-date">2021.9.1</section><section class="news-title">クラン内　イベント</section></a></li>
                <li><a href="#"><section class="news-date">2021.8.25</section><section class="news-title">新メンバー　XXXさんが加入</section></a></li>
                <li><a href="#"><section class="news-date">2021.8.23</section><section class="news-title">Z杯　優勝</section></a></li>
            </ul>
            
            <a href="news/index.php" class="detail-btn">VIEW MORE</a>
            </div>                      
            
        </div>

        <div class="players">
            <h1>PLAYERS</h1>
            <ul class="player-top-list">
                <?php foreach($players as $player): ?>
                    <li>
                        <div class="player-info">
                            <img src="<?php echo $player->getImage() ?>" alt="" class="player-img">
                            <p class="player-name"><?php echo $player->getName() ?></p>
                        </div>
                    </li>
                <?php endforeach?>
            </ul>
            
            <a href="players/index.php" class="detail-btn">VIEW MORE</a>
            
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

    <!--slick + jquery-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="script.js"></script>
    <script src="slick.js"></script>
    
</body>
</html>