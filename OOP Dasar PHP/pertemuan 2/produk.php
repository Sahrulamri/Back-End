<?php
class Produk
{
    // Property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;
    // Methode
    public function getLabel()
    {
        return "$this->penulis, 
                $this->judul, 
                $this->penerbit, 
                $this->harga";
    }
}

// Panggil Property

$produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Uncharted";
var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 300000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 1000000;

echo "Komik : <br>
            Judul: $produk3->judul, <br>
            Penulis : $produk3->penulis, <br>
            Penerbit : $produk3->penerbit, <br>
            Harga : $produk3->harga";

//Panggil Method
echo "Komik :" . $produk3->getLabel();

echo "<hr>";

echo "Game :" . $produk4->getLabel();
