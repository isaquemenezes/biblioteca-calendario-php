(function readyJS(win,doc){
    'use strict';

    //Exibir o calendário
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
                month:    'mês',
                week:     'semana',
                day:      'dia'
            },
            
            dateClick: function(info) {
                if (perfil == 'manager') {
                    alert('Vai pra page do manager');
                } else {
                    alert('vai pra page do user');
                }

                // alert('Clicked on: ' + info.dateStr);
                // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                // alert('Current view: ' + info.view.type);
                
               
            },
           
            events: './controllers/ControllerEvents.php',
    
            //Events click 
            eventClick: function(info_arg) {
                if (perfil == 'manager'){
                    win.location.href = `views/manager/editar?id=${info_arg.event.id}`;
                }
            }
    
        });
    
        calendar.render();
    

    }

    if (doc.querySelector('.calendar_user')) {
        getCalendar('user', '.calendar_user');
    } else if(doc.querySelector('.calendar_manager')) {
        getCalendar('manager','.calendar_manager');
    }

   
})(window,document);