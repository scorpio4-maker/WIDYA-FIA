<?php

interface cetakable{
    public function tampilkanCetak(): void;
}

//kelas laporansiswa
class laporansiswa implements cetakable{
    private string $namaSiswa;
    private string $kelas;

    public function __construct(string $nama, string $kelas){
        $this->namaSiswa = $nama;
        $this->kelas = $kelas;
    }

    //wajib menjalankan kontrak implements interface
    //yaitu membuat isi method/fungsi tampilcetak()
    public function tampilkanCetak(): void
    {
        echo "<div style=
        'border:1px solid green;
        padding: 10px;
        margin-bottom: 10px;'>";

        echo "<h3> Cetak Dokumen: Rapor Siswa </h3>";
        echo "Nama: {$this->namaSiswa} | kelas: {$this->kelas}";
        echo "</div>";
    }
}

class laporanguru implements cetakable{
    private string $namaGuru;
    private string $mataPelajaran;

    public function __construct(string $nama, string $mapel)
    {
        $this->namaGuru = $nama;
        $this->mataPelajaran = $mapel;
    }

    public function tampilkanCetak(): void
    {
        echo "<div style='
        border: 1px solid blue;
        padding: 10px;
        margin-bottom: 10px;
        '>";

        echo "<h3> Cetak Dokumen: Jadwal / Data Guru </h3>";
        echo "Nama Guru: {$this->namaGuru} |
              mata pelajaran: {$this->mataPelajaran}";
        echo "</div>";
    }
}

class CetakManager{
    public static function prosesCetak(Cetakable $dokumen): void
    {
        $dokumen->tampilkanCetak();
    }
}

echo "<h2>Daftar Cetak Dokumen Sekolah</h2>";

$siswa1 = new laporansiswa("ahmad naruto", "XI RPL 4");
$siswa2 = new laporansiswa("sakura lestari", "XI RPL 5");
$siswa3= new laporansiswa("alfiya riski", "XI RPL 1");
$siswa4 = new laporansiswa("widya", "XI RPL 3");
$guru1 = new laporanguru("pak jerry, S.pd", "matematika");

CetakManager::prosesCetak($siswa1);
CetakManager::prosesCetak($siswa2);
CetakManager::prosesCetak($siswa3);
CetakManager::prosesCetak($siswa4);
CetakManager::prosesCetak($guru1);

?>