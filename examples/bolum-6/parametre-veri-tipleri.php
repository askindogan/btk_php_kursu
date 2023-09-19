<?php

//Declare fonk kullanıldığı zaman php nin tür dönüşümü yapması engellenir ve belirlenen türde değer bekler program
declare(strict_types=1);

function toplama(int $sayi1, int $sayi2, bool $isActive): float
{
    return $sayi1+$sayi2+1.3;

}
echo toplama(10,20,true);