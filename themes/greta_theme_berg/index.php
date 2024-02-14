<?php
include('header.php')
?>
<!-- Section herobanner -->
<section class="hero_banner">   
    <h1 class="text-center text-uppercase">Formez vous avec le greta</h1>
    <a class="d-flex justify-content-center" href=""><button class="btn btn-primary" type="button">CONTACT</button></a>
</section>
    <!-- section a propos -->
<section class="propos">
    <div class="container">
        <div class="row">
        <h2 class="text-center text-uppercase mt-4 mb-5">Qui sommes nous ?</h2>
            <div class="col-sm-12 col-md-6 animate__animated  animate__backInLeft animate__delay-1s">
                <img src="<?php echo bloginfo('template_directory')."/images/cartegard.png"?>" alt="">
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
<section class="formations d-flex justify-content-center">
  <div id="carouselExampleControls" class="carousel slide w-50 d-flex justify-content-center" data-bs-ride="carousel">
  <div class="carousel-inner text-align">
    <div class="carousel-item active">
      <a href=""><img src=<?php echo bloginfo('template_directory')."/images/dev-web.png"?> class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href=""><img src=<?php echo bloginfo('template_directory')."/images/telecom.png"?> class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href=""><img src= <?php echo bloginfo('template_directory')."/images/pixcertif.jpg"?> class="d-block w-100" alt="..."></a>
    </div>
  </div>
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
<a class="d-flex justify-content-center" href=""><button class="btn btn-warning" type="button">Voir les autres formations</button></a>
</div>
<!-- Section cards -->
<section>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo bloginfo('template_directory')."/images/theatre.jpg"?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Saison culturelle 23-24 de la ville de Mende</h5>
        <p class="card-text">Rendez-vous est donné le 15octobre pour un lancement de saison époustouflant avec la compagnie Basinga, qui investira le quartier de Fontanilles pour y tendre un fil à travers ciel, et offrira au public lozérien une traversée funambule participative à couper le souffle.</p>
        <a class="d-flex justify-content-center" href=""><button class="btn btn-primary" type="button">CONTACT</button></a>
      </div>      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo bloginfo('template_directory')."/images/étudiants.jpeg"?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Journée des étudiants : 2e édition</h5>
        <p class="card-text">C’est donc le 7 septembre prochain, sous le slogan « Mets tes baskets et prépare tes neurones, ça va bouger ! » que près de 1 000 étudiants mendois sont conviés à une après-midi de rentrée.</p>
        <a class="d-flex justify-content-center" href=""><button class="btn btn-primary" type="button">CONTACT</button></a>
      </div>      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <a class="d-flex justify-content-center" href=""><button class="btn btn-primary" type="button">CONTACT</button></a>
      </div>
    </div>
  </div>
</div>
</section>



<?php
include('footer.php')
?>

