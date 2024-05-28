// malik gedeelte game review 1 ↓

const game1 = {
  'titel': 'God of War 2',
  'genre': 'Actie',
  'console': 'PlayStation',
  'pegi_rating': 16,
};

const game2 = {
  'titel': 'Call of Duty Ghosts',
  'genre': 'Geweld',
  'console': 'Xbox',
  'pegi_rating': 16,
};

const game_foto1 = "../img/Reviews_img/PAGE1/GOW.jpg";
const game_foto2 = "../img/Reviews_img/PAGE1/COD.jpg";

let selectedGame = 'game2';

const gameInfoContainer = document.getElementById('game-info-container');
let html;

switch (selectedGame) {
  case 'game1':
    html = `
            <p style='color: white; font-size: 20px;'>
                ${game1['titel']}<br>
                <img src='${game_foto1}' alt='game_photo' width='150px' height='120px'><br>
                Genre: ${game1['genre']}<br>
                Platform: ${game1['console']}<br>
                PEGI Rating: ${game1['pegi_rating']}
            </p>
        `;
    break;
  case 'game2':
    html = `
            <p style='color: white; font-size: 20px;'>
                ${game2['titel']}<br>
                <img src='${game_foto2}' alt='game_photo' width='150px' height='120px'><br>
                Genre: ${game2['genre']}<br>
                Platform: ${game2['console']}<br>
                PEGI Rating: ${game2['pegi_rating']}
            </p>
        `;
    break;
  default:
    html = `
            <p style='color: white; font-size: 20px;'>
                ${game1['titel']}<br>
                <img src='${game_foto1}' alt='game_photo' width='150px' height='100px'><br>
                Genre: ${game1['genre']}<br>
                Platform: ${game1['console']}<br>
                PEGI Rating: ${game1['pegi_rating']}
            </p>
        `;
}

gameInfoContainer.innerHTML = html;
console.log(`Selected Game: ${selectedGame}`);

// hachim gedeelte game review 1 ↓

const game3 = {
  'titel': 'Black ops 3',
  'genre': 'Actie',
  'console': 'PC',
  'pegi_rating': 16,
};

const game4 = {
  'titel': 'Fifa 16',
  'genre': 'Geweld',
  'console': 'Mobile',
  'pegi_rating': 16,
};

const game_foto3 = "../img/Reviews_img/PAGE1/CODB3.jpg";
const game_foto4 = "../img/Reviews_img/PAGE1/FIFA16.jpg";

let gekozenGame = 'game4';

const gameInfoContainer2 = document.getElementById('game-info-container2');
let htmlPage;

switch (gekozenGame) {
  case 'game3':
    htmlPage = `
            <p style='color: white; font-size: 20px;'>
                ${game3['titel']}<br>
                <img src='${game_foto3}' alt='game_photo' width='150px' height='120px'><br>
                Genre: ${game3['genre']}<br>
                Platform: ${game3['console']}<br>
                PEGI Rating: ${game3['pegi_rating']}
            </p>
        `;
    break;
  case 'game4':
    htmlPage = `
            <p style='color: white; font-size: 20px;'>
                ${game4['titel']}<br>
                <img src='${game_foto4}' alt='game_photo' width='150px' height='120px'><br>
                Genre: ${game4['genre']}<br>
                Platform: ${game4['console']}<br>
                PEGI Rating: ${game4['pegi_rating']}
            </p>
        `;
    break;
  default:
    htmlPage = `
            <p style='color: white; font-size: 20px;'>
                ${game1['titel']}<br>
                <img src='${game_foto3}' alt='game_photo' width='150px' height='120px'><br>
                Genre: ${game3['genre']}<br>
                Platform: ${game3['console']}<br>
                PEGI Rating: ${game3['pegi_rating']}
            </p>
        `;
}

gameInfoContainer2.innerHTML = htmlPage;
console.log(`Selected Game: ${gekozenGame}`);

// mehmet gedeelte game review 1 ↓

const game5 = {
  'titel': 'Gears Of War Jugment',
  'genre': 'Combat',
  'console': 'Nintendo',
  'pegi_rating': 16,
};

const game6 = {
  'titel': 'halo 2',
  'genre': 'Combat',
  'console': 'Xbox',
  'pegi_rating': 16,
};

const game_foto5 = "../img/Reviews_img/PAGE1/GOWJ.png";
const game_foto6 = "../img/Reviews_img/PAGE1/HALO2.png";

let selectedSpel = 'game6';

const gameInfoContainer3 = document.getElementById('game-info-container3');
let HTML;

