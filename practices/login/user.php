<?php

class User{

    private $_name;
    private $_mail;
    private $_password;

    public function __construct($name, $mail, $password){

        $this->_name = $name;
        $this->_mail = $mail;
        $this->_password = $password;
    }

    public function getName(){
        return $this->_name;
    }
    public function getMail(){
        return $this->_mail;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function toString(){
        return $this->_name." | ".$this->_mail;
    }

}