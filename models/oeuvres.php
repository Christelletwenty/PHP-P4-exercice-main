<?php

class Oeuvres {

    private $id;
    private $titre;
    private $artiste;
    private $image;

    public function getId() {
        return $this->id;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getArtiste() {
        return $this->artiste;
    }

    public function getImage() {
        return $this->image;
    }

}

?>