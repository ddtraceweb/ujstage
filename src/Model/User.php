<?php

namespace Model;

use Model\Repository\UserRepository;

class User extends UserRepository
{

    public $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}