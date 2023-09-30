<?php
require "libs/variables.php";
require "libs/functions.php";
?>
<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>

<?php

$usernameErr = $passwordErr = $emailErr = $repasswordErr = $cityErr = $hobbiesErr = "";
$username = $email = $password = $repassword = $city ="";
$hobbies=[];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['username'])) {
        $usernameErr = "username alanı gerekli.";
    } else {
        $username = safe_html($_POST['username']);
    }

    if (empty($_POST['email'])) {
        $emailErr = "email alanı gerekli.";
    } else {
        $email = safe_html($_POST['email']);
    }

    if (empty($_POST['password'])) {
        $passwordErr = "password alanı gerekli.";
    } else {
        $password = safe_html($_POST['password']);
    }

    if (empty($_POST['repassword'])) {
        $repasswordErr = "repassword alanı gerekli.";
    } else {
        $repassword = safe_html($_POST['repassword']);
    }

    if ($_POST['city'] == -1) {
        $cityErr = "city alanı gerekli.";
    } else {
        $city = $_POST['city'];
    }

    if (!isset($_POST['hobbies'])) {
        $hobbiesErr = "hobiler alanı gerekli.";
    } else {
        $hobbies= $_POST['hobbies'];
    }
}
?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <div class="text-danger"><?php echo $usernameErr ?></div>
                </div>
                <div class="mb-3">
                    <label for="email">Eposta</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                    <div class="text-danger"><?php echo $emailErr ?></div>
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
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

                        <?php foreach ($sehirler as $plaka => $sehir) : ?>
                            <option value="<?php echo $plaka; ?>" <?php echo $city == $plaka ? ' selected' : '' ?>>
                                <?php echo $sehir; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="text-danger"><?php echo $cityErr ?></div>
                </div>
                <div class="mb-3">
                    <label for="hobiler">Hobiler</label>

                    <?php foreach ($hobiler as $key => $hobi): ?>
                        <div class="form-check">
                            <input  type="checkbox" 
                                    name="hobbies[]" 
                                    id="hobbies<?php echo $key;?>" 
                                    value="<?php echo $hobi; ?>"
                                    <?php  if(in_array($hobi, $hobbies)) echo 'checked'; ?>
                                    >
                            <label for="hobbies_<?php echo $key; ?>" class="form-check-label"><?php echo $hobi; ?></label>
                        </div>
                    <?php endforeach; ?>

                    <div class="text-danger"><?php echo $hobbiesErr ?></div>
                </div>
                <button type="submit" class="btn btn-primary">Kayıt Ol</button>
            </form>
        </div>
    </div>

</div>
