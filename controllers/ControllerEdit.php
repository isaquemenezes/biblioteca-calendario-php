<?php 
    include "../core/config/config.php";

    $objEvents = new \Classes\ClassEvents();
    
    $id = filter_input(INPUT_POST,'id_edit',FILTER_DEFAULT);
    $date = filter_input(INPUT_POST,'date_form',FILTER_DEFAULT);
    $time = filter_input(INPUT_POST,'time_form',FILTER_DEFAULT);
    $title = filter_input(INPUT_POST,'title_form',FILTER_DEFAULT);
    $description = filter_input(INPUT_POST,'description_form',FILTER_DEFAULT);
    
    
    $start= new \DateTime($date.''.$time, new \DateTimeZone('America/Sao_Paulo'));

    $objEvents->update_events(
        $id,
        $title,
        $description,
        $start->format("Y-m-d H:i:s")
    );
   
    
    
    // Teste Unitário 
    //var_dump($_POST);
       
