<?php

    // 1. Simple For loop ( number of iterations are known to us )
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i<br>";
    }


    // 2. While loop ( when number of iterations is not known to us )
    $i = 1;
    while ($i <= 5) {
        echo "Number: $i<br>";
        $i++;
    }


    // 3. Do-While loop ( initially performs execution then does the condition check )
    $i = 1;
    do {
        echo "Number: $i<br>";
        $i++;
    } while ($i <= 5);


    // 4. Foreach loop ( loops through the original elements of the array but functions like array_map , array_filter works by creating a new array as they process the original array )
    $fruits = ["Apple", "Banana", "Cherry"];
    foreach ($fruits as $fruit) {
        echo "Fruit: $fruit<br>";
    }
    // Example for array_map
    $originalArray = [1, 2, 3, 4];
    $copyArray = array_map(fn($value) => $value * 2, $originalArray); // output : 2, 4, 6, 8
    
    
    // Foreach loop with key => value pair ( Associative array concept , briefly defined in Arrays.php file )
    $person = ["Name" => "John", "Age" => 30];
    foreach ($person as $key => $value) {
        echo "$key: $value<br>";
    }


    // 5. Break and Continue in Loops ( Break and continue can be applied to any kind of loop )
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) break;
        echo "Number: $i<br>";
    }
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) continue;
        echo "Number: $i<br>";
    }
    







