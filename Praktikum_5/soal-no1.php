<!--- MEGA INTAN PRATIWI - 20051397007 - D4 MANAJEMEN INFORMATIKA 2020A --->

<?php
class Pegawai
{
       public $nama;
       public function __construct($nama)
       {
              $this->nama = $nama;
       }
       public function getNama()
       {
              return $this->nama;
       }
}
class Manajer extends Pegawai
{
       public $tunjangan;
       public function __construct($nama, $tunjangan)
       {
              parent::__construct($nama);
              $this->tunjangan = $tunjangan;
       }
       public function getTunjangan()
       {
              return $this->tunjangan;
       }
}
class Kurir extends Pegawai
{
       public $gaji;

       public function __construct($nama, $gaji)
       {
              parent::__construct($nama);

              $this->gaji = $gaji;
       }
       public function getGaji()
       {
              return $this->gaji;
       }
}

class Soal1
{
       public static
       function Proses($peg)
       {
              if ($peg instanceof Manajer) {
                     $man = $peg;
                     echo "Nama manajer: " . $man->nama, "\n";
                     echo "<br> Tunjangan: Rp. " . strval($man->tunjangan), "\n";
              } else if ($peg instanceof Kurir) {
                     $kur =  $peg;
                     echo "<br> Nama kurir: " . $kur->nama, "\n";
                     echo "<br> Gaji: Rp. " . strval($kur->gaji), "\n";
              }
       }
       public static
       function main($args)
       {
              echo "GAJI PEGAWAI";
              echo "<br> <br>";
              $peg1 = new Manajer("Andreas", 15000000);
              Soal1::Proses($peg1);
              echo "<br>";
              $peg2 = new Kurir("Alexander", 3000000);
              Soal1::Proses($peg2);
       }
}
Soal1::main(array());
