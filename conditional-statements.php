<?php

    $number_of_students = 50;

    // if statement
    if($number_of_students > 10){
        echo "School is having good strength";
    }


    // if-else statement
    if($number_of_students < 10){
        echo "School need more students for affiliation";
    } else {
        echo "School can get affiliated";
    }


    // if-else-if
    if($number_of_students < 10){
        echo "School need more students for affiliation";
    } elseif($number_of_students == 15) {
        echo "School need Ground for affiliation";
    } else {
        echo "School can get affiliated";
    }


    // if without Curly braces
    $age = 20;
    if ($age >= 18)
        echo "Eligible to vote.";
    else
        echo "Not eligible to vote.";



    // Ternary operator
    $print_statement = $number_of_students > 10 ? "School need more students for affiliation" : "School can get affiliated";
    echo $print_statement;


    // Switch Case
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "Start of the work week.";
            break;
        case "Friday":
            echo "End of the work week.";
            break;
        default:
            echo "It's just another day.";
            break;
    }
    // NOTE: BREAK statement is required in Switch-case because if its not then whether or-not the condition is satisfied , there will be full execution of all the cases block of code 


    // Nullish Coalescing Operator ( ?? )
    $username = "Avishek";
    $result = $username ?? "guest";
    echo "Hello, $result!";

