<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Deze website is voor de periode 2 project">
    <meta name="author" content="Malik Omri">
    <meta name="keywords" content="project 2, opdracht, Mbo, Rijnland, Leiden">
    <title>Project 2</title>
    <link rel="stylesheet" href="../css/global.css">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="../js/Reviews.js" defer></script>
</head>

<body>

    <header>
        <section class="Winkel_info">
            <img class="logo_foto" src="../img/logo.png" alt="logo">
            <section class="Zoeken">
                <input id="searchBar" class="searchbar" type="text" placeholder="Zoeken...">
                <a href="contact.html" id="btnSearch" class="btn-search"><i class="fa fa-search"></i></a>
            </section>
            <i id="winkelwagen" class="fa fa-shopping-cart"></i>
            <i id="profiel" class='far fa-user-circle'>Inloggen</i>
        </section>
        <nav>
            <a href="../index.html">Home</a>
            <a href="../html/games.html">Games</a>
            <a href="../html/merchandise.html">Merchandise</a>
            <a href="../html/contact.html">Contact</a>
            <a href="review.php">Reviews</a>
            <a href="latest.php">Latest Reviews</a>
        </nav>
    </header>

    <main>
        <section class="review_Page">
            <section class="gameReview1PHP">
                <?php
                // Malik gedeelte van game review 1 ↓
                $game1 = array(
                    'titel' => 'God of War 2',
                    'genre' => 'Actie',
                    'console' => 'PlayStation',
                    'pegi_rating' => 16,
                );

                $game2 = array(
                    'titel' => 'Call of Duty Ghosts',
                    'genre' => 'Geweld',
                    'console' => 'Xbox',
                    'pegi_rating' => 16,
                );

                $game_foto1 = "../img/Reviews_img/PAGE1/GOW.jpg";
                $game_foto2 = "../img/Reviews_img/PAGE1/COD.jpg";

                $selectedGame = 'game1';

                if ($selectedGame === 'game1') {
                    $selectedGameInfo = $game1;
                } else {
                    $selectedGameInfo = $game2;
                }

                if ($selectedGame === 'game1') {
                    echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
      <img src='{$game_foto1}' alt='game_photo' width='150px' height='120px'><br>
      Genre: {$selectedGameInfo['genre']}<br>
      Platform: {$selectedGameInfo['console']}<br>
      PEGI Rating: {$selectedGameInfo['pegi_rating']}</p>";
                } elseif ($selectedGame === 'game2') {
                    echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
              <img src='{$game_foto2}' alt='game_photo' width='150px' height='120px'><br>
              Genre: {$selectedGameInfo['genre']}<br>
              Platform: {$selectedGameInfo['console']}<br>
              PEGI Rating: {$selectedGameInfo['pegi_rating']}</p>";
                } else {
                    echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
        <img src='{$game_foto1}' alt='game_photo'><br>
        Genre: {$selectedGameInfo['genre']}<br>
        Platform: {$selectedGameInfo['console']}<br>
        PEGI Rating: {$selectedGameInfo['pegi_rating']}</p>";
                }

                // hachim gedeelte van game review 1 ↓
                
                $game3 = array(
                    'titel' => 'Black ops 3',
                    'genre' => 'geweld',
                    'console' => 'PC',
                    'pegi_rating' => 16,
                );

                $game4 = array(
                    'titel' => 'Fifa 16',
                    'genre' => 'Geweld',
                    'console' => 'Mobile',
                    'pegi_rating' => 16,
                );

                $game_foto3 = "../img/Reviews_img/PAGE1/CODB3.jpg";
                $game_foto4 = "../img/Reviews_img/PAGE1/FIFA16.jpg";

                $selectedGame = 'game3';

                if ($selectedGame === 'game3') {
                    $selectedGameInfo = $game3;
                } else {
                    $selectedGameInfo = $game4;
                }

                if ($selectedGame === 'game3') {
                    echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
          <img src='{$game_foto3}' alt='game_photo' width='150px' height='120px'><br>
          Genre: {$selectedGameInfo['genre']}<br>
          Platform: {$selectedGameInfo['console']}<br>
          PEGI Rating: {$selectedGameInfo['pegi_rating']}</p>";
                } elseif ($selectedGame === 'game4') {
                    echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
                  <img src='{$game_foto4}' alt='game_photo' width='150px' height='120px'><br>
                  Genre: {$selectedGameInfo['genre']}<br>
                  Platform: {$selectedGameInfo['console']}<br>
                  PEGI Rating: {$selectedGameInfo['pegi_rating']}</p>";
                } else {
                    echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
            <img src='{$game_foto3}' alt='game_photo'><br>
            Genre: {$selectedGameInfo['genre']}<br>
            Platform: {$selectedGameInfo['console']}<br>
            PEGI Rating: {$selectedGameInfo['pegi_rating']}</p>";
                }

                // mehmet gedeelte van game review 1 ↓
                
                $game5 = array(
                    'titel' => 'Gears of war Jugment',
                    'genre' => 'Combat',
                    'console' => 'Nintendo',
                    'pegi_rating' => 16,
                );

                $game6 = array(
                    'titel' => 'Halo 2',
                    'genre' => 'Combat',
                    'console' => 'Xbox',
                    'pegi_rating' => 16,
                );

                $game_foto5 = "../img/Reviews_img/PAGE1/GOWJ.png";
                $game_foto6 = "../img/Reviews_img/PAGE1/HALO2.png";

                $selectedGame = 'game5';

                if ($selectedGame === 'game5') {
                    $selectedGameInfo = $game5;
                } else {
                    $selectedGameInfo = $game6;
                }

                if ($selectedGame === 'game5') {
                    echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
              <img src='{$game_foto5}' alt='game_photo' width='150px' height='120px'><br>
              Genre: {$selectedGameInfo['genre']}<br>
              Platform: {$selectedGameInfo['console']}<br>
              PEGI Rating: {$selectedGameInfo['pegi_rating']}</p>";
                } elseif ($selectedGame === 'game6') {
                    echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
                      <img src='{$game_foto6}' alt='game_photo' width='150px' height='120px'><br>
                      Genre: {$selectedGameInfo['genre']}<br>
                      Platform: {$selectedGameInfo['console']}<br>
                      PEGI Rating: {$selectedGameInfo['pegi_rating']}</p>";
                } else {
                    echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
                <img src='{$game_foto6}' alt='game_photo'><br>
                Genre: {$selectedGameInfo['genre']}<br>
                Platform: {$selectedGameInfo['console']}<br>
                PEGI Rating: {$selectedGameInfo['pegi_rating']}</p>";
                }
                ?>
            </section>

            <section class="gameReview1Js">
                <section id="game-info-container"></section>
                <section id="game-info-container2"></section>
                <section id="game-info-container3"></section>
            </section>

            <section class="gameReview2PHP">
                <?php
                // Malik gedeelte van game review 2 ↓
                
                $game_foto7 = "../img/Reviews_img/PAGE1/ACV1.jpg";
                $game_foto8 = "../img/Reviews_img/PAGE1/ACV2.jpg";
                $game_foto9 = "../img/Reviews_img/PAGE1/CB1.jpg";
                $game_foto10 = "../img/Reviews_img/PAGE1/CB2.jpg";

                $game_R2 = array(
                    array(
                        'titel' => 'Assassin\'s Creed Valhalla',
                        'fotos' => array($game_foto7, $game_foto8),
                        'release_date' => '15-08-2021',
                        'pegi_rating' => 18,
                        'description' => 'Epic action-adventure<br>game set in the Viking Age.'
                    ),

                    array(
                        'titel' => 'Cyberpunk 2077',
                        'fotos' => array($game_foto9, $game_foto10),
                        'release_date' => '21-12-2023',
                        'pegi_rating' => 18,
                        'description' => 'Open-world RPG set in<br>a dystopian future, featuring Keanu Reeves.'
                    )
                );

                $gekozenGame = 0;

                switch ($gekozenGame) {
                    case 0:
                        $selectedGameInfo = $game_R2[0];
                        break;
                    case 1:
                        $selectedGameInfo = $game_R2[1];
                        break;
                    default:
                        $selectedGameInfo = $game_R2[0];
                        break;
                }

                echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
    <img src='{$selectedGameInfo['fotos'][0]}' alt='game-foto' width='150px' height='120px'><img src='{$selectedGameInfo['fotos'][1]}' alt='game-foto' width='150px' height='120px'><br>
     Release Date: {$selectedGameInfo['release_date']}<br>
     PEGI Rating: {$selectedGameInfo['pegi_rating']}<br>
     Description: {$selectedGameInfo['description']}</p>";

                // Mehmet gedeelte van game review 2 ↓
                
                $game_foto11 = "../img/Reviews_img/PAGE1/ARK1.jpg";
                $game_foto12 = "../img/Reviews_img/PAGE1/ARK2.jpg";
                $game_foto13 = "../img/Reviews_img/PAGE1/WD1.jpg";
                $game_foto14 = "../img/Reviews_img/PAGE1/WD2.jpg";

                $game_R2 = array(
                    array(
                        'titel' => 'Ark Survival Evolved',
                        'fotos' => array($game_foto11, $game_foto12),
                        'release_date' => '13-10-2020',
                        'pegi_rating' => 18,
                        'description' => 'A popular multiplayer<br>survival game where players find<br>themselves stranded on a mysterious<br>island filled with dinosaurs.'
                    ),

                    array(
                        'titel' => 'Watch Dogs 2',
                        'fotos' => array($game_foto13, $game_foto14),
                        'release_date' => '01-02-2019',
                        'pegi_rating' => 18,
                        'description' => 'An action-adventure<br>video game set in an open-world<br>rendition of the San Francisco Bay Area.'
                    )
                );

                $gekozenGame = 0;

                switch ($gekozenGame) {
                    case 0:
                        $selectedGameInfo = $game_R2[0];
                        break;
                    case 1:
                        $selectedGameInfo = $game_R2[1];
                        break;
                    default:
                        $selectedGameInfo = $game_R2[0];
                        break;
                }

                echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
    <img src='{$selectedGameInfo['fotos'][0]}' alt='game-foto' width='150px' height='120px'><img src='{$selectedGameInfo['fotos'][1]}' alt='game-foto' width='150px' height='120px'><br>
     Release Date: {$selectedGameInfo['release_date']}<br>
     PEGI Rating: {$selectedGameInfo['pegi_rating']}<br>
     Description: {$selectedGameInfo['description']}</p>";

                // hachim gedeelte van game review 2 ↓
                $game_foto15 = "../img/Reviews_img/PAGE1/AM1.jpg";
                $game_foto16 = "../img/Reviews_img/PAGE1/AM2.jpg";
                $game_foto17 = "../img/Reviews_img/PAGE1/BM1.jpg";
                $game_foto18 = "../img/Reviews_img/PAGE1/BM2.jpg";

                $game_R2 = array(
                    array(
                        'titel' => 'Among us',
                        'fotos' => array($game_foto15, $game_foto16),
                        'release_date' => '03-02-2003',
                        'pegi_rating' => 18,
                        'description' => 'The game involves<br>discussion, deduction, and deception<br>as players try to identify the impostors<br>through group discussions and voting.'
                    ),

                    array(
                        'titel' => 'Batman Arkham Knight',
                        'fotos' => array($game_foto17, $game_foto18),
                        'release_date' => '05-12-2009',
                        'pegi_rating' => 18,
                        'description' => 'Set in the iconic Gotham City,<br> the game follows the Dark Knight.(Batman).'
                    )
                );

                $gekozenGame = 0;

                switch ($gekozenGame) {
                    case 0:
                        $selectedGameInfo = $game_R2[0];
                        break;
                    case 1:
                        $selectedGameInfo = $game_R2[1];
                        break;
                    default:
                        $selectedGameInfo = $game_R2[0];
                        break;
                }

                echo "<p style='color: white; font-size: 20px;'>{$selectedGameInfo['titel']}<br>
     <img src='{$selectedGameInfo['fotos'][0]}' alt='game-foto' width='150px' height='120px'><img src='{$selectedGameInfo['fotos'][1]}' alt='game-foto' width='150px' height='120px'><br>
      Release Date: {$selectedGameInfo['release_date']}<br>
      PEGI Rating: {$selectedGameInfo['pegi_rating']}<br>
      Description: {$selectedGameInfo['description']}</p>";
                ?>
            </section>


            <section class="gameReview2Js">
                <section id="gameInfo1"></section>
                <section id="gameInfo2"></section>
                <section id="gameInfo3"></section>
            </section>

        </section>

        <form action="reviewP2.php" method="get">
            <button class="review_btn" type="submit">Meer games?</button>
        </form>

    </main>

    <footer>
        <img class="beeldmerk" src="../img/logo_beeldmerk.png" alt="beeldmerk">
        <p class="Copyright_txt">© Copyright by Malik Omri, Mehmet Sezer & Hachim El Amouri 2023</p>
        <section class="Media_icons">
            <p class="volg_ons">Volg ons:</p>
            <i class="fa-brands fa-facebook fa-2xl"></i>
            <i class="fa-brands fa-instagram fa-2xl"></i>
            <i class="fa-brands fa-tiktok fa-2xl"></i>
        </section>
    </footer>

</body>

</html>