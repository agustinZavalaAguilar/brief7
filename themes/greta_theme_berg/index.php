<?php
include('header.php')
?>
<!-- Section herobanner -->
<section class="hero_banner">   
    <h1 class="text-center text-uppercase">Formez vous avec le greta</h1>
    <a class="d-flex justify-content-center" href="<?php echo bloginfo('url')."/contact"?>"><button class="btn" type="button">CONTACT</button></a>
</section>
    

    <!-- section a propos -->
<section class="propos">
    <div class="container">
        <div class="row">
        <h2 class="text-center text-uppercase mt-4 mb-5">Qui sommes nous ?</h2>
            <div class="col-sm-12 col-md-6 animate__animated  animate__backInLeft animate__delay-1s ">
                <img  src="<?php echo bloginfo('template_directory')."/images/cartegard.png"?>" alt="">
            </div>
            <div class="col-sm-12 col-md-6 animate__animated animate__backInRight animate__delay-1s">
              <h5 class="text-center">Notre histoire</h5>
                <p class=" para1 ms-3">Fondé en 1975 par la Loi d'organisation de la formation professionnelle, les GRETA dépendent du Ministère de l'Éducation nationale. Leur objectif est d'analyser les besoins en qualification du tissu économique pour former ensuite les professionnels de demain, répondre à leurs besoins, à ceux de l'entreprise et surtout à ceux du marché de l'emploi.
                Depuis 41 ans, le GRETA forme dans des secteurs qui recrutent. Implanté au cœur des bassins d'emploi de Nîmes, Alès, Bagnols/Cèze et Mende, le GRETA-CFA Gard-Lozère est une référence en matière de formation.</p>
              <h5 class="text-center">Des prestations sur mesure</h5>
                <p class="para2 ms-3">Pour aboutir à une insertion professionnelle réussie, le GRETA-CFA vous permet de consolider vos savoirs de base et propose une offre de prestations (conseil en orientation, accompagnement au projet professionnel, bilan de compétences) auprès de ses Centres de Bilan (DABM) de Nîmes, Alès, Bagnols sur Cèze et Mende.
              </p>
            </div>
        </div>
    </div>
</section>
<!-- section formations -->
<h2 class="title__formations text-center text-uppercase mt-4 mb-5">Formations</h2>
<?php $args = array(
    'post_type' => 'formation',
    'posts_per_page' => 3,
    'orderby' => 'meta_value_num',
    'meta_key' => 'date_debut',
    'order' => 'DESC',
);
$my_query = new WP_Query( $args ); 

$index = 0
?>

<section class="formations d-flex justify-content-center">
  <div id="carouselExampleControls" class="carousel slide w-50 d-flex justify-content-center" data-bs-ride="carousel">
  <div class="carousel-inner text-align caroussel-custom">
  <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <?php 
        if ($index == 0) {
            $imageActive = "active";
        }else{
            $imageActive = "";
        }?>

    <div class="carousel-item <?php echo $imageActive ?>">
      <a href="<?php echo $my_query->post->guid ?>"><?php the_post_thumbnail() ?></a>
      <div class="carousel-caption d-none d-md-block">
    <h5 class="couleur_orange_rouge"><?php the_title() ?> </h5>
    <p>...</p>
  </div>
    </div>
    <?php 
        endwhile;
        endif;
    ?>



    <!--<div class="carousel-item">
      <a href=""><img src=<?php //echo bloginfo('template_directory')."/images/formations/telecom.png"?> class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href=""><img src= <?php // echo bloginfo('template_directory')."/images/formations/pixcertif.jpg"?> class="d-block w-100" alt="..."></a>
    </div>
  </div>-->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section>
<div class="button__formations mt-5 mb-5">
<a class="d-flex justify-content-center" href=""><button class="btn" type="button">Voir les autres formations</button></a>
</div>



<!-- Section cards -->
<section class="actu">
    <div class="justify-content-center d-flex align-items-center ">
        <h2 class="actu__title text-center text-uppercase mb-4 mt-4">Les news du greta</h2>
        <div class="button__formations ms-5">
            <a class="d-flex justify-content-center" href="<?php echo bloginfo('url')."/actualites"?>"><button class="btn" type="button">Voir les autres actus ></button></a>
        </div>
    </div>
  <?php $args = array(
    'post_type' => 'actualite',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
);
$my_query = new WP_Query( $args ); 

