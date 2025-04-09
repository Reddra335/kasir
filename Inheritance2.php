<?php 


//jualan produk
// komik 
// game
class Produk {
    // contoh visibility (variabel dalam class)
    public $judul, $penulis, $penerbit,  $harga, $jmlHalaman,  $waktuMain;

public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0, $jmlHalaman=0, $waktuMain=0) {
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
        $this->jmlHalaman=$jmlHalaman;
        $this->waktuMain=$waktuMain;
   
    }

  public function getlabel(){
    return " $this->penulis,$this->penerbit" ;
  }
  }

  //KOMIK
class Komik extends Produk{


public function lengkap()
{
    $str= "Komik :  {$this->judul}  {$this->getlabel()} | {$this->harga} - {$this->jmlHalaman} Halaman"; 
    return $str;
} }

//GAME
class Game extends Produk{
public $waktuMain;

public function lengkap()
{
    $str= "Game : {$this->judul} | {$this->getlabel()} | {$this->harga} ~ {$this->waktuMain} Jam"; 
    return $str;
}



}

//
class cetakProduk{
 public function cetak($produk) {

$str = $produk->lengkap();
return $str;



 }




}

$produk1 = new Komik("Naruto","  Masashi Kishimoto","Jepang",50000,100,0);
$produk2 = new Game("Undertle","Reddra","Jepang",170000,0,40);
$tampilan = new cetakProduk();


echo $tampilan->cetak($produk1);



echo "<br>";



echo $tampilan->cetak($produk2);
?>