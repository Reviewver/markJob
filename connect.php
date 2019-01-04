<?php
$dsn = "mysql:host=localhost;dbname=base_envoie_cv";
$user = "web";
$pass = "web";

try {
    $connect_mysql = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
