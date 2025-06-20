<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Alle Games">
    <meta name="keywords" content="Games, Website, Spelen">
    <meta name="author" content="Bingyi Zhou">

    <title>Games</title>
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <script src="JS/darklight.js" defer></script>
</head>

<body>

    <header>
        <?php include "PHP/header.php"?>
    </header>
    
        <main>
            <br>
            <button id="buttondark" onclick="lightdarkButton()">Toggle dark mode</button>
                <section id="mini-box">
                    <h1 class="letterwhite">Games</h1>
                </section>

            <article class="boxes2">
                
                <section id="box3">
                    <a href="tictactoe.php"><img id="box3" src="IMG/tictactoe.png"></a>
                </section>

                <section id="box3">

                </section>
            </article>
        </main>

    <footer>
        <?php include "PHP/footer.php"?>
    </footer>

</body>
</html>