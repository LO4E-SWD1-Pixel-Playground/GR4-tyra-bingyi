<?php
    try {
        $conn = new mysqli('localhost', 'root', 'root', 'phples');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>