<?php



class User{
    // attribute in php || just like __init__ in python

    public $name;
    public $email;
    private $password; // if you do this you can't put the value outside the class just in the class :)


    function return_name($name){
        $this->name = $name; // just like self in python

    }


    function test(){
        echo $this->name;
    }

}



class Employee extends User{


    function get_name(){
        echo $this->name;
    }



}

$user1 = new Employee(); // call the object
//$user1  ->name='Mehras'; // put value in attribute
//$user1->return_name('dreams');

$user1->name = 'dream2s';

$user2 = $user1->get_name();

