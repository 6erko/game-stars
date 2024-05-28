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
    <script src="../js/slideShow.js" defer></script>
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
        <section class="slideShow">
            <?php
            $games = array(
                array(
                    "title" => "Friday the 13th",
                    "genres" => array("Horror"),
                    "pegi" => 18,
                    "description" => "Een angstaanjagende game voor horrorfans.",
                    "ratings" => array(4, 5, 3),
                    "reviews" => array(
                        array("Giovanni", "Super leuke game voor ons horror fans!😀😀😀", 4),
                        array("Sophie", "Angstaanjagend realisme, maar een beetje te eng voor mijn smaak.😱😱😱", 3),
                        array("Emma", "Geweldige graphics en enge sfeer. Een must voor horrorliefhebbers.👻👻👻", 5)
                    ),
                    "trailer" => "https://www.youtube.com/embed/74Sw3C8iJiU",
                    "platforms" => array("PlayStation", "Xbox", "PC"),
                    "developer" => "GameDev Studios"
                ),
                array(
                    "title" => "Mortal Kombat",
                    "genres" => array("Fighting"),
                    "pegi" => 18,
                    "description" => "Een intense vechtgame met bloedige gevechten en spectaculaire moves.",
                    "ratings" => array(4, 5, 4),
                    "reviews" => array(
                        array("Carlos", "Geweldige gevechten en brute fatalities! 😎💥", 5),
                        array("Lisa", "De graphics zijn verbluffend en de gevechten zijn episch. 👊🔥", 4),
                        array("Samuel", "Een klassieker in het vechtgenre, altijd spannend. 👹👊", 4)
                    ),
                    "trailer" => "https://www.youtube.com/embed/MYa7L4jp11E",
                    "platforms" => array("PlayStation", "Xbox", "PC"),
                    "developer" => "NetherRealm Studios"
                ),
                array(
                    "title" => "Pokemon Go",
                    "genres" => array("Augmented Reality", "Adventure"),
                    "pegi" => 3,
                    "description" => "Een avontuurlijke game waarin je Pokémon kunt vangen in de echte wereld.",
                    "ratings" => array(4, 4, 5),
                    "reviews" => array(
                        array("Ash", "Geweldige manier om Pokémon in het echte leven te ontmoeten! 🌍🔍", 5),
                        array("Misty", "Leuk om buiten te zijn en Pokémon te vangen. 🌳👾", 4),
                        array("Brock", "De gevechten zijn eenvoudig maar verslavend. 🥋🔥", 4)
                    ),
                    "trailer" => "https://www.youtube.com/embed/2sj2iQyBTQs",
                    "platforms" => array("iOS", "Android"),
                    "developer" => "Niantic"
                ),
                array(
                    "title" => "God of War: Ragnarok",
                    "genres" => array("Action", "Adventure"),
                    "pegi" => 18,
                    "description" => "Een episch avontuur waarin Kratos de Noorse mythologie trotseert.",
                    "ratings" => array(5, 5, 5),
                    "reviews" => array(
                        array("Thor", "Geweldige verhaallijn en epische gevechten. Odin zal niet teleurgesteld zijn. ⚔️🛡️", 5),
                        array("Freya", "De graphics zijn adembenemend en het verhaal is meeslepend. 👑🌌", 5),
                        array("Loki", "Een meesterwerk van gamen. Kratos is onverslaanbaar! 🌪️🔨", 5)
                    ),
                    "trailer" => "https://www.youtube.com/embed/hfJ4Km46A-0",
                    "platforms" => array("PlayStation"),
                    "developer" => "Santa Monica Studio"
                )
            );

            foreach ($games as $game) {
                echo "<section class='slide'>
                        <h2>{$game['title']}</h2>
                        <p>Genres:";
            
                foreach ($game['genres'] as $genre) {
                    echo " $genre";
                }
            
                echo  "<br>PEGI Leeftijd: {$game['pegi']}<br>
                        Beschrijving: {$game['description']}<br>
                        Gemiddelde Rating: " . round(array_sum($game['ratings']) / count($game['ratings']), 1) . "🌟<br>
                        <h3>Reviews:</h3>";
            
                foreach ($game['reviews'] as $review) {
                    echo "<strong>{$review[0]}</strong><br>
                          {$review[1]}<br>
                          Rating: {$review[2]}🌟<br>";
                }
            
                echo "<h3>Trailer:</h3>
                      <iframe width='800' height='315' src='{$game['trailer']}' allowfullscreen></iframe><br>
                      Platform:";
            
                foreach ($game['platforms'] as $platform) {
                    echo " $platform";
                }
                echo "<br>Maker van de game: {$game['developer']}</p></section>";
            }
            
            ?>
        </section>

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