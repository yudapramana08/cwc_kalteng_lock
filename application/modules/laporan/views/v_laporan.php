 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h4 class="m-0 text-dark">LAPORAN</h4>
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
             <div class="card-header">




               <form action="" method="post">
                 <div class="form-group">
                   <div class="row">
                     <div class="col-sm-20">
                       <div class="input-group">
                         <div class="input-group-prepend">
                           <span class="input-group-text">
                             <i class="far fa-calendar-alt"></i>
                           </span>
                         </div>
                         <input type="text" class="form-control float-right" id="reservation" name='tanggal' required>
                         &nbsp
                         <a href="<?php echo base_url() . 'laporan' ?>" class="btn btn-warning">
                           <i class="fa fa-undo"></i>
                         </a> &nbsp <button type="submit" name="cari" class="btn btn-primary" value="filter">
                           <i class="fa fa-filter"></i>
                         </button>
                       </div>
                     </div>
                   </div>


                 </div>

               </form>


               <!-- //filterrrrrrrrrrrrrrrrr -->
               <?php
                $cari = @$_POST['cari'];
                $tgl =  @$_POST['tanggal'];

                if (!empty($cari)) {
                  $pecah = explode(" - ", $tgl);
                  $awal = $pecah[0];
                  $akhir = $pecah[1];
                  $x = $this->m_utama->dataBytgl($awal, $akhir);

                ?>
                 <br>
                 <a href="<?php echo site_url() . 'laporan/export_laporan/' . $awal . '/' . $akhir ?>" class="btn btn-success">
                   <i class="fa fa-file-excel-o " aria-hidden="true"></i> Download
                 </a>


               <?php
                } else { ?>
                 <br>
                 <a href="<?php echo site_url() . 'laporan/export_laporan/all/all' ?>" class="btn btn-success">
                   <i class="fa fa-file-excel-o " aria-hidden="true"></i> Download
                 </a>
               <?php
                  $x = $this->m_utama->all_data();
                }

                ?>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               <table id="example" class="table table-bordered table-striped" style="width:100%">
                 <thead>
                   <tr>
                     <th>No</th>
                     <th>Date</th>
                     <th>Agent</th>
                     <th>Call status</th>
                     <th>Caller number</th>
                     <th>Caller type</th>
                     <th>Caller name</th>
                     <th>Account No</th>
                     <th>Card No</th>
                     <th>Blank call</th>
                     <th>Inquiry</th>
                     <th>Kategori</th>
                     <th>Jenis komplain</th>
                     <th>Perihal pengaduan</th>
                     <th>Feedback</th>
                 </thead>
               </table>
               <br>



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
 <?php
  if (!isset($awal)) {
    $awal = 'all';
    $akhir = 'all';
  }
  ?>
 <script>
   $(document).ready(function() {
     $('#example').DataTable({
       "responsive": true,
       "autoWidth": false,

       ajax: {

         url: '<?php echo site_url() . 'laporan/data_json/' . $awal . '/' . $akhir ?>',
         dataSrc: ''
       },
       columns: [{
           "data": "no"
         },
         {
           "data": "date"
         },
         {
           "data": "agent"
         },
         {
           "data": "call_status"
         },
         {
           "data": "caller_number"
         },
         {
           "data": "caller_type"
         },
         {
           "data": "caller_name"
         },
         {
           "data": "account_no"
         },
         {
           "data": "card_no"
         },
         {
           "data": "blank_call"
         },
         {
           "data": "inquiry"
         },
         {
           "data": "kategori"
         },
         {
           "data": "jenis_komplain"
         },
         {
           "data": "perihal_pengaduan"
         },
         {
           "data": "feedback"
         }
       ]
     });
   });
 </script>