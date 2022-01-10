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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Hesabım</title>
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
                            <a class="dropdown-item" href="gelistirmekartUrunler">Geliştirme Kartları</a>
                            <a class="dropdown-item" href="sensorUrunler">Sensörler</a>
                            <a class="dropdown-item" href="aracgerecUrunler">Araç-Gereç</a>
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
                        echo '<a class="btn btn-outline-primary mr-2" href="hesabim">Hesabım</a>';
                        echo '</li>';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary" href="php/logout">Çıkış Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    } else {
                        echo '<ul class="navbar-nav">';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary mr-2" href="kayit">Kayıt Ol</a>';
                        echo '</li>';
                        echo '<li class="nav-item active mb-2">';
                        echo '<a class="btn btn-outline-primary" href="giris">Giriş Yap</a>';
                        echo '</li>';
                        echo '</ul>';
                    }
                ?>
            </form>
        </div>
    </nav>

    <div class="container my-5">
        <div class="accordion" id="accordionExample">
                <div class="card border-primary">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-primary" style="text-decoration:none;"  type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Hesap Bilgileri
                        </button>
                        </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="adi" placeholder="Ad" name="adi" READONLY>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="soyadi" placeholder="Soyad" name="soyadi" READONLY>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" READONLY>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">          
                                <input type="password" class="form-control" id="pwd" placeholder="Şifre" name="pwd" READONLY>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-primary" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Sepetim
                        </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Sepetim <br><br>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-primary" style="text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Şifremi Değiştir
                        </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="col-sm-10">          
                                <input type="password" class="form-control" id="pwd1" placeholder="Mevcut Şifre" name="pwd1">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">          
                                <input type="password" class="form-control" id="pwd2" placeholder="Yeni Şifre" name="pwd2">
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-outline-primary">Onayla</button>
                            </div>
                        </div>
                    </div>
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
                    <h5>Hızlı Erişim</h5>
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
                            <a href="iletisim" class="text-muted">İletişim</a>
                        </li>
                        <li>
                            <a href="hakkimizda" class="text-muted">Hakkımızda</a>
                </div>

                <div class="col-6 col-md-3">
                    <h5>Yardım</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="kayitkosullari" class="text-muted">Kayıt Koşulları</a>
                        </li>
                        <li>
                            <a href="sikcasorulansorular" class="text-muted">Sıkça Sorulan Sorular</a>
                        </li>
                        <li>
                            <a href="secenekler" class="text-muted">Satış Sözleşmesi ve Müşteri Hizmetleri</a>
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