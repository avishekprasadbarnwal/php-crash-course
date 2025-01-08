<?php

    // NOTE : PHP is dynamically typed meaning Variable Types Are Determined at Runtime
    //  var_dump() returns information like the type of the value and the value itself present in the variable

    // Scalar Data Types

        // 1. Int
        $age = 25; // Integer
        var_dump($age); // Output: int(25)

        // 2. Float
        $price = 19.99; // Float
        var_dump($price); // Output: float(19.99)

        // 3. String
        $name = "Avishek"; // String
        var_dump($name); // Output: string(8) "Avishek Doe"

        // 4. Boolean
        $is_admin = true; // Boolean
        var_dump($is_admin); // Output: bool(true)



    // Compound Data Types

        // 1. Array ( Indexed Array )
        $fruits = ["Apple", "Banana", "Cherry"];
        var_dump($fruits); // Output: array(3) { [0]=> string(5) "Apple" ... }

        // 2. Array ( Associative Array )
        $person = ["Name" => "Avishek", "Age" => 25];
        var_dump($person); // Output: array(2) { ["Name"]=> string(4) "Avishek" ... }

            // NOTE: Main diff between Normal/Indexed Array and Associative array is how their keys are defined and keys are used to access array
            // Example: ( Normal/Indexed Array )
            $normalArray = ["Apple", "Banana", "Cherry"];
            echo $normalArray[0]; // Outputs: Apple
            echo $normalArray[1]; // Outputs: Banana
            echo $normalArray[2]; // Outputs: Cherry

            // Example: ( Associative Array )
            $assocArray = [
                "name" => "John Doe",
                "email" => "john@example.com",
                "age" => 30
            ]; 
            echo $assocArray["name"];  // Outputs: John Doe
            echo $assocArray["email"]; // Outputs: john@example.com
            echo $assocArray["age"];   // Outputs: 30

        // 3. Object ( used to represent instance of a class )
        class Person {
            public $name;
            public $age;
        }
        // Objects are created using new keyword
        $person = new Person();
        $person->name = "John";
        $person->age = 25;
        
        var_dump($person); // Output: object(Person)#1 (2) { ["name"]=> string(4) "John" ... }
        

        
    // Special Data Types
        
        // 1. null
        $variable = null;
        var_dump($variable); // Output: NULL

        // 2. resource ( its basically indicates a reference to external resources like database connection , file handle , stream etc)
        $file = fopen("example.txt", "r"); // Resource
        var_dump($file); // Output: resource(4) of type (stream)

        



