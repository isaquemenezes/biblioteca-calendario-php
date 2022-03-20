<?php include "core/config/config.php"; ?>
<?php include "resources/templates/head.php"; ?>



<?php 
    //case de test DB $conect = new Models\ModelConect(); return var_dump($conect->conectDB());  
     //case de testnamespace Classes  $obj = new Classes\ClassTeste();
?>


 <div class="calendar"></div>
 
<a href="<?php echo DIRPAGE.'views/user'; ?>">Caledário do user</a><br><br>
<a href="<?php echo DIRPAGE.'views/manager'; ?>">Calendário do manager</a>

<?php include "resources/templates/footer.php"; ?>
    



