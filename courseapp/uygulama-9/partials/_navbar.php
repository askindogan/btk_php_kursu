<?php
if (!empty($_GET['q'])) {
    $keyword = $_GET['q'];

    //use ile fonksiyon içine dışındaki global bir değişkeni çekmiş olduk
    $kurslar=array_filter($kurslar,function($kurs) use($keyword){
            return stristr($kurs['baslik'],$keyword) or stristr($kurs['altBaslik'],$keyword);
    });

}
?>
<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <a href="../" class="navbar-brand">CourseAPP</a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="/" class="nav-link active">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">Kurslar</a>
            </li>
        </ul>
        <form action="" method="get" class="d-flex">
            <input type="text" name="q" class="form-control me-2" placeholder="Keyword">
            <button type="submit" class="btn btn-warning">Ara</button>
        </form>
    </div>
</nav>