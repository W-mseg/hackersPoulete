<?php
$test = file_get_contents('raspberys.json');
var_dump(json_decode($test));
?>
<!doctype html>
<html lang="be_fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HackersPoulette</title>
    <link rel="stylesheet" href="./assets/stylesheets/style.css">
</head>
<body>
<h1>test</h1>
<?php require('formulaire.php');?>
</body>
</html>