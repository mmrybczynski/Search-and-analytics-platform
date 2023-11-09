<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method="post">
        <input type="text" id="searchName" name="searchName"/>
        <input type="file" id="phrases" name="phrases"/>
        <input type="checkbox" id="sumowanie" name="sumowanie"/>
        <input type="submit" value="Wyślij"/>
    </form>
        
    <?php

    // Pobierz wynik z pliku Python
    $wynik = exec("python data.py");

    // Wyświetl wynik na stronie internetowej
    echo $wynik;

    ?>
</body>
</html>