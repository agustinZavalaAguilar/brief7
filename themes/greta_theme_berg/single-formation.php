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
    <div class='container '>
        <div class="row my-4">
            <div class="col-12">
                <h2 class=" mina-regular m-0 d-flex justify-content-center align-items-center  border-3 border-bottom border-black pb-3"><i class="fa-solid fa-graduation-cap pe-4 "></i><?php the_title() ?></h2>
            </div>
        </div>
    <div class='row d-flex flex-column flex-md-row align-items-start'>

        <div class="col-8">
    
                
            </h2>
        <!---------Description--------------------------->
            <section>
                <div>
                    <p><?= $description ?></p>
                </div>
            </section>
        </div>
<!---------List détails-------------------------->
        <div class="col-4 py- info_une_formation">
        <ul>
            <div class="d-flex justify-content-center py-3 "><?php the_post_thumbnail() ?></div>
            <li>
            <i class="fa-solid fa-folder pe-4"></i>
                <?php echo $type ?>
            </li>
            <li>
                <i class="fa-solid fa-briefcase pe-4"></i>
                <?php echo $reference ?>
            </li>
            
            <?php 
            
            if (!empty($debut) && !empty($fin)) { ?>
                <li>
                    <i class="fa-regular fa-calendar-days pe-4"></i>
                    <?php 
                    echo  $debut . ' au ' . $fin ;
                    ?>
                </li>
                
            <?php } else {
                echo '<li></i>' . $dureeFormation . '</li>';
            }        
            ?>

            <li>
                <i class="fa-solid fa-school-flag pe-4"></i>
                <?=  $ville . ', ' . $lieu ?>
            </li>
            
            <li>
                <i class="fa-solid fa-address-card pe-4"></i>
                <?=   $contactPrenom . ' ' . $contactNom ?>
            </li>

            <li>
            <?php 
            $Tab_num = str_split( $tel,2);
            
            for($index = 0 ; $index < count($Tab_num) ; $index++){
                $Tab_num[$index] = $Tab_num[$index]." ";
            }
            
            $tel_espace = implode($Tab_num)
            ?>
            <i class="fa-solid fa-phone pe-4"></i> 
            <a href="tel:<?= $tel ?>"><?= $tel_espace ?></a></li>
            <?php 
            if(!empty($trombiPromo)){
                echo '<a href=" ' .  $trombiPromo . ' "> '; 
                    echo '<li> Voir promotions précedentes </li>'; 
                echo '</a>';
            }
            ?>    
        </ul>
        <div class="d-flex justify-content-around ">
        <div class="d-flex justify-content-center ">
            <a href="<?php echo $urlformation ?>">
                <button class="btn couleur_btn" type="button p-4 "><i class="fa-solid fa-link"></i>fiche formation maforpro</button>
            </a>
        </div>
        <div class="d-flex justify-content-center ">
            <a href="<?php echo bloginfo('url')."/contact" ?>">
                <button class="btn couleur_btn" type="button p-4 ">Contact</button>
            </a>
        </div>
        </div>
        </div>
    </div>
</body>
</html>