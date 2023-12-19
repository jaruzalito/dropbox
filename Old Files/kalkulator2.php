<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Podaj w pola liczby z zakresu -100 do 100 i wybierz opierator</h1>
    <form  method = "post" class="form">
        <label for = "a"> Podaj 1 liczbę: </label> <br><br>
        <input type = "number" name = "a" id = "a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : '' ?>"> <br><br>
        <label for = "b"> Podaj 2 liczbę: </label> <br><br>
        <input type = "number" name = "b"  id = "b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : '' ?>"> <br><br>
        <input type = "radio" name = "zm"  value = "+" id = "+"> + <br>
        <input type = "radio" name = "zm"  value = "-" id = "-"> - <br>
        <input type = "radio" name = "zm"  value = "*" id = "*"> * <br>
        <input type = "radio" name = "zm"  value = "/" id = "/"> / <br>
        <input type = "submit" name = "send"  value = "Wykonaj">

        <?php
            $a='';
            $b='';
            echo '<br>';
            if (isset($_POST["send"]))
            {
                    $a=$_POST["a"];
                    $b=$_POST["b"];
                    $zm=$_POST["zm"];
                    if(is_numeric($a)&&is_numeric($b)){
                        $a=floatval($a);
                        $b=floatval($b);
                        if($a<-100||$a>100||$b<-100||$b>100){
                            echo "Liczby musza należeć do zakresu <-100;100>";
                            die;
                        }

                        switch($zm){
                            case '+':
                                $result = $a + $b;
                                echo "Wybrane liczby: $a i $b<br>";
                                echo "<b>$a+$b=$result</b>";
                                break;
                            case '-':
                                $result = $a - $b;
                                echo "Wybrane liczby: $a i $b<br>";
                                echo "<b>$a-$b=$result</b>";
                                break;
                            case '*':
                                $result = $a * $b;
                                echo "Wybrane liczby: $a i $b<br>";
                                echo "<b>$a*$b=$result</b>";
                                break;
                            case '/':
                                if ($b != 0) {
                                    $result = $a / $b;
                                    echo "Wybrane liczby: $a i $b<br>";
                                echo "<b>$a/$b=$result</b>";
                                } else {
                                    echo 'Nie można dzielić przez 0';
                                }
                                break;
                                default:
                                echo 'Nieprawidłowy operator';
                                break;

                        }
                    }else{
                        echo 'nieprawidlowe dane';
                }
        }
        ?>


    
</body>
</html>