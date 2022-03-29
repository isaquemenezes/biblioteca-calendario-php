<?php include "core/config/config.php"; ?>
<?php include "resources/templates/head.php"; ?>



<?php 
    //case de test DB $conect = new Models\ModelConect(); return var_dump($conect->conectDB());  
     //case de testnamespace Classes  $obj = new Classes\ClassTeste();
?>


 <div class="calendar_manager"></div>

 <div class="">
     <a href="<?php echo DIRPAGE.'views/user_pages/' ?>">Page USER</a>
     <a href="<?php echo DIRPAGE.'views/manager_pages/' ?>">Page Manager</a>
 </div>
 


<?php include "resources/templates/footer.php"; ?>
    



