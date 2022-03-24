<?php include "core/config/config.php"; ?>
<?php include (DIRREQ."resources/templates/head.php"); ?>


<?php
    $objEvents = new \Classes\ClassEvents();
    
    $events = $objEvents->getEventsById($_GET['id']);

    $date = new \DateTime($events['start']);

    // Teste unitário var_dump($date);
?>
     
    <form method="post" name="form_name" id="form_id" action="<?php echo DIRPAGE.'./controllers/ControllerEdit.php'; ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']?>">

        Data: <input type="date" name="date_form" id="data_id" value="<?php echo $date->format("Y-m-d"); ?>"><br>
        Hora: <input type="time" name="time_form" id="time_id" value="<?php echo $date->format("H:i"); ?>"><br>
        Paciente: <input type="text" name="title_form" id="title_id" value="<?php echo $events['title']?>"><br>
        Queixa: <input type="text" name="description_form" id="description_id" value="<?php echo $events['description']?>"><br>
        
        <input type="submit" value="Marcar Consulta">

    </form>


<?php include DIRREQ."resources/templates/footer.php"; ?>