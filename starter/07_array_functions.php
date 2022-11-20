<?php

$programmers = ['Mehras', 'Dreams', 'You'];


echo count($programmers) . '<br>'; // get count of list


//var_dump(in_array('Dreams', $programmers)); // the result if true of false (boolean)



// Ways to add obj on array;
// 1;
$programmers[] = 'Whoami13';
array_push($programmers,'ManManam');
//array_unshift($programmers, 'DreamsForever'); // to remove obj from array


array_pop($programmers); // this remove the last array
unset($programmers[2]); // remove the custom index

//print_r($programmers);






$arr1 = [1, 2 , 3];
$arr2 = [2, 8, 9];



$arr3 = array_merge($arr1, $arr2); // to add one array to antoher array using array_merge


//print_r($arr3);



$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];


$c = array_combine($a, $b);



$keys = array_keys($c);





$flipped = array_flip($c);




$numbers = range(1,10); // range || just like python





print_r($numbers);

