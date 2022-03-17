<?php
//CONSTANT DO SISTEMA   
    #Caminhos Absolutos
    $dirIn="biblioteca-calendario-php/";
    define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirIn}");

    #Config barra / ou //
    $bar = (substr($_SERVER['DOCUMENT_ROOT'], -1)=='/')?"":"/";
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirIn}");

    #Banco de Dados
    define('HOST','localhost');
    define('DB','sistema_calendar');
    define('USER','root');
    define('PASSWORD','');

    #Incluir arquivos
    include(DIRREQ.'core/composer/vendor/autoload.php');
