<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $p_err='';

        if(isset($_POST['submit'])){
            $p=$_POST['poziomy'];
            $znak=$_POST['znak'];
            if(!is_numeric($p)){
                $p_err = 'Ilosc poziomów musi byc podana jako liczba';
            }else if(empty($p)){
                $p_err='Nie moze być puste';
            }else if($p<0){
                $p_err= 'Ilośc poziomów nie moze byc ujemna';
            }
            else{
                $p=intval($p);
                Echo "Wybrales: ".$p." poziomów znaku ".$znak."<br><br>";
                for ($i= 1;$i<=$p;$i++){
                    for ($j = 1; $j <= $i; $j++) {
                        echo $znak;
                    }
                    echo "<br>";
            }
        }
    }
    ?>
    <h1>Piramida znaków</h1>
    <form action="" method="post">
    <label for="znak">Wybierz Znak
    <select name="znak" required>
        <option value="*">*</option>
        <option value="$">$</option>
        <option value="@">@</option>
        <option value="#">#</option>
        <option value="^">^</option>
        <option value="%">%</option>
    </select>
    </label>
    <label for="poziomy">
        <input type="text" name="poziomy">
    </label>
    <?php echo $p_err;?>
    <input type="submit" name="submit" value="potwierdz">
    
    <?php
    
    ?>
</body>
</html>