
$(function(){
  'use strict'

  // var calendarEvents = [];
  // // var calendarEvents = {
  // //   id: 1,
  // //   backgroundColor: '#d9e8ff',
  // //   borderColor: '#0168fa',
  // //   events: null
  // // };
  
  
  // //load data ajax
  // $.ajaxSetup({
  //   headers: {
  //     'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  //   }
  // });
  // $.ajax({
  //   url: "/getdataevents",
  //   method: 'get',
  //   // data: {
  //   //   userid: selections,
  //   //   subject: jQuery('#subject').val(),
  //   //   message: jQuery('#message').val()
  //   // },
  //   success: function(result){
  //     //console.log('Selected options: ' + result.data_event);
  //     var obj = JSON.parse(result.data_event);
  //     dataEvent = result.data_event;
  //     calendarEvents["id"] = 1;
  //     calendarEvents["backgroundColor"] = '#d9e8ff';
  //     calendarEvents["borderColor"] = '#0168fa';
  //     calendarEvents["events"] = dataEvent;
  //     //console.log(result.data_event);
  //     // var inc = 0;
  //     // $.each(obj,function(index,row){
  //     //   dataEvent["id"] = row.id;
  //     //   dataEvent["start"] = row.id;
  //     //   dataEvent["end"] = row.id;
  //     //   dataEvent["title"] = row.title;
  //     //   dataEvent["description"] = row.event_text;
  //     //   dataEventArray[inc] = dataEvent;
  //     //   inc +=1;
  //     // });
  
  //     calendarEvents['events'] = dataEvent;
  
  //     // console.log(dataEventArray);
  //     //alert(result.data_event['title']);
  //   }
  // });

  // Initialize tooltip
  $('[data-toggle="tooltip"]').tooltip()

  // Sidebar calendar
  $('#calendarInline').datepicker({
    showOtherMonths: true,
    selectOtherMonths: true,
    beforeShowDay: function(date) {

      // add leading zero to single digit date
      var day = date.getDate();
      console.log(day);
      return [true, (day < 10 ? 'zero' : '')];
    }
  });

  // Initialize fullCalendar
  $('#calendar').fullCalendar({
    height: 'parent',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    navLinks: true,
    selectable: true,
    selectLongPressDelay: 100,
    editable: false,
    nowIndicator: true,
    defaultView: 'listMonth',
    views: {
      agenda: {
        columnHeaderHtml: function(mom) {
          return '<span>' + mom.format('ddd') + '</span>' +
                 '<span>' + mom.format('DD') + '</span>';
        }
      },
      day: { columnHeader: false },
      listMonth: {
        listDayFormat: 'ddd DD',
        listDayAltFormat: false
      },
      listWeek: {
        listDayFormat: 'ddd DD',
        listDayAltFormat: false
      },
      agendaThreeDay: {
        type: 'agenda',
        duration: { days: 3 },
        titleFormat: 'MMMM YYYY'
      }
    },    
    eventSources: [calendarEvents, birthdayEvents, holidayEvents, discoveredEvents, meetupEvents, otherEvents],
    eventAfterAllRender: function(view) {
      if(view.name === 'listMonth' || view.name === 'listWeek') {
        var dates = view.el.find('.fc-list-heading-main');
        dates.each(function(){
          var text = $(this).text().split(' ');
          var now = moment().format('DD');

          $(this).html(text[0]+'<span>'+text[1]+'</span>');
          if(now === text[1]) { $(this).addClass('now'); }
        });
      }
      console.log(calendarEvents);
      console.log(view.el);
    },
    eventRender: function(event, element) {

      if(event.description) {
        element.find('.fc-list-item-title').append('<span class="fc-desc">' + event.description + '</span>');
        element.find('.fc-content').append('<span class="fc-desc">' + event.description + '</span>');
      }

      var eBorderColor = (event.source.borderColor)? event.source.borderColor : event.borderColor;
      element.find('.fc-list-item-time').css({
        color: eBorderColor,
        borderColor: eBorderColor
      });

      element.find('.fc-list-item-title').css({
        borderColor: eBorderColor
      });

      element.css('borderLeftColor', eBorderColor);
    },
  });

  var calendar = $('#calendar').fullCalendar('getCalendar');

  // change view to week when in tablet
  if(window.matchMedia('(min-width: 576px)').matches) {
    calendar.changeView('agendaWeek');
  }

  // change view to month when in desktop
  if(window.matchMedia('(min-width: 992px)').matches) {
    calendar.changeView('month');
  }

  // change view based in viewport width when resize is detected
  calendar.option('windowResize', function(view) {
    if(view.name === 'listWeek') {
      if(window.matchMedia('(min-width: 992px)').matches) {
        calendar.changeView('month');
      } else {
        calendar.changeView('listWeek');
      }
    }
  });

  // Display calendar event modal
  calendar.on('eventClick', function(calEvent, jsEvent, view){
    var modal = $('#modalCalendarEvent');

    modal.modal('show');
    modal.find('.event-title').text(calEvent.title);
    modal.find('.id-delete').text(calEvent.id);

    if(calEvent.description) {
      modal.find('.event-desc').text(calEvent.description);
      modal.find('.event-desc').prev().removeClass('d-none');
    } else {
      modal.find('.event-desc').text('');
      modal.find('.event-desc').prev().addClass('d-none');
    }

    modal.find('.event-start-date').text(moment(calEvent.start).format('LLL'));
    modal.find('.event-end-date').text(moment(calEvent.end).format('LLL'));

    //styling
    modal.find('.modal-header').css('backgroundColor', (calEvent.source.borderColor)? calEvent.source.borderColor : calEvent.borderColor);
  });

  // display current date
  var dateNow = calendar.getDate();
  calendar.option('select', function(startDate, endDate){
    $('#modalCreateEvent').modal('show');
    $('#eventStartDate').val(startDate.format('LL'));
    $('#eventEndDate').val(endDate.format('LL'));

    $('#eventStartTime').val(startDate.format('LT')).trigger('change');
    $('#eventEndTime').val(endDate.format('LT')).trigger('change');
  });

  $('.select2-modal').select2({
    minimumResultsForSearch: Infinity,
    dropdownCssClass: 'select2-dropdown-modal',
  });

  $('.calendar-add').on('click', function(e){
    e.preventDefault()

    $('#modalCreateEvent').modal('show');
  });

})
