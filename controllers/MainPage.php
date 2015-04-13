<?php
/**
 * Created by PhpStorm.
 * User: MaxQ
 * Date: 11/04/2015
 * Time: 17:51
 */

require_once '../views/header.html';
/*Cette partie de code ne fonctionne pas -- est censée retourner le film recherché
*/
require_once '../models/MoviesDB.php';

$resultat = getMovieDB('inception');
if($resultat) {
    echo('blao');
    $array['reponse'] = $reponse;
    echo json_encode($array);
}
require_once '../views/movies.html';
require_once '../views/footer.html';