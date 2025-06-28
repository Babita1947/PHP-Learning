<?php
    $str = "This is <br>";
    echo $str;

    $str_len = strlen($str);
    echo "The length of this string is ". $str_len. "<br>". "<br>"; // . === concatenation in PHP
    echo "The number of words  ". str_word_count($str). "<br>". "<br>";
    echo "The reverse string is ". strrev($str). "<br>". "<br>";
    echo "Search for --is--  ". strpos($str,"is"). "<br>". "<br>";
    echo "The replaced string is  ". str_replace("is","at",$str). "<br>"."Thank you". "<br>". "<br>";
?>
