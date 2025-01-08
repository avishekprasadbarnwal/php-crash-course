<?php

    // NOTE : In PHP, classes are blueprints for creating objects. 
    // They allow you to implement object-oriented programming (OOP) principles such as encapsulation, inheritance, and polymorphism.


    // Defining a Class

        // A class is defined using the class keyword
        class Person {
            // Properties
            public $name;
            public $age;

            // Method
            public function sayHello() {
                echo "Hello!";
            }
        }
        


    // Creating an Object

        // An object is an instance of a class, created using the new keyword.
        $person1 = new Person();
        $person1->name = "John";
        $person1->age = 25;

        echo $person1->name; // Output: John
        $person1->sayHello(); // Output: Hello!



    // Properties or Access Modifiers in a class

        // Properties are variables declared within a class. We can define them with visibility modifiers (public, protected, private).

        // 1. Public - Accessible from anywhere.
            class ClassName {
                public $propertyName;
            }

        // 2. Protected - Accessible within the class and derived classes.
        class ClassName3 {
            protected $propertyName;
        }

        // 3. Private - Accessible only within the class.
            class ClassName2 {
                private $propertyName;
            }



    // Methods

        // Methods are functions defined within a class and is used to describe the behaviour of the object
        class Calculator {
            public function add($a, $b) {
                return $a + $b;
            }
        }
        $calc = new Calculator();
        echo $calc->add(5, 10); // Output: 15
        


    // Constructor and Destructor

        // 1. Constructor -  is a special method that is automatically called when an object of a class is instantiated 
        // and is used to initialize the properties of the class
        // defined using "__construct()"
            class ClassName4 {
                public function __construct() {
                    // Initialization code
                }
            }

            // a. Constructor with Arguments 
                class Persons {
                    public $name;
                    public $age;

                    // Constructor
                    public function __construct($name, $age) {
                        $this->name = $name;
                        $this->age = $age;
                    }

                    public function introduce() {
                        return "Hi, my name is $this->name and I am $this->age years old.";
                    }
                }

                // Creating an object with constructor arguments
                $person1 = new Persons("Avishek", 25);
                echo $person1->introduce(); // Output: Hi, my name is Avishek and I am 25 years old.

                $person2 = new Persons("Bob", 30);
                echo $person2->introduce(); // Output: Hi, my name is Bob and I am 30 years old.
            

            // b. Constructor without Arguments
                class Car {
                    public $brand;
                    public $color;
                
                    // Constructor with default values
                    public function __construct() {
                        $this->brand = "Unknown";
                        $this->color = "White";
                    }
                
                    public function describe() {
                        return "This car is a $this->color $this->brand.";
                    }
                }
                
                $car = new Car();
                echo $car->describe(); // Output: This car is a White Unknown.

        
            // c. Constructor with Default Parameter values
                public function __construct($brand = "Toyota", $color = "Black") {
                    $this->brand = $brand;
                    $this->color = $color;
                }


            // d. Constructor with Private Properties
                private $username;
                // Constructor
                public function __construct($username) {
                    $this->username = $username;
                }


            // e. Constructor Inheritance
                class ParentClass {
                    public $name;
                
                    public function __construct($name) {
                        $this->name = $name;
                    }
                }
                
                class ChildClass extends ParentClass {
                    public $age;
                
                    public function __construct($name, $age) {
                        parent::__construct($name); // Call parent's constructor
                        $this->age = $age;
                    }
                
                    public function introduce() {
                        return "Hi, my name is $this->name and I am $this->age years old.";
                    }
                }
        


        // 2. Destructor

            // Destructor will be called when the object goes out of scope or script ends.
            // Defined using __destruct().

            class Person {
                public $name;

                // Constructor
                public function __construct($name) {
                    $this->name = $name;
                    echo "Object for $name is created.\n";
                }

                // Destructor
                public function __destruct() {
                    echo "Object for $this->name is destroyed.\n";
                }
            }
            // Create an object
            $person = new Person("Avishek");
            echo "Doing some operations...\n";

            // Output: Object for Avishek is created.
            // Doing some operations...
            // Object for Avishek is destroyed.



    
    // Inheritance
        
        // Inheritance allows one class to inherit properties and methods from another class.
        class ParentClass {
            public function greet() {
                echo "Hello from Parent!";
            }
        }
        
        class ChildClass extends ParentClass {
            public function sayBye() {
                echo "Goodbye from Child!";
            }
        }
        
        $child = new ChildClass();
        $child->greet(); // Output: Hello from Parent!
        $child->sayBye(); // Output: Goodbye from Child!



    // Final keyword
        
        // Used to prevent a class or method from being overridden.
        final class FinalClass {
            // This class cannot be overridden
        }
        class BaseClass {
            final public function sayHello() {
                echo "This cannot be overridden!";
            }
        }



    // Static Properties and Methods

        // Static properties and methods belong to the class, not any specific object. 
        // They can be accessed without creating an object using the self keyword

        class Math {
            public static $pi = 3.14;
        
            public static function square($number) {
                return $number * $number;
            }
        }
    
        echo Math::$pi; // Output: 3.14
        echo Math::square(5); // Output: 25
        
        

    // Interfaces

        // An interface defines a contract that a class must adhere to. Methods in an interface must be implemented in the inheriting class.
        // it is declared using "interface" and "implements" keyword
        interface Animal {
            public function makeSound();
        }
        class Dog implements Animal {
            public function makeSound() {
                echo "Woof!";
            }
        }
        
        $dog = new Dog();
        $dog->makeSound(); // Output: Woof!
        


    // Abstract Classes

        // An abstract class is like a blueprint for other classes. 
        // It cannot be used directly to create objects. Instead, it is meant to be extended by other classes that will provide the specific details.
        abstract class Shape {
            abstract public function area();
        }
        class Circle extends Shape {
            private $radius;
        
            public function __construct($radius) {
                $this->radius = $radius;
            }
        
            public function area() {
                return pi() * $this->radius * $this->radius;
            }
        }
        
        $circle = new Circle(5);
        echo $circle->area(); // Output: 78.5398



    // Traits

        // Traits are used to share methods between classes without using inheritance.
        trait Logger {
            public function log($message) {
                echo "Log: $message";
            }
        }
        
        class User {
            use Logger;
        }
        
        $user = new User();
        $user->log("User logged in!"); // Output: Log: User logged in!

        


    // Special methods provided by PHP 

        // __construct()	            ->Called when an object is created.
        // __destruct()	                ->Called when an object is destroyed.
        // __get($name)	                ->Called when accessing an undefined property.
        // __set($name, $value)	        ->Called when setting an undefined or inaccessible property.
        // __call($name, $arguments)	->Called when invoking an undefined method.

        // 1. Example of __get() -
            class Person {
                private $data = [
                    'name' => 'Avishek',
                    'age' => 25
                ];
            
                // Magic method to handle inaccessible properties
                public function __get($name) {
                    if (array_key_exists($name, $this->data)) {
                        return $this->data[$name];
                    }
                    return "Property '$name' does not exist.";
                }
            }
            
            $person = new Person();
            
            echo $person->name; // Output: Avishek
            echo $person->age;  // Output: 25
            echo $person->gender; // Output: Property 'gender' does not exist.
        


        // 2. Example of __set()
            class Person {
                private $data = [];
            
                // Magic method to handle undefined or inaccessible property assignments
                public function __set($name, $value) {
                    $this->data[$name] = $value;
                }
            
                // Getter to retrieve stored properties
                public function __get($name) {
                    return $this->data[$name] ?? "Property '$name' does not exist.";
                }
            }
            
            $person = new Person();
            
            // Assign values to undefined properties
            $person->name = "Alice";
            $person->age = 25;
            
            // Access the assigned properties
            echo $person->name; // Output: Alice
            echo $person->age;  // Output: 25

    
        // 3. Example of __call()
            class Person {
                public function __call($name, $arguments) {
                    echo "The method '$name' does not exist.\n";
                    echo "Arguments: " . implode(", ", $arguments) . "\n";
                }
            }
            
            $person = new Person();
            
            // Calling a non-existent method
            $person->greet("Alice", "Hello");
            // Output:
            // The method 'greet' does not exist.
            // Arguments: Alice, Hello
















