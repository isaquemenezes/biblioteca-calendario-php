<?php 
    include "../core/config.php";

    $objEvents = new \Classes\ClassEvents();
    echo $objEvents->getEvents();