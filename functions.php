<?php
$contentget = file_get_contents('raspberys.json');
$decodearray = json_decode($contentget,true);

//sanitizing

//gender sanitization
$postgender = $_POST['gender'];
function gendervalide($selector){
    if(($GLOBALS['postgender'] === "Homme" || $GLOBALS['postgender'] === "Femme") && $GLOBALS['postgender'] === $selector){
        return 'selected={\'selected\'';
    }else{
        $GLOBALS['postgender'] = 'Homme';
    }
}


$postsubject = $_POST['subject'];
function subjectvalide($selector){
    if(($GLOBALS['postsubject'] === "SAV" ||$GLOBALS['postsubject'] === "Achats" || $GLOBALS['postsubject'] === "Autres") && $GLOBALS['postsubject'] === $selector){
        return 'selected={\'selected\'';
    }
    else{
        $GLOBALS['postsubject'] = "SAV";
    }
}


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
//returning validinfos minus gender
function emptying($postvar){
return $GLOBALS[$postvar];
}

//return validinfos only gender


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


