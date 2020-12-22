<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', '/var/log/minha-aplicacao');
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso !" .PHP_EOL;
            break;
        case E_NOTICE:
            echo "Perigo !" .PHP_EOL;
            break;
    }
});

echo $variavel;
echo $array[12];
echo CONSTANTE .PHP_EOL;


