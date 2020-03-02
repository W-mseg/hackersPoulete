<?php
$contentget = file_get_contents('raspberys.json');
$decodearray = json_decode($contentget,true);
var_dump($decodearray[4]['video']);
function emptying($postvar){
    if (empty($_POST[$postvar])){}
    else{
        return $_POST[$postvar];}
}
