<?php
    // Simple array just like list in python

$numbers = [1,2,3]; // Using bracket


// Another way to make array is use array function so that's built in on php
$programming_langues = array('python', 'php', 'javascript', 'golang');


//print_r($numbers); // if you want to watch result of print_r you should install php viewer or view  on your browser the link chrome(https://chrome.google.com/webstore/detail/phpview/nlkobfbkblfhlcobdomlhmpbbhmcbkfd)
//print_r($programming_langues); // don't forget the ;



//echo $programming_langues[0]; // get first index just like python ;



$colors = [
    'blue' => 12,
    'red' => 40,
    'black' => 13 // define dictionary in php ||| just like python
];



//echo $colors['black']; // just like your_dict.get() in python || very simple




$programmers = [
    [
        'first_name' => 'Mehras',
        'nick_name' => 'Dreams',
        'email' => 'mehras@mehras.com'
    ],
    [
        'first_name' => 'Yourself',
        'nick_name' => 'Your',
        'email' => 'your@gmail.com'
    ]

];



echo $programmers[1]['email'];

