<?php
    $var_int = 10;
    $var_dooble = 10.1;
    $var_str = "10";
    $var_bool = true;
    $var_null = null;
    $var_arr = [
        0 => "first",
        1 => "second",
    ];

    var_dump($var_int);
    var_dump($var_dooble);
    var_dump($var_bool);
    var_dump($var_null);
    var_dump($var_arr);
    var_dump($var_str);
    //Потому что строка интерпретируется как число и при сложении получится 11
    var_dump("10"+1);
    //тоже даёт int(11), и перед этим предупреждение. Скрипт не останавливается. PHP берёт цифры с начала строки (10), на букве a останавливается и пишет warning.
    var_dump("10abc" + 1);
    //Срабатывает приведение типов и строка "1" становится числом 1
    var_dump(1 == "1");
    //Здесь идет строгое сравнение. Число не равно строке
    var_dump(1 === "1");

?>
