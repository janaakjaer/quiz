<?php

/* 
 * Denne fil bruges til at få adgang til databasen.
 */

    $host = "localhost";
    $dbname = "db_museumquiz";
    $user = "museum";
    $pass = "christiansFeld2018";
    
    try {
        // MySQLi database
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } catch (PDOexception $ex) { 
        echo "Fejl: " . $ex;
    }
?>

