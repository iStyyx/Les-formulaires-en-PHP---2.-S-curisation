<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
<?php
    $surname = $_POST["user_surname"];
    $name = $_POST["user_name"];
    $mail = $_POST["user_email"];
    $subject = $_POST["user_subject"];
    $phone = $_POST["user_phone"];
    $message = $_POST["user_message"];

    function valid_donnees($donnees){
      $donnees = trim($donnees); //vire les espaces
      $donnees = stripslashes($donnees); //vire les '\' // après affichage
      $donnees = htmlspecialchars($donnees); // Convertit les caractères spéciaux en entités HTML // après affichage
      return $donnees;
    }   
     
    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($message);

    if(empty($surname)) {
      echo "Veuillez renseigner un nom de famille valide.";
    } else if(empty($name)){
      echo "Veuillez renseigner un prénom valide.";
    } else if(empty($mail)){
      echo "Veuillez renseigner une adresse e-mail valide.";
    } else if(empty($subject)){
      echo "Veuillez choisir l'animal concerné par votre demande.";
    } else if(empty($phone)){
      echo "Veuillez renseigner un numéro de téléphone valide.";
    } else if(empty($message)){
      echo "Veuillez renseigner un message valide.";
    } else {
      echo "Merci " . valid_donnees($surname) . " " . valid_donnees($name) . " de nous avoir contacté par rapport à l'adoption d'un " . $subject . "<br><br> Un de nos conseiller vous contactera soit à l’adresse " . valid_donnees($mail) . " ou par téléphone au " . valid_donnees($phone) . "  dans les plus brefs délais pour traiter votre demande : <br>" . $message;
    }
?>
</body>
</html>
