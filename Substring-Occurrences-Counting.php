<?php

// Substring Occurrences Counting Problem Solving 
// Problem Statement: Write a program to create a function that finds and counts all occurrences of a substring within a larger string. For instance, in the string "abababab," the substring "ab" appears four times.

// Input from console if required
// fscanf(STDIN, "%s %s", $minStr, $subStr);

// Declare and initialize two strings
$minStr = 'abababab';
$subStr = 'ab';

// Answer get by calling function getSubstrOccurrence()
$answer = getSubstrOccurrence($minStr, $subStr);
echo $answer;

// Function for substring occurrences
function getSubstrOccurrence($minStr, $subStr) {

    // Get length of minimum string
    $minStrLen = strlen($minStr);
    $count = 0;

    // Loop through minimum string
    for ($i=0; $i<$minStrLen; $i++) {
        $strPos = strpos($minStr, $subStr, $i);
        if ($strPos !== false) {
            $i = $strPos;
            $count++;
        }   
    }

    // Return number of occurrences
    return $count;
}

?>