<?php

    try{
        $conn = new mysqli("localhost", "root", "", "energy");
    }catch(Exception $e){
        echo "connectie niet goed";
    }
?>