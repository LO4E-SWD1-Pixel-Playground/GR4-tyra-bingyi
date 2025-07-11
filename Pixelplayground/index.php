<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Homepage voor game">
    <meta name="keywords" content="Games, Website, Spelen">
    <meta name="author" content="Bingyi Zhou">

    <title>Home</title>
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <script src="JS/slidehome.js" defer></script>
    <script src="JS/darklight.js" defer></script>
</head>

<body>

    <header>
        <?php include "PHP/header.php"?>
    </header>

    
        <main>
        <br>
        <button id="buttondark" onclick="lightdarkButton()">Toggle dark mode</button>
        <article class="boxes">
            <section id="box1">
                <div class="letter">
                    <h1>Welcome!</h1>
                    <br>
                <p class="paragraph">Pixelplayground</p>
                <p>is een spelletjes website  waar je kan
                    spelen met je vrienden.
                    Je kunt je vrienden ook toevoegen!
                    Kan je deze spelletjes aan?
                    Laat zijn wat jij kan!</p>
                    <br><br>
                <p>Wil je nog updates? Volg ons!</p>
                    <br>
                    <a href="#"><img src="IMG/pixel_github.png" height="60px" width="60px"></a>
                    <a href="#"><img src="IMG/pixel_facebook-round.png" height="60px" width="60px"></a>
                    <a href="#"><img src="IMG/pixel_discord.png" height="68px" width="68px"></a>
                </div>
            </section>

            <section id="box2">
                <div class="letter">
                    <h1>Latest Highscore:</h1>
                </div>
                <br>
            </section>

            <article>
                <img class="slide" src="IMG/boterkaaseneieren.png" alt="boterkaaseneieren">
                <img class="slide" src="IMG/snake.png" alt="snake">
                <img class="slide" src="IMG/wordle.jpg" alt="wordle">
                <img class="slide" src="IMG/maze.jpg" alt="maze">
            </article>

        </article>
        </main>


    <footer>
        <?php include "PHP/footer.php"?>
    </footer>

</body>
</html>