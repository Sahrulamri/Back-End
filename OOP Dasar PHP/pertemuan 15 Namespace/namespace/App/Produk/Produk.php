<?php 
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
