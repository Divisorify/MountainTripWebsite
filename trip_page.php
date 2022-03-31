<?php
include("trip.php");
?>

<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Wycieczki górskie</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Rubik', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Wycieczki górskie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#start">Start</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wycieczki">Wycieczki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cennik">Cenniki</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#inne">Inne</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="...">
                    <button class="btn btn-outline-primary" type="submit">Szukaj</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="start" class="mb-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/mc1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Niesamowite przeżycia!</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/mc2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Niesamowite widoki!</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/mc3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Piękno natury!</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div id="wycieczki" class="container mb-5">
        <div class="row">
            <h1>Wycieczki</h1>
        </div>
        <div class="row">
            <?php foreach ($trips as $t) : ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <img src="img/mk<?php print $t->getId() ?>.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php print $t->getName() ?> </h5>
                            <p class="card-text"> <?php print $t->getDescription() ?> </p>
                            <a href="#" class="btn btn-primary">Więcej szczegółów...</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div id="cennik" class="container mt-5 mb-5">
        <div class="row">
            <h1>Cennik</h1>
        </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa wycieczki</th>
                    <th scope="col">Kontynent</th>
                    <th scope="col">Kraj</th>
                    <th scope="col">Okres</th>
                    <th scope="col">Cena</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trips as $t) : ?>
                    <tr>
                        <th scope="row"><?php print $t->getId() ?></th>
                        <td><?php print $t->getName() ?></td>
                        <td><?php print $t->getContinent() ?></td>
                        <td><?php print $t->getCountry() ?></td>
                        <td><?php print $t->getPeriod() ?> dni</td>
                        <td><?php print $t->getPrice() ?> PLN</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div id="inne" class="container mb-3">
        <div class="row">
            <div class="col-sm-12 col-md-6 mb-4">
                <h2>O naszych wycieczkach...</h2>
                <p>Film ze zdjęciami z podróży naszych klientów.
                    Być może Państwa zdjęcia z wyprawy trafią tu za niedługo!</p>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/t7ZpJ7wWlZI"></iframe>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <h2>Zapytanie o ofertę</h2>
                <form>
                    <div class="form-group mt-2 mb-3">
                        <label for="exampleFormControlInput1">Adres email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect1">Rodzaj oferty</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>indywidualna</option>
                            <option>grupowa</option>
                            <option>specjalna</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlSelect2">Kontynent</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>Azja</option>
                            <option>Europa</option>
                            <option>Ameryka północna</option>
                            <option>Ameryka południowa</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleFormControlTextarea1">Komentarz</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3 d-grid d-md-flex justify-content-md-end">
                        <a href="#" class="btn btn-primary">Wyślij</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="container-fluid bg-light">
        <div class="row text-center pt-2">
            <p class="text-dark">&copy; Wycieczki górskie – 2022</p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>