<?php 
//jualan produk
// komik 
// game
class produk {
    // contoh visibility (variabel dalam class)
    public $judul, $penulis, $penerbit,  $harga;

public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga="Harga") {
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }

  public function getlabel(){
    return "$this->penulis, $this->penerbit" ;
  }
}



$produk3 = new produk("Naruto","Masashi Kishimoto","Konoha",50000);



$produk4 = new produk("Undertle","Reddra","JIR",50);
$produk5= new produk("Dragon Ball");



echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();
echo "<br>";
var_dump($produk5);

?>