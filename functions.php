<?php
$fileex = file_get_contents('raspberys.json');
$toast = json_decode($fileex,true);
var_dump($toast[1]['name']);
function emptying($postvar){
    if (empty($_POST[$postvar])){}
    else{
        return $_POST[$postvar];}
}
