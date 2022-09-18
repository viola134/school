<?php
$n = rand(1,12);
echo($n);
switch ($n){
    case 1: echo"Учим буквы"; break;
    case 2: echo"Учим таблицу умножения"; break;
    case 3: echo"Учимся считать в столбик"; break;
    case 4: echo"Готовимся к ДПА"; break;
    case 5: echo"Учим дроби"; break;
    case 6: echo"Учим модули"; break;
    case 7: echo"Начинаем учить химию"; break;
    case 8: echo"Учим квадратные уравнения"; break;
    case 9: echo"Готовимся в ДПА"; break;
    case 10: echo"Готовимся к ЗНО"; break;
    case 11: echo"Вы все выучили"; break;
    default: echo "Такого класса нет";
}
