<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вывод данных</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>
<body class="telo">

<form name="sort" id="vivod">
    <select name="sorting">
        <option name=""> --выберите категорию--</option>
        <option name="kat1" value="kat1">Категория 1</option>
        <option name="kat2" value="kat2">Категория 2</option>
        <option name="kat3" value="kat3">Категория 3</option>
    </select>
    <input type="submit" value="Отфильтровать">
    <br>
    <br>
    <?php include("vivod_sett.php"); ?>

</form>
