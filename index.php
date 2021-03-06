<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Basée à Vars (16), je vous aide dans vos démarches administratives, vous accompagne dans vos déplacements, cuisine pour vous ou encore vous fais le repassage.">
    <title>Service à la personne | Vars (16) et alentours</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- HEADER -->
    <?php include_once 'header.php'; ?>

    <!-- MAIN -->
    <main>
        <div class="container">

            <!-- services -->
            <div class="serv1 block" id="services">
                <div class="align">
                    <h2>Aide administrative</h2>
                    <img src="img/admin.png">
                    <ul>
                        <li>Courrier et factures</li>
                        <li>Démarches en ligne</li>
                        <li>Retraîte, CAF, impôts, Pôle-Emploi...</li>
                    </ul>
                </div>
            </div>
            <div class="serv2 block">
                <div class="align">
                    <h2>Courses et repas</h2>
                    <img src="img/shopping-bag.png">
                    <ul>
                        <li>Livraison à domicile</li>
                        <li>Préparation des repas directement chez vous</li>
                    </ul>
                </div>
            </div>
            <div class="serv3 block">
                <div class="align">
                    <h2>Repassage</h2>
                    <img src="img/iron.png">
                    <ul>
                        <li>Collecte de linge à domicile</li>
                        <li>Livraison du linge repassé</li>
                    </ul>
                </div>
            </div>
            <div class="serv4 block">
                <div class="align">
                    <h2>Accompagnement</h2>
                    <img src="img/calendar.png">
                    <ul>
                        <li>Accompagnement des personnes en situation d’invalidité temporaire
                        <br>> RDV médicaux, coiffeur, courses...</li>
                    </ul>
                </div>
            </div>

            <!-- crédit d'impôt -->
            <div class="credit">
                <div class="align">
                    <h2>Tarifs :</h2>
                    <p>20€ de l'heure, sur rendez-vous uniquement</p>
                    <span class="separator"></span>
                    <h2>Crédit d'impôt : service à la personne</h2>
                    <img src="img/creditdimpot.png" alt="Crédit d'impôt, -50% !">
                    <p>Bénéficiez d'un crédit d'impôt de 50% sur le montant de la facture.</p>
                    <p class="aster">>> Plus de renseignements sur le <a href="https://www.service-public.fr/particuliers/vosdroits/F12">site officiel du service public</a> (service-public.fr).</p>
                </div>
            </div>

            <!-- contacts -->
            <div class="contact block" id="contacts">
                <img src="img/photoflorence.png" alt="Photo de Florence Poibleau">
                <h2>Florence POIBLEAU</h2>
                <a href="tel:+33638528307">06.38.52.83.07</a>
                <span class="separator"></span>
                
                <!-- formulaire de contact -->
                <form action="script.php" method="post">
                    <h2>Besoin de mes services ? Une question ? Contactez-moi :</h2>
                    <div class="gender">
                        <p>Civilité</p>
                        <div class="radio">
                            <input type="radio" id="mister" name="user_gender" value="monsieur">
                            <label for="mister">Monsieur</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="miss" name="user_gender" value="madame">
                            <label for="miss">Madame</label>
                        </div>
                    </div>
                    <div>
                        <label for="lastname">Nom *</label>
                        <input type="text" id="lastname" name="user_lastname"> <!-- required -->
                    </div>
                    <div>
                        <label for="firstname">Prénom</label>
                        <input type="text" id="firstname" name="user_firstname">
                    </div>
                    <div>
                        <label for="zip">Code postal</label>
                        <input type="text" id="zip" name="user_zip">
                    </div>
                    <div>
                        <label for="city">Ville</label>
                        <input type="text" id="city" name="user_city">
                    </div>
                    <div>
                        <label for="mail">Courriel</label>
                        <input type="email" id="mail" name="user_mail">
                    </div>
                    <div>
                        <label for="phone">Numéro de téléphone *</label>
                        <input type="text" id="phone" name="user_phone"> <!-- required -->
                    </div>
                    <div>
                        <label for="contact-time">À quel moment préférez-vous que je vous recontacte ?</label>
                        <input type="text" id="contact-time" name="contact_time">
                    </div>
                    <div>
                        <label for="msg">Votre message</label>
                        <textarea id="msg" name="user_message"></textarea>
                    </div>
                    <span class="aster">* Les éléments marqués d'un astérisque sont obligatoires</span>
                    <div class="button">
                        <button type="submit" name="submit">Envoyer</button>
                    </div>
                    <p class="aster">En cliquant sur "Envoyer", vous consentez à ce que les informations fournies soient utilisées afin de pouvoir vous recontacter * (voir pied de page).</p>
                    
                    <?php
                        //on récupère l'URL
                        //enlever le "localhost/" en serveur de production !!
                        $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                        
                        // Message affiché si formulaire bien envoyé
                        if($host == 'https://service-personne-16.herokuapp.com/index.php?mailsent') {
                            echo '<p class="success">Votre demande a bien été envoyée. Je reviendrai vers vous très bientôt. Merci !</p>';
                        }
                        // Message non valide si champs obligatoires manquants
                        if($host == 'https://service-personne-16.herokuapp.com/index.php?unvalid') {
                            echo '<p class="warning">Merci de bien vouloir renseigner au moins votre nom et votre numéro de téléphone, afin que je puisse vous recontacter !</p>';
                        }
                    ?>

                </form>
            </div>
          </div>
    </main>
    
    <!-- FOOTER -->
    <?php include_once 'footer.php'; ?>

</body>
</html>