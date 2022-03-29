<?php
    include "../core/config/config.php";
    
    $objEvents=new \Classes\ClassEvents();
    $id=filter_input(INPUT_GET,'id',FILTER_DEFAULT);

    $objEvents->delete_event(
                            $id
                            );