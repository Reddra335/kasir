<?php 


//jualan produk
// komik 
// game
class Produk {
    // contoh visibility (variabel dalam class)
    public $judul, $penulis, $penerbit,  $harga;

public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga="Harga") {
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }

  public function getlabel(){
    return "$this->judul, $this->penulis,$this->penerbit,$this->harga" ;
  }
}

class cetakProduk{
 public function cetak($produk) {

$str = "{$produk->getlabel()}";
return $str;



 }




}

$produk1 = new Produk("Naruto","  Masashi Kishimoto","Jepang","50000");
$produk2 = new Produk("Undertle","Reddra","Jepang","170000");
$tampilan = new cetakProduk();

echo $tampilan->cetak($produk1);



?>