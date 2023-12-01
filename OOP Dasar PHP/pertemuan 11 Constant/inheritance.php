<?php
// Class
class Produk
{

    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit  = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }


    public function getLabel()
    {
        return "$this->judul, 
                $this->penulis, 
                $this->penerbit, 
                $this->harga";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga}) - ";

        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik: {$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{

    public function cetak(Produk $produk)
    {
        // $str = "{$produk->getLabel()}";
        $str = "{$produk->judul}, {$produk->penulis}, {$produk->penerbit}, {$produk->harga}";
        return $str;
    }
}


$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, 0,);
$produk4 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 10000000, 0, 50);


echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
