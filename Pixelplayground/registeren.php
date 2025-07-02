<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Registeren">
    <meta name="keywords" content="Games, Website, Spelen, Registeren, Account">
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
                        <h1>Registeren</h1>
                        <br><br>
                        <form method="post" id="form">
                            Gebruikersnaam:<br>
                            <input type="text" required="" name="gebruikersnaam"><br><br>
                            Wachtwoord:<br>
                            <input type="text" required="" name="wachtwoord"><br><br>
                            Herhaal Wachtwoord:<br>
                            <input type="text" required="" name="Herhaal wachtwoord"><br><br>
                            <input class="submit" type="submit" name="submit" value="Registeer!">
                        </form>
                        <br>
                    </div>
                </section>
                </article>

        <?php
            require_once 'database.php';

    if (isset($_POST['submit'])) {
        if (!empty($_POST['name']) && !empty($_POST['wachtwoord'])) {
            $name = htmlspecialchars($_POST['name']);
        
        $slq = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$name'";
        $result = $conn->query($slq);
        if ($result->num_rows > 0) {
            echo "Gebruiker bestaat all, gebruik iets anders.";
            exit;
        }
        
        $wachtwoord = $_POST['wachtwoord'];
        $hashedPassword = password_hash($wachtwoord, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES ('$name', '$hashedPassword
            ')";
            $result = $conn->query($sql);
            if($result === TRUE) {
                echo "New record created successfully";

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
           
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        echo "Please fill in all fields.";
    }

    $conn->close();
    
}
?>

                <div class="extratext">
                    <p>Heb je al een account? <br>
                        Klik hieronder om in te loggen!</p> <br>
                    <a href="login.php" id="registerenbtn">Log in!</a>
                </div>
        </main>

    <footer>
        <?php include "PHP/footer.php"?>
    </footer>

</body>
</html>