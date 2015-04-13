<?php
/**
 * Created by PhpStorm.
 * User: MaxQ
 * Date: 02/04/2015
 * Time: 16:14
 */

require_once "../models/Movies.php";
require_once "../models/MoviesDB.php";


/* Cette partie de code ne fonctionne pas -- est censée retourner le film recherché
*/
// Recherche du film dans la base de données local -- Si un film est retourné -- On affiche les informations correspondantes
// Cette partie de code ne fonctionne pas car il y a un prblm de conversion entre le retour du select (Object) et le JSON ENCODE afin qu'Ajax puisse l'interpreter

// Recherche du film dans la base de données local -- Si un film est retourné -- On affiche les informations correspondantes
    /*$resultat = getMovieDB($_POST['movieSearchBar']);
    if($resultat != null) {
        echo json_encode($resultat);
    }else {*/

    //Si non on recherche les informations du film via un webservice (Allocine)
    $a = new Movies();
    $res = json_decode($a->getMovieByNameWSAllo($_POST['movieSearchBar']));
    echo json_encode($res);
    //Insertion des informations dans la base de données -- Alimentation
    /*$movies = $res->movies;
    foreach ($movies as $movie)
    {
        $titre = $movie->title;
        $genre = NULL;
        $duree = NULL;
        $date_realisation = $movie->release->releaseDate;
        $realisateur = $movie->castingShort->directors;
        $acteur = $movie->castingShort->actors;
        $resume = NULL;
        setMovieDB($titre,$genre,$duree,$date_realisation,$realisateur,$acteur,$resume);
    }*/
//}

