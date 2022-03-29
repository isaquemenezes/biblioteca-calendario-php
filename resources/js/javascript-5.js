(function readyJS(win,doc){
    'use strict';

    let calendarEl = doc.querySelector('.calendar');
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
            alert('Clicked on: ' + info.dateStr);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('Current view: ' + info.view.type);
            // change the day's background color just for fun
            info.dayEl.style.backgroundColor = 'red';
        },
        /*events: [
            {
                title: 'The Title',
                start: '2020-10-01',
                end: '2020-10-02'
            },
            {
                title: 'The Title 2',
                start: '2020-10-05',
                end: '2020-10-07'
            }
        ]*/

        //Events por JSON
        /*events: './resources/js/events.json',*/
        events: './controllers/ControllerEvents.php',

        //Events click 
        eventClick: function(info_arg) {
            win.location.href = `https://www.zerosite/eventos/${info_arg.event.id}`;
        }

    });

    calendar.render();

})(window,document);