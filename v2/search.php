<?php

    // Pobierz dane z formularza
    $searchName = $_POST['searchName'];
    $phrases = $_POST['phrases'];
    $sumowanie = $_POST['sumowanie'];

    // Zmodyfikuj dane, jeśli to konieczne
    $searchName = strtolower($searchName);

    // Zapisz dane do pliku
    $fp = fopen("data.py", "w");
    fwrite($fp, "searchName = '$searchName'\n");
    fwrite($fp, "phrases = '$phrases'\n");
    fwrite($fp, "sumowanie = $sumowanie\n");
    fclose($fp);

    header('Location: http://localhost:8080/search-and-analitycs-platform/v2/');

?>