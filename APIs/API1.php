<?php
$str = $_GET["str"];
//function to check if palindrome
function isPalindrome($string)
{
    if (strrev($string) == ($string)) {
        return  1;
    } else {
        return 0;
    }
}

if (isPalindrome($str)) {
    $x = "is palindrome";
} else {
    $x = "is not palindrome";
}


$results = [
    "string" => $str,
    "palindrome" => $x,
];
echo json_encode($results);
