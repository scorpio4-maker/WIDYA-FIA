<?php
//kita buat parentclass
class pegawai{
    protected $nama_pegawai;
    protected $gaji_pegawai;

    //method construct
    public function __construct($nama_pegawai, $gaji_pegawai ){
    $this->nama_pegawai = $nama_pegawai;
    $this->gaji_pegawai = $gaji_pegawai;

    }

    //method construct
     public function getNama(){
        return $this->nama_pegawai;
     }

     public function hitunggaji(){
        return $this->gaji_pegawai;
     }
}

     class freelancer extends pegawai{
        private $projectRate;
        private $jumlahProject;
     
  public function __construct($nama_pegawai, $projectRate, $jumlahProject){
     //gaji di buat 0, karena freelance hanya di bayar per project
        parent:: __construct($nama_pegawai, 0);
        $this->projectRate = $this->projectRate;
        $this->jumlahProject = $this->jumlahProject;
     }
 
     //
     //
     public function hitunggaji()
     {
        return $this->projectRate * $this->jumlahProject;
     }
     }
      
     class karyawantetap extends pegawai{
        private $tunjangan;
     

     public function __construct($nama_pegawai, $gaji_pegawai, $tunjangan)
     {
        parent :: __construct($nama_pegawai, $gaji_pegawai);
        $this->tunjangan = $tunjangan;
     }

     //polimorfisme dengan overrading / menajaga karakteristik
     public function hitungGaji()
     {
        //ambil gaji pokok dari parent lalu tambahkan tunjagan
        return parent ::hitungGaji() + $this->tunjangan;
     }
     }
     
     //buat fungsi untuk melihat hasil penerapan polimorfisme
      function cetakGaji(pegawai $pegawai) {
        echo "Gaji" . $pegawai->getNama(). ": Rp" .
        number_format($pegawai->hitungGaji(),0 , ',','.'). "<br>";
      }

      //penggunaan class dan fungsi
      $pegawaiBiasa = new pegawai("chiko", 3000000);
      $pegawaiFreelance = new freelancer("Miguel", 2000000, 4);
      $pegawaiTetap = new karyawantetap("james", 5000000, 2000000);

      cetakGaji($pegawaiBiasa);
      cetakGaji($pegawaiFreelance);
      cetakGaji($pegawaiTetap);
?>