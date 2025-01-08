<?php

    // simple expressions
    echo "simple expression \n";
    echo 55 , "\n", 76.5, "\n", true, "\n", -0.23;

    // Variable expressions
    $userName = "Avishek";
    echo $userName;

    // Function and arithmetic expressions
    function functionExpression($age){
        $addAge = 10;
        echo "Age of the person is : ". $addAge + $age;
    }
    functionExpression(24);
    echo strlen("hello world");

    
