<?php
$s = 2;
switch ($s) {
    case 1:
        print("Валера");//* 1-й вариант прерывается и-за оператора break. Все остальные выводятся на экран..
        break;
    case 2:
        print("Павлик");
    case 3:
        print("youtube");
    default: print("По умолчанию");
}
?>
