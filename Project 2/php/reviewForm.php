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
    <?php
    // game review 4
    session_start();

    if (!isset($_SESSION['reviews'])) {
        $_SESSION['reviews'] = [];
    }

    if (isset($_POST["name"], $_POST["game"], $_POST["rating"], $_POST["review"])) {
        $newReview = [
            'name' => $_POST["name"],
            'selectedGame' => $_POST["game"],
            'rating' => $_POST["rating"],
            'review' => $_POST["review"]
        ];

        $_SESSION['reviews'][] = $newReview;
    }
    ?>

    <form class="reviewMaker" method="post">
        <h2>Reviews</h2>

        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" required><br>

        <label>Select Game:</label>
        <select id="game" name="game" required>
            <option value="Friday the 13th">Friday the 13th</option>
            <option value="Mortal Kombat">Mortal Kombat</option>
            <option value="God of War: Ragnarok">God of War: Ragnarok</option>
            <option value="Pokemon GO">Pokemon GO</option>
            <option value="Super Mario Bros">Super Mario Bros</option>
            <option value="The Legend of Zelda: Breath of the Wild">The Legend of Zelda: Breath of the Wild</option>
        </select><br>

        <label>Rating (1-5):</label>
        <section>
            <input type="radio" id="rating1" name="rating" value="1" required>
            <label for="rating1">1</label>

            <input type="radio" id="rating2" name="rating" value="2">
            <label for="rating2">2</label>

            <input type="radio" id="rating3" name="rating" value="3">
            <label for="rating3">3</label>

            <input type="radio" id="rating4" name="rating" value="4">
            <label for="rating4">4</label>

            <input type="radio" id="rating5" name="rating" value="5">
            <label for="rating5">5</label>
        </section>

        <label for="review">Your Review:</label>
        <textarea id="review" name="review" required></textarea>

        <button type="submit">Submit Review</button>
    </form>
    <main id="rev">
        <?php
        $count = 0;
        foreach ($_SESSION['reviews'] as $review) {
            echo "<section class='review'>
              <p class='reviewMsg'>{$review['name']}<br>
              Selected Game: {$review['selectedGame']}<br>
              Rating: {$review['rating']}<br>
              Review: {$review['review']}</p>
              </section>";

            $count++;

            if ($count % 4 == 0) {
                echo "</section>";
            }
        }
        // hiervoor hulp gebruikt van docent
        ?>
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