<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz Testu</title>
</head>
<body>

<?php

$nazwisko = $imie = $email = $pytanie1 = $pytanie2 = $pytanie3 = '';
$wynik = 0;

function oczyscDane($dane) {
    $dane = trim($dane);
    $dane = stripslashes($dane);
    $dane = htmlspecialchars($dane);
    return $dane;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nazwisko = oczyscDane($_POST["nazwisko"]);
    $imie = oczyscDane($_POST["imie"]);
    $email = oczyscDane($_POST["email"]);
    $pytanie1 = oczyscDane($_POST["pytanie1"]);
    $pytanie2 = oczyscDane($_POST["pytanie2"]);
    $pytanie3 = isset($_POST["pytanie3"]) ? $_POST["pytanie3"] : [];

    /*
    $wyr_reg='/[a-zA-Z0-9_.]+@[a-zA-Z0-9-]+.([a-z]){2,3}/';
    if(preg_match($wyr_reg, $email))
    {
    //wpisano poprawnie
    }
    else
    {
    //wpisano niepoprawnie
    }
    */


    if (empty($nazwisko) || empty($imie) || empty($email) || empty($pytanie1) || empty($pytanie2) || empty($pytanie3)) {
        echo "Wypełnij wszystkie pola formularza.";
    } else {
        if (!preg_match("/^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*$/", $nazwisko) || !preg_match("/^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*$/", $imie)) {
            echo "Błędne dane personalne.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Błędny adres email.";
        } else {
            if ($pytanie1 == "opcja1") {
                $wynik += 1;
            }
            if ($pytanie2 == "opcja2") {
                $wynik += 1;
            }
            $wynik += count($pytanie3);

            echo "<p>Imię: $imie</p>";
            echo "<p>Nazwisko: $nazwisko</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Wynik: $wynik punktów</p>";
        }
    }
}
?>

<form method="post" action="">
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" name="nazwisko" required><br>

    <label for="imie">Imię:</label>
    <input type="text" name="imie" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="pytanie1">Pytanie 1:</label>
    <select name="pytanie1" required>
        <option value="opcja1">Opcja 1</option>
        <option value="opcja2">Opcja 2</option>
        <option value="opcja3">Opcja 3</option>
    </select><br>

    <label for="pytanie2">Pytanie 2:</label>
    <input type="radio" name="pytanie2" value="opcja1" required> Opcja 1
    <input type="radio" name="pytanie2" value="opcja2"> Opcja 2
    <input type="radio" name="pytanie2" value="opcja3"> Opcja 3<br>

    <label for="pytanie3">Pytanie 3:</label>
    <input type="checkbox" name="pytanie3[]" value="opcja1"> Opcja 1
    <input type="checkbox" name="pytanie3[]" value="opcja2"> Opcja 2
    <input type="checkbox" name="pytanie3[]" value="opcja3"> Opcja 3<br>

    <input type="submit" value="Prześlij">
</form>

</body>
</html>
