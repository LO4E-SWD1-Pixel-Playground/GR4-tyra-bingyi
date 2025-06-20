<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Log in">
    <meta name="keywords" content="Games, Website, Spelen, Log in, Account">
    <meta name="author" content="Bingyi Zhou">

    <title>Games</title>
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <script href="JS/localstorage.js" defer></script>
</head>

<body>

    <header>
        <?php include "PHP/header.php"?>
    </header>
    
    <main>
        <br><br>
            <article class="boxes">
                <br><br>
            <section id="box1">
                <div class="letter">
                    <h1>Log in</h1>
                    <br><br>
                    <form method="post" id="form">
                        Gebruikersnaam:<br>
                        <input type="text" required="" name="gebruikersnaam"><br><br>
                        Wachtwoord:<br>
                        <input type="text" id="nameinput" required="" name="wachtwoord"><br><br>
                        <input class="submit" type="submit" name="submit" value="Log in!">
                    </form>
                    <br>
                </div>
            </section>
            </article>

        <div class="extratext">
            <p>Heb je nog geen account? <br>
            Geen probleem, maak er een aan! <br>
            Klik hieronder om je te registreren.</p><br>
            <a href="registeren.php" id="registerenbtn">Registeer!</a>
        </div>
    </main>

    <footer>
        <?php include "PHP/footer.php"?>
    </footer>
</body>
</html>