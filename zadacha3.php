<?php
if (!empty($_REQUEST['dannue']) or !empty($_REQUEST['sorting'])) {
    if (($red = fopen("sort_file.txt", "r")) !== false) {
        $arr1 = $arr2 = $arr = [];
        $i = 0;
        while (($data = fgetcsv($red, 1000, ",")) !== false) {
            $num = count($data);
            for ($c = 0; $c < $num; $c++) {
                $arr1[$c] = $data[$c];
            }
            $arr2[$i] = $data;
            $i++;
        }
    }
    if ($_REQUEST['sorting'] == 'ASC') {
        sort($arr2);
        if ($_REQUEST['dannue'] == 'name-first') {
            foreach ($arr2 as $value) {
                echo '<br> Фамилия:' . $value[0] . '<br> Имя: ' . $value[1] . '<br> Должность: ' . $value[2] . '<br>';
                echo '<br>';
            }
        } else {
            foreach ($arr2 as $value) {
                echo '<br> Имя: ' . $value[1] . '<br> Фамилия: ' . $value[0] . '<br> Должность: ' . $value[2] . '<br>';
                echo '<br>';
            }
        }
    } elseif ($_REQUEST['sorting'] == 'DESC') {
        rsort($arr2);
        if ($_REQUEST['dannue'] == 'name-first') {
            foreach ($arr2 as $value) {
                echo '<br> Фамилия:' . $value[0] . '<br> Имя: ' . $value[1] . '<br> Должность: ' . $value[2] . '<br>';
                echo '<br>';
            }
        } else {
            foreach ($arr2 as $value) {
                echo '<br> Имя: ' . $value[1] . '<br> Фамилия: ' . $value[0] . '<br> Должность: ' . $value[2] . '<br>';
                echo '<br>';
            }
        }
    }
}
?>

<form>
    <select name='sorting'>
        <option value=""> --Выбрать--</option>
        <option value='ASC'>По возрастанию</option>
        <option value='DESC'>По убыванию</option>
    </select>
    <select name='dannue'>
        <option value=""> --Выбрать--</option>
        <option value='name-first'>Фамилия Имя</option>
        <option value='name-last'>Имя Фамилия</option>
    </select>
    <input type="submit" value="Сортировать"/>
</form>
