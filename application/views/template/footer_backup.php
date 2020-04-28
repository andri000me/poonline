n<?php if ($this->session->username) { ?>        
         <footer class="main-footer">
            <strong>EDIT 06-09-2019</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
            </div>
          </footer>

          <aside class="control-sidebar control-sidebar-dark">
          </aside>
        </div>
<?php } ?>


<script src="<?php echo base_url();?>admin/plugins/jquery/jquery.min.js"></script>

<!--error-->
<!--<script src="<?php echo base_url();?>admin/bootstrap/js/bootstrap.bundle.min.js"></script>-->

<script src="<?php echo base_url();?>admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>admin/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url();?>admin/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url();?>admin/plugins/sparklines/sparkline.js"></script>
<script src="<?php echo base_url();?>admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>admin/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url();?>admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?php echo base_url();?>admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>admin/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url();?>admin/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url();?>admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url();?>admin/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url();?>admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $('#example').DataTable( {
        "scrollX": true,

      "autoWidth": false
    } );
    $("#example1").DataTable();
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
    <script type="text/javascript">
        var get_data        = '<?php echo $get_data; ?>';
        var _get_data        = get_data;
        console.log(_get_data);
        var backend_url     = '<?php echo base_url(); ?>';
        var temp ;
        $(document).ready(function() {
            $('.date-picker').datepicker();
            $('#calendarIO').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: moment().format('YYYY-MM-DD'),
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD'));
                    $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD'));
                    $('#create_modal').modal('show');
                    save();
                    $('#calendarIO').fullCalendar('unselect');
                },
                eventDrop: function(event, delta, revertFunc) { // si changement de position
                    editDropResize(event);
                },
                eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                    editDropResize(event);
                },
                eventClick: function(event, element)
                {
                    deteil(event);
                    editData(event);
                    deleteData(event);
                },
                events: JSON.parse(get_data)

            });

        });

        $(document).on('click', '.add_calendar', function(){
            $('#create_modal input[name=calendar_id]').val(0);
            $('#create_modal').modal('show');  
        })

        $(document).on('submit', '#form_create', function(){

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
                        eventData = {
                            id          : data.id,
                            nipg       : $('#create_modal input[name=nipg]').val(),
                            nama       : $('#create_modal input[name=nama]').val(),
                            sk       : $('#create_modal input[name=sk]').val(),
                            start       : moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            end         : moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            color       : $('#create_modal select[name=color]').val()
                        };
                        $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                        $('#create_modal').modal('hide');
                        element[0].reset();
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

        function editDropResize(event)
        {
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if(event.end)
            {
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            }
            else
            {
                end = start;
            }
         
            $.ajax({
                url     : backend_url+'calendar/save',
                type    : 'POST',
                data    : 'calendar_id='+event.id+'&nipg='+event.nipg+'&start_date='+start+'&end_date='+end,
                dataType: 'JSON',
                beforeSend: function()
                {
                },
                success: function(data)
                {
                    if(data.status)
                    {   
                        $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html('Data success update');
                    }
                    else
                    {
                        $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Data cant update');
                    }
             
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Wrong server, please save again');
                }         
            });
        }

        function save()
        {
            $('#form_create').submit(function(){
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
                            eventData = {
                                id          : data.id,
                                nipg       : $('#create_modal input[name=nipg]').val(),
                                nama       : $('#create_modal input[name=nama]').val(),
                                sk       : $('#create_modal input[name=sk]').val(),
                                start       : moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                                end         : moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                                color       : $('#create_modal select[name=color]').val()
                            };
                            $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                            $('#create_modal').modal('hide');
                            element[0].reset();
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
        }

        function deteil(event)
        {
            $('#create_modal input[name=calendar_id]').val(event.id);
            $('#create_modal input[name=start_date]').val(moment(event.start).format('YYYY-MM-DD'));
            $('#create_modal input[name=end_date]').val(moment(event.end).format('YYYY-MM-DD'));
            $('#create_modal input[name=nipg]').val(event.nipg);
            $('#create_modal input[name=nama]').val(event.nama);
            $('#create_modal input[name=sk').val(event.sk);
            $('#create_modal select[name=color]').val(event.color);
            $('#create_modal .delete_calendar').show();
            $('#create_modal').modal('show');
        }

        function editData(event)
        {
            $('#form_create').submit(function(){
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
                            event.sk       = $('#create_modal input[name=sk]').val();
                            event.start         = moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                            event.end           = moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                            event.color         = $('#create_modal select[name=color]').val();
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
        }

        function deleteData(event)
        {
            $('#create_modal .delete_calendar').click(function(){
                $.ajax({
                    url     : backend_url+'calendar/delete',
                    type    : 'POST',
                    data    : 'id='+event.id,
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                    },
                    success: function(data)
                    {
                        if(data.status)
                        {   
                            $('#calendarIO').fullCalendar('removeEvents',event._id);
                            $('#create_modal').modal('hide');
                            $('#form_create')[0].reset();
                            $('#create_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        }
                        else
                        {
                            $('#form_create').find('.alert').css('display', 'block');
                            $('#form_create').find('.alert').html(data.notif);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('#form_create').find('.alert').css('display', 'block');
                        $('#form_create').find('.alert').html('Wrong server, please save again');
                    }         
                });
            })
        }

    </script>