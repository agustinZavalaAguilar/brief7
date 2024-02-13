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
    Template Name: Archive Actu
    Template Post Type:  page
*/

$url = "http://localhost/brief7/wp-json/wp/v2/formation";

$data = file_get_contents($url);

$formations = json_decode($data , true);


/*Recupère les champs créees dans ACF */

$Requete_SQL = array (
    'post_type' => 'actualite'
);

$my_query = new WP_Query( $Requete_SQL );

// 3. On lance la boucle !
$index = 0 ;

?>


<section class="main section liste_actu">  
    

    <div class="container ">
      <h1 class=" p-4 pb-2 border-bottom  border-black border-5  mina-regular "><i class="fa-regular fa-newspaper"></i> Nos Actualités</h1>
        
        <div class="row d-flex flex-row justify-content-center "> 
      <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
           
                <div class="col-4 d-flex flex-column  justify-content-between  my-5 "> 
                    <?php if (empty(get_the_post_thumbnail())){ ?>
                            <img  width="100%" height="200" src="<?php echo bloginfo('template_directory')."/images/image_actu_par_défaut.png"?>"  />
                            <?php 


                        }else{
                            the_post_thumbnail();
                        } ?>
                    <div class="d-flex flex-row justify-content-between align-items-center border-bottom  border-black border-2 p-3">
                        <h4 class="pe-2"> <?php  the_title(); ?> </h4> 
                        <a href="<?php the_permalink() ?>"><i class="fa-regular fa-square-caret-right"></i></a>
                    </div>
                       
                </div>
            
      
        <?php 
        endwhile;
        endif;
        ?>
    </div>
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

