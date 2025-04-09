<?php 
// Jualan Produk: Komik dan Game

class Produk {
    public $judul, $penulis, $penerbit, $waktuMain, $diskon = 0;
    protected $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
        $this->judul    = $judul;
        $this->penulis  = $penulis;
        $this->penerbit = $penerbit;
        $this->harga    = $harga;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    // Perhitungan harga setelah diskon berlaku untuk semua produk
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function lengkap() {
        $str = "Produk : {$this->judul} | {$this->getLabel()} | Harga: Rp{$this->harga}";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function lengkap() {
        $str = "Komik : " . parent::lengkap() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Jangan override getHarga() agar diskon dari Produk bisa diterapkan
    public function lengkap() {
        $str = "Game : " . parent::lengkap() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakProduk {
    public function cetak(Produk $produk) {
        $str = $produk->lengkap();
        return $str;
    }
}

// Pembuatan objek produk
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Jepang", 50000, 100);
$produk2 = new Game("Undertale", "Reddra", "Jepang", 170000, 40);

// Cetak data produk awal
$cetakProduk = new CetakProduk();
echo $cetakProduk->cetak($produk1);
echo "<br>";

// Terapkan diskon ke produk
$produk1->setDiskon(40);
$produk2->setDiskon(20);

// Cetak harga setelah diskon
echo "Harga Komik setelah diskon: Rp" . $produk1->getHarga();
echo "<br>";
echo "Harga Game setelah diskon: Rp" . $produk2->getHarga();
?>