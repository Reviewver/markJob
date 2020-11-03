<?php
include("db.php");

try {
    $connect_mysql = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
