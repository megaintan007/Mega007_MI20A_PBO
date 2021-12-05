<?php

class Barang
{
       public $merk, $harga;

       public function __construct($merk,$harga)
       {
             $this->merk = $merk;
             $this->harga = $harga;
       } 
       public function getMerk()
       {
             return $this->merk;
       }
       public function getHarga()
       {
             return $this->harga;
       }
}

class Hp extends Barang
{
      private $kamera, $ukuranlayar;

      public function __construct($merk, $harga, $kamera, $ukuranlayar)
      {
            parent::__construct($merk, $harga);
            $this->kamera = $kamera;
            $this->ukuranlayar = $ukuranlayar;
      }
       public function hp()
       {
              return 'Merk : ' . $this->merk . '<br>Harga : ' . $this->harga .
               '<br>Kamera : ' . $this->kamera . '<br>Ukuran Layar : ' . $this->ukuranlayar;
       }
}

class Laptop extends Barang
{
      private $processor, $gcard;

      public function __construct($merk, $harga, $processor, $gcard)
      {
            parent::__construct($merk, $harga);
            $this->processor = $processor;
            $this->gcard = $gcard;
      }
      public function laptopGadget()
      {
              return 'Merk : ' . $this->merk . '<br>Harga : ' . $this->harga . '<br>Processor : ' 
              . $this->processor . '<br>Graphic Card : ' . $this->gcard;
      }
}

class Printer extends Barang
{
       private $berat, $resolusi, $speed;

       public function __construct($merk, $harga, $berat, $resolusi, $speed)
       {
              parent::__construct($merk, $harga);
              $this->berat = $berat;
              $this->resolusi = $resolusi;
              $this->speed = $speed;
       }
       public function printer()
       {
              return 'Merk : ' . $this->merk . '<br>Harga : ' . $this->harga .
               '<br>Berat : ' . $this->berat . 'kg' . '<br>Resolusi Layar : ' .
               $this->resolusi . '<br>Speed : ' . $this->speed;
       }
}

class Televisi extends Barang
{
       private $tipelayar, $tahunmodel;

       public function __construct($merk, $harga, $tipelayar, $tahunmodel)
       {
              parent::__construct($merk, $harga);
              $this->tipelayar = $tipelayar;
              $this->tahunmodel = $tahunmodel;
       }
       public function televisi()
       {
              return 'Merk : ' . $this->merk . '<br>Harga : ' . $this->harga . 
              '<br>Tipe Layar : ' . $this->tipelayar . '<br>Tahun Model : ' .
              $this->tahunmodel;
       }
}

$hp1 = new Hp('Apple', 'Rp. 11.500.000', 16, 6);
$laptop1 = new Laptop('Lenovo', 'Rp. 20.000.000', 'core i5', 'nvidia');
$printer1 = new Printer('Epson', 'Rp. 2.000.000', 6 , '1440 x 720 dpi', '48 ppm');
$televisi1 = new Televisi('Polytron', 'Rp. 5.000.000', 'LCD', 2019);
