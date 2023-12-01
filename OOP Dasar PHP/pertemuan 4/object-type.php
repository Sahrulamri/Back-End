<?php
// Class
class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // Constructure (Untuk menampung parameter sebelum di panggil oleh getLabel)
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit  = $penerbit;
        $this->harga = $harga;
    }
    // Methode
    public function getLabel()
    {
        return "$this->judul, 
                $this->penulis, 
                $this->penerbit, 
                $this->harga";
        // $str = "{$produk->judul}, {$produk->penulis}, {$produk->penerbit}, {$produk->harga}";
        // return $str;
    }
}

// Class
class CetakInfoProduk
{
    // Method
    public function cetak(Produk $produk)
    {
        // $str = "{$produk->getLabel()}";
        $str = "{$produk->judul}, {$produk->penulis}, {$produk->penerbit}, {$produk->harga}";
        return $str;
    }
}




// Isi parameter Construct
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000);
$produk4 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 10000000);

echo "<br>";
//Panggil Method
echo "Komik :" . $produk3->getLabel();

echo "<br>";

echo "Game :" . $produk4->getLabel();

echo "<br>";
// Cetak Info Produk
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk3);
