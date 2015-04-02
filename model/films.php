<?php
/**
 * Created by PhpStorm.
 * User: Portable-Nico
 * Date: 02/04/2015
 * Time: 16:50
 */
class Films
{
    private $titre;
    function __getTitre()
    {
        return $this->titre;
    }

    function __setTitre($titre)
    {
        $this->titre = $titre;
    }

    private $genre;
    function __getGenre()
    {
        return $this->genre;
    }

    function __setGenre($genre)
    {
        $this->genre = $genre;
    }

    private $duree;
    function __getDuree()
    {
        return $this->duree;
    }

    function __setDuree($duree)
    {
        $this->duree = $duree;
    }

    private $date_realisation;
    function __getDateRealisation()
    {
        return $this->date_realisation;
    }

    function __setDateRealisation($date_realisation)
    {
        $this->date_realisation = $date_realisation;
    }
    private $realisateur;
    function __getRealisateur()
    {
        return $this->realisateur;
    }

    function __setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;
    }

    private $acteur;
    function __getActeur()
    {
        return $this->acteur;
    }

    function __setActeur($acteur)
    {
        $this->acteur = $acteur;
    }

    private $resume;
    function __getResume()
    {
        return $this->resume;
    }

    function __setResume($resume)
    {
        $this->resume = $resume;
    }

    function __films()
    {

    }
}