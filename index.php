<?php require ('functions.php');?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>HackersPoulette</title>
        <link rel="stylesheet" href="assets/stylesheets/style.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>

    <header>

    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark default-color font-weight-bold">

    <a class="navbar-brand" href="#">Hackers Poulette</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Accueil
            <span class="sr-only"></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#produits">Produits</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item dropdown">
            <a role="button" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Informations            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#quisommesnous">Qui sommes-nous ?</a>
            <a class="dropdown-item" href="#engagements">Nos engagements</a>
            <a class="dropdown-item" href="#paiement">Moyens de paiement</a>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
            <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
            <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
            <i class="fab fa-instagram"></i>
            </a>
        </li>
    </ul>
    </div>

    </nav>

    <div class="jumbotron card card-image rounded-0 mb-0" style="background-image: url(assets/raspberry1.jpg);">
    <div class="text-white text-center py-5 px-4">
    <div>
        <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Hackers Poulette</strong></h2>
        <p class="mx-5 mb-5"><b>Basé en Belgique à Charleroi, l'entreprise Hackers Poulette a été créée en 2020 par Yassine BOUKAMIR et Marco SEGRETARIO, elle est devenue très vite un acteur majeur dans le commerce de solutions électroniques.</b></p>
        <button class="btn btn-outline-white btn-md"><a href="#informations"><b>Plus d'infos</b></a></button>
    </div>
    </div>
    </div>

    </header>

    <main>
        
    <section id="produits" class="pb-4 mt-0">

        <h2 class="text-center pb-3 pt-3 text-white">Produits</h2>
        
        <!-- Cards -->
        <div class="card-deck mr-0">
        <div class="card col-12 col-lg-4" data-toggle="modal" data-target="#Modal1">
            <img class="card-img-top" src=<?= $decodearray[0]['image'];?> alt= "raspberry">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[0]['name'];?></h5>
            <p class="card-text"><?= $decodearray[0]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[0]['prix'];?></small>
        </div>
        </div>
        <div class="card col-12 col-lg-4" data-toggle="modal" data-target="#Modal2">
            <img class="card-img-top" src=<?= $decodearray[1]['image'];?> alt= "raspberry">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[1]['name'];?></h5>
            <p class="card-text"><?= $decodearray[1]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[1]['prix'];?></small>
        </div>
        </div>

        <div class="card col-12 col-lg-4" data-toggle="modal" data-target="#Modal3">
            <img class="card-img-top" src=<?= $decodearray[2]['image'];?> alt="raspberry">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[2]['name'];?></h5>
            <p class="card-text"><?= $decodearray[2]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[2]['prix'];?></small>
        </div>
        </div>
        </div>

        <div id="more">

        <div class="card-deck mr-0">
        <div class="card col-12 col-lg-4" data-toggle="modal" data-target="#Modal4">
            <img class="card-img-top" src=<?= $decodearray[3]['image'];?> alt= "raspberry">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[3]['name'];?></h5>
            <p class="card-text"><?= $decodearray[3]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[3]['prix'];?></small>
        </div>
        </div>
        <div class="card col-12 col-lg-4" data-toggle="modal" data-target="#Modal5">
            <img class="card-img-top" src=<?= $decodearray[4]['image'];?> alt= "raspberry">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[4]['name'];?></h5>
            <p class="card-text"><?= $decodearray[4]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[4]['prix'];?></small>
        </div>
        </div>

        <div class="card col-12 col-lg-4" data-toggle="modal" data-target="#Modal6">
            <img class="card-img-top" src=<?= $decodearray[5]['image'];?> alt= "raspberry">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[5]['name'];?></h5>
            <p class="card-text"><?= $decodearray[5]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[5]['prix'];?></small>
        </div>
        </div>
        </div>


        <div class="card-deck mr-0">
        <div class="card col-12 col-lg-4" data-toggle="modal" data-target="#Modal7">
            <img class="card-img-top" src=<?= $decodearray[6]['image'];?> alt= "raspberry">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[6]['name'];?></h5>
            <p class="card-text"><?= $decodearray[6]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[6]['prix'];?></small>
        </div>
        </div>
        <div class="card col-12 col-lg-4" data-toggle="modal" data-target="#Modal8">
            <img class="card-img-top" src=<?= $decodearray[7]['image'];?> alt= "raspberry">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[7]['name'];?></h5>
            <p class="card-text"><?= $decodearray[7]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[7]['prix'];?></small>
        </div>
        </div>

        <div class="card col-12 col-lg-4" data-toggle="modal" data-target="#Modal9">
            <img class="card-img-top" src=<?= $decodearray[8]['image'];?> alt= "raspberry">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[8]['name'];?></h5>
            <p class="card-text"><?= $decodearray[8]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[8]['prix'];?></small>
        </div>
        </div>
        </div>
        </div>

        <div class="row justify-content-center mr-0">
            <button id="myBtn" onclick="seeMore()">Voir plus</button>
        </div>

    </section>

        <!-- Modals -->
        <div class="modal fade" id="Modal1" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" ><?= $decodearray[0]['name'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body ">
                    <div class="video">
                        <?= $decodearray[0]['video'];?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal2" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" ><?= $decodearray[1]['name'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="video">
                        <?= $decodearray[1]['video'];?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal3" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" ><?= $decodearray[2]['name'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="video">
                        <?= $decodearray[2]['video'];?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal4" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" ><?= $decodearray[3]['name'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="video">
                        <?= $decodearray[3]['video'];?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal5" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" ><?= $decodearray[4]['name'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="video">
                        <?= $decodearray[4]['video'];?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal6" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" ><?= $decodearray[5]['name'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="video">
                        <?= $decodearray[5]['video'];?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal7" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" ><?= $decodearray[6]['name'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="video">
                        <?= $decodearray[6]['video'];?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal8" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" ><?= $decodearray[7]['name'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="video">
                        <?= $decodearray[7]['video'];?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal9" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" ><?= $decodearray[8]['name'];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="video">
                        <?= $decodearray[8]['video'];?>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Services-->
        <section id="services" class="pb-4 mt-0">
        <h2 class="text-center pb-3 pt-3 text-black">Services</h2>
        <div id="carousel" class="carousel slide carousel-multi-item" data-ride="carousel">

        <div class="controls-top text-center">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
        </div>

        <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

            <div class="card-deck">
            <div class="col-md-4">
            <div class="card mb-2">
                <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Garantie</h4>
                    <p class="card-text">Toutes nos garanties commerciales couvrent la panne et proposent des services supplémentaires.</p>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card mb-2">
                <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Frais de retour</h4>
                    <p class="card-text">Pour tout colis de poids éligible au départ de Belgique, la prise en charge sera effectuée par un bon postal prépayé.</p>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card mb-2">
                <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Délai de rétractation</h4>
                    <p class="card-text">Réservé aux clients particuliers, à compter de la date de livraison de la commande.</p>
                </div>
            </div>
            </div>

        </div>
</div>

        <!--Second slide-->
        <div class="carousel-item">
            <div class="card-deck">
            <div class="col-md-4">
            <div class="card mb-2">
                <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Traitement de commande</h4>
                    <p class="card-text">Généralement, si vous passez et vous réglez votre commande avant 11H, elle sera expédiée le jour même.</p>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card mb-2">
                <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Echange en cas de panne</h4>
                    <h4 class="card-title"></h4>
                    <p class="card-text">Pour toute panne signalée 7 jours après la livraison d'un produit, nous procédons à un échange immédiat.</p>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card mb-2">
                <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Satisfait ou remboursé</h4>
                    <p class="card-text">Nous proposons à nos client une garantie 15 jours satisfait ou remboursé pour tout nos produits.</p>
                </div>
            </div>
            </div>

            </div>
            </div>
            </div>
        </div>
        </section>

        <!--Informations-->
        <section id="informations">
            <div class="container">
                <div class="row">
                    <section id="quisommesnous" class="col-12 col-lg-4 ">
                        <div class="box">
                            <i class="fas fa-user fa-3x"></i>
                            <h3>Qui sommes-nous ?</h3>
                            <p>Basé en Belgique à Charleroi, l'entreprise Hackers Poulette a été créée en 2020 par Yassine BOUKAMIR et Marco SEGRETARIO, elle est devenue très vite un acteur majeur dans le commerce de solutions électroniques.</p></div>
                    </section>
                    <section id="engagements" class="col-12 col-lg-4">
                        <div class="box">
                            <i class="fas fa-star fa-3x"></i>
                            <h3>Nos engagements</h3>
                            <p>Chez nous, le client est important, et nous nous efforçons de toujours vous satisfaire. Nous souhaitons fournir au meilleur prix possible les différents articles présents sur la boutique.</p></div>
                    </section>
                    <section id="paiement" class="col-12 col-lg-4">
                        <div class="box">
                            <i class="fas fa-euro-sign fa-3x"></i>
                            <h3>Moyens de paiement</h3>
                            <p>Pour régler une commande, vous disposez de tous les moyens de paiement suivants : cartes bancaires (VISA, MAESTRO, MASTERCARD), Paypal, chèques et virements.</p>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        
        <!--Contact-->
        <section id="contact" class="pt-3">
            <h2 class="text-white text-center">Contact</h2>
        <?php require ('formulaire.php'); ?>
            <pre class="mb-0 pb-3 text-center">
                <?php
                print_r($GLOBALS['postname']." ".$GLOBALS['postlastname']." ".$GLOBALS['postemail']." ".$GLOBALS['postgender']." ".$GLOBALS['postsubject']);
                echo " ".actionform()
                ?>
            </pre>
        </section>

    </main>

    <footer class="page-footer font-small stylish-color-dark pt-4">

    <div class="container text-center text-md-left">

        <div class="row">

        <div class="col-md-4 mx-auto">

            <!-- Texte -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Hackers Poulette</h5>
            <p>La société Hackers Poulette ™ vend des kits et accessoires pour Raspberry Pi à monter soi-même.</p>

        </div>

        <hr class="clearfix w-100 d-md-none">

        <div class="col-md-2 mx-auto">

            <!-- Footer Liens -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Liens</h5>

            <ul class="list-unstyled">
            <li>
                <a href="#produits">Produits</a>
            </li>
            <li>
                <a href="#services">Services</a>
            </li>
            </ul>

        </div>

        <hr class="clearfix w-100 d-md-none">

        <div class="col-md-2 mx-auto">

            <!-- Footer Info -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Informations</h5>

            <ul class="list-unstyled">
            <li>
                <a href="#quisommesnous">Qui sommes-nous ?</a>
            </li>
            <li>
                <a href="#engagements">Nos engagements</a>
            </li>
            <li>
                <a href="#paiement">Moyens de paiement</a>
            </li>
            </ul>

        </div>

        <hr class="clearfix w-100 d-md-none">

        <div class="col-md-2 mx-auto">

            <!-- Footer Contact -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>
            <ul class="list-unstyled">
                <li>
                    <p>
                        HACKERS-POULETTE<br/>
                        Square des Martyrs<br/>
                        6000 CHARLEROI<br/>
                        BELGIQUE<br/>
                        Tel : +00 000 00 00
                    </p>
                </li>
                <li>
                    <a href="#contact">Contactez-nous</a>
                </li>
            </ul>

        </div>
        </div>
    </div>

    <hr>

    <!-- Réseaux Sociaux -->
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
        </a>
        </li>
        <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
        </a>
        </li>
        <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
            <i class="fab fa-instagram"> </i>
        </a>
        </li>
    </ul>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#"> Hackers-Poulette.com</a>
    </div>

    <!-- Arrow UP -->
        <a href="#" id="arrowup" style="position: fixed;bottom: 0px;right:10px;color: white;font-size: 50px"><i class="fas fa-arrow-up"></i></a>
    </footer>

    <script src="assets/JS/script.js"></script>
    <script src="https://kit.fontawesome.com/2e89726559.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>