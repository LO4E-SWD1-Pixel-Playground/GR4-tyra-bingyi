<?php

    if($result->num_rows == 1){
        session_start();
        $_SESSION['username'] = $uname;
        $_SESSION['loggedIn'] = true;
        header("Location: ingelogd.php");
    }else{
        echo "Login gegevens niet juist";
    }
    ?>