<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Równanie Kwadratowe</title>
</head>
<body>
    <h2>Obliczanie Równania Kwadratowego</h2>

    <form method="post">
        <label for="a">Podaj współczynnik a:</label>
        <input type="text" name="a" id="a" step="any" required>
        <br>

        <label for="b">Podaj współczynnik b:</label>
        <input type="text" name="b" id="b" step="any" required>
        <br>

        <label for="c">Podaj współczynnik c:</label>
        <input type="text" name="c" id="c" step="any" required>
        <br>

        <input type="submit" name="calculate" value="Oblicz">
    </form>

    <?php
    if (isset($_POST["calculate"])) {
        $a = isset($_POST["a"]) ? $_POST["a"] : '';
        $b = isset($_POST["b"]) ? $_POST["b"] : '';
        $c = isset($_POST["c"]) ? $_POST["c"] : '';

        if (empty($a) || empty($b) || empty($c)) {
            echo '<p>Wprowadź wszystkie współczynniki.</p>';
        }else if(!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
            echo "<p>Wybrane współczynniki: a = ".$a."  b = ".$b." c = ".$c."</p>";
            echo '<p>Wspołczynniki musza byc liczba';
        }
        else {
            $delta = $b ** 2 - (4 * $a * $c);

            echo "<p>Wybrane współczynniki: a = ".number_format($a,2,',','.')."  b = ".number_format($b,2,',','.')." c = ".number_format($c,2,',','.')."</p>";
            echo "<p>Delta wynosi: ".number_format($delta,2,',','.')."</p>";

            if ($delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                echo "<p>Rozwiązania równania kwadratowego to: x1 = " . number_format($x1, 2,',','.') . ", x2 = " . number_format($x2, 2,',','.') . ".</p>";
            } elseif ($delta == 0) {
                $x = -$b / (2 * $a);

                echo "<p>Równanie ma jedno rozwiązanie: x = " . number_format($x, 2,',','.') . ".</p>";
            } else {
                echo "<p>Równanie kwadratowe nie ma rozwiązań rzeczywistych.</p>";
            }
        }
    }
    ?>
</body>
</html>
