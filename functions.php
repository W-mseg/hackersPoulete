<?php
$contentget = file_get_contents('raspberys.json');
$decodearray = json_decode($contentget,true);
var_dump($_POST);
function emptying($postvar){
    if (!empty($_POST[$postvar]) && (isset($_POST[$postvar]))){
        return htmlspecialchars($_POST[$postvar]);
    }
    else{

    }
}

function selected($selector){
    if( isset($_POST['subject']) && !empty($_POST['subject']) && ($_POST['subject']) === ($selector)){
return 'selected={\'selected\'';
    }
    else{

    }
}