$index = 0 ?>
<div class="container" >
    <div class="row d-flex">
        <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <?php if (empty(get_the_post_thumbnail())){ 
                $url_domaine = get_bloginfo('template_directory');
                $image_en_avant = "<img  width='200' height='133' src='".$url_domaine.'/images/image_actu_par_défaut.png'."' />" ;
                 


            }else{
                $image_en_avant = get_the_post_thumbnail() ;
            } ?>
            <?php if (empty(get_the_excerpt())){ 
                $url_domaine = get_bloginfo('template_directory');
                $extrait = "Si vous souhaitez en savoir plus sur cette actualité <br> Cliquer sur le bouton juste en dessous " ;
                 


            }else{
                $extrait = get_the_excerpt()."[...]" ;
            } ?>
            <div class="col-4 carte_actu">
          
                <div class= "card h-100 d-flex  justify-content-between" > 
                     <h5 class="card-title text-center "><?php the_title() ?></h5>
                    <div class="d-flex justify-content-center align-items-center  "><?php  echo $image_en_avant ?></div>
                    <p><?php echo $extrait ?></p>
                    <a class="d-flex justify-content-center" href="<?php echo $my_query->post->guid ?>"><button class="btn" type="button">En savoir plus</button></a>
                </div>
            </div>
        <?php endwhile;
        endif ; ?>
    </div>
</div>







<!--<div class="row row-cols-1 row-cols-md-3 g-4 m-0 p-0">
  <div class="col">
    <div class="card h-100 ">
      <img src="<?php //echo bloginfo('template_directory')."/images/actualités/theatre.jpg"?>" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column justify-content-between">
        <h5 class="card-title">Saison culturelle 23-24 de la ville de Mende</h5>
        <p class="card-text">Rendez-vous est donné le 15octobre pour un lancement de saison époustouflant avec la compagnie Basinga, qui investira le quartier de Fontanilles pour y tendre un fil à travers ciel, et offrira au public lozérien une traversée funambule participative à couper le souffle.</p>
        <a class="d-flex justify-content-center" href=""><button class="btn" type="button">En savoir plus</button></a>
      </div>      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php //echo bloginfo('template_directory')."/images/actualités/actutelecom.jpg"?>" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column justify-content-between">
        <h5 class="card-title">La formation Tech’n camp s’installe dans le paysage numérique lozérien !</h5>
        <p class="card-text">En Septembre 2020, Le GRETA-CFA de Lozère imagine une nouvelle formation intitulée « Techn’camp » qui vise à former des informaticiens spécialistes des systèmes et réseaux. Celle-ci s’inspire beaucoup du format, intensif et ouvert, développé par « Codi n’camp », une formation de programmeur web imaginée en Lozère et qui constituait à l’époque une petite révolution dans le champ des formations supérieures.</p>
        <a class="d-flex justify-content-center" href=""><button class="btn" type="button">En savoir plus</button></a>
      </div>      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php //echo bloginfo('template_directory')."/images/actualités/actudev.jpg"?>" class="card-img-top" alt="...">
      <div class="card-body d-flex flex-column justify-content-between">
        <h5 class="card-title">DÉVELOPPEUR WEB ET WEB MOBILE</h5>
        <p class="card-text">- Développer ou faire évoluer des applications orientées web ou web mobile<br>
        - Concevoir la partie visuelle de l'application exécutée sur le navigateur côté ordinateur client<br>
        - Construire la maquette des écrans de l'interface utilisateur et prévoir la navigation de l'application web ou web mobile<br>
        - Coder l'ensemble avec les langages de programmation web adaptés et une architecture applicative conforme aux bonnes pratiques du développement web et web mobile<br>
        - Concevoir et coder la partie back-end<br>
        </p>
        <a class="d-flex justify-content-center" href=""><button class="btn" type="button">En savoir plus</button></a>
      </div>
    </div>
  </div>
</div>-->
</section>
<section class="partner ">
<div class="container d-flex justify-content-between">
    <a href=" https://www.greta-gard.com/"  target="_blank"><img src="<?php echo bloginfo('template_directory')."/images/partner/greta.jpg"?>" alt=""></a>
    <a href="https://lozere.fr/"  target="_blank"><img src="<?php echo bloginfo('template_directory')."/images/partner/lozeredep.jpg"?>" alt=""></a>
    <a href="https://lozere-developpement.com/"  target="_blank"><img src="<?php echo bloginfo('template_directory')."/images/partner/lozeredev.png"?>" alt=""></a>
    <a href=""  target="_blank"><img src="" alt=""></a>
    <a href="https://www.meformerenregion.fr/organismes/greta-cfa-de-lozere-mende"  target="_blank"><img src="<?php echo bloginfo('template_directory')."/images/partner/occitanie.png"?>" alt=""></a>
</div>
</section>



<?php
include('footer.php')
?>

