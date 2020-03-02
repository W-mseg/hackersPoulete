<?php
$contentget = file_get_contents('raspberys.json');
$decodearray = json_decode($contentget,true);

//sanitizing

$postgender = $_POST['gender'];

function gendervalide(){
    if($GLOBALS['postgender'] === "Homme" || $GLOBALS['postgender'] === "Femme"){

    }else{
        $GLOBALS['postgender'] = null;
    }
}

$postsubject = $_POST['subject'];


$postname = filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING) ;
$postlastname = filter_var($_REQUEST['lastname'], FILTER_SANITIZE_STRING) ;

$postemail = filter_var($_REQUEST['e-mail'], FILTER_SANITIZE_EMAIL);

$validemail = filter_var($postemail, FILTER_VALIDATE_EMAIL);

function dumpage(){
    if($GLOBALS['validemail'] == true){
    return $GLOBALS['postemail'];
    }
    else{
        return "NTM";
    }
}


function emptying($postvar){
    if (isset($_POST[$postvar])){
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
    if(isset($_POST['e-mail'])){
    $email = $_POST['e-mail'];
    }else{
        $email = null;
    }

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (isset($_POST['lastname']) && (strlen($_POST['lastname']) >= 1) && strlen($_POST['name']) >= 1 && isset($_POST['name']) && (isset($_POST['e-mail'])) && (strlen($_POST['e-mail']) >= 1) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return "./Confirmation.php";
    }
}


