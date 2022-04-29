<?php

//message non envoyé par défaut
$message_unsent = true;
//message valide par défaut
$valid = true;

//si l'utilisateur a envoyé le formulaire
if(isset($_POST['submit'])) {

  // si le nom et le numéro sont remplis et non vides
  if(isset($_POST['user_lastname']) && $_POST['user_lastname'] != '' && isset($_POST['user_phone']) && $_POST['user_phone'] != '') {

    $user_gender = htmlspecialchars($_POST['user_gender']); //htmlspecialchars() pour convertir les caracteres spé. en codes HTML
    $user_lastname = htmlspecialchars($_POST['user_lastname']);
    $user_firstname = htmlspecialchars($_POST['user_firstname']);
    $user_zip = htmlspecialchars($_POST['user_zip']);
    $user_mail = htmlspecialchars($_POST['user_mail']);
    $user_phone = htmlspecialchars($_POST['user_phone']);
    $user_message = htmlspecialchars($_POST['user_message']);

    $mailTo = "alexis.boucherie@gmail.com";
    $headers = "Un client vient de remplir un formulaire sur votre site.";
    $txt = 
    "Civilité : ".$user_gender."\n".
    "Nom : ".$user_lastname."\n".
    "Prénom : ".$user_firstname."\n".
    "Code Postal : ".$user_zip."\n".
    "Téléphone : ".$user_phone."\n".
    "Adresse mail : ".$user_mail."\n\n".
    "Message : ".$user_message
    ;
    
    //envoi du mail
    mail($mailTo, "Nouvelle demande pour Service Personne vars", $txt, $headers);
    
    //redirection vers la page principale
    header("Location: https://service-personne-16.herokuapp.com/index.php?mailsent");

    $message_unsent = false;

  } else {

    //le message n'est pas valide
    $valid = false;

    header("Location: https://service-personne-16.herokuapp.com/index.php?unvalid");

  }
}

// !! ATTENTION !! 
// !! Pour envoyer un mail sur une adresse gmail, il faut d'abord configurer l'hébergeur du site pour lui dire de transférer les mails reçus sur la boîte gmail concernée