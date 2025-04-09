<?php 


//jualan produk
// komik 
// game
class Produk {
    // contoh visibility (variabel dalam class)
    public $judul, $penulis, $penerbit,  $harga,   $waktuMain;

public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0) {
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
        
        
   
    }

  public function getlabel(){
    return " $this->penulis,$this->penerbit" ;
  }
  public function lengkap()
{
    $str= "Komik :  {$this->judul}  {$this->getlabel()} | Harga {$this->harga} "; 
    return $str;
}
  }

  //KOMIK
class Komik extends Produk{
    public $jmlHalaman;
public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0, $jmlHalaman=0){

   


     parent::__construct($judul,$penulis,$penerbit,$harga);

$this->jmlHalaman=$jmlHalaman;
}

public function lengkap()
{
    $str= "Komik :  ". parent::lengkap() ." - {$this->jmlHalaman} Halaman"; 
    return $str;
} }

//GAME
class Game extends Produk{
public $waktuMain;

public  function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0, $waktuMain) {
  parent::__construct($judul,$penulis,$penerbit,$harga);
  $this->waktuMain=$waktuMain;
}


public function lengkap()
{
    $str= "Game : ". parent::lengkap() ." ~ {$this->waktuMain} Jam"; 
    return $str;
}



}

//
class cetakProduk{
 public function cetak($produk) {

$str = $produk->lengkap  ();
return $str;



 }




}

$produk1 = new Komik("Naruto","  Masashi Kishimoto","Jepang",50000,100);
$produk2 = new Game("Undertle","Reddra","Jepang",170000,40);
$tampilan = new cetakProduk();


echo $tampilan->cetak($produk1);



echo "<br>";



echo $produk2->lengkap();
?>