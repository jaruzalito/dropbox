<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logowanie</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    form {
      max-width: 300px;
      margin: 0 auto;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="password"],
    input[type="checkbox"],
    input[type="submit"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
  <form action="login.php" method="post">
    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required><br>

    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[A-Za-z])(?=.*\W).{7,}" required>
    <!-- Minimum 7 znaków, przynajmniej jedna cyfra, jedna litera i jeden znak specjalny --><br>

    <label for="remember">Zapamiętaj mnie:</label>
    <input type="checkbox" id="remember" name="remember"><br>

    <input type="submit" value="Zaloguj">
  </form>
</body>
</html>
