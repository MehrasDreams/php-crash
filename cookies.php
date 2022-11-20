<?php


setcookie('name', 'Dreams', time() + 200 * 30);



if (isset($_COOKIE['name'])){
    echo $_COOKIE['name'];

}


setcookie('name', '', time() - 200);
