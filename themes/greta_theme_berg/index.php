<?php
include('header.php')
?>
<!-- Section herobanner -->
<section class="hero_banner">   
    <h1 class="text-center text-uppercase">Formez vous avec le greta</h1>
    <a class="d-flex justify-content-center" href=""><button class="btn btn-primary" type="button">CONTACT</button></a>
</section>
    <!-- section a propos -->
<section class="form">
    <div class="container">
        <div class="row">
        <h2 class="text-center text-uppercase mt-4">Qui sommes nous ?</h2>
            <div class="col-sm-12 col-md-6">
                <img src="<?php echo bloginfo('template_directory')."/images/cartegard.png"?>" alt="">
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="ms-4">Fondé en 1975 par la Loi d'organisation de la formation professionnelle, les GRETA dépendent du Ministère de l'Éducation nationale. Leur objectif est d'analyser les besoins en qualification du tissu économique pour former ensuite les professionnels de demain, répondre à leurs besoins, à ceux de l'entreprise et surtout à ceux du marché de l'emploi.
                Depuis 41 ans, le GRETA forme dans des secteurs qui recrutent. Implanté au cœur des bassins d'emploi de Nîmes, Alès, Bagnols/Cèze et Mende, le GRETA-CFA Gard-Lozère est une référence en matière de formation.</p>
            </div>
        </div>
    </div>
</section>
<!-- section formations -->
<section>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href=""><img src="..." class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href=""><img src="..." class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href=""><img src="..." class="d-block w-100" alt="..."></a>
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

<!-- Section cards -->
<section>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo bloginfo('template_directory')."/images/actu3.jpg"?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
    </div>
  </div>
</div>
</section>



<?php
include('footer.php')
?>

