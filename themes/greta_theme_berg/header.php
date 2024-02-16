<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mina&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <script src="https://kit.fontawesome.com/0a3766d4f1.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="w-100">
<div class="row m-0 p-0">
    <div class="col-sm w-50">
      <img class="w-25 ms-4" src="<?php echo bloginfo('template_directory')."/images/logo.png"?>" alt="occitanie">
    </div>
    <div class="col-sm w-50 d-flex  justify-content-end">
            <nav class=" navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <!--Construction de liens ci-dessous:
                -esc_url : Nettoie les URLs pour éviter les problèmes de sécurité.
                -home_url : Récupère l'URL de la page d'accueil d'un site WordPress.
                -l'URL est construite en utilisant la fonction home_url avec le chemin /contact, 
                assurant que le lien est correctement formé sans avoir à concaténer manuellement les parties de l'URL.-->

                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= esc_url( home_url() ); ?>">Page d'accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= esc_url( home_url( '/actualites' ) ); ?>">Actualités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?= esc_url( home_url( '/a-propos' ));?>">A Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= esc_url( home_url( '/formations' ) );?>">Formations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="<?= esc_url( home_url( '/contact' ) ); ?>">Contact</a>
                </li>     
                </ul>
            </div>
        </nav>
    </div>
  </div>
  


</header>

