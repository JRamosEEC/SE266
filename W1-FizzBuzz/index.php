<?php //Begin php statement

//Declare a FizzBuzz fucntion with the argument num
function fizzBuzz($num) 
{
    //Determine if num is evenly divisible by 2, 3, or both and output the correct reult
    if($num % 2 == 0 && $num % 3 ==0){
        echo "FizzBuzz<br />";
     }
     else if($num % 2 == 0){
        echo "Fizz<br />";
     }
     else if($num % 3 == 0){
        echo "Buzz<br />";
     }
     else {
        echo $num . "<br />";
     }
}

for ($i = 1; $i <= 100; $i++){
    fizzBuzz($i);
}
//Send code to index view php code
require 'index.view.php';