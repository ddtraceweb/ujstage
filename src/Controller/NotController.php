<?php
/**
 * Created by PhpStorm.
 * User: daviddjian
 * Date: 26/05/15
 * Time: 22:50
 */

namespace Controller;

use Init\Controller;

class NotController extends Controller{

    public function notAction()
    {
        include(__DIR__.'/../view/404.php');
    }
}