<?php
/**
 * Created by PhpStorm.
 * User: MaxQ
 * Date: 02/04/2015
 * Time: 16:14
 */

require_once __DIR__."/../models/Movies.php";

$a = new Movies();
$a->getMovie('12511');

