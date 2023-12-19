<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logowanie</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = cleanInput($_POST['login']);
    $password = cleanInput($_POST['password']);
    $remember = isset($_POST['remember']) ? "Zaznaczono" : "Nie zaznaczono";

    if (empty($login) || empty($password)) {
        echo "Login i hasło są wymagane.";
    } else {
        $hashed_password = sha1($password);

        echo "<p>Login: $login</p>";
        echo "<p>Hasło (zahaszowane): $hashed_password</p>";
        echo "<p>Zapamiętaj mnie: $remember</p>";
    }
} else {
    header("Location: l9_2cw4.php");
    exit();
}

function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>
</html>
