

    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php include('header.php'); ?>

        <div class="container a_propos">
            <div class ="row" >
                <div class= "col col-12 w-100 mb-5">
                    <?php  the_post_thumbnail(); ?>
                </div>
                <div class="col width-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
    </body>
    </html>