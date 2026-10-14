<?php
class person {
    private string $nama;
    private string $alamat;

    public function __construct(string $nama,string $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }
    public function  tampilkaninfo(): void{
        echo "Nama : ". $this->nama . "<br>";   
        echo "Alamat : " . $this->alamat . "<br>";
        }
        //Getter untuk diakses subclass karena private 
        public function GetNama(): string{
            return $this->nama;
        }
        public function GetAlamat(): string{
            return $this->alamat;
        }
}

?>