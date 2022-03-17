<?php include "core/config/config.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo DIRPAGE.'resources/css/style.css';?>">
    <link rel="stylesheet" href="<?php echo DIRPAGE.'core/FullCalendar/main.min.css';?>">
   <title>Calendario De Eventos PHP</title>
</head>

<body>

<?php 
    //case de test DB $conect = new Models\ModelConect(); return var_dump($conect->conectDB());  
     //case de testnamespace Classes  $obj = new Classes\ClassTeste();
?>

<div class="calendar"></div>
    
<script src="<?php echo DIRPAGE.'core/FullCalendar/main.min.js';?>"></script>
<script src="<?php echo DIRPAGE.'resources/js/javascript.js';?>"></script>
</body>
</html>


