<?php

// Function which prints "Hello I am Zura"
function hello() {

    echo "Hello I am a Gobling from Mordor";
}
hello();


// Function with argument
function world($name) {

 return "Hello I am a $name from Mordor";
}
echo world('Gobling') . '<br>';
echo world('OrangeGobling') . '<br>';
// Create sum of two functions
//function sum($a, $b) {

  //  return $a + $b;
//}
 //echo sum(4, 5);
// Create function to sum all numbers using ...$nums
//function sum(...$nums) {
 //$sum = 0;
 //foreach ($nums as $counter) {
 //   $sum += $counter;
// }
//return $sum;
//}
//echo sum(1, 2, 3, 4, 5, 6);
// Arrow functions
function sum(...$nums) {
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum(1, 2, 3, 4, 5, 6);