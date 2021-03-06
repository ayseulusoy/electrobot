<?php
session_start();
?>

<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Anasayfa</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <a class="navbar-brand" href="anasayfa">
            <img src="https://findicons.com/files/icons/2770/ios_7_icons/128/circuit.png" width="30" height="30" class="d-inline-block align-top mb-2" alt="Electrobot">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active mb-2">
                    <a class="nav-link" href="anasayfa">Anasayfa</a>
                </li>
                <li class="nav-item mb-2">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategoriler
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="arduinoUrunler">Arduino</a>
                            <a class="dropdown-item" href="raspberryUrunler">Raspberry</a>
                            <a class="dropdown-item" href="gelistirmekartUrunler">Geli??tirme Kartlar??</a>
                            <a class="dropdown-item" href="sensorUrunler">Sens??rler</a>
                            <a class="dropdown-item" href="aracgerecUrunler">Ara??-Gere??</a>
                        </div>
                      </div>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-2 mb-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <form method="post">
                <?php
                    if(isset($_SESSION['email'])){
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary mr-2" href="hesabim">Hesab??m</a>';
                        echo '</li>';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary" href="php/logout">????k???? Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary mr-2" href="kayit">Kay??t Ol</a>';
                        echo '</li>';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary" href="giris">Giri?? Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    }
                ?>
            </form>
        </div>
    </nav>

    <div class="container my-5">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://images.unsplash.com/photo-1562976540-78c559c80296?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.unsplash.com/photo-1555543451-eeaff357e0f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.unsplash.com/photo-1552283576-3ea3519bf12e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <br>
        <h1 data-aos="fade-up" class="display-4 text-center mb-2">??ok satanlar</h1>
        <p data-aos="fade-up" class="text-center mb-5">??r??nlerimizin hepsi test edilmi?? bir ??ekilde kendi depomuzdan kargolanmaktad??r. Toplu al????veri??lerde indirim uygulanmaktad??r mail@mail.com</p>
        <div class="clearfix"></div>
        <hr>

        <br class="my-10">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <br class="my-10">
            <div class='col mb-4' data-aos='fade-up'>
                <div class='card h-100 border-info mb-2'>
                    <img src='https://images.unsplash.com/photo-1562976540-78c559c80296?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1489&q=80' class='card-img-top'>
                    <div class='card-body'>
                        <h6 class='card-title'>Arduino Uno R3</h6>
                        <p class='card-text'>Orjinal Arduino Uno R3 ??r??n?? ATmega328P i??lemci kullanan bir geli??tirme kart??d??r.</p>
                    </div>
                    <div class='card-footer bg-transparent'>
                        <a href='./urunSayfa/arduinoSayfa/arduinouno1' class='btn btn-outline-primary btn-block'>Sat??n Al</a>
                    </div>
                </div>
            </div>
            <div class='col mb-4' data-aos='fade-up'>
                <div class='card h-100 border-info mb-2'>
                    <img src='https://images.unsplash.com/photo-1555543451-eeaff357e0f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80' class='card-img-top'>
                    <div class='card-body'>
                        <h6 class='card-title'>Arduino Pro Mini</h6>
                        <p class='card-text'>Arduino Pro Mini 5V ile ??al????an ve ??zerinde Atmega328 mikrodenet??isi bulunduran bir geli??tirme/prototip kart??d??r.</p>
                    </div>
                    <div class='card-footer bg-transparent'>
                        <a href='./urunSayfa/arduinoSayfa/arduinopromini1' class='btn btn-outline-primary btn-block'>Sat??n Al</a>
                    </div>
                </div>
            </div>
            <div class='col mb-4' data-aos='fade-up'>
                <div class='card h-100 border-info mb-2'>
                    <img src='https://images.unsplash.com/photo-1552283576-3ea3519bf12e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80' class='card-img-top'>
                    <div class='card-body'>
                        <h6 class='card-title'>Raspberry Pi 2 Model B</h6>
                        <p class='card-text'>Raspberry Pi kredi kart?? boyutunda bir mini bilgisayar kart??d??r. ??stelik sadece birka?? dakikaya kurulumunu yap??p kullanmaya ba??layabilirsiniz.</p>
                    </div>
                    <div class='card-footer bg-transparent'>
                        <a href='./urunSayfa/raspberrySayfa/raspberrypi2modelb1' class='btn btn-outline-primary btn-block'>Sat??n Al</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5">
    </div>


    <footer class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h5>H??zl?? Eri??im</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="anasayfa" class="text-muted">Anasayfa</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                </div>

                <div class="col-6 col-md-3">
                    <h5>Kurumsal Bilgiler</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="iletisim" class="text-muted">??leti??im</a>
                        </li>
                        <li>
                            <a href="hakkimizda" class="text-muted">Hakk??m??zda</a>
                </div>

                <div class="col-6 col-md-3">
                    <h5>Yard??m</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="kayitkosullari" class="text-muted">Kay??t Ko??ullar??</a>
                        </li>
                        <li>
                            <a href="sikcasorulansorular" class="text-muted">S??k??a Sorulan Sorular</a>
                        </li>
                        <li>
                            <a href="secenekler" class="text-muted">Sat???? S??zle??mesi ve M????teri Hizmetleri</a>
                        </li>

                </div>
            </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>