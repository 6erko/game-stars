// Malik gedeelte game review 3 ↓
const game_img = [
  "../img/Reviews_img/PAGE2/FRIDAY1.jpg",
  "../img/Reviews_img/PAGE2/FRIDAY2.jpg",
  "../img/Reviews_img/PAGE2/FRIDAY3.jpg",
  "../img/Reviews_img/PAGE2/MK1.jpg",
  "../img/Reviews_img/PAGE2/MK2.jpg",
  "../img/Reviews_img/PAGE2/MK3.jpg"
];

const games = {
  "Friday the 13th": {
    "title": "Friday the 13th",
    "photos": [game_img[0], game_img[1], game_img[2]],
    "trailer_link": "https://www.youtube.com/watch?v=74Sw3C8iJiU",
    "genres": ["Action", "Adventure"],
    "pegi": 21,
    "description": "A thrilling action-adventure game set in the iconic<br>world of Friday the 13th, featuring breathtaking graphics and<br>intense gameplay.",
    "ratings": [4.1, 4.7, 5],
    "platforms": ["PC", "PlayStation", "Xbox", "Nintendo Switch"],
    "maker": "Gun Interactive"
  },
  "Mortal Kombat": {
    "title": "Mortal Kombat",
    "photos": [game_img[3], game_img[4], game_img[5]],
    "trailer_link": "https://www.youtube.com/watch?v=MYa7L4jp11E",
    "genres": ["Fighting", "Action"],
    "pegi": 21,
    "description": "Experience the legendary fighting franchise with brutal<br>combat, iconic characters, and stunning visuals. Mortal Kombat delivers<br>a visceral and intense fighting experience like never before.",
    "ratings": [4.5, 4.8, 5],
    "platforms": ["PC", "PlayStation", "Xbox", "Nintendo Switch"],
    "maker": "NetherRealm Studios"
  }
};


let userAge = prompt("Voer je leeftijd in: (*hint Je moet 21 of ouder zijn om de games te zien)");

function displayGameInfo(gameTitle) {
  let game = games[gameTitle];


  if (userAge >= game.pegi) {
    let gemiddeldeR = ((game.ratings[0] + game.ratings[1] + game.ratings[2]) / 3).toFixed(1);// to fixed opgezocht om te weten hoe ik het getal kon afronden
    let gameInfoSection = document.getElementById("gameInfo1");
    gameInfoSection.innerHTML = `
        <p style='color: white; font-size: 17px;'>${game.title}<br>
        <img src=${game.photos[0]} width='150px' height='120px'><img src=${game.photos[1]} width='150px' height='120px'><img src=${game.photos[2]} width='150px' height='120px'><br>
        <a href="${game.trailer_link}" target="_blank">Watch Trailer</a><br>
        Description: ${game.description}<br>
        Genres: ${game.genres[0]}, ${game.genres[1]}<br>
        PEGI Rating: ${game.pegi}<br>
        Ratings: ${gemiddeldeR}<br>
        Platforms: ${game.platforms[0]} ${game.platforms[1]}, ${game.platforms[2]}${game.platforms[3]}<br>
        Maker: ${game.maker}</p>`
  }
}; //target_blank heb ik ook moeten opzoeken anders opent het de trailer en ga je weg van de website   

let selectedGame = prompt("Kies welke game je wilt zien: (*hint de games zijn Friday the 13th en Mortal Kombat)");

switch (selectedGame) {
  case "Friday the 13th":
  case "Mortal Kombat":
    displayGameInfo(selectedGame);
    break;
  default:
    alert("Geen game gevonden met die naam");
}

console.log(`Selected game: ${selectedGame}`)

// Hachim gedeelte game review 3 ↓
const games_img = [
  "../img/Reviews_img/PAGE2/GOW1.jpg",
  "../img/Reviews_img/PAGE2/GOW2.jpg",
  "../img/Reviews_img/PAGE2/GOW3.webp",
  "../img/Reviews_img/PAGE2/POKEMONGO1.jpg",
  "../img/Reviews_img/PAGE2/POKEMONGO2.jpg",
  "../img/Reviews_img/PAGE2/POKEMONGO3.jpg"
];

const spellen = {
  "God of War Ragnarok": {
    "title": "God of War: Ragnarok",
    "photos": [games_img[0], games_img[1], games_img[2]],
    "trailer_link": "https://www.youtube.com/watch?v=hfJ4Km46A-0",
    "genres": ["Action", "Adventure"],
    "pegi": 18,
    "description": "Embark on a new adventure with Kratos<br>and Atreus in the Norse mythology.<br>God of War: Ragnarok delivers a gripping narrative,<br>stunning visuals, and intense combat.",
    "ratings": [4.9, 5, 4.7],
    "platforms": ["PlayStation"],
    "maker": "Santa Monica Studio"
  },
  "Pokémon GO": {
    "title": "Pokémon GO",
    "photos": [games_img[3], games_img[4], games_img[5]],
    "trailer_link": "https://www.youtube.com/watch?v=2sj2iQyBTQs",
    "genres": ["Augmented Reality", "Adventure"],
    "pegi": 7,
    "description": "Explore the real world and catch Pokemon<br>using augmented reality. Pokemon Go brings the<br>Pokemon experience to the streets, parks, and<br>landmarks around you.",
    "ratings": [4.6, 4.5, 4.8],
    "platforms": ["iOS", "Android"],
    "maker": "Niantic, Inc."
  }
};

