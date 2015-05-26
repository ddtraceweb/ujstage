<?php

namespace Controller;

use Init\Controller;
use Model\User;

class UserController extends Controller
{

    public function addAction()
    {
        $name = 'toto';

        $user = new User();
        $user->setName($name);
        $user->addUser();
    }
}