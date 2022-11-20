<?php

/* --------- PHP Data Types ----------------------

- String
- Integer
- Float
- Boolean
- Array


value

- Object
- NULL
- Resource





--- The Rules
- Variables must be defined with $
- Variables can only contain alphanumeric char character  and underscore (A-z , 0-9 and _)

- Variables are case-sensitive ($ name and $NAME are two )



 */



$name = 'Mehras'; // String
$age = 40; // Int
$has_kids = true; // Boolean
$cash = 13.13; // Float


echo $name;
echo '    '; // Empty string :)
echo $age;




var_dump($has_kids);



echo "${has_kids} ${age}"; // Just like string in python :)





$some_operator = 6 +3;


echo $some_operator;