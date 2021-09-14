<!-- Mega Intan Pratiwi -->
<!-- NIM 20051397007 -->
<!-- D4 Manajemen Informatika -->
<!-- 2020 A -->

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<h2> Menentukan Bilangan : </h2>
<h4> A. Positif Genap </h4> <h4> B. Negatif Genap </h4>
<h4> C. Positif Ganjil </h4> <h4> D. Negatif Ganjil </h4>
<form method="post" action="">
    <input type="text" name="bilangan" placeholder="Masukkan Bilangan"> <input type="submit" name="submit" value="ENTER">
</form>

<br>
<?php
if(isset($_POST['submit']))
    {
        $bilangan = $_POST['bilangan'];
            if($bilangan > 0){
                echo $bilangan . " Merupakan Bilangan Positif ";
            } elseif ($bilangan < 0){
                echo $bilangan . " Merupakan Bilangan Negatif "; 
            }

            if ($bilangan % 2 == 0){
			    echo "dan Bilangan Genap"; //Kondisi true
		    }else {
			    echo "dan Bilangan Ganjil";
		    }
    }

    ?>

</body>
</html>