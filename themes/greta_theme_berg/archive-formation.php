<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <script src="https://kit.fontawesome.com/0a3766d4f1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Mina&display=swap" rel="stylesheet">
</head>

<body>

<?php 
/* 
    Template Name: Archive formation
    Template Post Type:  page
*/

$url = "http://localhost/brief7/wp-json/wp/v2/formation";

$data = file_get_contents($url);

$formations = json_decode($data , true);


/*Recupère les champs créees dans ACF */

$Requete_SQL = array (
    'post_type' => 'formation'
);

$my_query = new WP_Query( $Requete_SQL );

// 3. On lance la boucle !
$index = 0 ;

?>


<section class="main section">
    <div class="container">
        <h1 class=" p-4 pb-2 border-bottom  border-black border-5  mina-regular "> Nos formations </h1>
    
        <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <div class="row fond-ecran-custom mt-5 rounded-bottom">
            <div class="col-3 d-flex justify-content-center align-items-center  ">
            
                <?php  the_post_thumbnail(); ?>
            </div>
            <div class="col-9 p-0">
                
                <h2 class="m-0">
                    <div>
                    <i class="fa-solid fa-graduation-cap"></i><?php  the_title(); ?></h2>
     
                <i class="fa-regular fa-calendar-days"></i>
                <?php 
                // Mettre la date au format francais
                
                echo date('d/m/Y', strtotime($formations[$index]['acf']['date_debut']));?>
                <?= "->" ?>
                <?php  echo date('d/m/Y', strtotime($formations[$index]['acf']['date_fin_formation'])); ?>
                <?php the_excerpt() ?>

                <div class="d-flex align-items-end justify-content-end ">
                    <a class="w-50" href="<?php the_permalink() ?>"><buttun class="btn btn-primary w-100 couleur-jaune-custom " > En savoir plus ></buttun></a>
                </div>

            </div>
            
        </div>
        <?php 
        endwhile;
        endif;
        ?>
    </div>
</section>
<?php  ?>





</div>

   <?php //  echo  $formations[$index]['acf']['intitule_de_la_formation'];
    // echo  $formations[$index]['acf']['date_debut'];
    // echo  $formations[$index]['acf']['date_fin_formation'];
    ?> <br> <?php/*
    the_post_thumbnail();
    the_excerpt();
    $index = $index+1;

endwhile;
endif;
*/ ?>
    </body>
</html>


?>

