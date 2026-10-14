<?php
  //kita buat namaspace untuk kelas disini 
  namespace App\Models; //bisa kita sesuaikan dengan direktori

  //class baru untuk Siswa
  class Siswa{
    private string $nis;
    private string $nama;
    private string $jurusan;
    private string $kelas;
    

    //method construct
     public function __construct(string $nis, string $nama, string $jurusan, string $kelas)
     {
         $this->nis = $nis;
         $this->nama = $nama;
         $this->jurusan = $jurusan;
         $this->kelas = $kelas;
     }
      public function getnis():string
      {
        return $this->nis;
      }

      public function getnama():string
      {
        return $this->nama;
      }
      public function getjurusan(): string
      {
        return $this->jurusan;
      }
      public function getkelas(): string{
        return $this->kelas;
      }
  }
  
?>