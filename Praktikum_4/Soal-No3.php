<?php
class Katak {
    public $umur, $nama;

    public function __construct($umur, $nama)
    {
        $this->umur = $umur;
        $this->nama = $nama;
        
    }
    public function getCaraBergerak()
    {
        return 'Melompat';
    }
    public function getUmur()
    {
        return $this->umur;
    }
    public function getNama()
    {
        return $this->nama;
    }

}

class Kecebong extends Katak {
    private $panjangEkor;

    public function panjangEkor($umur, $nama, $panjangEkor)
    {
        parent::__construct($umur, $nama);
        $this->panjangEkor = $panjangEkor;
    }
    public function getCaraBergerak()
    {
        return 'Berenang';
    }
    public function getPanjangEkor()
    {
        return $this->panjangEkor = 10;
    }
}


$katak = new Katak(5, 'Froggy');
$kecebong = new Kecebong(2, 'Junior Frog', 10);

?>

<html align="center">
    <title>Katak & Kecebong</title>

    <h4>Praktikum 4</h4>
    <h2>Tabel Data Karakteristik Obyek</h2>

<table align= "center" border="1" style="border-collapse: collapse;"
 width="90%" height="30%">
    <tr bgcolor="violet">
        <th>Obyek</th>
        <th>Umur</th>
        <th>Nama</th>
        <th>Panjang Ekor</th>
        <th>Cara Bergerak</th>
    </tr>

    <tr align="center">
        <td>01</td>
        <td><?= $katak->getUmur(); ?></td>
        <td><?= $katak->getNama(); ?></td>
        <td>-</td>
        <td><?= $katak->getCaraBergerak(); ?></td>
    </tr>

    <tr align="center">
        <td>02</td>
        <td><?= $kecebong->getUmur(); ?></td>
        <td><?= $kecebong->getNama(); ?></td>
        <td><?= $kecebong->getPanjangEkor()?></td>
        <td><?= $kecebong->getCaraBergerak(); ?></td>
    </tr>

</table>
</html>