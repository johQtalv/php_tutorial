<?php

// Create simple string
//$name = 'Kimmo';
//$string = 'Hello I am $name  I am on fire!' . '<br>';
//$string2 = "Hello I am $name I am on fire!" . '<br>';

//echo $string . '<br>';
//echo $string2 . '<br>';

// String concatenation
//echo 'Hello '.' World'.' and PHP' . '<br>';

// String functions
//$string = "    Hello World!     ";

//echo "1 - " . strlen($string) . '<br>';
//echo "2 - " . trim($string) . '<br>';
//echo "3 - " . ltrim($string) . '<br>';
//echo "4 - " . rtrim($string) . '<br>';
//echo "5 - " . str_word_count($string) . '<br>';
//echo "6 - " . strrev($string) . '<br>';
//echo "7 - " . strtoupper($string) . '<br>';
//echo "8 - " . strtolower($string) . '<br>';
//echo "9 - " . ucfirst('hello') . '<br>';
//echo "10 - " . lcfirst('HELLO') . '<br>';
//echo "11 - " . ucwords('hello world') . '<br>';
//echo "12 - " . strpos($string, 'world') . '<br>';
//echo "13 - " . stripos($string, 'world') . '<br>';
//echo "14 - " . substr($string, 8) . '<br>';
//echo "15 - " . str_replace('World', 'Ocean', $string) . '<br>';
//echo "16 - " . str_ireplace('world', 'ocean', $string) . '<br>';

// Multiline text and line breaks
$longText = "
Hello, my name is Kimmo
I love TNT,
especially for workstation
";

echo $longText . '<br>';
echo nl2br($longText) . '<br>';

// Multiline text and reserve html tags
$longText = "
Hello, my name is <b>Kimmo</b>
I love <b>TNT</b>,
especially for workstation
";

echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>';
echo "4 - " . nl2br(htmlentities($longText)) . '<br>';


// https://www.php.net/manual/en/ref.strings.php