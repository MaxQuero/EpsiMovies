<?php
/**
 * Created by PhpStorm.
 * User: MaxQ
 * Date: 02/04/2015
 * Time: 16:14
 */

require_once "../models/Movies.php";

$a = new Movies();
$res = json_decode($a->getMovieByName($_POST['movieSearchBar']));
echo json_encode($res);

