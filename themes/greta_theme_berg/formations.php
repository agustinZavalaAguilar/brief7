<?php 
/* 
    Template Name: Formations
    Template Post Type: formation, page
*/

$url = "http://localhost/brief7/wp-json/wp/v2/formation";

$data = file_get_contents($url);

$formations = json_decode($data , true);

echo "<pre>";
print_r($formations);
echo "</pre>";

/*Recupère les champs créees dans ACF */

$Requete_SQL = array (
    'post_type' => 'formation'
);

$my_query = new WP_Query( $Requete_SQL );

// 3. On lance la boucle !
$index = 0 ;
if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();

    echo  $formations[$index]['acf']['intitule_de_la_formation'];
    echo  $formations[$index]['acf']['date_de_debut_formation'];
    ?> <br> <?php
    the_post_thumbnail();
    the_excerpt();
    $index = $index+1;

endwhile;
endif;



?>

<!------------------------Template HTLM------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations</title>
</head>
<body>
    <section>
        <h1> HELLO</H1>
        <table>
            <!--------------Intitulés de colonne-------------------->
            <th>


            </th>
            <!--------------Champs---------------------------------->
            <tr>

            </tr>
        </table>
    </section>
</body>
</html>