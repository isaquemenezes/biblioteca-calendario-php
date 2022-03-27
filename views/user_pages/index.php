<?php include "../../core/config/config.php"; ?>
<?php include DIRREQ."resources/templates/head.php"; ?>

<?php 
    //case de test DB $conect = new Models\ModelConect(); return var_dump($conect->conectDB());  
     //case de testnamespace Classes  $obj = new Classes\ClassTeste();
?>

<h1>Calendar User</h1>

<div class="calendar_user"></div>


<script src="<?php echo DIRPAGE.'core/FullCalendar/main.min.js';?>"></script>
<script>

(function readyJS(win,doc){
    'use strict';

    //Exibir o calendÃ¡rio
    function getCalendar(perfil, div){

        let calendarEl = doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            
            locale:'pt-br',
            
            headerToolbar:{
                start: 'prev,next,today',
                center: 'title',
                end: 'dayGridMonth, timeGridWeek, timeGridDay'
            },

            buttonText:{
                today:    'hoje',
                month:    'mÃªs',
                week:     'semana',
                day:      'dia'
            },
            
            dateClick: function(info) {
                if (perfil == 'manager') {
                    calendar.changeView('timeGrid', info.dateStr);
                } else {
                    if (info.view.type == 'dayGridMonth') {
                        calendar.changeView('timeGrid', info.dateStr);
                    } else {
                        win.location.href = './views/add.php?date='+info.dateStr;
                    }
                }

                // alert('Clicked on: ' + info.dateStr);
                // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                // alert('Current view: ' + info.view.type);
                
               
            },
            
            //Controller do evento traz os dados do db
            events: '../../controllers/ControllerEvents.php',
    
            //Events click 
            eventClick: function(info_arg) {
                if (perfil == 'manager'){
                    win.location.href = `./views/manager_pages/edit.php?id=${info_arg.event.id}`;
                }
                // if (perfil == 'manager'){
                //     win.location.href = `./editar.php?id=${info_arg.event.id}`;
                // }
            }
    
        });
    
        calendar.render();
    

    }

    if (doc.querySelector('.calendar_user')) {
        getCalendar('user', '.calendar_user');
    } else if (doc.querySelector('.calendar_manager')){
        getCalendar('manager','.calendar_manager');
    } else if (doc.querySelector('.calendar_head')) {
        getCalendar('head', '.calendar_head');
    } else {
        getCalendar('sem', '.calendar');
    }

   
})(window,document);
</script>
</body>
</html>
    