  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Backup Database</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!--               <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php if ($this->session->flashdata('sukses')) { ?>
          <script>
            swal("Good job!", "<?php echo $this->session->flashdata('sukses'); ?>", "success");
          </script>
        <?php } else if ($this->session->flashdata('error')) { ?>
          <script>
            swal("Upss..!!", "<?php echo $this->session->flashdata('error'); ?>", "error");
          </script>
        <?php }  ?>
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">


                <div class="row">
                  <div class="col-sm-5">
                    <div class="card-content" style="text-align: justify;">
                      <p>
                      <p>Lakukan backup database secara berkala untuk membuat cadangan database yang bisa direstore kapan saja ketika dibutuhkan. Silakan klik tombol <strong>"Download"</strong> untuk memulai proses backup data. Setelah proses backup selesai, silakan download file backup database tersebut dan simpan di lokasi yang aman.<span class="red-text"><strong>*</strong></span></p>

                      <p>
                        <red>*</red> Tidak disarankan menyimpan file backup database dalam my documents / Local Disk C.
                      </p>
                    </div>


                    <a href="<?php echo site_url() . 'backupDb/backup' ?>" class="btn btn-info "><i class="fa fa-database" aria-hidden="true"></i> Download</a>


                  </div>


                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
    </section>





  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Select2 -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/moment/moment.min.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- date-range-picker -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

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
      $('#reservation2').daterangepicker({
        locale: {
          format: 'YYYY-MM-DD'
        }
      })
      $('#reservation3').daterangepicker({
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