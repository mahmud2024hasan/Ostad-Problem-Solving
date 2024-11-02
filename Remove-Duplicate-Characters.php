<?php
    /* 
    Problem: Remove Duplicate Characters
    Problem Statement: Write a program that removes duplicate characters from a given string, keeping only the first occurrence of each character.
    Input: The input consists of a string.
    Output: The output will be a string without any duplicate character.
    */

    // Remove Duplicate Characters Code
    // $str = trim(fgets(STDIN)); // If input is from console
    $str = "abcabcbb";

    $map = array(); // Initialize an associative array to track characters

    $output = ""; 
    // Loop through each character in the string
    for($i = 0; $i < strlen($str); $i++){ 
        $item = $str[$i]; 

        // Check if it has not been seen before
        if(!isset($map[$item])){ 
            $map[$item] = true; 
            $output .= $item; 
        }
    }
    // Print the resulting string without duplicates
    print $output; 

