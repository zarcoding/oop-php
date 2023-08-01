<?php
// Parent class
class Benda
{
    // Property dengan 3 access modifier
    protected $objek;
    private $berat;
    public $harga;

    // Constructor
    public function __construct($objek, $berat, $harga)
    {
        $this->objek = $objek;
        $this->berat = $berat;
        $this->harga = $harga;
    }

    // Destructor
    public function __destruct()
    {
        echo "<br>";
    }

    // Setter dan Getter
    public function setObjek($objek)
    {
        $this->objek = $objek;
    }

    public function getObjek()
    {
        return $this->objek;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }

    public function getBerat()
    {
        return $this->berat;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    // Method
    public function getInfo()
    {
        return " menydiakan {$this->objek}, berat {$this->berat} kg,  harga {$this->harga} rupiah.<br>";
    }
}

// Child class
class Chair extends Benda
{
    // Child class memiliki tambahan property sendiri
    private $pcs;

    // Konstruktor khusus untuk Chair
    public function __construct($objek, $berat, $harga, $pcs)
    {
        // Memanggil konstruktor parent class dengan parent::__construct()
        parent::__construct($objek, $berat, $harga);
        $this->pcs = $pcs;
    }

    // Setter dan Getter tambahan untuk legs
    public function setpcs($pcs)
    {
        $this->pcs = $pcs;
    }

    public function getpcs()
    {
        return $this->pcs;
    }

    // Meng-override method getInfo() dari parent class
    public function getInfo()
    {
        return " menydiakan  {$this->getObjek()},dengan  berat {$this->getBerat()} , harga diskon {$this->getHarga()} juta,  {$this->pcs} pcs.<br>";
    }
}

// Membuat instansiasi object dari masing-masing class
$rumah = new Benda('lemari', '7', '100000', 200);
$isi = new Benda('5', '4 kg', '3');
$nilai = new Benda(500000, 350000, 2000000, 100000);

// Get semua property dari objectnya
echo "Objek: " . $rumah->getObjek() . "<br>";
echo "Berat: " . $isi->getBerat() . "<br>";
echo "Harga: " . $nilai->getHarga() . "<br>";

// Tambahkan jeda baris antara output parent dan child
echo "<br>";

// Membuat instansiasi object dari class Chair
$pcs = new Chair('Kursi', '3 kg', '4', '1');

echo "Objek: " . $pcs->getObjek() . "<br>";
echo "Berat: " . $pcs->getBerat() . "<br>";
echo "Harga: " . $pcs->getHarga() . "<br>";

// Tambahkan jeda baris setelah menampilkan informasi legs dari child class
echo "satuan/pcs: " . $pcs->getpcs() . "<br><br>";

// Panggil method getInfo() dari objectnya
echo $rumah->getInfo();
echo $pcs->getInfo();