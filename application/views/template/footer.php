<?php if ($this->session->username) { ?>        
      <footer class="main-footer">
          <strong>HCM PGN © 2020</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.1
          </div>
      </footer>

		  <aside class="control-sidebar control-sidebar-dark">
		  </aside>
		</div>
<?php } ?>



<script src="<?php echo base_url();?>Admin/plugins/jquery/jquery.min.js"></script>

<!--error-->
<!--<script src="<?php echo base_url();?>Admin/bootstrap/js/bootstrap.bundle.min.js"></script>-->


<script src="<?php echo base_url();?>Admin/dist/js/adminlte.js"></script>
<script src="<?php echo base_url();?>Admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url();?>Admin/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/sparklines/sparkline.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url();?>Admin/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $('#example').DataTable( {
    } );
    $("#example1").DataTable( {
    } );
    $('#example2').DataTable({
      "scrollX": true,
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<!-- kalender baru -->
    <script type="text/javascript" src="<?php echo base_url().'Admin/dist/calendar/js/jquery.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'Admin/dist/calendar/js/moment.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'Admin/dist/calendar/js/bootstrap.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'Admin/dist/calendar/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>      
    <script type="text/javascript" src="<?php echo base_url().'Admin/dist/calendar/plugins/fullcalendar/fullcalendar.js'; ?>"></script>      
    <script>

  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear();

    var base_url="<?php echo base_url(); ?>"; // Here i define the base_url    
    $('#calendarIO').fullCalendar({
      header: {
            left: 'prev, next, today',
            center: 'title',
             right: 'month, basicWeek, basicDay'
        },
        // Get all events stored in database
        eventLimit: true, // allow "more" link when too many events
        events: base_url+'Calendar/getEvents',
        // events: [ 
        //           { 
        //             start: '2019-11-10',
        //             end: '2019-11-11',
        //             rendering: 'background'
        //           },
        //           {
        //             start: '2019-11-12',
        //             end: '2019-11-12',
        //             // rendering: 'background'
        //           }
        // ],
        selectable: true,
        selectHelper: true,
        editable: true, // Make the event resizable true,
        eventClick: function(event, element){
            deteil(event);
            //editData(event);
            //deleteData(event);
            console.log(event);
        }          
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })

    function deteil(event){
        $('#detail_modal input[name=calendar_id]').val(event.id);
        $('#detail_modal input[name=start_date]').val(moment(event.start).format('DD-MM-YYYY'));
        $('#detail_modal input[name=end_date]').val(moment(event.end).format('DD-MM-YYYY'));
        $('#detail_modal input[name=nipg]').val(event.nipg);
        $('#detail_modal input[name=nama]').val(event.nama);
        $('#detail_modal input[name=satker'].val(event.satker);
        $('#detail_modal input[name=status_piket]').val(event.status_piket);
        $('#detail_modal .delete_calendar').show();
        $('#detail_modal').modal('show');
    }

    //function update
    $('#form_update').submit(function(){
        console.log("masuk");
                var element = $(this);
                var eventData;
                $.ajax({
                    url     : backend_url+'calendar/save',
                    type    : element.attr('method'),
                    data    : element.serialize(),
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                        element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                    },
                    success: function(data)
                    {
                        if(data.status)
                        {   
                            event.nipg       = $('#create_modal input[name=nipg]').val();
                            event.nama       = $('#create_modal input[name=nama]').val();
                            event.satker     = $('#create_modal input[name=satker]').val();
                            event.start      = moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                            event.end        = moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                            event.color      = $('#create_modal select[name=color]').val();
                            $('#calendarIO').fullCalendar('updateEvent', event);

                            $('#create_modal').modal('hide');
                            element[0].reset();
                            $('#create_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        }
                        else
                        {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                        }
                        element.find('button[type=submit]').html('Submit');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        element.find('button[type=submit]').html('Submit');
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html('Wrong server, please save again');
                    }         
                });
                return false;
            })
  })
</script>

<!-- datepicker -->
<script src="<?php echo base_url();?>Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/select2/js/select2.full.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/inputmask/jquery.inputmask.bundle.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    $('#periode_add').daterangepicker()

    
    

     var dateAddJadwal = new Date();
    $('#addJadwal').daterangepicker({
      'startDate': dateAddJadwal,
      'endDate': dateAddJadwal
    });

    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'DD/MM/YYYY'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start_date, end_date) {
        $('#reportrange span').html(start_date.format('DDDD M, YYYY') + ' - ' + end_date.format('DDDDD M, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });
  })
</script>

<!-- aktivasi nav link -->
<script>
var menuid = "menu-dashboard";
$(function() {
    $('.nav li').removeClass('active');
    $(menuid).addClass("active");
});
</script>

<!-- Realisasi modals-->
<script src="<?php echo base_url();?>Admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url();?>Admin/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        type: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        type: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        type: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        type: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
  });

</script>