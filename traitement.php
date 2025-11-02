<?php 

require 'bdd.php';

$postData = $_POST;
//Vérification que les champs sont bien remplis
if(
    !empty($postData['titre'])
    && !empty($postData['artiste'])
    && !empty($postData['image'])
    && !empty($postData['description'])
) {
   
    //Protection contre XSS
    $titre = htmlspecialchars($postData['titre']);
    $artiste = htmlspecialchars($postData['artiste']);
    $image = htmlspecialchars($postData['image']);
    $description = htmlspecialchars($postData['description']);

    //Vérification que la description fait au moins 3 caractères
    if(strlen($description) <= 3 ) {
        echo "La description doit faire au mins 3 caractères s'il vous plaît.";
        exit();
    }

    if(!filter_var($postData['image'], FILTER_VALIDATE_URL)) {
        echo "L'URL de l'image n'est pas valide !";
        exit();
    }

    require 'bdd.php';
    require 'models/oeuvres.php';
    require 'repositories/oeuvresRepository.php';
    //Création de l'objet oeuvre
    $oeuvre = new Oeuvres();
    $oeuvre->setTitre($postData['titre']);
    $oeuvre->setArtiste($postData['artiste']);
    $oeuvre->setImage($postData['image']);
    $oeuvre->setDescription($postData['description']);
    //Ajout de l'oeuvre en base de donnée
    $oeuvresRepository = new OeuvresRepository($mybdd);
    $oeuvresRepository->addOeuvre($oeuvre);
    //Redirection vers la page d'accueil
    header('Location: index.php');
    exit();
} else {
    echo "Tous les champs doivent être remplis s'il vous plaît.";
    exit();
}

?>