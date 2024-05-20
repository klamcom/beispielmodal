<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=dbbeispiel_modal', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}

