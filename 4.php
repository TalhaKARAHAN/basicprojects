<?php
class Sekil {
    // Alan hesaplama metodu
    public function alanHesapla() {
        return "Alan hesaplanamıyor: Alan hesaplaması genel olarak şekle göre tanımlanmalıdır.";
    }

    // Çevre hesaplama metodu
    public function cevreHesapla() {
        return "Çevre hesaplanamıyor: Çevre hesaplaması genel olarak şekle göre tanımlanmalıdır.";
    }
}

class Dikdortgen extends Sekil {
    private $uzunluk;
    private $genislik;

    // Kurucu metod
    public function __construct($uzunluk, $genislik) {
        $this->uzunluk = $uzunluk;
        $this->genislik = $genislik;
    }

    // Alan hesaplama metodu
    public function alanHesapla() {
        return $this->uzunluk * $this->genislik;
    }

    // Çevre hesaplama metodu
    public function cevreHesapla() {
        return 2 * ($this->uzunluk + $this->genislik);
    }
}

class Ucgen extends Sekil {
    private $taban;
    private $yukseklik;
    private $kenar1;
    private $kenar2;
    private $kenar3;

    // Kurucu metod
    public function __construct($taban, $yukseklik, $kenar1, $kenar2, $kenar3) {
        $this->taban = $taban;
        $this->yukseklik = $yukseklik;
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
    }

    // Alan hesaplama metodu
    public function alanHesapla() {
        return ($this->taban * $this->yukseklik) / 2;
    }

    // Çevre hesaplama metodu
    public function cevreHesapla() {
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }
}

class Kare extends Sekil {
    private $kenar;

    // Kurucu metod
    public function __construct($kenar) {
        $this->kenar = $kenar;
    }

    // Alan hesaplama metodu
    public function alanHesapla() {
        return $this->kenar * $this->kenar;
    }

    // Çevre hesaplama metodu
    public function cevreHesapla() {
        return 4 * $this->kenar;
    }
}

// Örnek kullanım
$dikdortgen = new Dikdortgen(5, 3);
echo "Dikdörtgen Alanı: " . $dikdortgen->alanHesapla() . "<br>";
echo "Dikdörtgen Çevresi: " . $dikdortgen->cevreHesapla() . "<br>";

$ucgen = new Ucgen(6, 4, 5, 5, 5);
echo "Üçgen Alanı: " . $ucgen->alanHesapla() . "<br>";
echo "Üçgen Çevresi: " . $ucgen->cevreHesapla() . "<br>";

$kare = new Kare(4);
echo "Kare Alanı: " . $kare->alanHesapla() . "<br>";
echo "Kare Çevresi: " . $kare->cevreHesapla() . "<br>";
?>
