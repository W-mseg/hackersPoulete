<?php
$contentget = file_get_contents('raspberys.json');
$decodearray = json_decode($contentget,true);

//sanitizing

//returning validinfos minus gender

//setting all undefined var to null for initialisation
setter('gender');
setter('subject');
setter('name');
setter('lastname');
setter('e-mail');
setter("monpays");
setter("text");

//filter all var

$postname =trim(preg_replace('/[\s,\d]/', '', filter_var($_POST['name'], FILTER_SANITIZE_STRING)));
$postlastname =trim(preg_replace('/[\s,\d]/', '', filter_var($_POST['lastname'], FILTER_SANITIZE_STRING)));
$posttext =trim(preg_replace('/[\s,\d]/', '', filter_var($_POST['text'], FILTER_SANITIZE_STRING)));
$postemail =trim(preg_replace('/[\s]/', '', filter_var($_POST['e-mail'], FILTER_SANITIZE_STRING)));
$validemail = filter_var($postemail, FILTER_VALIDATE_EMAIL);

function emptying($postvar){
    return $postvar;
}

function setter($setting){
    if(!isset($_POST[$setting])){
        $_POST[$setting] = null;
    }
}

//gender Validation

$postgender = $_POST['gender'];
function gendervalide($selector){
    if($selector === $GLOBALS['postgender'] && $selector === "Femme"){
    return 'selected=\'selected\'';
    }
    elseif($selector === $GLOBALS['postgender'] && $selector === "Homme"){
        return 'selected=\'selected\'';
    }
}

// subject validation
$postsubject = $_POST['subject'];
function subjectvalide($selector){
    if(($selector === $GLOBALS['postsubject']) && ($selector === "SAV" || $selector === "Achats" || $selector === "Autres")){
        return 'selected=\'selected\'';
    }
}

$postpays = $_POST['monpays'];
function countryvalide($selector){
    if(($selector === $GLOBALS['postpays']) && ($selector === "Belgique" || $selector === "Allemagne" || $selector === "Îles Saint-Paul et Nouvelle-Amsterdam")){
        return 'selected=\'selected\'';
    }
}

ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "marco.segretario2705@gmail.com");

$messageall = $GLOBALS['postname']." ".$GLOBALS['postlastname']." ".$GLOBALS['postemail']." ".$GLOBALS['postgender']." ".$GLOBALS['postsubject']." ".$GLOBALS['postpays']." ".$GLOBALS['posttext'];
       $mailing= mail($GLOBALS['postemail'],$GLOBALS['postsubject'],$GLOBALS['messageall'],'From: tucrackerapascesite@hackerspoulete.com');

function actionform()
{
    if($GLOBALS['validemail'] == true && !empty($GLOBALS['postname']) && !empty($GLOBALS['postlastname']) && empty($_POST['pays']) && empty($_POST['country'])){
            $GLOBALS['mailing'];
            return "Formulaire validé";
    }
    elseif($GLOBALS['validemail'] == false || empty($GLOBALS['postname']) || empty($GLOBALS['postlastname'])&& !empty($_POST['pays']) || !empty($_POST['country'])){
        return "Formulaire invalide";
    }
    elseif(empty($GLOBALS['postemail']) && empty($GLOBALS['postname']) && empty($GLOBALS['postlastname']) && empty($_POST['pays']) && empty($_POST['country'])){
        return "Veuillez remplir le formulaire";
    }
    else{
        return "Formulaire invalide";
    }

}


