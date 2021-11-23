<!-- Nama   : Mega Intan Pratiwi -->
<!-- NIM    : 20051397007 -->
<!-- Kelas  : D4 Manajemen Informatika 2020 A -->
<!-- Praktikum 6 -->

<?php
require_once 'No 3.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Praktikum 6</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Praktikum 6</h2>
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center">Soal 3</h4>
                <?= $singa->eat(); ?> <br>
                <?= $manusia->eat(); ?> <br>
                <br>
                <?= $airplane2->getMaxLoad(); ?> <br>
                <?= $airplane2->addBox(5000); ?> <br>
                <?= $airplane2->addBox(7000); ?> <br>
                <?= $airplane2->addBox(3000); ?> <br>
                <?= $airplane2->addBox(2000); ?> <br>
                <?= $airplane2->calcFuelNeeds(); ?> <br>
                <?= $airplane2->takeOff(); ?> <br>
                <?= $airplane2->fly(); ?> <br>
                <?= $airplane2->land(); ?> <br>
                <br>
                <?= $superman2->eat(); ?> <br>
                <?= $superman2->land(); ?> <br>
                <?= $superman2->takeOff(); ?> <br>
                <?= $superman2->fly(); ?> <br>
                <?= $superman2->leapBuilding(); ?> <br>
                <?= $superman2->stopBullet(); ?> <br>
            </div>
        </div>
    </div>
</body>

</html>