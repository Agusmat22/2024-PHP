<?php


class User{

    private $_id;
    private $_nombre;
    private $_mail;
    private $_password;
    
    private $_fechaRegistro;


    public function __construct($nombre, $mail, $password, $fechaRegistro ,$id=null){
        $this->_id = $id;
        $this->_nombre = $nombre;
        $this->_mail = $mail;
        $this->_password = $password;
        $this->_fechaRegistro = $fechaRegistro;
    }


    public function getId(){
        return $this->_id;
    }
    public function getNombre(){
        return $this->_nombre;
    }

    public function getMail(){
        return $this->_mail;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function getRegistro(){
        return $this->_fechaRegistro;
    }

    

}