<?php
/**
 * Created by PhpStorm.
 * User: Portable-Nico
 * Date: 13/04/2015
 * Time: 09:03
 */
require_once '../connector/DB.php';

function getMovieDB($titre)
{
    $db = getConnection();
    $req = 'select * from films where titre=$titre';
    $rs = $db->query($req);
    if (mysql_num_rows($rs) == 0)
    {
        return 0;
    }else
    {
        return $rs->fetchAll();
    }

}

function setMovieDB($titre,$genre,$duree,$date_realisation,$realisateur,$acteur,$resume)
{
   $db = getConnection();
   $req = 'insert into films (titre, genre, date_realisation, realisateur, acteur, resume) values($titre, $genre, $duree, $date_realisation, $realisateur, $acteur, $resume) ';
   $db->query($req);
}
