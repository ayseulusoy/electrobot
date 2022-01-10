<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'e-ticaret');
if($conn){
    $email=$_POST['inputEmail'];
    $sifre=$_POST['inputPassword'];

    $sql=mysqli_query($conn, "select * from uye where email='$email' and sifre='$sifre'");
    if(mysqli_num_rows($sql)<1 || (empty($email) || empty($sifre))){
        echo '<li class="nav-item active">Yeniden Deneyiniz</li>';
    }
    else {
        $_SESSION['email']=$email;
    }

    if(isset($_SESSION["email"]))
    {
        echo "<script>window.open('../anasayfa','_self')</script>";
    }
}
else {
    echo "Connection Failed";
}
?>