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
    <script src="../js/ReviewsP2.js" defer></script>
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
        <section class="gameReview3PHP">
            <?php
            // Malik gedeelte van game review 3 ↓
            
            $game_foto1 = "../img/Reviews_img/PAGE2/FRIDAY1.jpg";
            $game_foto2 = "../img/Reviews_img/PAGE2/FRIDAY2.jpg";
            $game_foto3 = "../img/Reviews_img/PAGE2/FRIDAY3.jpg";
            $game_foto4 = "../img/Reviews_img/PAGE2/MK1.jpg";
            $game_foto5 = "../img/Reviews_img/PAGE2/MK2.jpg";
            $game_foto6 = "../img/Reviews_img/PAGE2/MK3.jpg";

            $games = array(
                "Friday the 13th" => array(
                    "title" => "Friday the 13th",
                    "photos" => array($game_foto1, $game_foto2, $game_foto3),
                    "trailer_link" => "https://www.youtube.com/watch?v=74Sw3C8iJiU",
                    "genres" => array("Action", "Adventure"),
                    "pegi" => 21,
                    "description" => "A thrilling action-adventure game set in the iconic<br>world of Friday the 13th, featuring breathtaking graphics and<br>intense gameplay.",
                    "ratings" => array(4.1, 4.7, 5),
                    "platforms" => array("PC", "PlayStation", "Xbox"),
                    "maker" => "Gun Interactive"
                ),
                "Mortal Kombat" => array(
                    "title" => "Mortal Kombat",
                    "photos" => array($game_foto4, $game_foto5, $game_foto6),
                    "trailer_link" => "https://www.youtube.com/watch?v=MYa7L4jp11E",
                    "genres" => array("Fighting", "Action"),
                    "pegi" => 21,
                    "description" => "Experience the legendary fighting franchise with brutal<br>combat, iconic characters, and stunning visuals. Mortal Kombat delivers<br>a visceral and intense fighting experience like never before.",
                    "ratings" => array(4.5, 4.8, 5),
                    "platforms" => array("PC", "PlayStation", "Xbox", "Nintendo Switch"),
                    "maker" => "NetherRealm Studios"
                )
            );

            $age = 21;

            $current_game = "Friday the 13th";

            if (isset($games[$current_game])) {
                switch ($current_game) {
                    case "Friday the 13th":
                        $current_game_info = $games["Friday the 13th"];
                        break;
                    case "Mortal Kombat":
                        $current_game_info = $games["Mortal Kombat"];
                        break;
                    default:
                        echo "Invalid game selected.";
                }

                if ($age >= $current_game_info["pegi"]) {
                    echo "<p style='color: white; font-size: 17px;'>{$current_game_info['title']}<br>";

                    foreach ($current_game_info['photos'] as $photo) {
                        echo "<img src='$photo' alt='Game Photo' width='150px' height='120px'>";
                    }

                    echo "<br><a href='{$current_game_info['trailer_link']}' target='_blank'>Watch Trailer<a><br>  
              Description: {$current_game_info['description']}<br>";  //target_blank heb ik ook moeten opzoeken anders opent het de trailer en ga je weg van de website
            
                    echo "Genres: ";
                    foreach ($current_game_info['genres'] as $genre) {
                        echo "$genre ";
                    }

                    $gemiddeldeR = round(array_sum($current_game_info['ratings']) / count($current_game_info['ratings']), 1); // had moeten leren via internet want wist alleen hoe je gemiddelde berekent via javascript
                    echo "<br>PEGI: {$current_game_info['pegi']}
              <br>Ratings: $gemiddeldeR";

                    echo "<br>Platforms: ";
                    foreach ($current_game_info['platforms'] as $platform) {
                        echo "$platform ";
                    }
                    echo "<br>Maker: {$current_game_info['maker']}</p><br>";
                } else {
                    echo "You are not old enough to play this game. PEGI rating is {$current_game_info['pegi']}<br>";
                }
            } else {
                echo "Game not found in the array.";
            }

            // hachim gedeelte van game review 3 ↓
            $game_foto7 = "../img/Reviews_img/PAGE2/GOW1.jpg";
            $game_foto8 = "../img/Reviews_img/PAGE2/GOW2.jpg";
            $game_foto9 = "../img/Reviews_img/PAGE2/GOW3.webp";
            $game_foto10 = "../img/Reviews_img/PAGE2/POKEMONGO1.jpg";
            $game_foto11 = "../img/Reviews_img/PAGE2/POKEMONGO2.jpg";
            $game_foto12 = "../img/Reviews_img/PAGE2/POKEMONGO3.jpg";

            $games = array(
                "God of War: Ragnarok" => array(
                    "title" => "God of War: Ragnarok",
                    "photos" => array($game_foto7, $game_foto8, $game_foto9),
                    "trailer_link" => "https://www.youtube.com/watch?v=hfJ4Km46A-0",
                    "genres" => array("Action", "Adventure"),
                    "pegi" => 21,
                    "description" => "Embark on a new adventure with Kratos<br>and Atreus in the Norse mythology.<br>God of War: Ragnarok delivers a gripping narrative,<br>stunning visuals, and intense combat.",
                    "ratings" => array(4.9, 4.7, 5),
                    "platforms" => array("PlayStation"),
                    "maker" => "Santa Monica Studio"
                ),
                "Pokemon Go" => array(
                    "title" => "Pokemon Go",
                    "photos" => array($game_foto10, $game_foto11, $game_foto12),
                    "trailer_link" => "https://www.youtube.com/watch?v=2sj2iQyBTQs",
                    "genres" => array("Augmented Reality", "Adventure"),
                    "pegi" => 21,
                    "description" => "Explore the real world and catch Pokemon<br>using augmented reality. Pokemon Go brings the<br>Pokemon experience to the streets, parks, and<br>landmarks around you.",
                    "ratings" => array(4.2, 4.5, 4.8),
                    "platforms" => array("iOS", "Android"),
                    "maker" => "Niantic"
                )
            );

            $age = 21;

            $current_game = "God of War: Ragnarok";

            if (isset($games[$current_game])) {
                switch ($current_game) {
                    case "God of War: Ragnarok":
                        $current_game_info = $games["God of War: Ragnarok"];
                        break;
                    case "Pokemon Go":
                        $current_game_info = $games["Pokemon Go"];
                        break;
                    default:
                        echo "Invalid game selected.";
                }

                if ($age >= $current_game_info["pegi"]) {
                    echo "<p style='color: white; font-size: 17px;'>{$current_game_info['title']}<br>";

                    foreach ($current_game_info['photos'] as $photo) {
                        echo "<img src='$photo' alt='Game Photo' width='150px' height='120px'>";
                    }

                    echo "<br><a href='{$current_game_info['trailer_link']}' target='_blank'>Watch Trailer<a><br>  
              Description: {$current_game_info['description']}<br>";

                    echo "Genres: ";
                    foreach ($current_game_info['genres'] as $genre) {
                        echo "$genre ";
                    }

                    $average_rating = round(array_sum($current_game_info['ratings']) / count($current_game_info['ratings']), 1);
                    echo "<br>PEGI: {$current_game_info['pegi']}
              <br>Ratings: $average_rating";

                    echo "<br>Platforms: ";
                    foreach ($current_game_info['platforms'] as $platform) {
                        echo "$platform ";
                    }
                    echo "<br>Maker: {$current_game_info['maker']}</p><br>";
                } else {
                    echo "You are not old enough to play this game. PEGI rating is {$current_game_info['pegi']}<br>";
                }
            } else {
                echo "Game not found in the array.";
            }

            // mehmet gedeelte van game review 3 ↓
            
            $game_foto13 = "../img/Reviews_img/PAGE2/SMB1.jpg";
            $game_foto14 = "../img/Reviews_img/PAGE2/SMB2.jpg";
            $game_foto15 = "../img/Reviews_img/PAGE2/SMB3.jpg";

            $game_foto16 = "../img/Reviews_img/PAGE2/LOZ1.jpg";
            $game_foto17 = "../img/Reviews_img/PAGE2/LOZ2.jpg";
            $game_foto18 = "../img/Reviews_img/PAGE2/LOZ3.jpg";

            $games = array(
                "Super Mario Bros" => array(
                    "title" => "Super Mario Bros. Wonder",
                    "photos" => array($game_foto13, $game_foto14, $game_foto15),
                    "trailer_link" => "https://www.youtube.com/watch?v=88JL-WM_kV0",
                    "genres" => array("Platformer", "Adventure"),
                    "pegi" => 21,
                    "description" => "Join Mario in his quest to rescue<br>Princess Peach from the clutches of Bowser. Navigate<br>through challenging levels and defeat enemies to save<br>the Mushroom Kingdom.",
                    "ratings" => array(4.6, 4.9, 5),
                    "platforms" => array("Nintendo Switch"),
                    "maker" => "Nintendo"
                ),
                "The Legend of Zelda: Breath of the Wild" => array(
                    "title" => "The Legend of Zelda: Breath of the Wild",
                    "photos" => array($game_foto16, $game_foto17, $game_foto18),
                    "trailer_link" => "https://www.youtube.com/watch?v=zw47_q9wbBE",
                    "genres" => array("Action-Adventure", "Open World"),
                    "pegi" => 21,
                    "description" => "Embark on an epic journey as Link in the<br>vast open world of Hyrule. Solve puzzles, battle<br>enemies, and explore a breathtaking landscape in<br>this critically acclaimed adventure.",
                    "ratings" => array(4.8, 5, 4.7),
                    "platforms" => array("Nintendo Switch"),
                    "maker" => "Nintendo"
                )
            );

            $age = 21;

            $current_game = "Super Mario Bros";

            if (isset($games[$current_game])) {
                switch ($current_game) {
                    case "Super Mario Bros":
                        $current_game_info = $games["Super Mario Bros"];
                        break;
                    case "The Legend of Zelda: Breath of the Wild":
                        $current_game_info = $games["The Legend of Zelda: Breath of the Wild"];
                        break;
                    default:
                        echo "Invalid game selected.";
                }

                if ($age >= $current_game_info["pegi"]) {
                    echo "<p style='color: white; font-size: 17px;'>{$current_game_info['title']}<br>";

                    foreach ($current_game_info['photos'] as $photo) {
                        echo "<img src='$photo' alt='Game Photo' width='150px' height='120px'>";
                    }

                    echo "<br><a href='{$current_game_info['trailer_link']}' target='_blank'>Watch Trailer<a><br>  
              Description: {$current_game_info['description']}<br>";

                    echo "Genres: ";
                    foreach ($current_game_info['genres'] as $genre) {
                        echo "$genre ";
                    }

                    $gemiddeldeR = round(array_sum($current_game_info['ratings']) / count($current_game_info['ratings']), 1);
                    echo "<br>PEGI: {$current_game_info['pegi']}
              <br>Ratings: $gemiddeldeR";

                    echo "<br>Platforms: ";
                    foreach ($current_game_info['platforms'] as $platform) {
                        echo "$platform ";
                    }
                    echo "<br>Maker: {$current_game_info['maker']}</p><br>";
                } else {
                    echo "You are not old enough to play this game. PEGI rating is {$current_game_info['pegi']}<br>";
                }
            } else {
                echo "Game not found in the array.";
            }
            ?>
        </section>

        <section class="gameReview3Js">
            <section id="gameInfo1"></section>
            <section id="gameInfo2"></section>
            <section id="gameInfo3"></section>
        </section>



    </main>

    <section class="reviewForm">
        <form action="reviewForm.php" method="get">
            <button class="review2_btn" type="submit">Laat een Review</button>
        </form>
    </section>

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