<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kalkulator kosztu przejazdu</title>
</head>
<body>
  <form action="koszt.php" method="post">
    <label for="koszt_benzyny">Koszt benzyny (PLN/l):</label><br>
    <input type="text" id="koszt_benzyny" name="koszt_benzyny"><br>

    <label for="ilosc_kilometrow">Ilość kilometrów:</label><br>
    <input type="number" id="ilosc_kilometrow" name="ilosc_kilometrow"><br>

    <label for="srednie_spalanie">Średnie spalanie (l/100km):</label><br>
    <input type="text" id="srednie_spalanie" name="srednie_spalanie"><br>

    <input type="submit" value="Oblicz koszt">
  </form>
</body>
</html>
