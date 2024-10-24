<?php

// String Rotation Problem Solving
// Problem Statement: Write a program to create a function that checks if one string is a rotation of another. For example, "waterbottle" is a rotation of "erbottlewat" because you can rotate it to get the original string.

// Input from console if required 
//fscanf(STDIN, "%s %s", $str1, $str2);

// Declare and initialize two strings
$str1 = "waterbottle";
$str2 = "erbottlewat";

// Answer get by calling function isRotation()
$answer = isRotation($str1, $str2);
    if ($answer) {
        echo 'True';
    } else {
        echo 'False';
    }

//function for string rotation 
function isRotation($str1, $str2) {
    
    //Check if length of both strings are not same then they can't be rotations of each other
    if (strlen($str1) != strlen($str2)) {
        return false;
    }else{

        // Loop through both strings and compare each character
        for ($i = 0; $i < strlen($str1); $i++) {
            if (strpos($str1, $str2) !== false) {
                return true;
            }

            // Swap first and last character
            $str1 = substr($str1, 1) . substr($str1, 0, 1);
        }

        // Return false if not found
        return false;
    }
}

?>