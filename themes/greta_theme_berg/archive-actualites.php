<?php include('header.php') ?>
<body>

<?php 
/* 
    Template Name: Archive Actu
    Template Post Type:  page
*/


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
           
                <div class="col-12 col-md-4 d-flex flex-column  justify-content-between  my-5 "> 
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
    ?> <br> <!--/*
    the_post_thumbnail();
    the_excerpt();
    $index = $index+1;

endwhile;
endif;
*/ ?>
    </body>
</html>-->


<?php include('footer.php') ?>

