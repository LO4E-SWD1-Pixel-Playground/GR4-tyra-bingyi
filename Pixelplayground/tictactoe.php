<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Tic Tac Toe">
    <meta name="keywords" content="Games, Website, Spelen, Tictactoe, Boterkaaseneieren">
    <meta name="author" content="Bingyi Zhou">

    <title>Tic Tac Toe</title>
    <link rel="stylesheet" href="CSS/stylesheet.css">
    
</head>

    <header>
        <?php include "PHP/header.php"?>
    </header>

<body>
    <main>
        <br>
    <div id="gameContainer">
        <section id="mini-box2">
            <h1 class="letterwhite">Tic Tac Toe</h1>
        </section>
        <div id="cellContainer">
            <div cellIndex="0" class="cell"></div>
            <div cellIndex="1" class="cell"></div>
            <div cellIndex="2" class="cell"></div>
            <div cellIndex="3" class="cell"></div>
            <div cellIndex="4" class="cell"></div>
            <div cellIndex="5" class="cell"></div>
            <div cellIndex="6" class="cell"></div>
            <div cellIndex="7" class="cell"></div>
            <div cellIndex="8" class="cell"></div>
        </div>
        <h2 id="statusUpdate"></h2>
        <button id="restartbtn">Opnieuw</button>
    </div>
    <script src="JS/tictactoe.js"></script>
</main>

    <footer>
        <?php include "PHP/footer.php"?>
    </footer>
    
</body>
</html>