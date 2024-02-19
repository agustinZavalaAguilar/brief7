<?php include('header.php') ?>

<section class="uneActu">

    <div class="container">
        <div class = "d-flex justify-content-between flex  border-bottom  border-black border-5 p-3  ">
            <h2 class=" p-4  mina-regular m-0 d-flex justify-content-center align-items-center  "><i class="fa-regular fa-newspaper pe-5 m-0"></i><?php the_title() ?></h2>
            <?php if (empty(get_the_post_thumbnail())){ ?>
                                <img  width="25%" height="200" src="<?php echo bloginfo('template_directory')."/images/image_actu_par_défaut.png"?>"  />
                                <?php 


                            }else{
                                the_post_thumbnail();
                            } ?>
        </div>
        <div class="pt-5">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 justifier-contenu-custom"> 
                    <?php the_content() ?>
                </div>
            <div class="col-1"></div>
        </div>
        
    </div>
</section>


<?php include('footer.php') ?>