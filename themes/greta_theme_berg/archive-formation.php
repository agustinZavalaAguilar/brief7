<?php include('header.php') ?>

<body>

<?php 
/* 
    Template Name: Archive formation
    Template Post Type:  page
*/

$url = "http://greta.2.lopia.fr/wp-json/wp/v2/formation";

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


<section class="main section liste_formation">
    <div class="container">
        <h1 class=" p-4 pb-2 border-bottom  border-black border-5  mina-regular "> <i class="fa-solid fa-graduation-cap"></i> Nos formations </h1>
        
        <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <div class=" section__img row fond-ecran-custom mt-5 rounded-bottom w-100 ">
            <div class=" col-3 d-flex justify-content-center align-items-center py-4  ">
            
                <?php  the_post_thumbnail('full'); ?>
            </div>
            <div class="col-9 d-flex flex-column  justify-content-between p-0">
                
                <h2 class="m-0">
                    <div>
                   <?php  the_title(); ?></h2>
                <div>
                <i class="fa-regular fa-calendar-days"></i>
                <?php 
                    // Mettre la date au format francais
                    
                    echo date('d/m/Y', strtotime($formations[$index]['acf']['date_debut']));?>
                    <?= "->" ?>
                    <?php  echo date('d/m/Y', strtotime($formations[$index]['acf']['date_fin_formation'])); ?>
                </div>
                <?php $resumer =  get_the_excerpt()."[...]";
                echo $resumer ;
                ?>

                <div class="d-flex align-items-end justify-content-end btn_liste_form ">
                    <a class="" href="<?php the_permalink() ?>"><buttun class=" btn  buttonform" > En savoir plus ></buttun></a>
                </div>
                <?php $index = $index +1; ?>
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
    ?> <br> <!--
    the_post_thumbnail();
    the_excerpt();
    $index = $index+1;

endwhile;
endif;
*/ ?>-->
<?php include('footer.php') ?>

