<?php
class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // Constructure
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
    }
}

// Panggil Property

$produk1 = new Produk();
$produk1->judul = "Naruto";
// var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Uncharted";
// var_dump($produk2);

// Isi parameter Construct
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000);


$produk4 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 10000000);

echo "Komik : <br>
            Judul: $produk3->judul, <br>
            Penulis : $produk3->penulis, <br>
            Penerbit : $produk3->penerbit, <br>
            Harga : $produk3->harga";
echo "<br>";
echo "<br>";
//Panggil Method
echo "Komik :" . $produk3->getLabel();

echo "<br>";

echo "Game :" . $produk4->getLabel();
