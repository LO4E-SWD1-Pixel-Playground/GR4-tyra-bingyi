<?php

require "dbconnect.php";

if($result->num_rows == 1){
    session_start ();
    $_SESSION['gebruikersnaam'] = $uname
    $_SESSION['loggedIn'] = true;
    header("Location: ingelogd.php");
}else{
    echo "Log gegevens niet juist";
}