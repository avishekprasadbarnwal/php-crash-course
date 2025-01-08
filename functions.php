<?php

    // Types of functions in PHP
        // 1. PHP functions
            function greet_one() {
                echo "Hello, World!";
            }
            greet_one(); // Output: Hello, World!


        // 2. Functions with Parameters
            function greet_two($name) {
                echo "Hello, $name!";
            }
            greet_two("Avishek"); // Output: Hello, Avishek!
        

        // 3. Functions with Default Parameters
            function greet_three($name = "Guest") {
                echo "Hello, $name!";
            }
            greet_three();        // Output: Hello, Guest!
            greet_three("Avishek"); // Output: Hello, Alice!
        
        
        // 4. Function with Return value
            function add($a, $b) {
                return $a + $b;
            }
            $result = add(5, 10);
            echo $result; // Output: 15


        // 5. Anonymous Functions ( closures )
            // These type of functions are functions without a name, often used as a value for variables or as arguments to other functions.
            
            // Example : used as value for a variable
            $greet = function($name) {
                return "Hello, $name!";
            };
            echo $greet("Avishek"); // Output: Hello, Avishek!
            
            // Example : used as an argument to other function
            $numbers = [1, 2, 3, 4];
            $squared = array_map(function($n) {
                return $n * $n;
            }, $numbers);
            print_r($squared); // Output: [1, 4, 9, 16]


        // 6. Arrow Functions
            // Arrow functions is defined using "fn" keyword and are a shorthand for anonymous functions.
            $numbers = [1, 2, 3, 4];
            $squared = array_map(fn($n) => $n * $n, $numbers);
            print_r($squared); // Output: [1, 4, 9, 16]


        // 7. Recursive Functions
            // A function that calls itself is called a recursive function and used for problems like factorials , fibonacci series etc
            function factorial($n) {
                if ($n <= 1) {
                    return 1;
                }
                return $n * factorial($n - 1);
            }
            echo factorial(5); // Output: 120        


        // 8. Variable Functions
            // You can use a variable to call a function dynamically.
            function sayHello() {
                echo "Hello!";
            }
            $func = "sayHello";
            $func(); // Output: Hello!


        // 9. Generator Functions
            // generator function in PHP is a special type of function that allows you to iterate through a set of data without the need to create and store an entire array in memory.
            // Generators are implemented using Yield keyword
            function generatorFunction() {
                yield "value";
            }

            // Example : 
            function numbers() {
                yield 1;
                yield 2;
                yield 3;
            }
            foreach (numbers() as $number) {
                echo $number . PHP_EOL;
            }
            // output: 1
            // 2
            // 3


        // 10. Built-in Functions
            // there are multiple built-in functions offered by PHP out of which some of them based upon categories are below
            
            // a. String Functions: strlen(), strtoupper(), strtolower(), substr()
            // b. Array Functions: array_merge(), array_push(), array_pop(), in_array()
            // c. Math Functions: abs(), round(), sqrt(), rand()
            // d. Date and Time Functions: date(), time(), strtotime()
            // e. File Handling Functions: fopen(), fwrite(), fclose(), file_get_contents()



    // Variadic function arguments
        // variadic function arguments allow a function to accept an indefinte variable number of arguments.
        // It is implemented using "..." symbol
        // Example 1: 
        function sumNumbers(...$numbers) {
            return array_sum($numbers);
        }
        echo sumNumbers(1, 2, 3, 4); // Output: 10
        echo sumNumbers(5, 10);      // Output: 15

        // Example 2: 
        function greet($greeting, ...$names) {
            foreach ($names as $name) {
                echo "$greeting, $name!\n";
            }
        }
        greet("Hello", "Alice", "Bob", "Charlie");
        // Output:
        // Hello, Alice!
        // Hello, Bob!
        // Hello, Charlie!        
        


    // Scope of variable inside a function

        // 1. Global Scope of a variable 
            // Directly calling a global variable inside a function will give an undefined error so to call a global variable inside a function , We need to use ""global"" keyword
            $globalVar = "I'm global!";
            function showVar() {
                // echo $globalVar; // Error: undefined variable
                global $globalVar; // Use `global` to access it
                echo $globalVar;
            }
            showVar(); // Output: I'm global!


        // 2. Local Scope of a variable 
            // variables defined inside function are having local Scope and calling outside of function will give undefined error
            function testScope() {
                $localVar = "I'm local!";
                echo $localVar;
            }
            // echo $localVar; // Error: undefined variable
            testScope(); // Output: I'm local!
            

        // 3. Static Variables
            // Static variables retain their values between function calls and is defined using static keyword
            function counter() {
                static $count = 0;
                $count++;
                echo $count;
            }
            counter(); // Output: 1
            counter(); // Output: 2
            counter(); // Output: 3
            



    // Type declaration of functions in PHP

        // 1. Argument Type Declaration in Functions
        function add_one(int $a, int $b) {
            return $a + $b;
        }
        echo add_one(5, 10); // Output: 15
        
        // 2. Return type Declaration in Functions
        function multiply(float $a, float $b): float {
            return $a * $b;
        }        
        echo multiply(2.5, 4.0); // Output: 10
        





