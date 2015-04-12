<?php
/**
 * Created by PhpStorm.
 * User: MaxQ
 * Date: 03/04/2015
 * Time: 09:18
 */

require_once 'WebServiceAllocine.php';
define('ALLOCINE_PARTNER_KEY', '100043982026');
define('ALLOCINE_SECRET_KEY', '29d185d98c984a359e6e6f26a0474269');

class Movies extends WebServiceAllocine
{

    public function  __construct(){

    }

    public function getMovieById($id){
        $allocine = new WebServiceAllocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);
        $result = $allocine->get($id);
        return $result;
    }

    public function getMovieByName($name) {
        $allocine = new WebServiceAllocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);
        $result = $allocine->search($name);
        return $allocine->search($name);
    }
}