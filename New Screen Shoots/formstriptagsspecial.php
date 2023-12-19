<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $error_nick='';
    $error_kom='';
    $nick = '';
    $kom = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['nick'])) {
            $error_nick = "Należy podać nick!";
        }
        if (empty($_POST['komentarz'])) {
            $error_kom = "Należy uzupełnić pole komentarz";
        }
    }
?>
<form action="" method="post">
        <input type="text" name="nick" value="<?php echo $nick; ?>" placeholder="Podaj nick" autofocus><p><?php echo $error_nick; ?></p><br>
        <textarea name="komentarz" placeholder="Podaj komentarz..."><?php echo $kom; ?></textarea><p><?php echo $error_kom; ?></p>
        <input type="submit" name="submit" value="submit">
        <br><br>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error_nick) && empty($error_kom)) {
        $nick = $_POST['nick'];
        $kom = $_POST['komentarz'];
        echo "<p>Nick:</p>";
        echo '<p>'.strip_tags($nick).'</p><br>';
        echo "<p>Komentarz (z zastosowaniem HTML):</p>";
        echo "<p>".$kom."</p><br>";
        echo "<p>Komentarz (z opisem znacznikow HTML):</p>";
        echo "<p>" . htmlspecialchars($kom) . "</p>";
    }
    ?>
</body>
</html>