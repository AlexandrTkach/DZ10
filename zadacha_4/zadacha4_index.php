<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Заполнение формы!</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<h2 align="center" style="color: green">Заполните форму</h2>
<form align="center" action="zadacha4_sett.php" method="post">
    <input type="text" name="vopros" placeholder="Введите вопрос" autofocus><br><br>
    <input type="text" name="otvet" placeholder="Введите ответ" '<br><br>

    <select name="sorting" style="select">
        <option name=""> --выберите категорию--</option>
        <option name="kat1">Категория 1</option>
        <option name="kat2">Категория 2</option>
        <option name="kat3">Категория 3</option>
    </select>
    <input type="submit" name="sub" value="Отправить" style="sub">
    <input type="reset" value="Очистить">
    <img src="php.png" alt="пхп слоник" align="center" width="160"
         height="130" style=" border: 20px solid #ffffff;"/>
</form>
<marquee behavior="alternate" direction="right">Изучаем ПХП!</marquee>
</body>
</html>

