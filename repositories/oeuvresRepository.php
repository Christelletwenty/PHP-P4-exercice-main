<?php

class OeuvresRepository {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    //Récupération de toutes les oeuvres
    public function getAllOeuvres() {
        $getOeuvresRequest = 'SELECT * FROM oeuvres';

        $getOeuvresStatement = $this->db->prepare($getOeuvresRequest);
        // $getOeuvresStatement->setFetchMode(PDO::FETCH_CLASS, 'Oeuvres');
        $getOeuvresStatement->execute();
        return $getOeuvresStatement->fetchAll();
    }

    //Récupération d'une oeuvre en fonction de l'id
    public function getOeuvresById(int $id) {
        $getOeuvresRequest = 'SELECT * FROM `oeuvres` WHERE id = :oeuvreId';

        $getOeuvresStatement = $this->db->prepare($getOeuvresRequest);
        //$getGameStatement->setFetchMode(PDO::FETCH_CLASS, 'Game');
        $getOeuvresStatement->execute(['oeuvreId' => $id]);
        return $getOeuvresStatement->fetch();
    }
}
?>