<?php
//CONSTANT DO SISTEMA   
    #Caminhos Absolutos
    $dirIn="";
    define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']} / {$dirIn}");

    #Config barra / ou //
    $bar = (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/')?"":"/";
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirIn}");

    #Incluir arquivos
    include(DIRREQ.'biblioteca-calendario-php/core/composer/vendor/autoload.php');
