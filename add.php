<?php include "core/config/config.php"; ?>
<?php include "resources/templates/head.php"; ?>

<!-- Teste Unitário  echo $_GET['date'];  -->
<?php 
    $date = new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo')); 
    // Teste unitário var_dump($date);
?>
     
    <form method="post" name="form_name" id="form_id" action="<?php echo DIRPAGE.'./controllers/ControllerAdd.php'; ?>">
        Data: <input type="date" name="date_form" id="data_id" value="<?php echo $date->format("Y-m-d"); ?>"><br>
        Hora: <input type="time" name="time_form" id="time_id" value="<?php echo $date->format("H:i"); ?>"><br>
        Paciente: <input type="text" name="title_form" id="title_id"><br>
        Queixa: <input type="text" name="description_form" id="description_id"><br>

        tempo de atendimento:
        <select name="horas_atendimento" id="horas_atendimento_id">
            <option value="">Selecao</option>
            <option value="1">1 horas</option>
            <option value="2">2 Horas</option>
            <option value="3">3 horas</option>
        </select><br>

        <input type="submit" value="Marcar Consulta">


    </form>


<?php include "resources/templates/footer.php"; ?>