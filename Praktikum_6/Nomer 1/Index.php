<!-- Nama   : Mega Intan Pratiwi -->
<!-- NIM    : 20051397007 -->
<!-- Kelas  : 2020A - D4 Manajemen Informatika -->
<!-- Praktikum 6 -->

<?php 
    require_once 'No 1.php';
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
                <h4 class="text-center">Soal 1</h4>
                <?= $truck->getMaxLoad(); ?> <br>
                <?= $truck->addBox(3000); ?> <br>
                <?= $truck->addBox(1000); ?> <br>
                <?= $truck->addBox(6000); ?> <br>
                <?= $truck->addBox(8000); ?> <br>
                <?php 
                echo "Butuh Bahan Bakar " . $truck->calcFuelNeeds() . ' Liter'. '<br>';
                ?>
                <br>
                <?= $riverBarge->addBox(3000); ?> <br>
                <?= $riverBarge->addBox(1000); ?> <br>
                <?= $riverBarge->addBox(6000); ?> <br>
                <?= $riverBarge->addBox(8000); ?> <br>
                <?= $riverBarge->addBox(9000); ?> <br>
                <?php 
                echo 'Maksimal muatan Perahu ' . $riverBarge->getMaxLoad() . '<br>';
                echo "Butuh Bahan Bakar " . $riverBarge->calcFuelNeeds() . ' Liter';
                ?>
            </div>
        </div>
    </div>
</body>

</html>