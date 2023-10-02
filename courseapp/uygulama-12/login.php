<?php
require "libs/variables.php";
require "libs/functions.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == username && $password == password) {
        setcookie('username', $username, time() + (60 * 60 * 24));
        setcookie('auth', true, time() + (60 * 60 * 24));
        header("Location:index.php");
    } else {
        echo "<div class='alert alert-danger mb-0 text-center'>Yanlış bilgiler.</div>";
    }
}
?>
<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>

<div class="container my-3">

    <div class="row">
        <div class="col-12">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
        </div>
    </div>

</div>