<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\Builder;

class Contact {
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;

    public function __construct($name, $surname, $email, $phone, $address)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getAddress(){
        return $this->address;
    }
}
