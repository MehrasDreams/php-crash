<?php

    $y= 9;
function registerUser($email){
//    global $y;  // for global // just like python
    echo 'User Created with '. '<br>'. $email;


}

//registerUser('mehras@gmail.com');



function sum($num1, $num2){
    return $num1 + $num2; // just like return in python
}



//echo sum(6, 3); // if you want to see result of return you need to use echo :) or you can putt it on val



$total = sum(5, 1);
//echo $total; // and then echo the val you put the val on that


function sum2($num1=2, $num2=3){
    return $num1 + $num2;
}   // for set default value just use = just like python




$total2 = sum2(9, 12); // if you don't pass the inputs php don't give error


//echo $total2;





$test_func = function ($num1, $num2){
    return $num1 + $num2;
};


//echo $test_func(1, 2);



$multiply = fn($n1, $n2) =>  $n1 * $n2;

echo $multiply(2, 3);