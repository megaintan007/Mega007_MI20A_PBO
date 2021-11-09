<?php

class RerataNilai {
    protected $value, $value2;
    public function __construct($value, $value2){
        $this->value = $value;
        $this->value2 = $value2;
    }

    public function average($value3 = 0){
        if ($value3 == 0) {
            $str = $this->value . ' + ' . $this->value2 . ' / 2 = ';
            return $str . ($this->value += $this->value2 ) / 2;

        } else {
            $str ='(' . $this->value . ' + ' . $this->value2 . ' + ' . $this->value2 . ') / 3 = ';
            return $str . ($this->value += $this->value2 += $value3 ) / 3;
        }
    }
}


class RerataNilai2 extends RerataNilai{
    public function __construct($value, $value2){
        parent::__construct($value, $value2);
    }

    public function average($value3 = 0){
        return parent::average($value3);
    }
}

?>

<html lang="en">
<head>
    <link rel="stylesheet" href="No 2.css">
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h4>Soal No 2</h4>
<div class="form">
    <h3>MENGHITUNG RATA-RATA NILAI</h3>
    <form action="" method="post">
        <label>Masukkan nilai : </label>
        <input type="number" name="input1" placeholder="input nilai 1">
        <br>
        <label>Masukkan nilai : </label>
        <input type="number" name="input2" placeholder="input nilai 2">
        <br>
        <label>Masukkan nilai : </label>
        <input type="number" name="input3" placeholder="input nilai 3">
        <br>
        <button type="submit" name="submit">Hitung</button>
    </form>
</div>

    <?php 
        if (isset($_POST['submit'])) {
            if (!$_POST['input3']) {
                $value1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                echo $value1->average(0);
            } else {
                $value1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                echo $value1->average($_POST['input3']);
            }
        }
    ?>
</div>
</body>
</html>

