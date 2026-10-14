<?php
//buat namespace untuk controllers
namespace App\controllers;

//kita panggil namespace model siswa -> menggunakan use
use App\Models\Siswa;

//kita buat kelas baru 
class Siswacontrolles{
    //method prosesData
    public function prosesData(): void{
      //simulasi ambil data dari model (yg nantinya dari database)
      $siswa1 = new Siswa("25701", "siti kusmani", "RPL", "XI");
      //controlles untuk memproses dan merender tampilan HTML
      echo "<div style='border: 2px solid #007bff;
      padding: 15px; border-radius: 8px; font-family: sans-sarif;
      background: #f8f9fa;'>  ";

      echo "<h3 style='color: #007bff; margin-top: 0;'>
      Data Profil Siswa (via controlles)</h3>";

      echo "<b>NIS:</b> {$siswa1->getNis()} <br>";
      echo "<b>Nama:</b> {$siswa1->getNama()} <br>";
      echo "<b>Kelas:</b> {$siswa1->getKelas()} <br>";
      echo "<b>Jurusan:</b> {$siswa1->getJurusan()} <br>"; 
      echo "</div>";
    
 $siswa2 = new Siswa("257005", "Alfiya Riski Aulia", "RPL", "XI");
 echo "<div style='border: 2px solid #007bff;
 padding: 15px; border-radius: 8px; font-family: sans-sarif;
 background: #f8f9fa;'>";
 
 echo"<h3 style='color: #007bff; margin-top: 0;'> Data Profil Siswa (via controlles)</h3>";

 echo "<b>NIS:</b> {$siswa2->getNis()} <br>";
      echo "<b>Nama:</b> {$siswa2->getNama()} <br>";
      echo "<b>Kelas:</b> {$siswa2->getKelas()} <br>";
      echo "<b>Jurusan:</b> {$siswa2->getJurusan()} <br>"; 
      echo "</div>";

      $siswa3 = new Siswa("257040", "Widya Utami", "RPL", "XI");
 //controlles untuk memproses dan merender tampilan HTML
 echo "<div style='border: 2px solid #007bff;
 padding: 15px; border-radius: 8px; font-family: sans-sarif;
 background: #f8f9fa;'>";
 
 echo"<h3 style='color: #007bff; margin-top: 0;'> Data Profil Siswa (via controlles)</h3>";

 echo "<b>NIS:</b> {$siswa3->getNis()} <br>";
      echo "<b>Nama:</b> {$siswa3->getNama()} <br>";
      echo "<b>Kelas:</b> {$siswa3->getKelas()} <br>";
      echo "<b>Jurusan:</b> {$siswa3->getJurusan()} <br>"; 
      echo "</div>";
    }
}
?>