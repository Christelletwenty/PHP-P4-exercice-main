<?php

class Oeuvres {

    private $id;
    private $titre;
    private $artiste;
    private $description;
    private $image;

    public function getId() {
        return $this->id;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getArtiste() {
        return $this->artiste;
    }

    public function setArtiste($artiste) {
        $this->artiste = $artiste;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
            $this->image = $image;
        }

}

?>