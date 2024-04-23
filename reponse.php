<?php
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
} else {
    // Si aucune donnée n'a été soumise, afficher un message d'erreur
    echo "Aucune donnée n'a été soumise.";
}
?>
