<?php

//  1.create a class named Fruit, add 2 properties and two methods to it 
class Fruit {


    
    public $name ;
    public $type ;
    function __construct($name, $type){
        $this->name= $name;
        $this->type= $type;
    }
    public function cleanit(){
        return"please wash your fruit before eating it ";
    }

    public function chopit(){
        return"please chop  your fruit before eating it ";
    }
}

//  2.Create a class named Apple which inherits from the Fruit class add 1 additional property to it

class Apple extends Fruit{
    public $id= 1;
}

// 3.Create a new class make each property of it private and try to access it and change it using getters/ setters 
class vigitables  {
    private $name = "tomato" ;
    private  $type = "salads ";
    function __construct($name, $type){
        $this->name= $name;
        $this->type= $type;
    }
    public function setName( $name ){
        $this->name= $name;
    }

}


//  4.Add a constructor to all the classes you have created 
//done


// 5.Make Polymorphism objects put of different classes to respond differently based on the same message 
class Food{
 
    private $name;
 
    function flavor(){
        echo "This is a food flavor ";
    }
}
 
class Sweet extends Food{
   
    function flavor(){
        echo "sweet!";
    }
 
}
 
class Nut extends Food{
 
    function flavor(){
        echo "salty";
    }
 
}
 
$food = new Food();
$sweets = new Sweet();  
$nuts = new Nut();
 
$food->flavor();
$sweets->flavor();
$nuts->flavor();

//  6.Define every OOP principle using your own language and give example to every one of it 

// Polymorphism  : is one of the core concepts of object-oriented programming (OOP) and describes situations in which something occurs in several different forms. In computer science, it describes the concept that you can access objects of different types through the same interface 

// Abstraction :s the concept of object-oriented programming that “shows” only essential attributes and “hides” unnecessary information. The main purpose of abstraction is hiding the unnecessary details from the users. ... It is one of the most important concepts of OOPs 


// Encapsulation :refers to the bundling of data, along with the methods that operate on that data, into a single unit. Many programming languages use encapsulation frequently in the form of classes 


// Inheritance :nheritance is the procedure in which one class inherits the attributes and methods of another class. ... And the class that inherits the properties from the parent class is the Child class
?>