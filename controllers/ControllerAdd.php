<?php 
    include "../core/config/config.php";

    $objEvents = new \Classes\ClassEvents();
    
    $date = filter_input(INPUT_POST,'date_form',FILTER_DEFAULT);
    $time = filter_input(INPUT_POST,'time_form',FILTER_DEFAULT);
    $title = filter_input(INPUT_POST,'title_form',FILTER_DEFAULT);
    $description = filter_input(INPUT_POST,'description_form',FILTER_DEFAULT);
    $horas_atendimento = filter_input(INPUT_POST,'horas_atendimento',FILTER_DEFAULT);
    
    $start= new \DateTime($date.''.$time, new \DateTimeZone('America/Sao_Paulo'));

    $objEvents->createEvent(
        0,
        $title,
        $description,
        'blue',
        $start->format("Y-m-d H:i:s"),
        $start->modify('+'.$horas_atendimento.'hours')->format("Y-m-d H:i:s")
    );
    
    
    // Teste Unitário var_dump($_POST);