<?php
//Connexion à la base de donnée
try {
    $mybdd = new PDO ('mysql:host=localhost;dbname=artbox;charset=utf8', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>