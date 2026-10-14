<?php
//panggil namespace
use App\Models\Siswa;
use App\controllers\SiswaControlles;

//membuat file kelas(nantinya ini akan dilakukan composer/autoload)
require_once 'App/Models/Siswa.php';
require_once 'App/controlles/SiswaController.php';

 echo "<h1>sistem Informasi sekolah - SMK Texmaco Semarang</h1>";
 echo "<hr>";

 //instan controller dan jalankan method
$controlles = new Siswacontrolles();
$controlles->prosesData();

//instansiasi objek
$siswa1 = new Siswa ("25701", "siti kusmini", "RPL", "XI");
echo "NIS: " .$siswa1->getNis()."<br>";
echo "NAMA: ".$siswa1->getNama(). "<br>";
echo "JURUSAN: ".$siswa1->getJurusan(). "<br>";
echo "KELAS: ".$siswa1->getKelas();
?> 