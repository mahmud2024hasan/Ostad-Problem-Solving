<?php
/* 
Problem : Check Anagram
Problem Statement: You are given two strings A and B. Your task is check whether the string B is anagram of string A or not. An anagram of a string is another string that contains the same characters, only the order of characters can be different. For example, “abcd” and “dabc” are an anagram of each other whereas "abcd" and "aabc" are not.
Input: The input consists of two strings A and B in two lines containing only lowercase English letters.
Output: In output print "YES" if string B is anagram of string A or "NO" otherwise. Print without quotation mark.
*/

 # If input is from console
 // $str1 = trim(fgets(STDIN)); 
 // $str2 = trim(fgets(STDIN)); 

 # Declare and initialize two strings
 $str1 = "silent";
 $str2 = "listen";

 # Check if the two strings are anagrams
 if (checkAnagram($str1, $str2)){
     print "YES"; // Print YES if they are anagrams
 } else {
     print "NO";  // Print NO if they are not anagrams
 }

 # Function to check if two strings are anagrams
 function checkAnagram($str1, $str2){
     
     # If the lengths of the strings are not the same, they can't be anagrams
     if (strlen($str1) != strlen($str2)) return false;

     $map = array(); // Initialize an associative array to count characters

     # Count characters in the first string
     for($i = 0; $i < strlen($str1); $i++){
         $item = $str1[$i]; 
         if(!isset($map[$item])){
             $map[$item] = 0; 
         }
         $map[$item]++; 
     }

     # Subtract counts using characters from the second string
     for($i = 0; $i < strlen($str2); $i++){
         $item = $str2[$i]; 
         if(!isset($map[$item])) return false; 
         $map[$item]--; 

         # If the count becomes zero, remove the character from the map
         if($map[$item] == 0){
             unset($map[$item]); 
         }
     }

     # If the map is empty, all characters matched, return true
     return empty($map); 
 }

