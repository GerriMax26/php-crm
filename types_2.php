<?php

    function getInt(int $variable): void
    {
        var_dump($variable);
    }

    getInt("10");

    /*
    С включенным strict_types = 1 код падает с ошибкой: 
    Fatal error: Uncaught TypeError: getInt(): Argument #1 ($variable) must be of type int, string given, 
    called in D:\php-crm\types_2.php on line 9 and defined in D:\php-crm\types_2.php:4
    Без declare(strict_types = 1); в консоль выведет int(10).
    */
?>