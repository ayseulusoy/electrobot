<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Arduino</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <a class="navbar-brand" href="../../anasayfa">
            <img src="https://findicons.com/files/icons/2770/ios_7_icons/128/circuit.png" width="30" height="30" class="d-inline-block align-top mb-2" alt="Electrobot">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active mb-2">
                    <a class="nav-link" href="../../anasayfa">Anasayfa</a>
                </li>
                <li class="nav-item mb-2">
                    <div class="dropdown">
                        <button class="btn Secondary link dropdown-toggle" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategoriler
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../../arduinoUrunler">Arduino</a>
                            <a class="dropdown-item" href="../../raspberryUrunler">Raspberry</a>
                            <a class="dropdown-item" href="../../gelistirmekartUrunler">Geli??tirme Kartlar??</a>
                            <a class="dropdown-item" href="../../sensorUrunler">Sens??rler</a>
                            <a class="dropdown-item" href="../../aracgerecUrunler">Ara??-Gere??</a>
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
                        echo '<a class="btn btn-outline-primary mr-2" href="../../hesabim">Hesab??m</a>';
                        echo '</li>';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary" href="../../php/logout">????k???? Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary mr-2" href="../../kayit">Kay??t Ol</a>';
                        echo '</li>';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary" href="../../giris">Giri?? Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    }
                ?>
            </form>
        </div>
    </nav>

    <br class="my-10">
    <br class="my-10">
    <br class="my-10">
    <br class="my-10">

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">

                <div class="card p-0 border-0 shadow">
                    <div class="card-body">
                        <!--<img src="./arduinoimage/0.jpg" class="img-fluid">-->
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active" style="background-color:gray;"></li>
                                <li data-target="#carousel" data-slide-to="1" style="background-color:gray;"></li>
                                <li data-target="#carousel" data-slide-to="2" style="background-color:gray;"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./arduinoimage/0.jpg" class="d-block w-100" alt="arduinouno0">
                                </div>
                                <div class="carousel-item">
                                    <img src="./arduinoimage/0-1.jpg" class="d-block w-100" alt="arduinouno0-1">
                                </div>
                                <div class="carousel-item">
                                    <img src="./arduinoimage/0-2.jpg" class="d-block w-100" alt="arduinouno0-2">
                                </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:gray; border-radius: 2px;"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:gray; border-radius: 2px;"></span>
                                <span class="sr-only">Next</span>
                                </a>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h1>Arduino Uno R3</h1>
                <p>Arduino, bilgisayar??n??z arac??l??????yla programlayarak ??e??itli elektronik projeler yapabilece??iniz bir mikrokontrolc?? platfomudur. Arduino ile robotik projeler, ak??ll?? ev sistemleri, m??zik aletleri gibi akl??n??za gelebilecek neredeyse t??m
                    elektronik projeleri ger??ekle??tirmeniz m??mk??nd??r.</p>
                <hr>

                <h6>Urun Ozellikleri</h6>
                <ul class="unstyled">
                    <li class="text-muted">
                        Seri Haberle??me, 0 (RX) ve 1 (TX)
                    </li>
                    <li class="text-muted">
                        Harici Kesme, 2 (interrupt 0) ve 3 (interrupt 1)
                    </li>
                    <li class="text-muted">
                        PWM, 3,5,6,9,10 ve 11
                    </li>
                    <li class="text-muted">
                        Analog, A0-A5
                    </li>
                    <li class="text-muted">
                        Men??ei : Italya
                    </li>
                </ul>
                <h2 class="text-primary float-right mb-5">189 ???</h2>
                <div class="clearfix"></div>
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="number" placeholder="Adet" required>
                            <div class="input-group-append">
                                <a href="odeme.html" class="btn btn-outline-primary" target="_blank">Sepete Ekle</a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <br class="my-10">
        <br class="my-10">
        <br class="my-10">
        <hr class="my-5">
    </div>



    <footer class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h5>H??zl?? Eri??im</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="../../index" class="text-muted">Anasayfa</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                </div>

                <div class="col-6 col-md-3">
                    <h5>Kurumsal Bilgiler</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="../../iletisim" class="text-muted">??leti??im</a>
                        </li>
                        <li>
                            <a href="../../hakkimizda" class="text-muted">Hakk??m??zda</a>
                </div>

                <div class="col-6 col-md-3">
                    <h5>Yard??m</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="../../kayitkosullari" class="text-muted">Kay??t Ko??ullar??</a>
                        </li>
                        <li>
                            <a href="../../sikcasorulansorular" class="text-muted">S??k??a Sorulan Sorular</a>
                        </li>
                        <li>
                            <a href="../../secenekler" class="text-muted">Sat???? S??zle??mesi ve M????teri Hizmetleri</a>
                        </li>

                </div>
            </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
</body>

</html>