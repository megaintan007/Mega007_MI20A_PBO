<?php
 require_once 'class.php';
?>

<html align="center">
    <title>Tabel Data Obyek</title>

    <h4>Praktikum 3</h4>
    <h2>Tabel Data Obyek</h2>

<table align= "center" border="1" style="border-collapse: collapse;"
 width="75%" height="41%">
    <tr bgcolor="pink">
        <th>Obyek</th>
        <th>Jumlah Roda</th>
        <th>Warna</th>
        <th>Bahan bakar</th>
        <th>Kapasitas Mesin</th>
        <th>Muatan Maks</th>
        <th>Tarif Awal</th>
        <th>Tarif Per Km</th>
        <th>Jumlah Sadel</th>
        <th>Jumlah Gir</th>
    </tr>

    <tr align="center">
        <td>Truk1</td>
        <td><?= $truk1->getjmlRoda(); ?></td>
        <td><?= $truk1->getWarna(); ?></td>
        <td><?= $truk1->getBahanBakar(); ?></td>
        <td><?= $truk1->getKapasitasMesin(); ?></td>
        <td><?= $truk1->getMuatanMaks();?></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>

    <tr align="center">
        <td>Truk2</td>
        <td><?= $truk2->getjmlRoda(); ?></td>
        <td><?= $truk2->getWarna(); ?></td>
        <td><?= $truk2->getBahanBakar(); ?></td>
        <td><?= $truk2->getKapasitasMesin(); ?></td>
        <td><?= $truk2->getMuatanMaks(); ?></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>

    <tr align="center">
        <td>Taksi1</td>
        <td><?= $taksi1->getjmlRoda(); ?></td>
        <td><?= $taksi1->getWarna(); ?></td>
        <td><?= $taksi1->getBahanBakar(); ?></td>
        <td><?= $taksi1->getKapasitasMesin(); ?></td>
        <td>-</td>
        <td><?= $taksi1->getTarifAwal(); ?></td>
        <td><?= $taksi1->getTarifPerKm(); ?></td>
        <td>-</td>
        <td>-</td>
    </tr>

    <tr align="center">
        <td>Taksi2</td>
        <td><?= $taksi2->getjmlRoda(); ?></td>
        <td><?= $taksi2->getWarna(); ?></td>
        <td><?= $taksi2->getBahanBakar(); ?></td>
        <td><?= $taksi2->getKapasitasMesin(); ?></td>
        <td>-</td>
        <td><?= $taksi2->getTarifAwal(); ?></td>
        <td><?= $taksi2->getTarifPerKm(); ?></td>
        <td>-</td>
        <td>-</td>
    </tr>

    <tr align="center">
        <td>Sepeda1</td>
        <td><?= $sepeda1->getjmlRoda(); ?></td>
        <td><?= $sepeda1->getWarna(); ?></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><?= $sepeda1->getJmlSadel(); ?></td>
        <td><?= $sepeda1->getJmlGir(); ?></td>
    </tr>

    <tr align="center">
        <td>Sepeda2</td>
        <td><?= $sepeda2->getjmlRoda(); ?></td>
        <td><?= $sepeda2->getWarna(); ?></td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><?= $sepeda2->getJmlSadel(); ?></td>
        <td><?= $sepeda2->getJmlGir(); ?></td>
    </tr>

</table>
</html>