let gebruikerLeeftijd = prompt("Voer je leeftijd in: (*hint Je moet 21 of ouder zijn om de games te zien)");

function displaySpelInfo(gameTitle) {
  let game = spellen[gameTitle];

  if (gebruikerLeeftijd >= game.pegi) {
    let gemiddeldeR = ((game.ratings[0] + game.ratings[1] + game.ratings[2]) / 3).toFixed(1);
    let gameInfoSection = document.getElementById("gameInfo2");
    gameInfoSection.innerHTML = `
        <p style='color: white; font-size: 17px;'>${game.title}<br>
        <img src=${game.photos[0]} width='150px' height='120px'><img src=${game.photos[1]} width='150px' height='120px'><img src=${game.photos[2]} width='150px' height='120px'><br>
        <a href="${game.trailer_link}" target="_blank">Watch Trailer</a><br>
        Description: ${game.description}<br>
        Genres: ${game.genres[0]}, ${game.genres[1]}<br>
        PEGI Rating: ${game.pegi}<br>
        Ratings: ${gemiddeldeR}<br>
        Platforms: ${game.platforms}<br>
        Maker: ${game.maker}</p>`;
  }
}

let gekozenSpel = prompt("Kies welke game je wilt zien: (*hint de games zijn God of War Ragnarok, Pokémon GO)");

switch (gekozenSpel) {
  case "God of War Ragnarok":
  case "Pokémon GO":
    displaySpelInfo(gekozenSpel);
    break;
  default:
    alert("Geen game gevonden met die naam");
}

console.log(`Selected game: ${gekozenSpel}`);

// Mehmet gedeelte game review 3 ↓
const new_images = [
  "../img/Reviews_img/PAGE2/LOZ1.jpg",
  "../img/Reviews_img/PAGE2/LOZ2.jpg",
  "../img/Reviews_img/PAGE2/LOZ3.jpg",
  "../img/Reviews_img/PAGE2/SMB1.jpg",
  "../img/Reviews_img/PAGE2/SMB2.jpg",
  "../img/Reviews_img/PAGE2/SMB3.jpg"
];

const new_games = {
  "The Legend of Zelda: Breath of the Wild": {
    "title": "The Legend of Zelda: Breath of the Wild",
    "photos": [new_images[0], new_images[1], new_images[2]],
    "trailer_link": "https://www.youtube.com/watch?v=1rPxiXXxftE",
    "genres": ["Action", "Adventure"],
    "pegi": 21,
    "description": "Embark on an epic journey as Link in the<br>vast open world of Hyrule. Solve puzzles, battle<br>enemies, and explore a breathtaking landscape in<br>this critically acclaimed adventure.",
    "ratings": [4.8, 4.9, 5],
    "platforms": ["Nintendo Switch"],
    "maker": "Nintendo"
  },
  "Super Mario Bros. Wonder": {
    "title": "Super Mario Bros. Wonder",
    "photos": [new_images[3], new_images[4], new_images[5]],
    "trailer_link": "https://www.youtube.com/watch?v=88JL-WM_kV0",
    "genres": ["Platformer", "Adventure"],
    "pegi": 21,
    "description": "Join Mario in his quest to rescue<br>Princess Peach from the clutches of Bowser. Navigate<br>through challenging levels and defeat enemies to save<br>the Mushroom Kingdom.",
    "ratings": [4.7, 4.5, 5],
    "platforms": ["Nintendo Switch"],
    "maker": "Nintendo"
  }
};

let user_Age = prompt("Voer je leeftijd in: (*hint Je moet 21 of ouder zijn om de games te zien)");

function display_Game_Info(game_Title) {
  let selected_Game = new_games[game_Title];

  if (user_Age >= selected_Game.pegi) {
    let average_Rating = ((selected_Game.ratings[0] + selected_Game.ratings[1] + selected_Game.ratings[2]) / 3).toFixed(1);
    let game_Info_Section = document.getElementById("gameInfo3");
    game_Info_Section.innerHTML = `
      <p style='color: white; font-size: 17px;'>${selected_Game.title}<br>
      <img src=${selected_Game.photos[0]} width='150px' height='120px'><img src=${selected_Game.photos[1]} width='150px' height='120px'><img src=${selected_Game.photos[2]} width='150px' height='120px'><br>
      <a href="${selected_Game.trailer_link}" target="_blank">Watch Trailer</a><br>
      Description: ${selected_Game.description}<br>
      Genres: ${selected_Game.genres[0]}, ${selected_Game.genres[1]}<br>
      PEGI Rating: ${selected_Game.pegi}<br>
      Ratings: ${average_Rating}<br>
      Platforms: ${selected_Game.platforms[0]}<br>
      Maker: ${selected_Game.maker}</p>`;
  }
};

let chosen_Game = prompt("Kies welke game je wilt zien: (*hint de games zijn The Legend of Zelda: Breath of the Wild en Super Mario Bros. Wonder)");

switch (chosen_Game) {
  case "The Legend of Zelda: Breath of the Wild":
  case "Super Mario Bros. Wonder":
    display_Game_Info(chosen_Game);
    break;
  default:
    alert("Geen game gevonden met die naam");
}

console.log(`Selected game: ${chosen_Game}`);