switch (selectedSpel) {
  case 'game5':
    HTML = `
            <p style='color: white; font-size: 20px;'>
                ${game5['titel']}<br>
                <img src='${game_foto5}' alt='game_photo' width='150px' height='120px'><br>
                Genre: ${game5['genre']}<br>
                Platform: ${game5['console']}<br>
                PEGI Rating: ${game5['pegi_rating']}
            </p>
        `;
    break;
  case 'game6':
    HTML = `
            <p style='color: white; font-size: 20px;'>
                ${game6['titel']}<br>
                <img src='${game_foto6}' alt='game_photo' width='150px' height='120px'><br>
                Genre: ${game6['genre']}<br>
                Platform: ${game6['console']}<br>
                PEGI Rating: ${game6['pegi_rating']}
            </p>
        `;
    break;
  default:
    HTML = `
            <p style='color: white; font-size: 20px;'>
                ${game5['titel']}<br>
                <img src='${game_foto5}' alt='game_photo' width='150px' height='120px'><br>
                Genre: ${game5['genre']}<br>
                Platform: ${game5['console']}<br>
                PEGI Rating: ${game5['pegi_rating']}
            </p>
        `;
}

gameInfoContainer3.innerHTML = HTML;
console.log(`Selected Game: ${selectedSpel}`);

// malik gedeelte game review 2 ↓

const gamefotos = [
  "../img/Reviews_img/PAGE1/ACV1.jpg",
  "../img/Reviews_img/PAGE1/ACV2.jpg",
  "../img/Reviews_img/PAGE1/CB1.jpg",
  "../img/Reviews_img/PAGE1/CB2.jpg"
];

const games = [
  {
    titel: 'Assassin\'s Creed Valhalla',
    fotos: [gamefotos[0], gamefotos[1]],
    release_date: '15-08-2021',
    pegi_rating: 18,
    description: 'Epic action-adventure<br>game set in the Viking Age.'
  },
  {
    titel: 'Cyberpunk 2077',
    fotos: [gamefotos[2], gamefotos[3]],
    release_date: '21-12-2023',
    pegi_rating: 18,
    description: 'Open-world RPG set in<br>a dystopian future, featuring Keanu Reeves.'
  }
];

let currentGame = games[1];

if (currentGame == games[0]) {
  document.getElementById('gameInfo1').innerHTML = `
      <p style='color: white; font-size: 20px;'>${currentGame.titel}<br>
      <img src='${currentGame.fotos[0]}' alt='gamefoto' width='150px' height='120px'> <img src='${currentGame.fotos[1]}' alt='gamefoto' width='150px' height='120px'><br>
      Release Date: ${currentGame.release_date}<br>
      PEGI Rating: ${currentGame.pegi_rating}<br>
      Description: ${currentGame.description}</p>
    `;
} else if (currentGame == games[1]) {
  document.getElementById('gameInfo1').innerHTML = `
    <p style='color: white; font-size: 20px;'>${currentGame.titel}<br>
    <img src='${currentGame.fotos[0]}' alt='gamefoto' width='150px' height='120px'> <img src='${currentGame.fotos[1]}' alt='gamefoto' width='150px' height='120px'><br>
    Release Date: ${currentGame.release_date}<br>
    PEGI Rating: ${currentGame.pegi_rating}<br>
    Description: ${currentGame.description}</p>
    `;
} else {
  document.getElementById('gameInfo1').innerHTML = `
    <p style='color: white; font-size: 20px;'>${currentGame.titel}<br>
    <img src='${currentGame.fotos[0]}' alt='gamefoto' width='150px' height='120px'> <img src='${currentGame.fotos[1]}' alt='gamefoto' width='150px' height='120px'><br>
    Release Date: ${currentGame.release_date}<br>
    PEGI Rating: ${currentGame.pegi_rating}<br>
    Description: ${currentGame.description}</p>
    `;
}

console.log(`Selected Game: ${currentGame.titel}`)
// mehmet gedeelte game review 2 ↓

const game_Fotos = [
  "../img/Reviews_img/PAGE1/ARK1.jpg",
  "../img/Reviews_img/PAGE1/ARK2.jpg",
  "../img/Reviews_img/PAGE1/WD1.jpg",
  "../img/Reviews_img/PAGE1/WD2.jpg"
];

const spellen = [
  {
    titel: 'Ark Survival Evolved',
    fotos: [game_Fotos[0], game_Fotos[1]],
    release_date: '15-08-2021',
    pegi_rating: 18,
    description: 'A popular multiplayer<br>survival game where players find<br>themselves stranded on a mysterious<br>island filled with dinosaurs.'
  },
  {
    titel: 'Watch Dogs 2',
    fotos: [game_Fotos[2], game_Fotos[3]],
    release_date: '21-12-2023',
    pegi_rating: 18,
    description: 'An action-adventure<br>video game set in an open-world<br>rendition of the San Francisco Bay Area.'
  }
];

