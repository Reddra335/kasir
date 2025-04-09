<?php 


//jualan produk
// komik 
// game
class Produk {
    // contoh visibility (variabel dalam class)
    public $judul, $penulis, $penerbit,  $harga, $jmlHalaman,  $waktuMain,$tipe;

public function __construct($judul="Judul",$penulis="Penulis",$penerbit="Penerbit",$harga=0, $jmlHalaman=0, $waktuMain=0,$tipe="tipe") {
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
        $this->jmlHalaman=$jmlHalaman;
        $this->waktuMain=$waktuMain;
        $this->tipe=$tipe;
    }

  public function getlabel(){
    return " $this->penulis,$this->penerbit" ;
  }
  public function lengkap(){
    // Komik : Naruto | Masashi Kishimoto, Shonen Jump Rp. 30000 - 100 Halaman
$str= "{$this->tipe} : {$this->getlabel()} | {$this->harga}"; 
if ($this->tipe=="Game") {

$str.="{$this->jmlHalaman}";

} else if ($this->tipe=="Komik") {

  $str .= "{$this->waktuMain}";

  }
  return $str;
}


}

class cetakProduk{
 public function cetak($produk) {

$str = "{$produk->getlabel()}";
return $str;



 }




}

$produk1 = new Produk("Naruto","  Masashi Kishimoto","Jepang",50000,100,0,"Komik");
$produk2 = new Produk("Undertle","Reddra","Jepang",170000,0, 50,"Game");
$tampilan = new cetakProduk();

echo $produk1->lengkap();



?>