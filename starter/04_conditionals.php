<?php
    // Some simple important operators liker += + * if amd else and staff




$age = 1;

//if ($age >= 16) {
//    echo 'You are old enough to coding :)  ';
//}
//else {
//    echo 'Sorry, you are not old enough to codeing'; // if and else
//}





// some cool dating in php built in so that get your local machine time or date


//$t = date("H"); // if I change it to H php give me a day of my system
//echo $t;



$price = [];


if ($price == 16){
    echo 'Dreams for ever';
}
elseif ($price < 15){
    echo 'Smaller then  16';
}

//elseif ($price != 'Dreams'){ // if not / just like python
//    echo 'You are a bad boy/girl';
//}


elseif (empty($price)){
    echo 'Val is empty';
}

elseif (!empty($price)){ // the build in php functions so check if value is empty or not

    echo 'Val is not empty';


}



else {
    echo 'There is not result';
}

echo  '           ';

$check_price = $price[0] ?? null; // like try in python

//echo "chekd price  is $check_price"; // if you want use fstring in php use ""


$favecolor = 'Yello';


switch ($favecolor){
    case 'red':
        echo 'You are red';
        break;
    case 'blue':
        echo 'Who are you?';
        break;


    default:
        echo 'Nothing';

}