let currentSpel = spellen[1];

if (currentSpel == spellen[0]) {
  document.getElementById('gameInfo2').innerHTML = `
      <p style='color: white; font-size: 20px;'>${currentSpel.titel}<br>
      <img src='${currentSpel.fotos[0]}' alt='gamefoto' width='150px' height='120px'> <img src='${currentSpel.fotos[1]}' alt='gamefoto' width='150px' height='120px'><br>
      Release Date: ${currentSpel.release_date}<br>
      PEGI Rating: ${currentSpel.pegi_rating}<br>
      Description: ${currentSpel.description}</p>
    `;
} else if (currentSpel == spellen[1]) {
  document.getElementById('gameInfo2').innerHTML = `
    <p style='color: white; font-size: 20px;'>${currentSpel.titel}<br>
    <img src='${currentSpel.fotos[0]}' alt='gamefoto' width='150px' height='120px'> <img src='${currentSpel.fotos[1]}' alt='gamefoto' width='150px' height='120px'><br>
    Release Date: ${currentSpel.release_date}<br>
    PEGI Rating: ${currentSpel.pegi_rating}<br>
    Description: ${currentSpel.description}</p>
    `;
} else {
  document.getElementById('gameInfo2').innerHTML = `
    <p style='color: white; font-size: 20px;'>${currentSpel.titel}<br>
    <img src='${currentSpel.fotos[0]}' alt='gamefoto' width='150px' height='120px'> <img src='${currentSpel.fotos[1]}' alt='gamefoto' width='150px' height='120px'><br>
    Release Date: ${currentSpel.release_date}<br>
    PEGI Rating: ${currentSpel.pegi_rating}<br>
    Description: ${currentSpel.description}</p>
    `;
}

console.log(`Selected Game: ${currentSpel.titel}`)
// Hachim gedeelte game review 2 ↓

const game_img = [
  "../img/Reviews_img/PAGE1/AM1.jpg",
  "../img/Reviews_img/PAGE1/AM2.jpg",
  "../img/Reviews_img/PAGE1/BM1.jpg",
  "../img/Reviews_img/PAGE1/BM2.jpg"
];

const Game = [
  {
    titel: 'Among us',
    fotos: [game_img[0], game_img[1]],
    release_date: '15-08-2021',
    pegi_rating: 18,
    description: 'The game involves<br>discussion, deduction, and deception<br>as players try to identify the impostors<br>through group discussions and voting.'
  },
  {
    titel: 'Batman Arkham Knight',
    fotos: [game_img[2], game_img[3]],
    release_date: '21-12-2023',
    pegi_rating: 18,
    description: 'Set in the iconic Gotham City,<br> the game follows the Dark Knight.(Batman).'
  }
];

let current_Game = Game[1];

if (current_Game == Game[0]) {
  document.getElementById('gameInfo3').innerHTML = `
        <p style='color: white; font-size: 20px;'>${current_Game.titel}<br>
        <img src='${current_Game.fotos[0]}' alt='gamefoto' width='150px' height='120px'> <img src='${current_Game.fotos[1]}' alt='gamefoto' width='150px' height='120px'><br>
        Release Date: ${current_Game.release_date}<br>
        PEGI Rating: ${current_Game.pegi_rating}<br>
        Description: ${current_Game.description}</p>
      `;
} else if (current_Game == Game[1]) {
  document.getElementById('gameInfo3').innerHTML = `
      <p style='color: white; font-size: 20px;'>${current_Game.titel}<br>
      <img src='${current_Game.fotos[0]}' alt='gamefoto' width='150px' height='120px'> <img src='${current_Game.fotos[1]}' alt='gamefoto' width='150px' height='120px'><br>
      Release Date: ${current_Game.release_date}<br>
      PEGI Rating: ${current_Game.pegi_rating}<br>
      Description: ${current_Game.description}</p>
      `;
} else {
  document.getElementById('gameInfo3').innerHTML = `
      <p style='color: white; font-size: 20px;'>${current_Game.titel}<br>
      <img src='${current_Game.fotos[0]}' alt='gamefoto' width='150px' height='120px'> <img src='${current_Game.fotos[1]}' alt='gamefoto' width='150px' height='120px'><br>
      Release Date: ${current_Game.release_date}<br>
      PEGI Rating: ${current_Game.pegi_rating}<br>
      Description: ${current_Game.description}</p>
      `;
}

console.log(`Selected Game: ${current_Game.titel}`)