<?php
session_start();

$passwordlength = isset($_GET["lenght-psw"])  ? (int)$_GET["lenght-psw"] : '';


function getRandomPass($length){
    

    $password = '';

    $alphabet= range("a" , "z");
    $special_character = ['!', '"', '#', '$', '%', '&', '\'', '(', ')', '*',
    '+', ',', '-', '.', '/', ':', ';', '<', '=', '>',
    '?', '@', '[', '\\', ']', '^', '_', '`', '{', '|',
    '}', ];




    if ($length >= 2 ){
        $password .= $special_character[random_int(0, count($special_character) - 1)];
        $password .= $special_character[random_int(0, count($special_character) - 1)];
        $password .= random_int(0, 9);
        $password .= random_int(0, 9);
        for ($i = 0; $i < $length - 4 ; $i++){
            $password .= $alphabet[random_int(0, count($alphabet) - 1)];
        }
    }
    else{
        return "I caratteri devono essere minimo 2";
    };

    $password = ucfirst($password);

    return str_shuffle($password);


}


?>