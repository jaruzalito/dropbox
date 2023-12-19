<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Koszt przejazdu</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $koszt_benzyny = $_POST['koszt_benzyny'];
    $ilosc_kilometrow = $_POST['ilosc_kilometrow'];
    $srednie_spalanie = $_POST['srednie_spalanie'];
    if (is_numeric($koszt_benzyny) && is_numeric($srednie_spalanie)){
    $koszt_benzyny = floatval($_POST['koszt_benzyny']);
    $ilosc_kilometrow = intval($_POST['ilosc_kilometrow']);
    $srednie_spalanie = floatval($_POST['srednie_spalanie']);
    $koszt_przejazdu = ($ilosc_kilometrow / 100) * $srednie_spalanie * $koszt_benzyny;
        
    echo "<p>Koszt benzyny: ".number_format($koszt_benzyny,2,',','.')." PLN/l</p>";
    echo "<p>Ilość kilometrów: $ilosc_kilometrow km</p>";
    echo "<p>Średnie spalanie: ".number_format($srednie_spalanie,2,',','.')." l/100km</p>";
    echo "<p>Koszt przejazdu:".number_format($koszt_przejazdu,2,',','.')."PLN</p>";
    }   
    else{
        echo "Błąd! Wprowadź poprawne dane.<br>";
        echo "Dane muszą być liczba!!";
        echo '<a href="l9_2cw2.php">Powrót do formularza</a>';
        die;
    }
}
?>

</body>
</html>
