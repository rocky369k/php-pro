<?php

declare(strict_types=1);

namespace phpstormprojects\phpro\Builder;

use phpstormprojects\phpro\Builder\Contact;

class ContactBuilder{
    private $name = 'Unknown';
    private $surname = 'Unknown';
    private $email = 'Unknown';
    private $phone = 'Unknown';
    private $address = 'Unknown';

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function setSurname($surname){
        $this->surname = $surname;
        return $this;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function setPhone($phone){
        $this->phone = $phone;
        return $this;
    }

    public function setAddress($address){
        $this->address = $address;
        return $this;
    }

    public function build():Contact {
        $Contact = new Contact($this->name,$this->surname,$this->email,$this->phone,$this->address);
        return $Contact;
    }
}