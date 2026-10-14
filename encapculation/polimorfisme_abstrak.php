<?php
abstract class NotifikasiWeb{
    protected string $penerima;
    protected string $pesan;

    public function __construct (string $penerima, string $pesan)
    {
    $this->penerima = $penerima;
    $this->pesan = $pesan;
    }
    //method biasa yang bisa diwariskan dan 
    //digunakan langsung oleh kelas turunan nya
    public function getInfoPengiriman(): string{
       return "mengirim ke: {$this->penerima}";

    }

    //abstract method: kontrak wajib yang harus di-override
    //oleh kelas turunannya
     public abstract function kirimNotifikasi(): void;
}


//kelas turunan 1: notifikasi via email
class NotifEmail extends NotifikasiWeb{
    private string $subjek;

//wajib meng-overide astract method dari parent class
 
    public function __construct(string $penerima, string $pesan, string $subjek)
    {
        parent:: __construct($penerima, $pesan,);
        $this->subjek = $subjek;
    }

    public function kirimNotifikasi(): void
    {
        echo "<div style='border: 2px solid #007bff;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #f0f0f0;'
        >";

        echo "<h4>[EMAIL] - Subjek: {$this->subjek}</h4>";
        echo "<p>{$this->getInfoPengiriman()}</p>";
        echo "<p>Isi pesan: <i>{$this->pesan}</i></p>";
        echo "</div>";
    }
}


//kelas turunan 2: Notifikasi via WhatsApp
//class NotifWA
class NotifWA extends Notifikasiweb{
    //wajin override abstact method dari parent
        public function kirimNotifikasi(): void
        {
            echo"<div style='botder:2px solid #28a745;
                              padding: 10px;
                              margin-bottom:10px;
                              backgroun-color: #e8f5e9;
                              '>";

           echo"<h4>[whatsApp MESAGE]</h4>";
           echo"<p>{$this->getInfoPengiriman()}</p>";
           echo"<p?>pesan: <i>{$this->pesan}</i></p>";
           echo "/<div>";          
        }
}
   
   //kelas turunan 3: NotifikasiBroser
    class notifBrowser extends Notifikasiweb{
      private string $browserApp;

      public function __construct(string $penerima, string $pesan, string $browserApp)
      {
         parent:: __construct($penerima, $pesan);
         $this->browserApp = $browserApp;
      }

      //wajib ovveride abstract method dari parend
      public function kirimNotifikasi(): void
      {
         echo "<div style= 'broder:1px solid #effc107;
         padding: 10px; margin-bottom: 10px;
         background-color:#fff3cd;'>";

         echo "<h4>[PUSH NOTIF] - Browser: {$this->browserApp}</h4>";
         echo "<p>{$this->getInfoPengiriman()}</p>";
         echo "<p>Notif: <i>{$this->pesan}</i></p>";
         echo "</div>";
      }
    }   

    //buat class manager untuk menerapkan polimorfisme
    class NotifManager{
      //menerima tipe data berdasarkan abstract class
      // apapun objeknya, asalkan turunan notifikasiweb, bisa masuk
      public static function prosesKirim(notifikasiWeb $notif): void{
         $notif->kirimNotifikasi();
      }
    }

    //pengguna instansi objek
    echo "<h2>Dashbord simulasi pengiriman Notifikasi web</h2>";

    //membuat berbagai macam objek
    $notif1 = new NotifEmail ("Steve@gmail.com","Akun anda behasil didaftarkan.", "konfirmasi Akun");
    $notif2 = new NotifWA("085877846734", "kode OTP anda adalah 987 jangan berikan ke siapa pun!");
    $notif3 = new notifBrowser("Token_Device_Asus","Ada diskon 40% untuk produk pilihan anda!","Gogle Chrome");

    //mengirimkan dan menampilkan semua nofit secara polimorfisme melalui manager
    NotifManager::prosesKirim($notif1);
    NotifManager::prosesKirim($notif2);
    NotifManager::prosesKirim($notif3);
    
?>