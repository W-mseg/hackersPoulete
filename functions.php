<?php
$contentget = file_get_contents('raspberys.json');
$decodearray = json_decode($contentget,true);

//sanitizing
//setting all undefined var to null for initialisation
setter('gender');
setter('subject');
setter('name');
setter('lastname');
setter('e-mail');

function setter($setting){
    if(!isset($_POST[$setting])){
        $_POST[$setting] = null;
    }
}

//gender Validation
$postgender = $_POST['gender'];
function gendervalide($selector){
    if(($GLOBALS['postgender'] === "Homme" || $GLOBALS['postgender'] === "Femme") && $GLOBALS['postgender'] === $selector){
        return 'selected={\'selected\'';
    }else{
        $GLOBALS['postgender'] = 'Homme';
    }
}

// subject validation
$postsubject = $_POST['subject'];
function subjectvalide($selector){
    if(($GLOBALS['postsubject'] === "SAV" ||$GLOBALS['postsubject'] === "Achats" || $GLOBALS['postsubject'] === "Autres") && $GLOBALS['postsubject'] === $selector){
        return 'selected={\'selected\'';
    }
    else{
        $GLOBALS['postsubject'] = "SAV";
    }
}


$postname = filter_var($_POST['name'], FILTER_SANITIZE_STRING) ;
$postlastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING) ;

$postemail = filter_var($_POST['e-mail'], FILTER_SANITIZE_EMAIL);
$validemail = filter_var($postemail, FILTER_VALIDATE_EMAIL);


//returning validinfos minus gender
function emptying($postvar){
return $GLOBALS[$postvar];
}

function actionform()
{
    if($GLOBALS['validemail'] == true && !empty($GLOBALS['postname']) && !empty($GLOBALS['postlastname'])){
        return "Votre formulaire a bien été validé";
    }
    elseif($GLOBALS['validemail'] == false || empty($GLOBALS['postname']) || empty($GLOBALS['postlastname'])){
        return "Formulaire invalide";
    }
    elseif(empty($GLOBALS['postemail']) && empty($GLOBALS['postname']) && empty($GLOBALS['postlastname'])){
        return "Veuillez remplir le formulaire";
    }

}


