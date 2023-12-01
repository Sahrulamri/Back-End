<?php
// Class
class Produk
{

    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit  = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }


    public function getLabel()
    {
        return "$this->judul, 
                $this->penulis, 
                $this->penerbit, 
                $this->harga";
    }

    public function getInfoComplete()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga}) - ";
        if ($this->tipe == "Komik") {
            $str .= "{$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= "{$this->waktuMain} Jam.";
        }
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


$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, 0, "Komik");
$produk4 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 10000000, 0, 50, "Game");


echo $produk3->getInfoComplete();
echo "<br>";
echo $produk4->getInfoComplete();
