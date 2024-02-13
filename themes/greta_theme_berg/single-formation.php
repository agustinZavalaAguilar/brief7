<?php
/*----------------Declaration de variables --------------------------------*/

$intitule = get_field('intitule_de_la_formation');
$type = get_field('type_de_formation');
$urlformation = get_field('url_formation');
$reference = get_field('reference_formation');
$debut = get_field('date_debut');
$fin = get_field('date_fin_formation');
$dureeFormation = get_field('decrire_duree_de_la_formation');
$ville = get_field('ville_de_formation');
$lieu = get_field('lieu_de_formation');
$contactPrenom = get_field('prenom_contact');
$contactNom = get_field('nom_du_contact');
$tel = get_field('telephone');
$trombiPromo = get_field('url_trombinoscopes_promotions');
$description = get_the_content();

?>

<!-----------------------------HTML------------------------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php include('header.php'); ?>

<!---------titre-------------------------------->
<body>  
    <div class='container'>
    <div class='row d-flex flex-column flex-md-row align-items-center'>
        <div class="col-8">
            <h1>
                <?= $intitule ?>
            </h1>
        <!---------Description--------------------------->
            <section>
                <div>
                    <p><?= $description ?></p>
                </div>
            </section>
        </div>
<!---------List détails-------------------------->
        <div class="col-4">
        <ul>
            <?php 
            if (!empty($debut) && !empty($fin)) {
                echo '<li> Dates de formation: du ' . $debut . ' au ' . $fin . '</li>';
            } else {
                echo '<li>' . $dureeFormation . '</li>';
            }        
            ?>

            <li><?= 'Lieu de formation: ' . $ville . ', ' . $lieu ?></li>
            <li><?= 'Contact: ' . $contactPrenom . ' ' . $contactNom ?></li>
            <li><?= 'Téléphone: ' . $tel ?></li>
            <?php 
            if(!empty($trombiPromo)){
                echo '<a href=" ' .  $trombiPromo . ' "> '; 
                    echo '<li> Voir promotions précedentes </li>'; 
                echo '</a>';
            }
            ?>    
        </ul>
        <a href="contact.php">
            <button type="submit">S'inscrire</button>
        </a>
        </div>
        </div>
    </div>
</body>
</html>