<?php
require "libs/variables.php";
require "libs/functions.php";
?>
<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    echo $username . "<br>";
    echo $email . "<br>";
    echo $password . "<br>";
    echo $repassword . "<br>";
}



?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">Eposta</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="repassword">Parola Tekrar</label>
                    <input type="password" name="repassword" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="city">Şehir</label>
                    <select name="city" class="form-select">
                        <option value="-1" selected>Şehir Seçiniz</option>
                        <option value="34">İstanbul</option>
                        <option value="35">İzmir</option>
                        <option value="06">Ankara</option>
                        <option value="55">Samsun</option>
                        <option value="01">Adana</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hobiler">Hobiler</label>
                    <div class="form-check">
                        <input type="checkbox" name="hobiler[]" id="hobiler_0" value="sinema">
                        <label for="hobiler_0" class="form-check-label">sinema</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="hobiler[]" id="hobiler_1" value="spor">
                        <label for="hobiler_1" class="form-check-label">Spor</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Kayıt Ol</button>
            </form>
        </div>
    </div>

</div>