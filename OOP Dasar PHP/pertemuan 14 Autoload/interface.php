<?php

// Interface
interface infoProduk
{
    public function getInfoProduk();
}

// Class
abstract class Produk
{

    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon;

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

    abstract public function getInfo();



    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        $this->penerbit;
    }
    public function setharga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        // $total = $this->harga - 
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function setDiskon($diskon = 0)
    {
        return $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        return $this->diskon;
    }
}

class Komik extends Produk implements infoProduk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})  ";
        return $str;
    }
    public function getInfoProduk()
    {
        $str = "Komik: " . $this->getInfo() . "- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk implements infoProduk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->penerbit}, (Rp. {$this->harga})  ";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . "- {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        // $str = "{$produk->getLabel()}";
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= " - {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$produk4 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 10000000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);

echo $cetakProduk->cetak();
