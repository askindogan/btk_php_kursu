<?php $title='Anasayfa'?>
/*
require deyimi ile bağımlılık oluştururuz yani bu içerikte hata varsa projenin tamamı durur.
include ise sadece ilgili kısım çalışmaz fakat diğer kısımlar çalışır.

Sonuç olarak, parçaları import ederken "include" bir veriyi/gerekliliği import ederken mutlaka 
"require" deyimi kullanmalıyız.
*/
<?php require 'partials/_variables.php' ?>
<?php include 'partials/_header.php' ?>
<main>
    <h1>En çok satan ürünler</h1>
    <?php include 'partials/_urunler.php' ?>

</main>

<?php include 'partials/_footer.php' ?>
