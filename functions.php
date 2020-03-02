<?php
$contentget = file_get_contents('raspberys.json');
$decodearray = json_decode($contentget,true);
var_dump($decodearray[0]['image']);
function emptying($postvar){
    if (!empty($_POST[$postvar]) && (isset($_POST[$postvar]))){
        return htmlspecialchars($_POST[$postvar]);
    }
    else{

    }
}

function selected($selector){
    if( isset($_POST['subject']) && !empty($_POST['subject']) && ($_POST['subject']) === ($selector)){
    return 'selected={\'selected\'';}
    elseif(isset($_POST['gender']) && (!empty($_POST['gender'])) && ($_POST['gender']) === ($selector)){
        return 'selected={\'selected\'';
    }
    else{}
}

function actionform()
{
    $email = $_POST['e-mail'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (strlen($_POST['lastname']) >= 1 && isset($_POST['lastname']) && strlen($_POST['name']) >= 1 && isset($_POST['name']) && (strlen($_POST['e-mail']) >= 1) && (isset($_POST['e-mail'])) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return "action='./Confirmation.php'";
    }


