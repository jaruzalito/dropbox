<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabliczka mnożenia</title>
    <style>
        table,td,th,tr{
            border-collapse:collapse;
            text-align: center;
        }
        table{
            width: 500px;
            height: 400px;
        }
    </style>
</head>
<body>
<?php
    $a_err='';
    $b_err= '';
    
    if (isset($_POST["submit"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];

        if ($a<0) {
            $a_err="podana liczba musi być a>=0";
        } else  if ($b<0) {
            $b_err="podana liczba musi być b>=0";
        }else if( $b<$a){
            echo "Początek nie może być mniejszy od konca";
        }
         else {
            echo "<p>Tabliczka mnożenia od $a*$a do $b*$b:</p>";
            echo "<table border='1'>";
            echo "<td>*";
            for ($i=$a; $i <= $b; $i++) {
                echo "<td><b>$i";
            }
            for ($i = $a; $i <= $b; $i++) {
                echo "<tr><td><b>$i";
                for ($j = $a; $j <= $b; $j++) {
                    echo "<td>".$i * $j."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
    <h2>Tabliczka mnożenia</h2>
    <form action="" method="post">
        <label for="a">Podaj liczbe początkowa: </label>
        <input type="number" name="a" required>
        <?php echo $a_err;?>
        <br>
        <label for="b">Podaj liczbe koncową: </label>
        <input type="number" name="b" required>
        <?php echo $b_err;?>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
