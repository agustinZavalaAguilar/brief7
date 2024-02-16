<?php include ('header.php') ?>

<div class="container ">
<h1 class=" p-4 pb-2 border-bottom  border-black border-5  mina-regular "><i class="fa-regular fa-message"></i> Nous contacter</h1>
<div class="row d-flex justify-content-between align-items-center fond_contact   ">
    <div class ="col-8 formulaire_contact">
        <?php the_content() ?>
    </div>
        <div class="col-4 info_contact ps-5">
            <h4>Pour contacter le Greta de la Lozère :</h4>
            <div class="ps-4 my-4 ">
                <div class="d-flex align-items-center justify-content-start  my-3">
                    <i class="fa-solid fa-location-dot pe-5"></i>
                    <div>
                        <?php the_field('lieu') ?>
                        <br>
                        <?php the_field('adresse_postale') ?>
                        <br>
                        <?php the_field('code_postal') ?> 
                        <?php the_field('ville') ?>
                    </div>
                </div>

            
                <div class="d-flex align-items-center justify-content-start  ">
                    <i class="fa-solid fa-phone pe-5"></i>
                    <div>
                    
                        <?php the_field('telephone_portable') ?>
                        <br>
                        <?php the_field('telephone_fixe') ?>
                    </div>
                </div>
                
                <br>
                <div class="d-flex align-items-center justify-content-start  ">
                    <i class="fa-solid fa-envelope  pe-5"></i>
                    <?php the_field('adresse_e-mail') ?>
                </div>
            </div>
            <h4 class=""> Pour contacter Lozère Développement : </h4>
            <div class="ps-4 my-4 ">
                <div class="d-flex align-items-center justify-content-start  my-3">
                    <i class="fa-solid fa-envelope  pe-5"></i>
                    <?php the_field('adressse_e-mail_dev') ?>
                </div>
                <div class="d-flex align-items-center justify-content-start  my-3">
                    <i class="fa-solid fa-phone pe-5"></i>
                    <?php the_field('tel_lozere_dev') ?>
                </div>
            </div>


        </div>
    </div>



<?php include('footer.php') ?>