<style>
    .x {
        font-size: 12px;
    }
</style>

<footer class="main-footer" style="font-family: 'Pacifico', cursive;">
    <strong>Copyright &copy; 2022-<a target='_blank' href="https://www.instagram.com/enterprise2inf/">E2S1</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>#codewith</b><a target='_blank' class="x" href="https://www.instagram.com/yuda.pramana08/">
            @Okleq
        </a>
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo config_item('base_url') ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo config_item('base_url') ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo config_item('base_url') ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo config_item('base_url') ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo config_item('base_url') ?>assets/dist/js/demo.js"></script>
<!-- page script -->
<!-- Select2 -->
<script src="<?php echo config_item('base_url') ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo config_item('base_url') ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo config_item('base_url') ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- script tambahan datatable  -->
<!-- <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script> -->
<script src="<?php echo config_item('base_url') ?>assets/dist/datatablenew/dataTables.buttons.min.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/dist/datatablenew/jszip.min.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/dist/datatablenew/pdfmake.min.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/dist/datatablenew/vfs_fonts.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/dist/datatablenew/buttons.html5.min.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/dist/datatablenew/buttons.print.min.js"></script>
<script>
    window.addEventListener('load', function() {
        // Simulasi waktu loading (dalam milidetik)
        setTimeout(function() {
            var loadingOverlay = document.getElementById('loadingOverlay');
            var pageContent = document.getElementById('pageContent');

            loadingOverlay.style.display = 'none';
            pageContent.style.display = 'block';
        }, 0); // Ganti angka ini sesuai kebutuhan
    });
</script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
        //Date range picker
        $('#reservation').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            }
        })
        //Date range picker
        $('#lap').daterangepicker({
            locale: {
                format: 'YYYY-MM-DD'
            }
        })
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM-DD-YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
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

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>
<script type="application/javascript">
    /** After windod Load */
    $(window).bind("load", function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 1000);
    });
</script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            // dom: 'Bfrtip',
            // buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ],
            // "responsive": true,
            // "autoWidth": false,
        });

    });
</script>
<script>
    /*** add active class and stay opened when selected ***/
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
        if (this.href) {
            return this.href == url || url.href.indexOf(this.href) == 0;
        }
    }).addClass('active');

    // for the treeview
    $('ul.nav-treeview a').filter(function() {
        if (this.href) {
            return this.href == url || url.href.indexOf(this.href) == 0;
        }
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
</script>

<script type="text/javascript">
    window.onload = function() {
        jam();
    }

    function jam() {
        var e = document.getElementById('jam'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = h + ':' + m + ':' + s;

        setTimeout('jam()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }
</script>


</body>

</html>