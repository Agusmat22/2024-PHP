<?php

class Person{

    private $_name;
    private $_age;
    

    public function __construct($name,$age){

        $this->_name = $name;
        $this->_age = $age;
    }

    public function show(){

        return "Nombre: " . $this->_name . "<br/>" . "Edad: " . $this->_age->format('y-m-d');
    }

}

class Employee extends Person{

    private $_id;
    private $_position;
    public static $_employee;

    public function __construct($name="",$age=0,$id=0,$position=""){

        parent::__construct($name,$age);
        $this->_id = $id;
        $this->_position = $position;

        Employee::$_employee = "OMG";
    }

    public function show(){
        
        return parent::show() . "<br/> Id: " . $this->_id . "<br/> Position: " . $this->_position;
    }

    public static function equals($emp1, $emp2)
    {
        return $emp1->getId() === $emp2->getId();
    }

    public function getId(){
        return $this->_id;
    }
}


$person1 = new Person("Agustin",new DateTime('2001-02-24'));

$employee1 = new Employee("Agustin",new DateTime('2001-02-24'),665,"Office worker");
$employee2 = new Employee("Agustin",new DateTime('2001-02-24'),665,"Office worker");

$arrayPerson = array();

echo "---------- PERSON 1 --------- <br/>";
echo $person1->show();
echo "<br/> ---------  EMPLOYEE 1 ----------- <br/>";
echo $employee1->show();
echo "<br/> ---------  EQUALS STATIC ----------- <br/>";
echo Employee::equals($employee1,$employee2);
echo "<br/> --------- ATRIBUTTE STATIC ----------- <br/>";

echo Employee::$_employee;



