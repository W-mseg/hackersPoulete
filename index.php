<?php require ('functions.php');?>
<!doctype html>
<html lang="be_fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HackersPoulette</title>
    <link rel="stylesheet" href="assets/stylesheets/style.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                Hackers Poulette
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#produits">Produits</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="fond"></div>
    <div class="fond2"></div>
        <div class=jumbotron>
            <div class="container font-weight-bold">
                <h1>Titre</h1>
                <p></p>
            </div>
        </div>     

    </header>

    <main>
        
        <section id="produits" class="pb-5">

        <h2 class="text-center pb-3 pt-3 text-white">Nos produits</h2>
        
        <!-- Cards -->
        <div class="card-deck">
            <div class="card col-12 col-md-6 col-lg-4" data-toggle="modal" data-target="#Modal1">
                <img class="card-img-top" src=<?= $decodearray[0]['image'];?> alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"><?= $decodearray[0]['name'];?></h5>
                <p class="card-text"><?= $decodearray[0]['description'];?></p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><?= $decodearray[0]['prix'];?></small>
            </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4" data-toggle="modal" data-target="#Modal2">
                <img class="card-img-top" src=<?= $decodearray[1]['image'];?> alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title"><?= $decodearray[1]['name'];?></h5>
                <p class="card-text"><?= $decodearray[1]['description'];?></p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><?= $decodearray[1]['prix'];?></small>
            </div>
            </div>

            <div class="card col-12 col-md-6 col-lg-4" data-toggle="modal" data-target="#Modal3">
                <img class="card-img-top" src=<?= $decodearray[2]['image'];?> alt="Card image cap">
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

        <div class="card-deck">
        <div class="card col-12 col-md-8 col-lg-4" data-toggle="modal" data-target="#Modal4">
            <img class="card-img-top" src=<?= $decodearray[3]['image'];?> alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[3]['name'];?></h5>
            <p class="card-text"><?= $decodearray[3]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[3]['prix'];?></small>
        </div>
        </div>
        <div class="card col-12 col-md-8 col-lg-4" data-toggle="modal" data-target="#Modal5">
            <img class="card-img-top" src=<?= $decodearray[4]['image'];?> alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[4]['name'];?></h5>
            <p class="card-text"><?= $decodearray[4]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[4]['prix'];?></small>
        </div>
        </div>

        <div class="card col-12 col-md-8 col-lg-4" data-toggle="modal" data-target="#Modal6">
            <img class="card-img-top" src=<?= $decodearray[5]['image'];?> alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[5]['name'];?></h5>
            <p class="card-text"><?= $decodearray[5]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[5]['prix'];?></small>
        </div>
    </div>
</div>


<div class="card-deck">
        <div class="card col-12 col-md-8 col-lg-4" data-toggle="modal" data-target="#Modal7">
            <img class="card-img-top" src=<?= $decodearray[6]['image'];?> alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[6]['name'];?></h5>
            <p class="card-text"><?= $decodearray[6]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[6]['prix'];?></small>
        </div>
        </div>
        <div class="card col-12 col-md-8 col-lg-4" data-toggle="modal" data-target="#Modal8">
            <img class="card-img-top" src=<?= $decodearray[7]['image'];?> alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?= $decodearray[7]['name'];?></h5>
            <p class="card-text"><?= $decodearray[7]['description'];?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $decodearray[7]['prix'];?></small>
        </div>
        </div>

        <div class="card col-12 col-md-8 col-lg-4" data-toggle="modal" data-target="#Modal9">
            <img class="card-img-top" src=<?= $decodearray[8]['image'];?> alt="Card image cap">
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

<div class="row justify-content-center">
        <button id="myBtn" onclick="seeMore()">Voir plus</button>
    </div>

    </section>

        <!-- Modals -->
        <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>

    <?php require ('formulaire.php');?>
        

    </main>

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

    <!-- Content -->
    <h5 class="text-uppercase">Hackers Poulette</h5>
    <p>La société <i>Hackers Poulette</i> ™ vend des kits et accessoires pour Raspberry Pi à monter soi-même</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

    <!-- Links -->
    <h5 class="text-uppercase">Links</h5>

    <ul class="list-unstyled">
        <li>
            <a href="#!">Link 1</a>
        </li>
        <li>
            <a href="#!">Link 2</a>
        </li>
        <li>
            <a href="#!">Link 3</a>
        </li>
        <li>
            <a href="#!">Link 4</a>
        </li>
    </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

    <!-- Links -->
    <h5 class="text-uppercase">Links</h5>

    <ul class="list-unstyled">
        <li>
            <a href="#!">Link 1</a>
        </li>
        <li>
            <a href="#!">Link 2</a>
        </li>
        <li>
            <a href="#!">Link 3</a>
        </li>
        <li>
            <a href="#!">Link 4</a>
        </li>
    </ul>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#"> Hackers-Poulette.com</a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script src="assets/JS/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>