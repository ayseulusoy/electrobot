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

    <title>Ödeme</title>
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


    <div class="container my-5 ">
        <div class="row ">
            <div class="col-md-4 ">
                <h4>Sepetiniz</h4>
                <ul class="list-group ">
                    <li class="list-group-item ">
                        <p class="float-left ">Arduino Uno R4</p>
                        <p class="float-right text-warning ">189 ₺</p>
                    </li>
                    <li class="list-group-item ">
                        <p class="float-left ">Raspberry Pi 2 Model B</p>
                        <p class="float-right text-warning ">130 ₺</p>
                    </li>
                    <li class="list-group-item ">
                        <p class="float-left "><b>Toplam :</b></p>
                        <p class="float-right ">319 ₺</p>
                    </li>

                </ul>
            </div>
            <div class="col-md-8 ">
                <h4>Fatura Bilgileriniz</h4>
                <form class="was-validation ">
                    <div class="form-group ">
                        <input type="text " class="form-control " placeholder="Adınız " required>
                    </div>
                    <div class="form-group ">
                        <input type="text " class="form-control " placeholder="Soyadınız " required>
                    </div>
                    <div class="form-group ">
                        <input type="text " class="form-control " placeholder="E-Mail " required>
                    </div>
                    <div class="form-group ">
                        <textarea class="form-control " type="text " placeholder="Adres " rows="5 " required></textarea>
                    </div>
                    <div class="form-group ">
                        <input class="form-control " type="tel " value="+90-(555)-555-5555 " id="example-tel-input " required>
                        <small class="text-muted ">Başına sıfır koymadan</small>
                    </div>

                    <div class="clearfix "></div>
                    <hr class="my-5 ">

                    <div class="row ">

                        <div class="col-md-6 ">
                            <label><b> Kart Üzerinde Yazan Ad Soyad</b> </label>
                            <div class="form-group ">
                                <input type="text " class="form-control " placeholder="Kart sahibinin isim soyisim " required minlength="16 ">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <label><b> Kart No</b> </label>
                            <div class="form-group ">
                                <input type="text " class="form-control " placeholder="Kart Numarası " required minlength="16 ">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <div class="form-group ">
                                        <input type="text " class="form-control " placeholder="MM/YY " required minlength="16 ">
                                        <small class="text-muted ">Bitiş Tarihi</small>

                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group ">

                                        <input type="text " class="form-control " placeholder="CVV " required minlength="3 ">
                                        <small class="text-muted ">Güvenlik Kodu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button class="btn btn-primary btn-block " type="submit ">Satın Al</button>
                    </div>


                </form>
            </div>
        </div>
        <hr class="my-5 ">
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
</body>

</html>