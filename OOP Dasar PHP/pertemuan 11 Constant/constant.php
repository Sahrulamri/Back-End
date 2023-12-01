<?php
define('NAMA', 'Sandhika Galih');
echo NAMA;

echo "<br>";

const UMUR = 32;
echo UMUR;


class Coba
{
    const NAMA = 'Sandhika';
}

echo Coba::NAMA;

// MAGICAL FUNCTION OF PHP
function coba()
{
    return __FUNCTION__;
}

echo coba();


echo __LINE__;

class  Halo
{
    public static $kelas = __CLASS__;
}

echo Halo::$kelas;
