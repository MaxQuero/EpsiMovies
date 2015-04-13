<?php

/**
Connexion à la base de données locale
 */
require_once '../config.php';

 function getConnection()
 {
     try
     {
         $bdd = new PDO(DB_HOST,DB_USER,DB_PASSWORD);
         return $bdd;
     }
     catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }
 }
?>
