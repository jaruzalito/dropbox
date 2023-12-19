<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Podaj swoje imie">
        <br>
        <label>Marka samochodu:</label><br>
        <input type="radio" name="marka" id="honda" value="Honda">
        <label for="honda">Honda</label><br>
        
        <input type="radio" name="marka" id="bmw" value="BMW">
        <label for="bmw">BMW</label><br>
        
        
        <input type="radio" name="marka" id="mercedes" value="Mercedes">
        <label for="mercedes">Mercedes</label><br>
        
        
        <input type="submit" value="Wyświetl Zdjęcia" name="send">
        <?php
        $imie = '';
        $marka = '';

        if(isset($_POST['send'])){
            $imie = isset($_POST['name']) ? $_POST['name'] : '';
            $marka = isset($_POST['marka']) ? $_POST['marka'] : '';

            if(empty($imie) || empty($marka)){
                echo "Podaj imie i wybierz marke";
            }
            else{
                $file = "obrazki/";

                if(is_dir($file)){
                    if($marka == "Honda"){
                        echo "$imie wybrałeś markę: $marka <br>";
                        echo "<img src=\"obrazki/hunda.jfif\">";
                    }
                    if($marka == "BMW"){
                        echo "$imie wybrałeś markę: $marka <br>";
                        echo "<img src=\"obrazki/bmw.jpg\">";
                    }
                    if($marka == "Mercedes"){
                        echo "$imie wybrałeś markę: $marka <br>";
                        echo "<img src=\"obrazki/mercedes.jpg\">";
                    }
                }
                else{
                    echo "Brak zdjęć dla wybranej marki samochodu";
                }
            }
        }
    ?>
    </form>
</body>
</html>