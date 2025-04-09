<?php 
//jualan produk
// komik 
// game
class produk {
    // contoh visibility (variabel dalam class)
    public $judul="Judul", $penulis="Penulis", $penerbit="Penerbit",  $harga= 0;

  public function getlabel(){
    return "$this->penulis, $this->penerbit" ;
  }
}

// $produk1= new produk();
// $produk2=new produk();
// // ditimpa

// $produk1->judul="opm";
// var_dump($produk1);
// echo"<br>";
// $produk2->judul="reddra";
// var_dump($produk2->judul);


$produk3 = new produk();
$produk3->judul="Dragon Ball";
$produk3->penulis="Akira Toriyama";
$produk3->penerbit="Anime";
$produk3->harga= 30000;


$produk4 = new produk();
$produk4->judul ="Undertel";
$produk4->penulis = "Hideo Kojima";
$produk4->penerbit = "Konami";
$produk4->harga = 50000;


echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();

?>