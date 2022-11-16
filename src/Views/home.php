<?php
require '../src/Models/ItemManager.php';

$itemManager = new ItemManager();
$services = $itemManager->listItems();
?>

<?php include_once 'includes/header.php'; ?>

    <!-- MAIN -->
    <main>
        <div class="container">

            <!-- services -->
            <?php foreach ($services as $item): ?>
                <div class="" id="services">
                    <div class="align">
                        <h2><?= $item[0] ?></h2>
                        <img src="<?= $item[1] ?>">
                        <ul>
                            <?php foreach ($item[2] as $listDetail): ?>
                                <li><?= $listDetail ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- crédit d'impôt -->
            <div class="">
                <div class="">
                    <h2>Tarifs :</h2>
                    <p>20€ de l'heure, sur rendez-vous uniquement</p>
                    <span class=""></span>
                    <h2>Crédit d'impôt : service à la personne</h2>
                    <img src="assets/img/creditdimpot.png" alt="Crédit d'impôt, -50% !">
                    <p>Bénéficiez d'un crédit d'impôt de 50% sur le montant de la facture.</p>
                    <p class="">
                        >> Plus de renseignements sur le
                        <a href="https://www.service-public.fr/particuliers/vosdroits/F12">
                            site officiel du service public</a> (service-public.fr).</p>
                </div>
            </div>

            <!-- contacts -->
            <div class="contact block" id="contacts">
                <img src="assets/img/photoflorence.png" alt="Photo de Florence Poibleau">
                <h2>Florence POIBLEAU</h2>
                <a href="tel:+33638528307">06.38.52.83.07</a>
                <span class="separator"></span>

                <!-- formulaire de contact -->
                <form action="../../script.php" method="post">
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
                    <p class="aster">En cliquant sur "Envoyer", vous consentez à ce que les informations fournies soient
                        utilisées afin de pouvoir vous recontacter * (voir pied de page).</p>

                </form>

            </div>
        </div>
    </main>

    <!-- FOOTER -->
<?php include_once 'includes/footer.php'; ?>