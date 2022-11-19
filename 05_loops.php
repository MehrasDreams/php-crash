<?php
/* -------------- For loop ------------



* Syntax Loop Syntax
 * for (in; condition; inferement);
 *


*/


//for ($x= 0; $x <= 10; $x++){
//    echo $x;
//}



// While loop
// While Syntax while (something) { code to be executed }



$x = 1;

//
//while ($x <= 15){
//   echo 'Number ' . $x . '<br>';
//   $x ++;
//
//
//}


//
//do {
//    echo 'Number '. $x . '<br>';
//    $x++;
//} while ($x <= 5);


$posts = ['Mehras', 'Dreams', 'Codeing', 'Music', 'Movie'];

//for($x= 0; $x < count($posts); $x++){
//    echo $posts[$x]. '<br>';
//
//} // you don't use this use for each



foreach ($posts as $post) {
    echo $post . '<br>';
}