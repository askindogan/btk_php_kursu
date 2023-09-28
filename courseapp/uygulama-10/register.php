<?php
require "libs/variables.php";
require "libs/functions.php";
?>
<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>

<?php

$usernameErr = $passwordErr = $emailErr = $repasswordErr = $cityErr = $hobilerErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $email = $password = $repassword = $city = $hobiler = "";

    if (empty($_POST['username'])) {
        $usernameErr = "username alanı gerekli.";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['email'])) {
        $emailErr = "email alanı gerekli.";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['password'])) {
        $passwordErr = "password alanı gerekli.";
    } else {
        $password = $_POST['password'];
    }

    if (empty($_POST['repassword'])) {
        $repasswordErr = "repassword alanı gerekli.";
    } else {
        $repassword = $_POST['repassword'];
    }

    if ($_POST['city'] == -1) {
        $cityErr = "city alanı gerekli.";
    } else {
        $city = $_POST['city'];
    }

    if (!isset($_POST['hobiler'])) {
        $hobilerErr = "hobiler alanı gerekli.";
    } else {
        $hobiler = $_POST['hobiler'];
    }

}

?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" class="form-control">
                    <div class="text-danger"><?php echo $usernameErr ?></div>
                </div>
                <div class="mb-3">
                    <label for="email">Eposta</label>
                    <input type="email" name="email" class="form-control">
                    <div class="text-danger"><?php echo $emailErr ?></div>
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control">
                    <div class="text-danger"><?php echo $passwordErr ?></div>
                </div>
                <div class="mb-3">
                    <label for="repassword">Parola Tekrar</label>
                    <input type="password" name="repassword" class="form-control">
                    <div class="text-danger"><?php echo $repasswordErr ?></div>
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
                    <div class="text-danger"><?php echo $cityErr ?></div>
                </div>
                <div class="mb-3">
                    <label for="hobiler">Hobiler</label>
                    <div class="form-check">
                        <input type="checkbox" name="hobiler[]" id="hobiler_0" value="sinema">
                        <label for="hobiler_0" class="form-check-label">Sinema</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="hobiler[]" id="hobiler_1" value="spor">
                        <label for="hobiler_1" class="form-check-label">Spor</label>
                    </div>
                    <div class="text-danger"><?php echo $hobilerErr ?></div>
                </div>
                <button type="submit" class="btn btn-primary">Kayıt Ol</button>
            </form>
        </div>
    </div>

</div>