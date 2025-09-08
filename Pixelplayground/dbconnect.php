<?php

    try{
        $conn = new mysqli("localhost", "root", "", "pixelplayground");
    }catch(Exception $e){
        echo "connectie niet goed";
    }
?>