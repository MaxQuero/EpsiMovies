<?php
/**
 * Created by PhpStorm.
 * User: MaxQ
 * Date: 13/04/2015
 * Time: 11:29
 */

// Pour faire appel au deuxième webservice > ne fonctionne pas
require_once '../models/api-allocine-helper.php';
// Créer un objet AlloHelper.
$allohelper = new AlloHelper;
// Définir les paramètres

$res = $allohelper->search('Inception');

