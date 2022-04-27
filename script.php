<?php
  /*****************************************
  *  Constantes et variables
  *****************************************/
  $gender = $_POST['user_gender'];
  $user_lastname = $_POST['user_lastname'];
  $user_firstname = $_POST['user_firstname'];
  $user_zip = $_POST['user_zip'];
  $user_mail = $_POST['user_mail'];
  $user_phone = $_POST['user_phone'];
  $user_message = $_POST['user_message'];
  $message = '';      // Message à afficher à l'utilisateur
 
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    // Le login est-il rempli ?
    if(empty($_POST['user_lastname']))
    {
      $message = 'Merci d\'indiquer votre nom de famille, s\'il vous plaît.';
    }
      // Le mot de passe est-il rempli ?
      elseif(empty($_POST['user_phone']))
    {
      $message = 'Merci d\'indiquer votre numéro de téléphone afin que je puisse vous recontacter, s\'il vous plaît.';
    } else {
      $message = 'Votre formulaire a bien été envoyé, merci. Je reviens vers vous très rapidement. À bientôt !'
    }
  }