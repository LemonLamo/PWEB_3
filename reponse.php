<?php

  function Afficher ($nom, $prenom, $date_naissance, $telephone, $adresse,$civilite,$genre,$formation,$langues,$motivation) {
            // Afficher les données
    echo "<h2>Récapitulatif des informations :</h2>";
    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Prénom :</strong> $prenom</p>";
    echo "<p><strong>Date de naissance :</strong> $date_naissance</p>";
    echo "<p><strong>N° de téléphone :</strong> $telephone</p>";
    echo "<p><strong>Adresse :</strong> $adresse</p>";
    echo "<p><strong>Genre :</strong> $genre</p>";
    echo "<p><strong>Civilité :</strong> $civilite</p>";
    echo "<p><strong>Choix de formation :</strong> $formation</p>";
    echo "<p><strong>Langues souhaitées :</strong> $langues</p>";
    echo "<p><strong>Lettre de motivation :</strong> $motivation</p>";

  }


// Vérifier si des données ont été soumises via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
    $telephone = $_POST["telephone"];
    $adresse = $_POST["adresse"];
    $genre = $_POST["genre"];
    $civilite = $_POST["civilite"];
    $formation = $_POST["formation"];
    $langues = isset($_POST["langue"]) ? implode(", ", $_POST["langue"]) : "Aucune";
    $motivation = $_POST["motivation"];

    

    if ($genre == 'Féminin') {
        if ($civilite == 'Marié') {
           echo "<h1> Merci d'avoir rempli le formulaire Mme $prenom $nom! </h1>";
        } else {
            echo "<h1> Merci d'avoir rempli le formulaire Mlle $prenom $nom! </h1>";
        }
    } else {
        echo "<h1> Merci d'avoir rempli le formulaire Mr $prenom $nom! </h1>";
    }
    

    // Afficher les données
    Afficher ($nom, $prenom, $date_naissance, $telephone, $adresse,$civilite,$genre,$formation,$langues,$motivation);
} else {
    // Si aucune donnée n'a été soumise, afficher un message d'erreur
    echo "Aucune donnée n'a été soumise.";
}
?>
