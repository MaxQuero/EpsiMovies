<?php

/**

 */
require_once '../config.php';

 function getConnection()
 {
     try
     {
         $bdd = new PDO(DB_HOST,DB_USER,DB_HOST);
         return $bdd;
     }
     catch(Exception $e)
     {
         die('Erreur : '.$e->getMessage());
     }
 }
?>
