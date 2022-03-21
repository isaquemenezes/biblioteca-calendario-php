<?php 
    include "../core/config/config.php";

    /* Case Teste Unitários*/
    $objEvents = new \Classes\ClassEvents();
    echo $objEvents->getEvents();