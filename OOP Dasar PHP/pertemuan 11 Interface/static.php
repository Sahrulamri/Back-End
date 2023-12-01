<?php
class ContohStatic
{
    public static $angka = 1;
    public static function halo()
    {
        return "halo" . self::$angka . "kali";
    }
}


echo ContohStatic::$angka;
echo "<br>";

// Panggil Method halo
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();















class ContohStatic2
{
    public static $angka = 1;
    public function haloid()
    {
        return "halo" . $this->angka++ . "kali<br>";
    }
}

$ob = new ContohStatic2();
echo $ob->haloid();
echo $ob->haloid();
echo $ob->haloid();

$obkn = new ContohStatic2();
echo $obkn->haloid();
echo $obkn->haloid();
echo $obkn->haloid();
echo $obkn->haloid();
