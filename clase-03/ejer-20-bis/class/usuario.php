<?php




class Usuario{

    protected $nombre;
    private $_email;

    private $_pass;

    public function __construct($nombre,$email, $pass){

        //parent::__construct($nombre);
        $this->_email = $email;
        $this->_pass = $pass;
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }


    public function mostrar(){
        return $this->nombre . " | " . $this->_email;
    }

    public function validarMail($mail){

        return $this->_email == $mail; 
    }

    public function validarPass($password){

        return$this->_pass == $password ; 
    }


}