<?php
/**
 * Created by PhpStorm.
 * User: Portable-Nico
 * Date: 02/04/2015
 * Time: 16:50
 *Classe Model de la BDD, non utilisée pour le moment
 */
class ObjectFilms
{
// <editor-fold desc="titre">
    private $titre;
    function getTitre()
    {
        return $this->titre;
    }

    function setTitre($titre)
    {
        $this->titre = $titre;
    }
// </editor-fold>

// <editor-fold desc="genre">
    private $genre;
    function getGenre()
    {
        return $this->genre;
    }

    function setGenre($genre)
    {
        $this->genre = $genre;
    }

// <editor-fold desc="duree">
    private $duree;
    function getDuree()
    {
        return $this->duree;
    }

    function setDuree($duree)
    {
        $this->duree = $duree;
    }

// <editor-fold desc="date_realisation">
    private $date_realisation;
    function getDateRealisation()
    {
        return $this->date_realisation;
    }

    function setDateRealisation($date_realisation)
    {
        $this->date_realisation = $date_realisation;
    }

// <editor-fold desc="realisateur">
    private $realisateur;
    function getRealisateur()
    {
        return $this->realisateur;
    }

    function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;
    }

// <editor-fold desc="acteur">
    private $acteur;
    function getActeur()
    {
        return $this->acteur;
    }

    function setActeur($acteur)
    {
        $this->acteur = $acteur;
    }

// <editor-fold desc="resume">
    private $resume;
    function getResume()
    {
        return $this->resume;
    }

    function setResume($resume)
    {
        $this->resume = $resume;
    }

    function __films($titre,$genre,$duree,$date_realisation,$realisateur,$acteur,$resume)
    {
        $this->titre = $titre;
        $this->genre = $genre;
        $this->duree = $duree;
        $this->date_realisation = $date_realisation;
        $this->realisateur = $realisateur;
        $this->acteur = $acteur;
        $this->resume = $resume;
    }
}