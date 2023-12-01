<?php
// Class
class Produk
{

    public $judul,
        $penulis,
        $penerbit,
        $harga;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit  = $penerbit;
        $this->harga = $harga;
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
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})  ";

        return $str;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik: " . parent::getInfoProduk() . "- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . "- {$this->waktuMain} Jam.";
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


$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$produk4 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 10000000, 50);


echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
