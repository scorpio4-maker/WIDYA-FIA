<?php
require_once "contoh_superclass.php";

class Siswa extends person {
    private string $nisn;

    #[Override]
    public function __construct
    (string $nama, string $alamat, string $nisn)
    {
       //memanggil constructor milik superclass
    parent::__construct($nama, $alamat);
        $this->nisn = $nisn;
    }
    public function belajar():void{
        echo $this->GetNama()
        ." dengan NIS: ".$this->nisn.
        " Sedang Belajar mata pelajaran RPL. <br>";
    }
}

//pengujian inheritance melalui pembuatan objek
$Siswa1 = new Siswa("Alfiya Riski", "semarang", "257005");
$Siswa1->tampilkanInfo(); //Method warisan
$Siswa1->belajar();

?>