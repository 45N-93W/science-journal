<?php

class User  
{
    public $username;
    public $password;
    Public $email;
    public function getName() { return $this->username; }
    public function setName($name) { $this->username = $name;}
    public function getEmail() {$this->email; return $this;}
    public function setEmail($email) {$this->email = $email;}
    public function getPassword() {return $this->password;}
}